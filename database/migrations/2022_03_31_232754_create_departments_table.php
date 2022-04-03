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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('physician');
            $table->string('pediatricians');
            $table->string('geriatricians');
            $table->string('allergists');
            $table->string('dermatologists');
            $table->string('ophthalmologists');
            $table->string('gynecologists');
            $table->string('cardiologists');
            $table->string('endocrinologists');
            $table->string('gastroenterologists');
            $table->string('nephrologists');
            $table->string('neurologists');
            $table->string('otolaryngologists');
            $table->string('pulmonologists');
            $table->string('urologists');
            $table->string('psychiatrists');
            $table->string('oncologists');
            $table->string('surgeons');
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
        Schema::dropIfExists('departments');
    }
};
