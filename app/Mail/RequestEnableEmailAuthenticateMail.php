<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestEnableEmailAuthenticateMail extends Mailable{
    use Queueable, SerializesModels;

    private $link;

    public function __construct($link){
        $this->link = $link;
    }

    public function build(){
        return $this->subject("Request enable email 2fa")->from($address = config('mail.from.address'), $name = config('mail.from.name'))
            ->view('mail.enable_email_2fa', [
                'data' => [
                    "message" => $this->link,
                ],
            ]);
    }
}
