<?php

namespace App\Console\Commands;

use App\Facades\AudioAddict;
use App\Models\ChannelTrack;
use App\Models\Network;
use Illuminate\Console\Command;

class ParseCurrentTracks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:parse-current-tracks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get all current tracks from Audio Addict';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $networks = Network::all();
        if ($networks->isEmpty()) {
            $this->output->error('No available networks! Import networks first!');
            return 1;
        }
        $total = 0;
        foreach($networks as $network) {
            $tracks = AudioAddict::getCurrentlyPlaying($network->key);
            $total += ChannelTrack::import($tracks);
        }
        $this->output->success("Saved $total tracks!");
    }
}
