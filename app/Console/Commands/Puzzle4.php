<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Puzzle4 extends Command
{
    protected $signature = 'puzzle:4';

    public function handle()
    {
        $array1['foo'] = 'Bar 1';
        $array2['foo'] = 'Bar 2';

        var_dump($array1 + $array2);
        var_dump(array_merge($array1, $array2));

        // A)
        //   Array ( [foo] => Bar 1 )
        //   Array ( [foo] => Bar 2 )
        // B)
        //   Array ( [foo] => Bar 2 )
        //   Array ( [foo] => Bar 2 )
        // C)
        //   Array ( [foo] => Bar 2 )
        //   Array ( [foo] => Bar 1 )
        // D)
        //   Array ( [foo] => Bar 1 )
        //   Array ( [foo] => Bar 1 )
    }
}
