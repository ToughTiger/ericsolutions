<?php
namespace App\Services;
use Exception;
use HubSpot\Client\Cms\Blogs\BlogPosts\ApiException;
use HubSpot\Factory;
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
    public function getBlogById($id): \HubSpot\Client\Cms\Blogs\BlogPosts\Model\BlogPost|\HubSpot\Client\Cms\Blogs\BlogPosts\Model\Error
    {
        // Fetch a single blog post by ID
        return $this->client->cms()->blogs()->blogPosts()->blogPostsApi()->getById($id);
    }

    public function getBlogPostTags($tagIds): array
    {
        try {
            $tagNames = [];

            foreach ($tagIds as $tagId) {
                // Fetch the tag by ID
                $tag = $this->client->cms()->blogs()->tags()->getTagById();
                $tagNames[] = $tag->getName();  // Store the tag name
            }

            return $tagNames;
        } catch (\Exception $e) {
            return ['error' => 'Failed to fetch tags'];
        }
    }
    public function getContacts()
    {
        return $this->hubspot->crm()->contacts()->basicApi()->getPage()->toArray();
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
