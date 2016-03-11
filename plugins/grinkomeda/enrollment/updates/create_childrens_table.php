<?php namespace Grinkomeda\Enrollment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateChildrensTable extends Migration
{

    public function up()
    {
        Schema::create('grinkomeda_enrollment_childrens', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('student_profile_id');
            $table->string('name');
            $table->integer('age');
            $table->string('gender');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grinkomeda_enrollment_childrens');
    }

}
