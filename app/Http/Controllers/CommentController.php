<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }
    public function store(Request $request)
    {

      $comment = new Comment();
      $comment->create($request->all());
          return Redirect::back()->with('message','Comment Posted successfully !');
        }

}
