<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('channel_tracks', function (Blueprint $table) {
            $table->id();
            $table->integer('channel_id');
            $table->integer('track_id');
            $table->dateTime('start_time');
            $table->unique(['channel_id', 'track_id', 'start_time']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channel_tracks');
    }
};
