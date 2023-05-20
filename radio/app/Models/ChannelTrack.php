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
 */
class ChannelTrack extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'channel_id',
        'track_id',
        'start_time'
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
                'start_time' => $channel['track']['start_time']
            ];
        }
        return DB::table('channel_tracks')
            ->insertOrIgnore($data);
        
    }
}
