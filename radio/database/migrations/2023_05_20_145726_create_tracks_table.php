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
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->integer('length')->default(0);
            $table->string('title')->default('');
            $table->string('version')->default('');
            $table->string('display_title')->default('');
            $table->string('display_artist')->default('');
            $table->string('track')->default('');
            $table->boolean('mix')->default(false);
            $table->string('release')->nullable();
            $table->integer('content_accessibility')->default(0);
            $table->integer('preview_accessibility')->default(0);
            $table->integer('retail_accessibility')->default(0);
            $table->string('release_date')->nullable();
            $table->string('waveform_url')->nullable();
            $table->integer('track_container_id')->nullable();
            $table->string('isrc')->nullable();
            $table->string('parental_advisoty')->nullable();
            $table->string('details_url')->nullable();
            $table->string('preview')->nullable();
            $table->string('asset_url')->nullable();
            $table->timestamps();



            $table->boolean('full_info')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracks');
    }
};
