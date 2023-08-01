<?php

namespace App\Channels;

use App\Models\Sms;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB;

class SmsChannel
{
    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $details = $notification->toSMS($notifiable);

        $response = Kavenegar($details['phone'], $details['message'] , $details["country_code"]);

    }
}
