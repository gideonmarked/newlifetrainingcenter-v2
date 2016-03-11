<?php namespace Grinkomeda\Enrollment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCharacterReferencesTable extends Migration
{

    public function up()
    {
        Schema::create('grinkomeda_enrollment_character_references', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('student_profile_id');
            $table->string('name');
            $table->string('address');
            $table->string('relationship');
            $table->string('contact_number');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grinkomeda_enrollment_character_references');
    }

}
