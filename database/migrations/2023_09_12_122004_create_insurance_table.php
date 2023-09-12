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
        Schema::create('insurance', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('service_tax');
            $table->integer('discount');
            $table->string('remark');
            $table->integer('insurance_no');
            $table->integer('insurance_code');
            $table->string('disease_name');
            $table->integer('disease_charge');
            $table->integer('hospital_rate');
            $table->integer('insurance_rate');
            $table->string('total');
            $table->string('status');

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
        Schema::dropIfExists('insurance');
    }
};
