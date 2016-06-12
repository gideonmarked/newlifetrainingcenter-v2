<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcApplications19 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->string('child_name', 255)->nullable();
            $table->string('child_age', 255)->nullable();
            $table->string('child_gender', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->dropColumn('child_name');
            $table->dropColumn('child_age');
            $table->dropColumn('child_gender');
        });
    }
}
