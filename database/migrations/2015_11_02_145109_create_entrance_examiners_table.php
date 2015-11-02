<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntranceExaminersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examiners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id')->indexed();
            $table->integer('status');
            $table->string('fname')->indexed();
            $table->string('mname')->indexed();
            $table->string('lname')->indexed();
            $table->string('gender');
            $table->string('p_address');
            $table->string('contact');
            $table->string('dob');
            $table->string('mother_name');
            $table->string('mother_occ')->nullable();
            $table->string('mother_num');
            $table->string('mother_work_add')->nullable();
            $table->string('father_name');
            $table->string('father_occ')->nullable();
            $table->string('father_num');
            $table->string('father_work_add')->nullable();
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
        Schema::drop('examiners');
    }
}
