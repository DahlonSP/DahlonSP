<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->char('student_id');
            $table->text('fullname');
            $table->char('gender',100);
            $table->date('birth_date');
            $table->text('full_address');
            $table->char('program',100);
            $table->char('major',100);
            $table->date('date_start');
            $table->date('date_graduate');
            $table->char('nationality',100);
            $table->char('gpa',20);
            $table->integer('semester');
            $table->text('picture');
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
        Schema::dropIfExists('students');
    }
}
