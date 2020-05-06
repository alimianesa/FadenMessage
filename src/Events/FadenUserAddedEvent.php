<?php

namespace Faden\FadenMessageModule\Events;

use Faden\FadenMessageModule\FadenMessage;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use App\User;

class FadenUserAddedEvent
{
    use Dispatchable, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        // $message = new FadenMessage;
        $user ->messages() -> attach(2);
        $this->user = $user ;
    }
}