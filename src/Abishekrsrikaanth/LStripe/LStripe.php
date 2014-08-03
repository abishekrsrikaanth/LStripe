<?php

namespace Abishekrsrikaanth\LStripe;

class LStripe
{
    public function Card($customerId)
    {
        return new Card($customerId);
    }

    public function Customer()
    {
        return new Customer();
    }
}
