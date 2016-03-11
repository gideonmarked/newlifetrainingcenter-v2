<?php namespace Grinkomeda\Enrollment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrinkomedaEnrollmentStudentProfiles extends Migration
{
    public function up()
    {
        Schema::table('grinkomeda_enrollment_student_profiles', function($table)
        {
            $table->string('school_year', 255)->default('SY2016-2017')->change();
        });
    }
    
    public function down()
    {
        Schema::table('grinkomeda_enrollment_student_profiles', function($table)
        {
            $table->string('school_year', 255)->default('SY2015-2016')->change();
        });
    }
}
