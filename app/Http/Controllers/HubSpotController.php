<?php

namespace App\Http\Controllers;

use App\Services\HubSpotService;
use HubSpot\Client\Cms\Blogs\BlogPosts\ApiException;
use Exception;
use HubSpot\Factory;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;


class HubSpotController extends Controller
{
    protected HubSpotService $hubspotService;


    public function __construct(HubSpotService $hubspotService)
    {
        $this->hubspotService = $hubspotService;
    }

    /**
     * @throws Exception
     */

    public function blogs(Request $request): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $currentPage = $request->input('page', 1);  // Current page from query string
        $perPage = 6; // Number of items per page
        try {
            $response  = $this->hubspotService->getBlogs();

            $blogs = $response->getResults();
//            dd($blogs);
            $paginatedBlogs = new LengthAwarePaginator(
                array_slice($blogs, ($currentPage - 1) * $perPage, $perPage),  // Slice array to get the items for the current page
                count($blogs),  // Total number of items
                $perPage,  // Items per page
                $currentPage,  // Current page
                ['path' => $request->url(), 'query' => $request->query()]  // Preserve URL query parameters
            );
            return view('blog.blogPost', compact('paginatedBlogs'));
        }
        catch (\Exception $e) {
            $error = 'Failed to load blogs: ' . $e->getMessage();
            return view('blog.blogPost', compact('error'));
}

    }

    /**
     * @throws ApiException
     */
    public function singleBlog($id): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $share_buttons = \Share::page('added social media')
            ->facebook()
            ->twitter()
            ->linkedin()
            ->whatsapp()
            ->telegram()
            ->reddit();
        $post = $this->hubspotService->getBlogById($id);
        $tagIds = $post->getTagIds();
        $tagNames = $this->hubspotService->getBlogPostTags($tagIds);
        dd($post);
        return view('blog.singlePost', compact('post', 'share_buttons', 'tagNames'));
    }
    public function whitepapers()
    {
        $whitepapers = $this->hubspotService->getWhitepapers();
        return view('hubspot.whitepapers', compact('whitepapers'));
    }

    public function singleWhitepaper($id)
    {
        $whitepaper = $this->hubspotService->getWhitepaperById($id);
        return view('hubspot.single-whitepaper', compact('whitepaper'));
    }
}
