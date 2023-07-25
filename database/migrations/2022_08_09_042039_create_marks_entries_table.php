<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks_entries', function (Blueprint $table) {
            $table->id();
            $table->string('StudentId')->nullable();
            $table->string('Class')->nullable();
            $table->integer('Year')->nullable();
            $table->string('Grade')->nullable();
            $table->string('Subject')->nullable();
            $table->integer('TotalMarks')->nullable();
            $table->integer('ObtainMarks')->nullable();
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
        Schema::dropIfExists('marks_entries');
    }
}
