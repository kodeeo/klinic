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
        Schema::create('assign_beds', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id',15);
            $table->foreignId('bed_type_id');
            $table->string('assign_date',20);
            $table->string('discharge_date',20);
            $table->string('days',5);
            $table->text('description');
            $table->string('assigned_by',10);
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
        Schema::dropIfExists('assign_beds');
    }
};
