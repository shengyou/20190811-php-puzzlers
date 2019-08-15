<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Puzzle3 extends Command
{
    protected $signature = 'puzzle:3';

    public function handle()
    {
        echo '123' == ' 123' ? 1 : 0;
        echo '123' <> ' 123' ? 1 : 0;

        // A) 00
        // B) 01
        // C) 10
        // D) 11
    }
}
