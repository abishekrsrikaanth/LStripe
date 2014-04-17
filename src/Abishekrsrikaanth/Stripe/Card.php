<?php

namespace Abishekrsrikaanth\Stripe;

use \Stripe as Stripe_SDK;
use \Stripe_Customer;
use Illuminate\Support\Facades\Config;

class Card
{
    private $_customer;

    public function __construct ($customerId)
    {
        Stripe_SDK::setApiKey(Config::get("stripe::credentials.secret_key"));
        $this->_customer = Stripe_Customer::retrieve($customerId);
    }

    public function get ($card_token)
    {
        return $this->_customer->cards->retrieve($card_token);
    }

    public function create ($params)
    {
        return $this->_customer->create($params);
    }

    public function update ($cardId, $params)
    {
        $card = $this->get($cardId);
        foreach ($params as $param) {
            $key        = key($param);
            $card->$key = $param;
        }

        return $card->save();
    }

    public function delete ($cardId)
    {
        $card = $this->get($cardId);

        return $card->delete();
    }

    public function all ($params)
    {
        return $this->_customer->cards->all($params);
    }
} 