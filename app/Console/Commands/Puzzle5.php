<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Puzzle5 extends Command
{
    protected $signature = 'puzzle:5';

    public function handle()
    {
        $array1 = [1, 2];
        $array2 = [3, 4];

        print_r($array2 + $array1);
        print_r(array_merge($array2, $array1));

        // A)
        //   Array ( [0] => 3 [1] => 4 )
        //   Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
        // B)
        //   Array ( [0] => 1 [1] => 2 )
        //   Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
        // C)
        //   Array ( [0] => 3 [1] => 4 )
        //   Array ( [0] => 3 [1] => 4 [2] => 1 [3] => 2 )
        // D)
        //   Array ( [0] => 1 [1] => 3 )
        //   Array ( [0] => 2 [1] => 3 [2] => 1 [3] => 4 )
    }
}
