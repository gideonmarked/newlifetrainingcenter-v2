<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcSubjects extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_subjects', function($table)
        {
            $table->string('no_of_days', 255)->nullable();
            $table->string('dates', 255)->nullable();
            $table->string('faculty_id', 255)->nullable();
            $table->string('level', 255)->nullable();
            $table->string('school_year', 255)->nullable();
            $table->string('subject_name', 255)->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_subjects', function($table)
        {
            $table->dropColumn('no_of_days');
            $table->dropColumn('dates');
            $table->dropColumn('faculty_id');
            $table->dropColumn('level');
            $table->dropColumn('school_year');
            $table->string('subject_name', 255)->nullable()->change();
        });
    }
}
