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
            $table->foreignId('patient_id');
            $table->foreignId('admission_id');
            $table->int('amount');
            $table->int('discount');
            $table->int('total_payable');
            $table->foreignId('package_id');
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
