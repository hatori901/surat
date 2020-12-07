<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(){
        return view('home');
    }
    function artikel(){
        $data['posts'] = DB::table('posts')->get();
        return view('artikel',$data);
    }
    function profile(){
        return view('profile');
    }
    function about(){
        return view('about');
    }
}