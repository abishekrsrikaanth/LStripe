<?php

namespace Abishekrsrikaanth\LStripe\Facades;

use Illuminate\Support\Facades\Facade;

class LStripe extends Facade
{
    protected static function getFacadeAccessor ()
    {
        return "lstripe";
    }
} 