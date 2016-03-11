<?php namespace Grinkomeda\Enrollment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTrainingCalendarsTable extends Migration
{

    public function up()
    {
        Schema::create('grinkomeda_enrollment_training_calendars', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('grinkomeda_enrollment_training_calendars_subjects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('training_calendar_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->primary(['curriculum_id', 'subject_id'], 'training_calendar_subject');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grinkomeda_enrollment_training_calendars');
    }

}
