<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Puzzle2 extends Command
{
    protected $signature = 'puzzle:2';

    public function handle()
    {
        $foo = 1;

        echo ++$foo++;

        // A) 1
        // B) 2
        // C) 3
        // D) None of the above
    }
}
