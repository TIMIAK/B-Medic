<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            // Basic Info
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('fax')->nullable();
            $table->string('email');
            $table->string('website')->nullable();
            $table->string('socials')->nullable();

            // Clinic Overview

            $table->longText('about')->nullable();
            $table->longText('specifications')->nullable();
            $table->longText('services')->nullable();
            $table->longText('awards')->nullable();
            $table->string('gallery')->nullable();
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
        Schema::dropIfExists('clinics');
    }
}
