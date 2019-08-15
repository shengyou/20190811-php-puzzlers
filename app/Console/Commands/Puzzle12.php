<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Puzzle12 extends Command
{
    protected $signature = 'puzzle:12';

    public function handle()
    {
        $foo = 'bar';
        $bar = 'baz';
        $baz = 2;

        echo ${$foo[$$$foo]} ?? 'x';

        // A) r
        // B) z
        // C) x
        // D) None of the above
    }
}
