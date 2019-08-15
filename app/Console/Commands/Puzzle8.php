<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Puzzle8 extends Command
{
    protected $signature = 'puzzle:8';

    public function handle()
    {
        echo in_array('foo', [0, 1]) ? 1 : 0;
        echo in_array(0, ['foo', 'bar']) ? 1 : 0;

        // A) 00
        // B) 01
        // C) 10
        // D) 11
    }
}
