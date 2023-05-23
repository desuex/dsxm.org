<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method array getInfoByTrackName(string $trackName, string $artist)
 */
class LastFm extends Facade
{


    protected static function getFacadeAccessor()
    {
        return 'last-fm';
    }
}