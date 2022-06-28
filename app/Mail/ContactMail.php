<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $email = $this->subject('Nanagames | Email de contact 📩')
        ->view('emails.contactMail');
        if (isset($this->mailData["attachments"])) {
            $attachments = $this->mailData["attachments"];

            foreach($attachments as $attachment) {
                $email->attachFromStorage("attachments/".$attachment);
            }
        }

        return $email;

    }
}
