<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateClassRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('heidimarasigan_nltc_class_records', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('subject_id');
            $table->timestamps();
        });

        Schema::create('heidimarasigan_nltc_class_records_faculties', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('class_record_id');
            $table->integer('faculty_id');
            // $table->primary(['class_record_id','faculty_id'],'class_record_faculty');
        });

        Schema::create('heidimarasigan_nltc_class_records_students', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('class_record_id');
            $table->integer('student_id');
            $table->string('grade');
            $table->string('evaluation');
            // $table->primary(['class_record_id','student_id'],'class_record_student');
        });
    }

    public function down()
    {
        Schema::dropIfExists('heidimarasigan_nltc_class_records');
        Schema::dropIfExists('heidimarasigan_nltc_class_records_faculties');
        Schema::dropIfExists('heidimarasigan_nltc_class_records_students');
    }
}
