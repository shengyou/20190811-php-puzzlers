<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Puzzle6 extends Command
{
    protected $signature = 'puzzle:6';

    public function handle()
    {
        $foo = 1;

        echo $foo+++$foo;

        // A) 2
        // B) 3
        // C) 4
        // D) None of the above
    }
}
