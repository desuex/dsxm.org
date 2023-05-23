<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;

class TracksController extends Controller
{
    public function index(string $key)
    {
        /** @var Channel $channel */
        $channel = Channel::where('key',$key)->firstOrFail(); //TODO: also search by network, i.e. ambient is ambiguous
        $tracks = $channel->lastTracks();
        return view('tracks', ['tracks'=>$tracks, 'channel'=>$channel]);
    }
}
