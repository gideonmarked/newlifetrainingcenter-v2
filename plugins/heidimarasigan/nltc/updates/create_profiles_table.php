<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('heidimarasigan_nltc_profiles', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('user_id',20);
            $table->string('title',20);
            $table->string('firstname',100);
            $table->string('middlename',100);
            $table->string('lastname',100);
            $table->string('extension',20);
            $table->string('address',100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('heidimarasigan_nltc_profiles');
    }
}
