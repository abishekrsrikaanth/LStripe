<?php

namespace Abishekrsrikaanth\Stripe;


class Stripe
{
    public function Card ($customerId)
    {
        return new Card($customerId);
    }

    public function Customer ()
    {
        return new Customer();
    }
} 