<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('StudentId')->nullable();
            $table->string('Fname')->nullable();
            $table->string('Mname')->nullable();
            $table->string('Lname')->nullable();
            $table->string('Address')->nullable();
            $table->string('Mobile')->nullable();
            $table->string('Gender')->nullable();
            $table->string('DOB')->nullable();
            $table->string('Religion')->nullable();
            $table->integer('Year')->nullable();
            $table->string('Class')->nullable();
            $table->string('Img')->nullable();
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
        Schema::dropIfExists('registrations');
    }
}
