<?php

namespace Faden\FadenMessageModule;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Faden\FadenMessageModule\Listeners\FadenSendMessage;
use Faden\FadenMessageModule\Events\FadenMessageEvent;

class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        FadenMessageEvent::class => [
            FadenSendMessage::class,
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