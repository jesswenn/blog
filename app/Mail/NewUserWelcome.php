<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewUserWelcome extends Mailable
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
     * Render to the viewfile
     * markdown=use the Laravel builtin markdown instead 
      of plain HTML othervise we use (view)
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.user.newuserwelcome');
    }
}
