<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_regs', function (Blueprint $table) {
            $table->id();
            $table->string('Fname')->nullable();
            $table->string('Lname')->nullable();
            $table->string('DOB')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Email')->nullable();
            $table->string('Password')->nullable();
            $table->string('Stream')->nullable();
            $table->string('Phone')->nullable();
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
        Schema::dropIfExists('user_regs');
    }
}
