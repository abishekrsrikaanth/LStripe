<?php

namespace Abishekrsrikaanth\Stripe;


class Stripe
{
    public function Card ()
    {
        return new Card();
    }

    public function Customer ()
    {
        return new Customer();
    }
} 