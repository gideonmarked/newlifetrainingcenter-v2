<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcInterview extends Migration
{
    public function up()
    {
        Schema::rename('heidimarasigan_nltc_', 'heidimarasigan_nltc_interview');
        Schema::table('heidimarasigan_nltc_interview', function($table)
        {
        });
    }
    
    public function down()
    {
        Schema::rename('heidimarasigan_nltc_interview', 'heidimarasigan_nltc_');
        Schema::table('heidimarasigan_nltc_', function($table)
        {
        });
    }
}
