<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PaymentService;
<<<<<<< HEAD
use App\Services\CategoryService;
use App\Models\Post;
use App\Models\Category;
=======
use App\Facades\CustomFacade;
>>>>>>> 96cca8b26a102880f1112a37cbc2a27c822f62bc

class SampleController extends Controller
{

<<<<<<< HEAD
    public function __construct(public Post $posts, public Category $categories)
    {

=======
    private $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
>>>>>>> 96cca8b26a102880f1112a37cbc2a27c822f62bc
    }

    public function index()
    {
<<<<<<< HEAD
        return $this->posts->all();
=======
        //return $this->paymentService->paymentMethod();

        dd(app());
    }

    public function custom()
    {
       echo CustomFacade::messageMethod();
>>>>>>> 96cca8b26a102880f1112a37cbc2a27c822f62bc
    }
}
