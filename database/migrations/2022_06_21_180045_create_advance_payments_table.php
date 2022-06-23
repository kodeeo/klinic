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
        Schema::create('advance_payments', function (Blueprint $table) {
            $table->id();
            $table->string('admission_id',20);
            $table->string('reciept_no',20)->unique();
            $table->string('patient_id',20);
            $table->string('payment_method',20);
            $table->double('amount',8,2)->default(0.0);
            $table->string('card_or_cheque_no')->nullable();
            $table->string('bank_name',30)->nullable();
            $table->string('status',20)->default('Available');
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
        Schema::dropIfExists('advance_payments');
    }
};
