<?php namespace Grinkomeda\Enrollment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateStudentProfilesTable extends Migration
{

    public function up()
    {
        Schema::create('grinkomeda_enrollment_student_profiles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');
            $table->string('school_year')->default('SY2015-2016');
            $table->string('study_program')->default('Day School');
            $table->string('level')->default('First Year');
            $table->string('level_program')->default('Two-Year Program');
            $table->string('category')->default('First Time Student');
            $table->string('current_status')->default('Full-Time');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('nickname');
            $table->string('street');
            $table->string('city');
            $table->string('region');
            $table->string('postal_code');
            $table->string('country');
            $table->string('citizenship');
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');
            $table->string('website');
            $table->string('facebook');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('age');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('occupation');
            $table->string('specific_function');
            $table->string('with_travel');
            $table->string('travel_frequency');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grinkomeda_enrollment_student_profiles');
    }

}
