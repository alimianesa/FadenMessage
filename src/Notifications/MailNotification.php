<?php

namespace Faden\FadenMessageModule\Notifications;

use Faden\FadenMessageModule\FadenMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MailNotification extends Notification
{
    use Queueable;

    public $messages;
    public $email_address;

    public function __construct($messages)
    {
        $this->messages = $messages;
        $this->email_address = $messages->to;

    }


    public function via()
    {
        return ['mail'];
    }

    public function routeNotificationForMail()
    {

        return $this->email_address;
    }


    public function toMail()
    {
        return (new MailMessage)
            ->greeting($this->messages->title)
            ->line($this->messages->body);

    }

}
