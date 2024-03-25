<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyLogger extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:me';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Personal File Logger for test purpose';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        return logger('Hello this is custom logged line at -> '.date('Y-m-d H:i:s'));
    }
}
