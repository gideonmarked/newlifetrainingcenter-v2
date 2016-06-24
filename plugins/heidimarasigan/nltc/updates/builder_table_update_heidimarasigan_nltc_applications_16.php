<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcApplications16 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->string('interview_date')->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('interview_time', 255)->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->date('interview_date')->nullable()->unsigned(false)->default(null)->change();
            $table->string('interview_time', 255)->nullable()->change();
        });
    }
}
