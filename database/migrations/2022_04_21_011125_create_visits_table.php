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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admission_id')->constrained('admissions')->restictionOnDelete();
            $table->string('weight',20);
            $table->string('allergies',5);
            $table->string('tendancy',5);
            $table->string('heart_diseases');
            $table->string('high_BP');
            $table->string('accident');
            $table->string('diabetic');
            $table->string('others');
            $table->string('infection');
            $table->string('details',150);
            $table->string('condition',150);
            $table->string('insurance');
            $table->string('worksafe');
            $table->string('tac');
            $table->string('quota');
            $table->string('referred_by');
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
        Schema::dropIfExists('visits');
    }
};
