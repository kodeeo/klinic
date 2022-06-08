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
            $table->string('address',100);
            $table->date('date_of_birth');
            $table->string('gender',20);
            $table->string('department_id',50);
            $table->string('degree',255);
            $table->string('designation',255);
            $table->string('details',255);
            $table->string('image')->nullable();
            $table->string('password',100);
            $table->string('status')->default('available');
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
