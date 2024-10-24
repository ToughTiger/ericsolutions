<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function contact(){
        $title = 'Contact Us';
        $metaDescription = 'This is our contact page';

        return view('contacts.contacts', compact('title', 'metaDescription'));
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

    public function csr(){
        return view('aitech/csr');
    }
    public function protocol(){
        return view('aitech/protocol');
    }
}
