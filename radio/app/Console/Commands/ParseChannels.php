<?php

namespace App\Console\Commands;

use App\Facades\AudioAddict;
use App\Models\Channel;
use App\Models\Network;
use Illuminate\Console\Command;

class ParseChannels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:parse-channels';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update all channels from Audio Addict';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $networks = Network::all();
        if (empty($networks)) {
            $this->output->error('No available networks! Import networks first!');
        }
        foreach($networks as $network) {
            $channels = AudioAddict::getChannels($network->key);
            Channel::import($channels);
        }
    }
}
