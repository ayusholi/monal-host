<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CredentialsMail extends Mailable
{
    use Queueable, SerializesModels;

    private $credentials, $service, $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($service, $user, $credentials)
    {
        $this->credentials = $credentials;
        $this->service = $service;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.send_credentials')->with(["user" => $this->user, "service" => $this->service, "credentials" => $this->credentials]);

    }
}
