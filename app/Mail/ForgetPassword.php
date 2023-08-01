<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgetPassword extends Mailable
{
    use Queueable, SerializesModels;

    private  $link;

    public function __construct($link){
        $this->link = $link;
    }

    public function build(){

        return $this->subject("Reset your password")
            ->from($address = config('mail.from.address') , $name = config('mail.from.name'))
            ->view('mail.forget' , [
                'data' => [
                    "message" => $this->link
                ],
            ]);
    }
}
