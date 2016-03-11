<?php namespace Grinkomeda\Enrollment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateInterviewsTable extends Migration
{

    public function up()
    {
        Schema::create('grinkomeda_enrollment_interviews', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('student_profile_id');
            $table->string('interview_date');
            $table->string('interview_time');
            $table->string('interview_name');
            $table->string('status')->default('pending');
            $table->string('notes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grinkomeda_enrollment_interviews');
    }

}
