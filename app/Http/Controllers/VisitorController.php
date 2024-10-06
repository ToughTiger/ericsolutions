<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VisitorController extends Controller
{

    public function store(Request $request){
        $visitor = new Visitor();
        $visitor->first_name = $request->get('first_name');
        $visitor->last_name = $request->get('last_name');
        $visitor->email = $request->get('email');
        $visitor->phone = $request->get('phone');
        $visitor->message = $request->get('message');
//        dd($visitor);
        $visitor->save();
        return Redirect::back()->with('message','Our Sales Team will reach you soon !');
    }
}
