<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHeidimarasiganNltcFaculty extends Migration
{
    public function up()
    {
        Schema::create('heidimarasigan_nltc_faculty', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('first_name', 255)->nullable();
            $table->string('middle_name', 255)->nullable();
            $table->string('email', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('heidimarasigan_nltc_faculty');
    }
}
