<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LabEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $mail;

    public function __construct($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('temirgaliomar@gmail.com')
                    ->view('mails.lab_mail')
                    ->text('mails.lab_mail_plain')
                    ->with(
                        [
                            'testVarOne' => '1',
                            'testVarTwo' => '2'
                        ]
                    );
    }
}
