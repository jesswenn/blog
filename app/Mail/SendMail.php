<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

//USe the send email request here
use Illuminate\Http\request;
use App\user;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request)
    {
        // Mail::to(Auth::user()->email)->send(new newMail());
        $user = user::find(1);
        //Whant to render out the message to our view, sending the message data
        return $this->view('mail', ['name' => $user->name])->to($user->email);
    }
}

        // Email
    //     public function email(){
        
    //     Mail::to(Auth::user()->email)->send(new newMail());
    //     // send the email and redirect home
    //     return redirect ('/dashboard');
        
    // }