<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


/**
 * @property int $id
 * @property int $channel_id
 * @property int $track_id
 * @property Carbon $start_time
 * @property ?string $display_artist Denormalized field
 * @property ?string $display_title Denormalized field
 * @property int $duration
 */
class ChannelTrack extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'channel_id',
        'track_id',
        'start_time',
        'display_artist',
        'display_title',
        'duration'
    ];

    /**
     * Summary of import
     * @param array $channels
     * @return int affected rows
     */
    public static function import($channels): int
    {
        $data = [];
        foreach ($channels as $channel) {
            $data[] = [
                'channel_id'=>$channel['channel_id'],
                'track_id' => $channel['track']['id'],
                'start_time' => $channel['track']['start_time'],
                'display_artist' => $channel['track']['display_artist'],
                'display_title' => $channel['track']['display_title'],
                'duration' => $channel['track']['duration']
            ];
        }
        return DB::table('channel_tracks')
            ->insertOrIgnore($data);
        
    }
}
