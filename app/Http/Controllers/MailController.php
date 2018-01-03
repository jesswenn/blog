<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\mail\newMail;
use Auth;

class MailController extends Controller
{
	public function send()
	{
	    Mail::send(new newMail());
    }

    	public function email()
	{
		
	Mail::to(Auth::user()->email)->send(new newMail() );
	    return view('email');
    }
}

