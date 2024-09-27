<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $posts = Post::orderBy('created_at', 'desc')
            ->with(['categories', 'tags'])->get();
        return view('blog.blogPost', ['posts' => $posts]);
    }

    public function singlePost($id): \Illuminate\Contracts\View\View
    {
        $post = Post::where('id', $id)
            ->with(['categories', 'tags'])->first();
        $posts = Post::orderBy('published_at', 'desc')->limit(5)->get();
        $tags = Tag::all();
        $categories = Category::all();

        return view('blog.singlePost', ['post' => $post, 'tags' => $tags,'categories' => $categories, 'posts' => $posts]);
    }

}
