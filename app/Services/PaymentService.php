<?php

namespace App\Services;

use App\Services\CardService;


class PaymentService
{

    private $cardService;

    public function __construct(CardService $cardService)
    {
        $this->cardService = $cardService;
    }

    public function paymentMethod()
    {
        return $this->cardService->cardType();
    }
}