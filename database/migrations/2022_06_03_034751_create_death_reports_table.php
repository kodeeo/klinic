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
        Schema::create('death_reports', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id', 10)->unique();
            $table->foreignId('doctor_id')->constrained('doctors')->cascadeOnDelete();
            $table->date('date', 20);
            $table->text('title');
            $table->text('cause_of_death', 100);
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
        Schema::dropIfExists('death_reports');
    }
};
