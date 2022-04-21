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
            $table->foreignId('admission_id')->constrained('Admissions')->restictionOnDelete();
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
        Schema::dropIfExists('visits');
    }
};
