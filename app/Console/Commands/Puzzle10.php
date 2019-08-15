<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Puzzle10 extends Command
{
    protected $signature = 'puzzle:10';

    public function handle()
    {
        echo [] ? 1 : 0;
        echo '0' ? 1 : 0;
        echo ' ' ? 1 : 0;

        // A) 111
        // B) 000
        // C) 011
        // D) 001
    }
}
