<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHeidimarasiganNltcSubjects extends Migration
{
    public function up()
    {
        Schema::create('heidimarasigan_nltc_subjects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id')->unsigned();
            $table->string('subject_name', 255)->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('heidimarasigan_nltc_subjects');
    }
}
