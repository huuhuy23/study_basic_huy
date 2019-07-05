<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class testcontroller extends Controller{
    public function testLogin(){
        return view('testLogin');
    }
    public function postlogin(){
        if (Auth::check()){
            return view('welcome');
        }
    }
}