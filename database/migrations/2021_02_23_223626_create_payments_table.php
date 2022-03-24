<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('payments', function (Blueprint $table) {
        //     $table->engine = 'InnoDB';
        //     $table->id();
        //     $table->unsignedBigInteger('account_id')->nullable();
        //     $table->unsignedBigInteger('payer_id')->nullable();
        //     $table->string('payer_type')->nullable();
        //     $table->unsignedBigInteger('payable_id');
        //     $table->string('payable_type');
        //     $table->unsignedBigInteger('receiver_id')->nullable();
        //     $table->string('receiver_type')->nullable();
        //     $table->unsignedBigInteger('transaction_id')->unique();
        //     $table->string('reference')->unique();
        //     $table->decimal('amount', 14, 4);
        //     $table->string('currency')->default('NGN');
        //     $table->enum('status', ['PENDING', 'SUCCESS', 'FAILED'])->default('pending');
        //     $table->softDeletes();

        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
