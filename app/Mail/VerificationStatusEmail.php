<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerificationStatusEmail extends Mailable
{
    use Queueable, SerializesModels;

    private  $accept;
    private  $reason;


    public function __construct($accept , $reason)
    {
        $this->accept = $accept;
        $this->reason = $reason;
    }


    public function build()
    {
        if($this->accept){
            return $this->subject("Your verification approved")
                ->from($address = config('mail.from.address'), $name = config('mail.from.name'))
                ->view('mail.accept' , [
                    'data' => [
                    ],
                ]);
        } else {
            return $this->subject("Your verification rejected")
                ->from($address = config('mail.from.address'), $name = config('mail.from.name'))
                ->view('mail.reject' , [
                    'data' => [
                        "message" => $this->reason
                    ],
                ]);
        }

    }
}
