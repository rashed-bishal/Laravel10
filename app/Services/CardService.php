<?php

namespace App\Services;

class CardService
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function cardType()
    {
        return strtolower("VISA OR MASTERCARD HOLDERS ONLY");
    }
}