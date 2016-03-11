<?php namespace Grinkomeda\Enrollment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateAsimNationsTable extends Migration
{

    public function up()
    {
        Schema::create('grinkomeda_enrollment_asim_nations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grinkomeda_enrollment_asim_nations');
    }

}
