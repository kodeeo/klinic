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
            $table->foreignId('patient_id')->constrained('patients')->restictionOnDelete();
            $table->foreignId('bed_id')->constrained()->restictionOnDelete();
            $table->foreignId('doctor_id')->constrained()->restictionOnDelete();
            $table->string('name',50);
            $table->string('father_name',50);
            $table->string('mother_name',50);
            $table->string('relation',30);
            $table->text('address');
            $table->string('mobile');
            $table->string('nid',20)->nullable();
            $table->string('occupation');
            $table->double('payment',50);
            //medical information
            $table->string('allergies',5);
            $table->string('tendancy',5);
            $table->string('heart_diseases',5);
            $table->string('high_BP',5);
            $table->string('accident',5);
            $table->string('diabetic',5);
            $table->text('others');
            $table->string('infection',5);
            $table->text('details');
            $table->text('condition');
            $table->string('insurance',5);
            $table->string('worksafe',5);
            $table->string('tac',5);
            $table->string('quota',20);
            $table->string('referred_by',20);
            $table->string('visit',20);
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
