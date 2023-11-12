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
        Schema::create('bill_details', function (Blueprint $table) {
            $table->id();

            $table->foreignId('bill_id')->constrained('bills');
            $table->foreignId('service_id')->constrained('services');

            $table->integer('quantity');
            $table->double('unit_amount')->default(0.0);
            $table->double('subtotal_amount')->default(0.0);

            $table->string('discount')->nullable()->comment('5% or 100 tk');
            $table->double('discount_amount')->default(0.0)->comment('actual amount');

            $table->double('payable_subtotal_amount')->default(0.0);
            
            $table->dateTime('delivery_date_time')->nullable();
           
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
        Schema::dropIfExists('bill_details');
    }
};
