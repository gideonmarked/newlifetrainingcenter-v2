<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcStudents3 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_students', function($table)
        {
            $table->increments('id')->nullable(false)->unsigned()->default(null)->change();
            $table->integer('application_no')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_students', function($table)
        {
            $table->bigIncrements('id')->nullable(false)->unsigned()->default(null)->change();
            $table->bigInteger('application_no')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}