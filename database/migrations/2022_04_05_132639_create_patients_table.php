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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ptype');
            $table->string('email');
            $table->string('birthdate');
            $table->string('gender');
            $table->string('address');
            $table->string('phone');
            $table->string('occupation');
            $table->string('blood');
            $table->string('status');
            $table->string('religion');
            $table->string('height');
            $table->string('weight');
            $table->string('patient_image')->nullable;
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
        Schema::dropIfExists('patients');
    }
};
