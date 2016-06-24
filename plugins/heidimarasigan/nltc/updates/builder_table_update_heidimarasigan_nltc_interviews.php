<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcInterviews extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_interviews', function($table)
        {
            $table->integer('application_no')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_interviews', function($table)
        {
            $table->dropColumn('application_no');
        });
    }
}
