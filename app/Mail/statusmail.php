<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class statusmail extends Mailable
{
    use Queueable, SerializesModels;

    public $single;

    public function __construct($single)
    {
        $this -> single = $single;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.status')->subject('Application Rejected');
    }
}
