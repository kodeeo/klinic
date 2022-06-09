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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',50)->nullable();
            $table->string('last_name',50)->nullable();
            $table->string('username',50)->nullable();
            $table->string('gender',20)->nullable();
            $table->string('mobile')->nullable();
            $table->string('status',10)->default('active');
            $table->foreignId('role_id')->constrained('roles')->restrictOnDelete();
            $table->string('email',64)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('image')->nullable();
            $table->date('join_date')->nullable();
            $table->string('reset_token')->nullable();
            $table->dateTime('reset_token_expire_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
