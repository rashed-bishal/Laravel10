<?php

namespace App\Listeners;

use App\Events\MyTestEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\PostPublished;
use Illuminate\Support\Facades\Mail;

class MyTestListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(MyTestEvent $event): void
    {
        Mail::send(new PostPublished($event->email));
    }
}
