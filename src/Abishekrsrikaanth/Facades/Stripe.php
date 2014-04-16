<?php

namespace Abishekrsrikaanth\Facades;

use Illuminate\Support\Facades\Facade;

class Stripe extends Facade
{
    protected static function getFacadeAccessor ()
    {
        return "stripe";
    }
} 