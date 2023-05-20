<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $length Track length in seconds
 * @property string $title
 * @property string $version Probably some version of track's variation
 * @property string $display_title
 * @property string $display_artist
 * @property string $track Full name of the track
 * @property bool $mix Is a remix
 * @property ?string $release 
 * @property int $content_accessibility
 * @property int $preview_accessibility
 * @property int $retail_accessibility
 * @property string $release_date
 * @property string $waveform_url
 * @property ?int $track_container_id Not sure what it is
 * @property ?string $isrc
 * @property ?string $parental_advisoty
 * @property ?string $details_url
 * @property ?string $preview
 * @property ?string $asset_url
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property bool $full_info Custom field used, true if the track's info is fully parsed
 */
class Track extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'length',
        'title',
        'version',
        'display_title',
        'display_artist',
        'track',
        'mix',
        'release',
        'content_accessibility',
        'preview_accessibility',
        'retail_accessibility',
        'release_date',
        'waveform_url',
        'track_container_id',
        'isrc',
        'parental_advisoty',
        'details_url',
        'preview',
        'asset_url',
        'created_at',
        'updated_at'
    ];

    public static function import($tracks): void
    {
        foreach($tracks as $data) {

            self::updateOrCreate(['id' => $data['id']], $data);
        }
    }
}
