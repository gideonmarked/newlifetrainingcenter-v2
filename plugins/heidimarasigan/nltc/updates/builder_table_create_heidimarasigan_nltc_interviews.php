<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHeidimarasiganNltcInterviews extends Migration
{
    public function up()
    {
        Schema::create('heidimarasigan_nltc_interviews', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->date('interview_date')->nullable();
            $table->time('interview_time')->nullable();
            $table->text('notes')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('heidimarasigan_nltc_interviews');
    }
}
