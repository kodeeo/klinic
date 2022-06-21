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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('admission_id',20)->unique();
            $table->string('patient_id');
            $table->foreignId('doctor_id')->constrained('doctors')->cascadeOnDelete();
            $table->string('admission_date',15);
            $table->string('discharge_date',15)->nullable();
            $table->string('package',50)->nullable();
            $table->string('insurance',50)->nullable();

            //medical information
            $table->string('height',10);
            $table->string('weight',10);
            $table->string('allergies',10);
            $table->string('tendancy',10);
            $table->string('heart_diseases',10);
            $table->string('high_BP',10);
            $table->string('accident',10);
            $table->string('diabetic',10);
            $table->string('infection',10);
            $table->string('quota',50);
            $table->text('others')->nullable();

            //guardian info
            $table->string('guardian_name',50);
            $table->string('guardian_relation',20);
            $table->string('guardian_contact',20);
            $table->text('guardian_address');
            $table->string('status',20)->default('Admitted');

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
        Schema::dropIfExists('admissions');
    }
};
