<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcInterviews2 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_interviews', function($table)
        {
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_interviews', function($table)
        {
            $table->dropColumn('updated_at');
            $table->dropColumn('created_at');
        });
    }
}
