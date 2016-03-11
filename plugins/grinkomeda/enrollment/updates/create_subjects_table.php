<?php namespace Grinkomeda\Enrollment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSubjectsTable extends Migration
{

    public function up()
    {
        Schema::create('grinkomeda_enrollment_subjects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grinkomeda_enrollment_subjects');
        Schema::dropIfExists('grinkomeda_enrollment_subject_groups_subjects');
    }

}
