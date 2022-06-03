<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicShedularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_shedulars', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->json('time');
            $table->json('days');
            $table->unsignedBigInteger('media_id');
            $table->unsignedBigInteger('radio_id');
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
        Schema::dropIfExists('music_shedulars');
    }
}
