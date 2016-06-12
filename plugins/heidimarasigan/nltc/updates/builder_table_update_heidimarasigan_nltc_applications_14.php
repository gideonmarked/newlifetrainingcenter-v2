<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcApplications14 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->text('children')->nullable()->change();
            $table->dateTime('last_updated')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->text('children')->nullable(false)->change();
            $table->dateTime('last_updated')->nullable(false)->change();
        });
    }
}
