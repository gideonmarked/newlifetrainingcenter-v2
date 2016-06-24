<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHeidimarasiganNltc extends Migration
{
    public function up()
    {
        Schema::create('heidimarasigan_nltc_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('interview_date')->nullable();
            $table->string('interview_time')->nullable();
            $table->string('interviewer_name')->nullable();
            $table->text('interview_notes')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('heidimarasigan_nltc_');
    }
}
