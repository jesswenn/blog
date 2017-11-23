<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // This function you can block everything 
    // if the user isent authentical (is alowed)
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // Get the logged in users id
        $user_id = auth()->user()->id;

        //when we have the id we want to find
        $user = User::find($user_id);

        return view('dashboard')->with('posts', $user->posts);

    }
}
