<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Swoole\Event;
use Swoole\Coroutine as Co;

class Warmup extends Command
{
    protected $signature = 'warmup';

    public function handle()
    {
        go(function () {
            echo "A[1]\n";
            go(function () {
                echo "B[1]\n";
                Co::sleep(0.1);
                echo "B[2]\n";
            });
            echo "A[2]\n";
            Co::sleep(0.2);
            echo "A[3]\n";
        });

        Event::wait();
    }
}
