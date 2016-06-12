<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcSubjects2 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_subjects', function($table)
        {
            $table->renameColumn('faculty_id', 'faculty_name');
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_subjects', function($table)
        {
            $table->renameColumn('faculty_name', 'faculty_id');
        });
    }
}
