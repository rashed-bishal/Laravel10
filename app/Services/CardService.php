<?php

namespace App\Services;

class CardService
{
    public function cardType()
    {
        return strtolower("VISA OR MASTERCARD HOLDERS ONLY");
    }
}