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
        Schema::create('movies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('real_title');
            $table->text('description');
            $table->text('thumbnail');
            $table->string('status');
            $table->date('release_date');
            $table->string('duration_per_episode')->nullable();
            $table->foreignUuid('type_id')->constrained('types');
            $table->text('synopsis')->nullable();
            $table->decimal('ratting')->nullable();
            $table->unsignedMediumInteger('episode_total')->nullable();
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
        Schema::dropIfExists('movies');
    }
};
