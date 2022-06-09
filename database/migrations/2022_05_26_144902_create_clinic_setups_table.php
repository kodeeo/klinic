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
            $table->string('name',50);
            $table->string('slogan',50)->nullable();
            $table->text('address');
            $table->string('phone',20);
            $table->string('email',64)->unique();
            $table->string('web',50);
            $table->string('image',50)->nullable();
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
