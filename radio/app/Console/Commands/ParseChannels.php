<?php

namespace App\Console\Commands;

use App\Facades\AudioAddict;
use App\Models\Channel;
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
    protected $description = 'Update all channels from DI.FM';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $channels = AudioAddict::getChannels(AudioAddict::DI_FM);
        Channel::import($channels);
        
        
    }
}
