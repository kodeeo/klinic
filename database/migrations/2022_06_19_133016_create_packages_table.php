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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->integer('package_no');
            $table->string('name',50);
            $table->text('description')->nullable();
            $table->foreignId('service_id')->constrained('services')->cascadeOnDelete();
            $table->string('service_quantity',20);
            $table->string('service_rate',20);    
            $table->string('discount',20);    
            $table->string('status',20); 
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
        Schema::dropIfExists('packages');
    }
};
