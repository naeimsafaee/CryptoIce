<?php

namespace App\Notifications;

use App\Channels\SmsChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendSMS extends Notification implements ShouldQueue
{
    use Queueable;

    public $phone;
    public $message;
    public $country_code;

    public function __construct($phone, $message , $country_code)
    {
        $this->phone = $phone;
        $this->message = $message;
        $this->country_code = $country_code;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [SmsChannel::class];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toSMS($notifiable)
    {
        return [
            'phone' => $this->phone,
            'message' => $this->message,
            'country_code' => $this->country_code
        ];
    }
}
