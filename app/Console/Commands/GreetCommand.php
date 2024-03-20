<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GreetCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'do:greet';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command greets every user.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        return $this->info("Good Morning Greetings!");
    }
}
