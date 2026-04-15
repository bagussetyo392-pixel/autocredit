<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactMail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Pesan Baru dari AutoCredit')
                    ->replyTo($this->data['email'], $this->data['nama'])
                    ->view('emails.contact');
    }
}