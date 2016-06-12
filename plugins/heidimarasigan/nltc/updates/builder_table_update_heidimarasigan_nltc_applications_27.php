<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcApplications27 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->date('christian_lifegroup_lead_started')->nullable();
            $table->date('christian_lifegroup_member_started')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->dropColumn('christian_lifegroup_lead_started');
            $table->dropColumn('christian_lifegroup_member_started');
        });
    }
}
