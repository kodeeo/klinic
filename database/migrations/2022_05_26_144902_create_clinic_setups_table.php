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
        Schema::create('clinic_setups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slogan')->nullable();
            $table->string('address');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->string('web');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('clinic_setups');
    }
};
