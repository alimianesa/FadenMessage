<?php

namespace Faden\FadenMessageModule;

use Faden\FadenMessageModule\Events\FadenUserAddedEvent;
use Faden\FadenMessageModule\Listeners\FadenNewUserMessage;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Faden\FadenMessageModule\Listeners\FadenSendMessage;
use Faden\FadenMessageModule\Events\FadenMessageEvent;

class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        FadenMessageEvent::class => [
            FadenSendMessage::class,
        ],
        FadenUserAddedEvent::class => [
            FadenNewUserMessage::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}