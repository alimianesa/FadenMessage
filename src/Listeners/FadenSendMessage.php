<?php

namespace Faden\FadenMessageModule\Listeners;

use Faden\FadenMessageModule\Jobs\SendNotification;
use Faden\FadenMessageModule\Events\FadenMessageEvent;

class FadenSendMessage
{
    public function handle(FadenMessageEvent $event)
    {
        if (isset($event->message->type->sends_in)) {
            SendNotification::dispatch($event)
                ->delay(now()->addSeconds($event->message->type->sends_in));
        } else {
            SendNotification::dispatchNow($event);
        }

    }
}