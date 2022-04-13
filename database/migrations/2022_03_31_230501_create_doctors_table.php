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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email')->unique();
            $table->string('phone',20);
            $table->string('address',50);
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('department_id');
            $table->string('degree');
            $table->string('designation');
            $table->string('details',100);
            $table->string('image')->nullable();
            $table->string('password',8);
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
        Schema::dropIfExists('doctors');
    }
};
