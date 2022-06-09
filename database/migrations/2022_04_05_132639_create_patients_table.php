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
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('username',50);
            $table->string('email',64)->unique();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('mobile');
            $table->text('address')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender',20);
            $table->string('blood_group')->nullable();
            $table->string('patient_image',50)->nullable();
            $table->string('status',15)->default('admitted');
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
