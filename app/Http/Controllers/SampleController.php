<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PaymentService;

class SampleController extends Controller
{
    public function index(PaymentService $paymentService)
    {
        return $paymentService->paymentMethod();
    }
}
