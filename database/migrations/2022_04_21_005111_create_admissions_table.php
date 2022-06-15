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
            $table->string('name',100);
            $table->string('father_name',100);
            $table->string('mother_name',100);
            $table->string('relation',100);
            $table->text('address',100);
            $table->string('mobile');
            $table->string('nid',20)->nullable();
            $table->string('occupation',50);
            $table->double('payment',50);
            //medical information
            $table->string('weight',20);
            $table->string('allergies',10);
            $table->string('tendancy',10);
            $table->string('heart_diseases',10);
            $table->string('high_BP',10);
            $table->string('accident',10);
            $table->string('diabetic',10);
            $table->text('others',50);
            $table->string('infection',10);
            $table->text('details',100);
            $table->text('condition',50);
            $table->string('insurance',50);
            $table->string('worksafe',10);
            $table->string('tac',10);
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
