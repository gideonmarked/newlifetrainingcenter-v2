<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHeidimarasiganNltcLevels extends Migration
{
    public function up()
    {
        Schema::create('heidimarasigan_nltc_levels', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('levels', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('heidimarasigan_nltc_levels');
    }
}
