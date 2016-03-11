<?php namespace Grinkomeda\Enrollment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSpousesTable extends Migration
{

    public function up()
    {
        Schema::create('grinkomeda_enrollment_spouses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('student_profile_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('occupation');
            $table->string('allowed');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grinkomeda_enrollment_spouses');
    }

}
