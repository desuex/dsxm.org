<?php

namespace App\Console\Commands;

use App\Facades\AudioAddict;
use App\Models\Network;
use Illuminate\Console\Command;

class ParseNetworks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:parse-networks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update all networks from Audio Addict';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $networks = AudioAddict::getNetworks();
        $count = Network::import($networks);

        $this->output->success("Imported $count networks");
        
    }
}
