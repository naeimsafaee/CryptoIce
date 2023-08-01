<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RejectTraderRequest extends Mailable {
    use Queueable, SerializesModels;

    public function __construct() {
    }

    public function build() {
        return $this->subject("Trader request rejected")->from($address = config('mail.from.address'), $name = config('mail.from.name'))
            ->view('mail.reject_trader');
    }
}
