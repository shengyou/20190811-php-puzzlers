<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Puzzle11 extends Command
{
    protected $signature = 'puzzle:11';

    public function handle()
    {
        echo 0 ?: 1;
        echo 0 ?? 1;

        // A) 00
        // B) 01
        // C) 10
        // D) 11
    }
}
