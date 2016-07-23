<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('heidimarasigan_nltc_students', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('student_code',20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('heidimarasigan_nltc_students');
    }
}
