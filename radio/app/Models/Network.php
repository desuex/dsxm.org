<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $key
 * @property string $url
 * @property ?string $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $listen_url
 * @property string $service_key
 * @property int $active_channel_count
 */
class Network extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'key',
        'url',
        'description',
        'created_at',
        'updated_at',
        'listen_url',
        'service_key',
        'active_channel_count'
    ];

    public static function import($networks): void
    {
        foreach($networks as $data) {

            self::updateOrCreate(['id' => $data['id']], $data);
        }
    }
}
