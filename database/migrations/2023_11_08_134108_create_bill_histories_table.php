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
        Schema::create('bill_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bill_id')->constrained('bills');
            
            $table->double('received_amount')->default(0.0);
        
            $table->string('payment_method')->default('cash');
            $table->string('sender_id')->nullable()->comment('card number, MB number, cheque');
            $table->string('transaction_id')->nullable();
            
            $table->text('remarks')->nullable();
            $table->foreignId('created_by')->constrained('users');
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
        Schema::dropIfExists('bill_histories');
    }
};
