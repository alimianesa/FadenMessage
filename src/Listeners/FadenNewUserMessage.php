<?php

namespace Faden\FadenMessageModule\Listeners;

use Faden\FadenMessageModule\Events\FadenUserAddedEvent;
use Faden\FadenMessageModule\Jobs\FadenNewUserJob;
use Faden\FadenMessageModule\Jobs\SendNotification;


class FadenNewUserMessage
{
    public function handle(FadenUserAddedEvent $event)
    {
        $message = $event->user->messages[0];
        if ($message->type->sends_in) {
            FadenNewUserJob::dispatch($event->user->messages[0])
                ->delay(now()->addSeconds($message->type->sends_in));
        } else {
            FadenNewUserJob::dispatchNow($event->user->messages[0]);
        }
    }
}