<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method mixed getApi()
 */
class Spotify extends Facade
{


    protected static function getFacadeAccessor()
    {
        return 'spotify'
;
    }
}
