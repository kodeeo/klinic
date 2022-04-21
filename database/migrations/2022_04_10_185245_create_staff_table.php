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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId('designation_id')->constrained('designations')->restrictOnDelete();
            $table->string('name',50);
            $table->string('email')->nullable();
            $table->string('phone',20);
            $table->string('address',50);
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('degree',100);
            $table->text('details',100);
            $table->string('image')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('staff');
    }
};
