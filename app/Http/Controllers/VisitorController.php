<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVisitorRequest;
use App\Mail\VisitorMail;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class VisitorController extends Controller
{

    public function store(Request $request){

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
            $existingVisitor = Visitor::where('email', $request->get('email'))->first();
            if ($existingVisitor) {
                $visitor = $existingVisitor;
            } else {
                $visitor = new Visitor();
                $visitor->first_name = $request->get('first_name');
                $visitor->last_name = $request->get('last_name');
                $visitor->email = $request->get('email');
                $visitor->phone = $request->get('phone');
                $visitor->message = $request->get('message');

                $visitor->save();
                $mailData = [
                    'name' => $visitor->first_name . ' ' . $visitor->last_name
                ];
                Mail::to($visitor->email)->send(new VisitorMail($mailData));
            }
        $visitor->messages()->create([
            'message' => $request->message,
        ]);
        return Redirect::back()->with('message','Thank you for your visit! !');
    }
}
