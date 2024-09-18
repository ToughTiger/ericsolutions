<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function contact(){
        return view('contact');
    }
public function gdpr(){
        return view('legal/gdpr');
}
    public function privacy(){
        return view('legal/privacy_policy');
    }

    public function cookies(){
        return view('legal/cookies');
    }
}
