<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateLevelsTable extends Migration
{
    public function up()
    {
        Schema::create('heidimarasigan_nltc_levels', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title',20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('heidimarasigan_nltc_levels');
    }
}
