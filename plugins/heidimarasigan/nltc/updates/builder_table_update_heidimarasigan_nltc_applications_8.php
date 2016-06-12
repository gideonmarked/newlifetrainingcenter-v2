<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcApplications8 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->string('christian_when_saved', 255)->nullable();
            $table->string('christian_baptized', 255)->nullable();
            $table->date('christian_baptized_date')->nullable();
            $table->string('christian_baptized_place', 255)->nullable();
            $table->string('christian_church_name', 255)->nullable();
            $table->string('christian_position');
            $table->text('christian_whyattend');
            $table->string('christian_senior_pastor');
            $table->string('christian_length_attend');
            $table->string('christian_ministry_name');
            $table->string('christian_ministry_head');
            $table->string('christian_lifegroup');
            $table->string('christian_fulltime');
            $table->string('christian_tither');
            $table->text('christian_trainings');
            $table->string('christian_ntc_volunteer');
            $table->string('christian_ntc_volunteer_area');
            $table->string('christian_currently_serving');
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->dropColumn('christian_when_saved');
            $table->dropColumn('christian_baptized');
            $table->dropColumn('christian_baptized_date');
            $table->dropColumn('christian_baptized_place');
            $table->dropColumn('christian_church_name');
            $table->dropColumn('christian_position');
            $table->dropColumn('christian_whyattend');
            $table->dropColumn('christian_senior_pastor');
            $table->dropColumn('christian_length_attend');
            $table->dropColumn('christian_ministry_name');
            $table->dropColumn('christian_ministry_head');
            $table->dropColumn('christian_lifegroup');
            $table->dropColumn('christian_fulltime');
            $table->dropColumn('christian_tither');
            $table->dropColumn('christian_trainings');
            $table->dropColumn('christian_ntc_volunteer');
            $table->dropColumn('christian_ntc_volunteer_area');
            $table->dropColumn('christian_currently_serving');
        });
    }
}
