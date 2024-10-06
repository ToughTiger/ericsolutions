<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $posts = Post::orderBy('created_at', 'desc')
            ->with(['categories', 'tags'])->get()
            ->where('is_published', '=', 1);;

        return view('blog.blogPost', ['posts' => $posts, ]);
    }

    public function singlePost($id): \Illuminate\Contracts\View\View
    {
        $share_buttons = \Share::page(
            'How to Add Social Media Share Button in Laravel 10 App?'
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->whatsapp()
            ->telegram()
            ->reddit();

        $post = Post::where('id', $id)
            ->with(['categories', 'tags', 'comments', 'comments.replies'])->first();

        $post['share_buttons'] = $share_buttons;
        $posts = Post::orderBy('published_at', 'desc')->limit(5)->get();

        $comments = Comment::where('post_id', $id)->orderBy('created_at', 'desc')->get();
//        dd($comments->count());
        $tags = Tag::orderBy('created_at')->limit(5)->get();
        $categories = Category::orderBy('created_at')->limit(5)->get();

        return view('blog.singlePost', ['post' => $post, 'tags' => $tags,'categories' => $categories, 'posts' => $posts, 'comments' => $comments]);
    }





}
