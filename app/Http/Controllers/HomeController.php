<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as user;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users =  user::all();
        return view('dashboard')->with('users', $users);
    }

    public function showadministrators()
    {
        $users =  user::all() ->where('role', '=', 1)
                ;
        return view('administrators')->with('users', $users);
    }

    public function showdoctors()
    {
        $users =  user::all() ->where('role', '=', 2)
                ;
        return view('doctors')->with('users', $users);
    }

    public function shownurses()
    {
        $users =  user::all() ->where('role', '=', 3)
                ;
        return view('nurses')->with('users', $users);
    }
    public function showprofile()
    {
        $users =  user::all();
        return view('profile')->with('users', $users);
    }
}
