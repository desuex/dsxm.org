<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
/**
 * @method array getCurrentlyPlaying(string $service = 'di')
 * @method array getChannels(string $service = 'di')
 * @method array getTrackDetails(int $trackId, string $service = 'di')
 * @method array getArtistDetails(int $artistId, string $service = 'di')
 * @method array getNetworks()
 */
class AudioAddict extends Facade
{
    public const DI_FM = 'di';

    protected static function getFacadeAccessor()
    {
        return 'audio-addict';
    }
}