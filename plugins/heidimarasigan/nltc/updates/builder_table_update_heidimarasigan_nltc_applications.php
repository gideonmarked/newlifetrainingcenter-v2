<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcApplications extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->increments('application_no')->nullable(false)->unsigned()->default(null)->change();
            $table->string('application_type', 255)->default(null)->change();
            $table->string('country', 255)->default(null)->change();
            $table->string('mobile', 255)->nullable(false)->default(null)->change();
            $table->string('email', 255)->nullable(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->bigIncrements('application_no')->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('application_type', 255)->default('Regular')->change();
            $table->string('country', 255)->default('Philippines')->change();
            $table->string('mobile', 255)->nullable()->default(null)->change();
            $table->string('email', 255)->nullable()->default(null)->change();
        });
    }
}
