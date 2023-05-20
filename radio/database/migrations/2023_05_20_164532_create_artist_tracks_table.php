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
        Schema::create('artist_tracks', function (Blueprint $table) {
            $table->id();
            $table->integer('artist_id');
            $table->integer('track_id');
            // Prevent duplicates of artist_id and track_id pair
            $table->unique(['artist_id', 'track_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist_tracks');
    }
};
