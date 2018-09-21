<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongBandAlbumTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('bands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image')->default('default.jpg');
            $table->string('description');
            $table->string('genre');
            $table->timestamps();
        });

        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image')->default('default.jpg');
            $table->unsignedInteger('year');
            $table->unsignedInteger('band_id');
            $table->foreign('band_id')->references('id')->on('bands');
            $table->timestamps();
        });

        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('duration');
            $table->string('composer');
            $table->unsignedInteger('order');
            $table->unsignedInteger('album_id');
            $table->foreign('album_id')->references('id')->on('albums');
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
        Schema::dropIfExists('songs');
        Schema::dropIfExists('albums');
        Schema::dropIfExists('bands');
    }
}
