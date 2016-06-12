<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcLevels extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_levels', function($table)
        {
            $table->string('subject_name', 255);
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_levels', function($table)
        {
            $table->dropColumn('subject_name');
        });
    }
}
