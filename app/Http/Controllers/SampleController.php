<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PaymentService;
use App\Facades\CustomFacade;

class SampleController extends Controller
{

    private $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function index()
    {
        //return $this->paymentService->paymentMethod();

        dd(app());
    }

    public function custom()
    {
       echo CustomFacade::messageMethod();
    }
}
