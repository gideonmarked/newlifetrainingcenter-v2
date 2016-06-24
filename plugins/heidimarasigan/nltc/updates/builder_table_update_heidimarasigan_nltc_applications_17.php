<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcApplications17 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->string('physical_handicap', 255)->nullable();
            $table->string('physical_criminal', 255)->nullable();
            $table->string('physical_abuse', 255)->nullable();
            $table->string('physical_phsychological', 255)->nullable();
            $table->text('references')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->dropColumn('physical_handicap');
            $table->dropColumn('physical_criminal');
            $table->dropColumn('physical_abuse');
            $table->dropColumn('physical_phsychological');
            $table->dropColumn('references');
        });
    }
}
