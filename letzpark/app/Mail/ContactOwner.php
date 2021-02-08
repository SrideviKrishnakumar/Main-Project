<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactOwner extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    //This is the email of the user interested in the parking place
    private $_requesterEmail;
    //this is the name of the owner of the parking place
    private $_ownerName;
    //this is the name of the rental spot
    private $_rentalName;
    // this is the message of the interested user
    private $_message;

    public function __construct($requesterEmail, $ownerName, $rentalName, $message)
    {
        $this->_requesterEmail = $requesterEmail;
        $this->_ownerName = $ownerName;
        $this->_rentalName = $rentalName;
        $this->_message = $message;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contactowner')
            ->subject('LëtzPark Rental Notification')
            ->with(['requesterEmail' => $this->_requesterEmail, 'ownerName' => $this->_ownerName, 'rentalName' => $this->_rentalName,'message'=> $this->_message]);
    }
}
