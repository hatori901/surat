<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('home');
    }
    function artikel(){
        return view('artikel');
    }
    function profile(){
        return view('profile');
    }
}