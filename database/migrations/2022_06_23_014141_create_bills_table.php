<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pastient_id');
            $table->foreignId('admission_id')->nullable();
            $table->string('bill_id')->unique();
            $table->double('pay_advance')->nullable();
            $table->date('bill_date');
            $table->double('amount');
            $table->string('payment_method');
            $table->string('card_cheque_number')->nullable();
            $table->string('receipt_number')->nullable();
            $table->integer('discount')->nullable();
            $table->double('total_payable');
            $table->foreignId('service_id');
            $table->foreignId('package_id')->nullable();
            $table->text('remarks');
            $table->string('note')->nullable();
            $table->string('status')->default('0');
            $table->timestamps();


            //$table->apporintment_id

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
};
