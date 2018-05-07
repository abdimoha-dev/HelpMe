<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfrimEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'postmaster@support.elimufront.com';
        $name = 'HelpMe admin';
        $subject = 'Email Confirmation';
        return $this->view('auth.confirmEmail', ['token' => $this->token])
            ->from($address, $name)
            ->subject($subject);

    }
}
