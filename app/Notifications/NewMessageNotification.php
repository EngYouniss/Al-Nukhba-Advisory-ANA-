<?php

namespace App\Notifications;

use App\Mail\NewMessageMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class NewMessageNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $name;
    public $email;
    public $subject;
    public $message;

    public function __construct($name, $email, $subject, $message)
    {
        $this->name    = $name;
        $this->email   = $email;
        $this->subject = $subject;
        $this->message = $message;
    }

    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail(object $notifiable)
    {
        return (new NewMessageMail(
            $this->name,
            $this->email,
            $this->subject,
            $this->message
        ))->replyTo($notifiable->email);
    }
       
    public function toArray(object $notifiable): array
    {
        return [
            'name'    => $this->name,
            'email'   => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ];
    }
}
