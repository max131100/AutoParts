<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_make_id');
            $table->foreign('car_make_id', 'car_car_make_fk')->on('car_makes')->references('id');
            $table->unsignedBigInteger('car_model_id');
            $table->foreign('car_model_id', 'car_car_model_fk')->on('car_models')->references('id');
            $table->integer('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
