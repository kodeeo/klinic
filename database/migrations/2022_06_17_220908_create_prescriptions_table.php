<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id', 15);
            $table->foreignId('doctor_id')->constrained('doctors')->cascadeOnDelete();
            $table->string('weight', 50);
            $table->string('blood_pressure', 50);
            $table->string('reference', 50);
            $table->text('complain');
            $table->string('insurance', 50);
            $table->double('fees', 50);
            $table->text('patient_note');
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
        Schema::dropIfExists('prescriptions');
    }
};
