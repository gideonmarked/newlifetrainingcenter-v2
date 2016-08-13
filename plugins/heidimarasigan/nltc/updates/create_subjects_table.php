<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSubjectsTable extends Migration
{
    public function up()
    {
        Schema::create('heidimarasigan_nltc_subjects', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title',50);
            $table->string('description',100);
            $table->integer('level_id');
            $table->string('date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('heidimarasigan_nltc_subjects');
    }
}
