<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Puzzle7 extends Command
{
    protected $signature = 'puzzle:7';

    public function handle()
    {
        echo [new Foo, 'bar']('baz');

        // A) foo
        // B) bar
        // C) baz
        // D) None of the above
    }
}
