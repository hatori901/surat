<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class DashboardController extends Controller
{
    function index(){
        $data['count_users'] = DB::table('users')->where('is_admin','=',NULL)->count();
        $data['count_surat'] = DB::table('surats')->count();
        $data['count_not_in'] = DB::table('surats') ->where('status','=','Disetujui')->count();
        return view('dashboard/index',$data);
    }
    function surat(){
        if(auth()->user()->is_admin){
            $data['surats'] = DB::table('surats')->get();
        }else{
            $data['surats'] = DB::table('surats')->where('userid','=',auth()->user()->id)->get();
        }
        return view('dashboard/surat',$data);
    }
    function users(){
        if(!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $data['users'] = DB::table('users')->get();
        return view('admin/users',$data);
    }
    function artikel(){
        if(!auth()->user()->is_admin){
            return redirect()->route('dashboard');
        }
        $data['artikels'] = DB::table('posts')->get();
        return view('admin/artikel',$data);
    }
}