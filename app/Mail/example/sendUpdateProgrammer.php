<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendUpdateProgrammer extends Mailable
{
    use Queueable, SerializesModels;
    public $emailUpdateItem;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailUpdateItem)
    {
        $this->emailUpdateItem = $emailUpdateItem;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Perubahan Item')
        ->view('emails.sendUpdateProgrammer');
    }
}
