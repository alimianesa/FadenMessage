<?php

namespace Faden\FadenMessageModule\Listeners;

use Faden\FadenMessageModule\Events\FadenUserAddedEvent;
use Faden\FadenMessageModule\Jobs\SendNotification;


class FadenNewUserMessage
{
    public function handle(FadenUserAddedEvent $event)
    {

    }
}