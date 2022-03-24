<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Message extends Mailable
{
    use Queueable, SerializesModels;

    protected $mail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail)
    {
        //
        $this->mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this
            ->from($this->mail->from)
            ->subject($this->mail->subject)
            ->markdown('emails.message')
            ->with(['message' => $this->mail->message]);

        foreach ($this->mail->attachments as $attachment){
            $mail = $mail->attach($attachment->public_path);
        }

        return $mail;
    }
}
