<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $mailAddress;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailAddress)
    {
        $this->mailAddress = $mailAddress;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('emaidl@gmail.com', '테스트')
        ->view('email.emailre');

    }
}
