<?php

namespace Abishekrsrikaanth\Stripe\Facades;

use Illuminate\Support\Facades\Facade;

class Stripe extends Facade
{
    protected static function getFacadeAccessor ()
    {
        return "stripe";
    }
} 