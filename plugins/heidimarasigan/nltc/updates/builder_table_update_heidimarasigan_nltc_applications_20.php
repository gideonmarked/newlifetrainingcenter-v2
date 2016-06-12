<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcApplications20 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->text('references')->nullable();
            $table->string('interview_date', 255)->nullable()->change();
            $table->string('interview_time', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->dropColumn('references');
            $table->string('interview_date', 255)->nullable(false)->change();
            $table->string('interview_time', 255)->nullable(false)->change();
        });
    }
}
