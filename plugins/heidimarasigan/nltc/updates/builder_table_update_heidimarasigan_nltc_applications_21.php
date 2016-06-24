<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcApplications21 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->string('christian_training', 255)->nullable();
            $table->string('christian_training_venue', 255)->nullable();
            $table->string('christian_training_date', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->dropColumn('christian_training');
            $table->dropColumn('christian_training_venue');
            $table->dropColumn('christian_training_date');
        });
    }
}
