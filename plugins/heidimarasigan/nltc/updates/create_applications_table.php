<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('heidimarasigan_nltc_applications', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('school_year',255);
            $table->string('application_type',255);
            $table->string('level',255);
            $table->string('first_name',255);
            $table->string('middle_name',255);
            $table->string('last_name',255);
            $table->string('nickname',255);
            $table->string('address',255);
            $table->string('city',255);
            $table->string('state',255);
            $table->string('country',255);
            $table->string('zip',255);
            $table->string('citizenship',255);
            $table->string('phone',255);
            $table->string('mobile',255);
            $table->string('email',255);
            $table->string('website',255);
            $table->string('facebook',255);
            $table->integer('age');
            $table->string('date_of_birth',100);
            $table->string('place_of_birth',100);
            $table->string('gender',100);
            $table->string('civil_status',255);
            $table->string('occupational_field',255);
            $table->string('role',255);
            $table->string('travelling',255);
            $table->string('travelling_frequency',255);
            $table->string('spouse_name',255);
            $table->string('spouse_occupation',255);
            $table->string('in_agreement',255);
            $table->text('children');
            $table->text('in_agreement_why');
            $table->text('references');
            $table->string('emergency_name',255);
            $table->string('emergency_relation',255);
            $table->string('emergency_address',255);
            $table->string('emergency_telno',100);
            $table->string('emergency_mobile',100);
            $table->string('education_primary',255);
            $table->string('education_primary_year',255);
            $table->string('education_secondary',255);
            $table->string('education_secondary_year',255);
            $table->string('education_tertiary',255);
            $table->string('education_tertiary_year',255);
            $table->string('course',255);
            $table->string('other_course',255);
            $table->string('christian_when_saved',255);
            $table->string('christian_baptized',255);
            $table->date('christian_baptized_date');
            $table->string('christian_baptized_place',255);
            $table->string('christian_church',255);
            $table->string('christian_church_name',255);
            $table->string('christian_nonnewlife',255);
            $table->string('christian_position',255);
            $table->text('christian_whyattend');
            $table->string('christian_years_of_stay',255);
            $table->string('christian_senior_pastor',255);
            $table->string('christian_length_attend',255);
            $table->string('christian_ministry_name',255);
            $table->string('christian_ministry_head',255);
            $table->string('christian_ministry_responsibilities',255);
            $table->string('christian_lifegroup_lead',255);
            $table->string('christian_lifegroup_member',255);
            $table->string('christian_lifegroup_lead_started',255);
            $table->string('christian_lifegroup_member_started',255);
            $table->string('christian_fulltime',255);
            $table->string('christian_tither',255);
            $table->text('christian_trainings');
            $table->text('training_fee');
            $table->string('christian_ntc_volunteer',255);
            $table->string('christian_ntc_volunteer_area',255);
            $table->string('christian_currently_serving',255);
            $table->string('physical_handicap',255);
            $table->string('physical_criminal',255);
            $table->string('physical_abuse',255);
            $table->string('physical_phsychological',255);
            $table->date('interview_date');
            $table->time('interview_time');
            $table->text('interview_notes');
            $table->integer('acknowledgement');
            $table->text('status');
            $table->string('registration_code',20);
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('heidimarasigan_nltc_applications');
    }
}
