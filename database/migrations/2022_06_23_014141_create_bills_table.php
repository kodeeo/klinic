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

            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('admission_id')->nullable()->constrained('admissions');

            $table->date('bill_date')->default(now());

            $table->double('total_amount')->default(0.0);
            $table->double('payable_amount')->default(0.0);
            $table->double('received_amount')->default(0.0);
            $table->double('due_amount')->default(0.0);
            $table->string('discount')->nullable()->comment('5% or 100 tk');
            $table->string('discount_type',30)->default('amount')->comment('percentage or amount');
            $table->double('discount_amount')->default(0.0)->comment('actual amount');
            $table->double('extra_discount')->default(0.0)->comment('amount only');

            $table->string('payment_method')->default('cash');
            $table->string('sender_id')->nullable()->comment('card number, MB number, cheque');
            $table->string('transaction_id')->nullable();
            
            $table->text('remarks')->nullable();
            $table->string('status',20)->default('paid');

            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            
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
