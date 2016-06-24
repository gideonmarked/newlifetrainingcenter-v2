<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcApplications9 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->string('christian_position')->nullable()->change();
            $table->text('christian_whyattend')->nullable()->change();
            $table->string('christian_senior_pastor')->nullable()->change();
            $table->string('christian_length_attend')->nullable()->change();
            $table->string('christian_ministry_name')->nullable()->change();
            $table->string('christian_ministry_head')->nullable()->change();
            $table->string('christian_lifegroup')->nullable()->change();
            $table->string('christian_fulltime')->nullable()->change();
            $table->string('christian_tither')->nullable()->change();
            $table->text('christian_trainings')->nullable()->change();
            $table->string('christian_ntc_volunteer')->nullable()->change();
            $table->string('christian_ntc_volunteer_area')->nullable()->change();
            $table->string('christian_currently_serving')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->string('christian_position', 255)->nullable(false)->change();
            $table->text('christian_whyattend')->nullable(false)->change();
            $table->string('christian_senior_pastor', 255)->nullable(false)->change();
            $table->string('christian_length_attend', 255)->nullable(false)->change();
            $table->string('christian_ministry_name', 255)->nullable(false)->change();
            $table->string('christian_ministry_head', 255)->nullable(false)->change();
            $table->string('christian_lifegroup', 255)->nullable(false)->change();
            $table->string('christian_fulltime', 255)->nullable(false)->change();
            $table->string('christian_tither', 255)->nullable(false)->change();
            $table->text('christian_trainings')->nullable(false)->change();
            $table->string('christian_ntc_volunteer', 255)->nullable(false)->change();
            $table->string('christian_ntc_volunteer_area', 255)->nullable(false)->change();
            $table->string('christian_currently_serving', 255)->nullable(false)->change();
        });
    }
}
