<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcApplications3 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->string('student_id', 100)->nullable();
            $table->string('mobile', 255)->nullable()->change();
            $table->string('email', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->dropColumn('student_id');
            $table->string('mobile', 255)->nullable(false)->change();
            $table->string('email', 255)->nullable(false)->change();
        });
    }
}
