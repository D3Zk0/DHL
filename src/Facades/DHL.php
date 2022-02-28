<?php

namespace dex\dhl\Facades;

use Illuminate\Support\Facades\Facade;

class DHL extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "DHL";
    }


}
