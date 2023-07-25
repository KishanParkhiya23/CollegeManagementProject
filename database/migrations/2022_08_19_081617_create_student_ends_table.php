<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentEndsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_ends', function (Blueprint $table) {
            $table->id();
            $table->string('StudentId')->nullable();
            $table->string('StudentName')->nullable();
            $table->string('StudentEmail')->nullable();
            $table->string('StudentPswd')->nullable();
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
        Schema::dropIfExists('student_ends');
    }
}
