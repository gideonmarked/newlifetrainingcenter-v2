<?php namespace Grinkomeda\Enrollment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEducationTable extends Migration
{

    public function up()
    {
        Schema::create('grinkomeda_enrollment_education', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('student_profile_id');
            $table->string('name');
            $table->string('year');
            $table->string('course');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grinkomeda_enrollment_education');
    }

}
