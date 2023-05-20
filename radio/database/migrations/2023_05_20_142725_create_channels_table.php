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
        Schema::create('channels', function (Blueprint $table) {
            $table->id();
            $table->integer('network_id');
            $table->string('name');
            $table->string('key');
            $table->string('ad_channels')->nullable();
            $table->string('description_short')->nullable();
            $table->text('description_long')->nullable();
            $table->integer('tracklist_server_id')->nullable();
            $table->integer('premium_id')->nullable();
            $table->timestamps();
            $table->string('channel_director')->nullable();
            $table->string('ad_dfp_unit_id')->nullable();
            $table->boolean('public')->default(false);
            $table->integer('asset_id')->nullable();
            $table->string('asset_url')->nullable();
            $table->string('banner_url')->nullable();
            $table->text('description')->nullable();
            $table->unique(['key', 'network_id']);

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channels');
    }
};
