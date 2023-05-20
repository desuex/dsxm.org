<?php

namespace App\Console\Commands;

use App\Facades\AudioAddict;
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
    protected $description = 'Get all current tracks from DI.FM';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tracks = AudioAddict::getCurrentlyPlaying(AudioAddict::DI_FM);
        print_r($tracks[0]);
    }
}
