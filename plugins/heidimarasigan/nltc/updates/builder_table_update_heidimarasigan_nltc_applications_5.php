<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcApplications5 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->text('status')->nullable();
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->dropColumn('status');
            $table->dropColumn('updated_at');
            $table->dropColumn('created_at');
        });
    }
}
