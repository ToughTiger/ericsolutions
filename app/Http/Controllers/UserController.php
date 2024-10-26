<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function getUserById($id){
       $user = User::where('id', $id)->first();
       return view('contacts.userDetails', ['user' => $user]);
   }
}
