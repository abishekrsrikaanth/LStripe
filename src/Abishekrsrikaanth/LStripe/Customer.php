<?php

namespace Abishekrsrikaanth\LStripe;

use \Stripe;
use \Stripe_Customer;
use Illuminate\Support\Facades\Config;

class Customer
{
    public function __construct ()
    {
        Stripe::setApiKey(Config::get("stripe::credentials.secret_key"));
    }

    public function get ($customerId)
    {
        return Stripe_Customer::retrieve($customerId);
    }

    public function create ($params)
    {
        return Stripe_Customer::create($params);
    }

    public function update ($customerId, $params)
    {
        $customer = $this->get($customerId);
        foreach ($params as $param) {
            $key            = key($param);
            $customer->$key = $param;
        }
        $customer->save();
    }

    public function listCards ($customerId, $params = array())
    {
        $cards = new Card($customerId);

        return $cards->all($params);
    }

    public function delete ($customerId)
    {
        $customer = $this->get($customerId);

        return $customer->delete();
    }

    public function all ($params = array())
    {
        return Stripe_Customer::all($params);
    }
} 