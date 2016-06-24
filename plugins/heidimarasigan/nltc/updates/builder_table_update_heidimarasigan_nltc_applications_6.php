<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcApplications6 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->date('interview_date')->nullable();
            $table->time('interview_time')->nullable();
            $table->text('interview_notes')->nullable();
            $table->dropColumn('updated_at');
            $table->dropColumn('created_at');
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->dropColumn('interview_date');
            $table->dropColumn('interview_time');
            $table->dropColumn('interview_notes');
            $table->timestamp('updated_at')->default('0000-00-00 00:00:00');
            $table->timestamp('created_at')->default('0000-00-00 00:00:00');
        });
    }
}
