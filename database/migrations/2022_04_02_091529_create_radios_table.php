<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('radios', function (Blueprint $table) {
        //     // $table->id();
        //     // $table->string('logo');
        //     // $table->double('price');
        //     // $table->string('frequency');
        //     // $table->double('acct_bal');
        //     // $table->integer('user_id');
        //     // $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('radios');
    }
}
