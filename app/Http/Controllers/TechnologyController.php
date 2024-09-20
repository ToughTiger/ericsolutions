<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function edc(){
        return view('technology/edc');
    }
    public function ctms(){
        return view('technology/ctms');
    }
    public function etmf_tech(){
        return view('technology/etmf');
    }

    public function irt(){
        return view('technology/irt');
    }

}
