<?php

namespace Faden\FadenMessageModule\Http\Controllers;

use Alive2212\LaravelSmartRestful\SmartCrudController;
use Faden\FadenMessageModule\FadenMessageType;


class FadenMessageTypeController extends SmartCrudController
{
    public function initController()
    {
        $this->model  = new FadenMessageType();
    }


}
