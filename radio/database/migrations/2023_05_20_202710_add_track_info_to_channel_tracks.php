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
        Schema::table('channel_tracks', function (Blueprint $table) {
            $table->string('display_artist')->nullable();
            $table->string('display_title')->nullable();
            $table->integer('duration')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('channel_tracks', function (Blueprint $table) {
            //
        });
    }
};
