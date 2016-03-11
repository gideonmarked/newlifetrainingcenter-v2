<?php namespace Grinkomeda\Enrollment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateChristianitiesTable extends Migration
{

    public function up()
    {
        Schema::create('grinkomeda_enrollment_christianities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('student_profile_id');
            $table->string('year_received');
            $table->string('place_received');
            $table->string('baptismal');
            $table->string('baptismal_date');
            $table->string('baptismal_place');
            $table->string('church_type');
            $table->string('church_name');
            $table->string('ministry_type');
            $table->string('ministry_title');
            $table->string('ministry_head');
            $table->string('ministry_fulltime');
            $table->string('ministry_training_type');
            $table->string('ministry_training_venue');
            $table->string('ministry_training_date');
            $table->string('lifegroup_member');
            $table->string('lifegroup_start_date');
            $table->string('lifegroup_leader');
            $table->string('lifegroup_own_start_date');
            $table->string('constant_tither');
            $table->string('reason');
            $table->string('pastor_first_name');
            $table->string('pastor_last_name');
            $table->string('church_years');
            $table->string('volunteer');
            $table->string('areas_of_serving');
            $table->string('areas_of_serving_duration');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grinkomeda_enrollment_christianities');
    }

}
