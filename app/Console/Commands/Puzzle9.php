<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Puzzle9 extends Command
{
    protected $signature = 'puzzle:9';

    public function handle()
    {
        echo in_array('10foo', [10, 20]) ? 1 : 0;
        echo in_array('1 0foo', [10, 20]) ? 1 : 0;
        echo in_array('bar20', [10, 20]) ? 1 : 0;

        // A) 001
        // B) 010
        // C) 100
        // D) 101
    }
}
