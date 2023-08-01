<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DepositConfirmMail extends Mailable {
    use Queueable, SerializesModels;

    private $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function build() {
        return $this->subject("Deposit confirm")->from($address = config('mail.from.address'), $name = config('mail.from.name'))
            ->view('mail.change_password', [
                'data' => [
                    "message" => $this->amount
                ],
            ]);
    }
}
