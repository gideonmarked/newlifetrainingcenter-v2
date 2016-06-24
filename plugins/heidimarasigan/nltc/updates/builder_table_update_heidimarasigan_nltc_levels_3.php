<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcLevels3 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_levels', function($table)
        {
            $table->text('subject_name')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_levels', function($table)
        {
            $table->string('subject_name', 255)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
