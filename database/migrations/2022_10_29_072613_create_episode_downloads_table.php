<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episode_downloads', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('movie_episode_id')->constrained('movie_episodes');
            $table->foreignUuid('resolution_id')->constrained('resolutions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episode_downloads');
    }
};
