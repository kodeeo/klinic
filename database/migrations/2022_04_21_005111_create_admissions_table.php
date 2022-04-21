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
            $table->foreignId('patient_id')->constrained('Patients')->restictionOnDelete();
            $table->string('name',30);
            $table->string('father',30);
            $table->string('mother',30);
            $table->string('room')->nullable();
            $table->string('doctor')->nullable();
            $table->string('relation',30);
            $table->string('address',50);
            $table->string('mobile',15);
            $table->string('nid',20)->nullable();
            $table->string('occupation',10);
            $table->double('payment',10);
            //medical information
            $table->string('allergies',10);
            $table->string('tendancy',10);
            $table->string('heart');
            $table->string('pressure');
            $table->string('accident');
            $table->string('diabetic');
            $table->string('others');
            $table->string('infection');
            $table->string('details',150);
            $table->string('condition',150);
            $table->string('insurance');
            $table->string('worksafe');
            $table->string('tac');
            $table->string('pension');
            $table->string('know');
            $table->string('visit');
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
