<?php

namespace App\Console\Commands;

use App\Facades\LastFm;
use Illuminate\Console\Command;

class GetLastFmTrack extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-last-fm-track';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        dd(LastFm::getInfoByTrackName("Africa", "Toto"));
    }
}
