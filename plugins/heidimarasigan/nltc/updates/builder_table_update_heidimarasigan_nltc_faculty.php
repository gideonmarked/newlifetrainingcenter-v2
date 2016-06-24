<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcFaculty extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_faculty', function($table)
        {
            $table->string('last_name', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_faculty', function($table)
        {
            $table->dropColumn('last_name');
        });
    }
}
