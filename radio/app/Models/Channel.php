<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $network_id Network ID
 * @property string  $name Visible name
 * @property string  $key Unique channel slug
 * @property string $ad_channels Useless for our purposes
 * @property string $description_short
 * @property string $description_long
 * @property int $tracklist_server_id Not sure what it is
 * @property int $premium_id Unused (?)
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $channel_director
 * @property string $ad_dfp_unit_id Useless for our purposes
 * @property bool $public Unused (?)
 * @property int $asset_id 
 * @property string $asset_url
 * @property string $banner_url
 * @property mixed $description
 */
class Channel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'network_id',
        'name',
        'key',
        'ad_channels',
        'description_short',
        'description_long',
        'tracklist_server_id',
        'premium_id',
        'created_at',
        'updated_at',
        'channel_director',
        'ad_dfp_unit_id',
        'public',
        'asset_id',
        'asset_url',
        'banner_url',
        'description'
    ];

    public static function import($channels): int
    {
        foreach($channels as $data) {

            self::updateOrCreate(['id' => $data['id']], $data);
        }
        return sizeof($channels);
    }
}
