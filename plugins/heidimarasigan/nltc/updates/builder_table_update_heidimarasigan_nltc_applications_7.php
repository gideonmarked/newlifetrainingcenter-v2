<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcApplications7 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->string('zip')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->dropColumn('zip');
        });
    }
}
