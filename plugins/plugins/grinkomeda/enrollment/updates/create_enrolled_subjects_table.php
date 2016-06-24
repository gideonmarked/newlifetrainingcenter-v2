<?php namespace Grinkomeda\Enrollment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEnrolledSubjectsTable extends Migration
{

    public function up()
    {
        Schema::create('grinkomeda_enrollment_enrolled_subjects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('subject_id');
            $table->string('school_year');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grinkomeda_enrollment_enrolled_subjects');
    }

}
