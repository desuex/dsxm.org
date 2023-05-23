<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Network;

class ChannelsController extends Controller
{
    public function index(string $network)
    {
        $network = Network::where('key', $network)->firstOrFail();

        $channels = Channel::where('network_id', $network->id)->get();
        return view('channels', ['channels' => $channels]);
    }
}
