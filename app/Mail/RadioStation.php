<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RadioStation extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->mail = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return  $this
            ->from($this->mail['from']['sender'], $this->mail['from']['name'])
            ->subject($this->mail['subject'])
            ->markdown('emails.radioStaion')
            ->with(['message' => $this->mail['message']]);
    }
}
