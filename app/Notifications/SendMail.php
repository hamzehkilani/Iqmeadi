<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendMail extends Notification
{
    use Queueable;

    protected $message_id;
    protected $body;

    public function __construct($body,$message_id)
    {
        $this->body = $body;
        $this->message_id = $message_id;
    }

    public function via($notifiable): array
    {
        return ['database'];
    }


    public function toArray($notifiable): array
    {
        return [
            'body' => $this->body,
            'message_id' => $this->message_id
        ];
    }
}
