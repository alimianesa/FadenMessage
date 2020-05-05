<?php

namespace Faden\FadenMessageModule\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Faden\FadenMessageModule\FadenMessage;

class FadenMessageEvent
{
    use Dispatchable, SerializesModels;

    public $message;

    public function __construct(FadenMessage $fadenMessage)
    {
        $this->message = $fadenMessage ;
    }
}