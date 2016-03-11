<?php namespace Grinkomeda\Enrollment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGrinkomedaEnrollmentClasses extends Migration
{
    public function up()
    {
        Schema::create('grinkomeda_enrollment_classes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('class_name');
            $table->integer('subject_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('grinkomeda_enrollment_classes');
    }
}
