<?php

namespace App\Console\Commands;

use App\Facades\Spotify;
use Illuminate\Console\Command;

class TestSpotify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-spotify';

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
        dd( Spotify::getApi());
    }
}
