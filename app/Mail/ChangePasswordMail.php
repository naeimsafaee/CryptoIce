<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ChangePasswordMail extends Mailable {
    use Queueable, SerializesModels;

    public function __construct() {
    }

    public function build() {

        return $this->subject("Change password")->from($address = config('mail.from.address'), $name = config('mail.from.name'))
            ->view('mail.change_password');
    }
}
