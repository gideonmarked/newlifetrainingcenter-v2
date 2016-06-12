<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcApplications13 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->string('christian_church', 255)->default(null)->change();
            $table->string('interview_time')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->string('christian_church', 255)->default(null)->change();
            $table->time('interview_time')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
