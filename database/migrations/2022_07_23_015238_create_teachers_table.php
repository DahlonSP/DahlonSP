<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->char('teacher_id');
            $table->text('fullname');
            $table->char('place_birth',100);
            $table->date('birth_date');
            $table->text('full_address');
            $table->char('pra_bachelor',100 );
            $table->char('bachelor',100);
            $table->char('masters',100);
            $table->char('doctoral',100);
            $table->text('job_desk');
            $table->char('position',100);
            $table->date('date_joint');
            $table->text('assignment');
            $table->text('word');
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
        Schema::dropIfExists('teachers');
    }
}
