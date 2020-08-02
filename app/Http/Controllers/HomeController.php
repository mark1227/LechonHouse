<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $usertype = auth()->user()->usertype;
        //$user = User::find($user);
        //dd($user->usertype);
        //$usertype = Auth::user()->usertype;
        //dd(Auth::user()->usertype);
        if($usertype == "admin"){
            $page = "admindash";
        }
        else{
            $page = "userdash";
        }
        return view($page);
        
        //return view('home');
    }
}
