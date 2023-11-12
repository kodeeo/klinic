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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id')->unique();
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('email',100)->unique();
            $table->string('password');
            $table->string('mobile')->unique();
            $table->date('date_of_birth')->nullable();
            $table->string('gender',20);
            $table->string('blood_group')->nullable();
<<<<<<< HEAD
            $table->string('patient_image',50);
            $table->text('address')->nullable();
            $table->string('status',15)->default('registered');
=======
            $table->string('patient_image')->nullable();
            $table->text('address')->nullable();
            $table->string('status',15)->default('active');
            $table->string('ref_by')->nullable()->comment('refered doctor name with speciality');
>>>>>>> origin
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
