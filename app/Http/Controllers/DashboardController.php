<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Mail;
use App\Mail\NewUserWelcome;
use Auth;

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

    // Here we send the users info and then it to send 
    // it will render the the mail controler file NewUserWelcome 
    // run the build function n controller
    // then it runs the blade file newuserwelcome.blade.php, to render it to the view
       public function email()
    {

        Mail::to(Auth::user()->email)->send(new NewUserWelcome());
        return redirect('/dashboard');

    }
}
