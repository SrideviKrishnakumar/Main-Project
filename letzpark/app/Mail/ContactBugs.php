<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactBugs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    //This is the name of the user who reported the bug
    private $_userName;
    //this is the message from admin
    private $_response;

    public function __construct($userName, $response)
    {
        $this->_userName = $userName;
        $this->_response = $response;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.bugs')
            ->subject('LëtzPark has reviewed your bug!')
            ->with(['userName' => $this->_userName, 'response' => $this->_response]);;
    }
}
