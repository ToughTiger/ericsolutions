<?php
namespace App\Services;
use Exception;
use HubSpot\Client\Cms\Blogs\BlogPosts\ApiException;
use HubSpot\Factory;
use Illuminate\Support\Facades\Http;

class HubSpotService
{
    protected \HubSpot\Discovery\Discovery $client;
    protected string $accessToken;

    /**
     * @throws Exception
     */
    public function __construct()
    {

        $this->accessToken = env('HUBSPOT_ACCESS_TOKEN');
        if (!$this->accessToken) {
            throw new \Exception("HubSpot Access Token is not set.");
        }

        $this->client = Factory::createWithAccessToken($this->accessToken);
    }


    /**
     * @throws ApiException
     */

    public function getBlogs(): \HubSpot\Client\Cms\Blogs\BlogPosts\Model\CollectionResponseWithTotalBlogPostForwardPaging|\HubSpot\Client\Cms\Blogs\BlogPosts\Model\Error
    {
        return $this->client->cms()->blogs()->blogPosts()->blogPostsApi()->getPage();
    }

    /**
     * @throws ApiException
     */
    public function getLimitedBlogPosts(): \HubSpot\Client\Cms\Blogs\BlogPosts\Model\CollectionResponseWithTotalBlogPostForwardPaging|\HubSpot\Client\Cms\Blogs\BlogPosts\Model\Error
    {
        return $this->client->cms()->blogs()->blogPosts()->blogPostsApi()->getPage();
    }

    /**
     * @throws ApiException
     */
    public function getBlogBySlug($slug)
    {
        // Fetch a single blog post by ID
        $response =  $this->client->cms()->blogs()->blogPosts()->blogPostsApi()->getPage();
        $posts = $response->getResults();
        foreach ($posts as $post) {
            if ($post->getSlug() === $slug) {
                return $post;
            }
        }
       return null;
    }

    /**
     * @throws \HubSpot\Client\Cms\Blogs\Tags\ApiException
     */
//    public function getBlogPostTags(): \HubSpot\Client\Cms\Blogs\Tags\Model\CollectionResponseWithTotalTagForwardPaging|\HubSpot\Client\Cms\Blogs\Tags\Model\Error
//    {
//
//
//                return $this->client->cms()->blogs()->tags()->blogTagsApi()->getPage();
//
//    }
    public function getBlogPostTags($tagIds): array
    {
        try {
            $tagNames = [];

            foreach ($tagIds as $tagId) {
                // Fetch the tag by ID
                $tags = $this->client->cms()->blogs()->tags()->blogTagsApi()->getById($tagId);
                $tagNames[] = $tags;  // Store the tag name
            }
            return $tagNames;

        } catch (\Exception $e) {
            return ['error' => 'Failed to fetch tags'];
        }
    }

public function searchBlogPosts(string $searchQuery =''): array
{
    try{
        $response = $this->client->cms()->blogs()->blogPosts()->blogPostsApi()->getPage();
        $allPosts = $response->getResults();

        // Filter posts by search query (title or tags)
        if(!empty($searchQuery)){
            $allPosts = array_filter($allPosts,function($post) use ($searchQuery){
                // Check title for the search query
                $titleMatch = stripos($post['html_title'],$searchQuery) !== false;
                $tagMatch = false;
                if(!empty($post['tag'])){
                    foreach ($post['tag'] as $tag) {
                        if(stripos($tag['name'],$searchQuery) !== false){
                            $tagMatch = true;
                            break;
                        }
                    }
                }
                return $titleMatch || $tagMatch;
            });
        }

//        dd($allPosts);
        return $allPosts;
    }catch (\Exception $e){
        return ['error' => $e->getMessage()];
    }
}
    public function getContacts()
    {
        return $this->hubspot->crm()->contacts()->basicApi()->getPage()->toArray();
    }

    public function getAuthorById($authorId)
    {
        $response = Http::withHeaders([
            'Authorization' => "Bearer {$this->accessToken}"
        ])->get("https://api.hubapi.com/blogs/v3/blog-authors/{$authorId}");
//        dd($authorId);
        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }

    public function getWhitepapers()
    {
        return $this->hubspot->files()->files()->getPage()->toArray();
    }
    public function getWhitepaperById($id)
    {
        // Fetch a single whitepaper (file) by ID
        return $this->hubspot->files()->filesApi()->getById($id)->toArray();
    }

}
