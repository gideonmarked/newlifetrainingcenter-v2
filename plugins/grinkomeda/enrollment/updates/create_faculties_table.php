<?php namespace Grinkomeda\Enrollment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateFacultiesTable extends Migration
{

    public function up()
    {
        Schema::create('grinkomeda_enrollment_faculties', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('prefix');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('login');
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grinkomeda_enrollment_faculties');
    }

}
