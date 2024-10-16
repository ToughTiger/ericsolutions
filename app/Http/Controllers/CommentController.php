<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Visitor;
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

      $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);
        $existingVisitor = Visitor::where('email', $request->get('email') )->first();


        if($existingVisitor){
            $visitor = $existingVisitor;
        }else{
            $visitor = new Visitor();
            $visitor->first_name = $request->get('first_name');
            $visitor->last_name = $request->get('last_name');
            $visitor->email = $request->get('email');
            $visitor->phone = $request->get('phone');
            $visitor->save();
        }
      $comment = new Comment();
      $comment->post_id = $request->get('post_id');
      $comment->visitor_id= $visitor->id;
      $comment->comment = $request->get('comment');
      $comment->save();
         return Redirect::back()->with('message','Comment Posted successfully !');
        }

}
