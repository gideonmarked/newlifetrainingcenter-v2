<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcStudents5 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_students', function($table)
        {
            $table->renameColumn('application_no', 'applicant');
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_students', function($table)
        {
            $table->renameColumn('applicant', 'application_no');
        });
    }
}
