<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateFacultiesTable extends Migration
{
    public function up()
    {
        Schema::create('heidimarasigan_nltc_faculties', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('faculty_code',12);
            $table->string('title',255);
            $table->string('first_name',255);
            $table->string('middle_name',255);
            $table->string('last_name',255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('heidimarasigan_nltc_faculties');
    }
}
