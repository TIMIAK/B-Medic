<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            // $table->id();
            $table->string('doctor_id');
            // $table->unsignedBigInteger('clinic');
            // $table->foreign('clinic')->references('id')->on('clinics');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name');
            $table->string('phone');
            $table->string('gender');
            $table->date('dob');
            $table->string('image')->nullable();
            $table->string('specialization')->nullable();
            $table->string('description')->nullable();
            $table->string('email')->unique();
            $table->string('password');

            // Doctors Overview

            $table->longText('bio')->nullable();
            $table->longText('specialities')->nullable();
            $table->longText('education')->nullable();
            $table->longText('offered_services')->nullable();
            $table->longText('awards')->nullable();

            // Doctors Experience

            $table->longText('experience')->nullable();
            $table->longText('key_skills')->nullable();

            // Doctors Location

            $table->string('location_name')->nullable();
            $table->string('address')->nullable();

            // Doctors Reviews

            $table->string('reviews')->nullable();
            $table->string('total_reviews')->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
