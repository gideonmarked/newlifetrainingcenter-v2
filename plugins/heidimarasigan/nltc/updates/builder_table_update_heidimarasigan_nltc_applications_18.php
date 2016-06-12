<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcApplications18 extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->string('reference_name', 255)->nullable();
            $table->string('reference_address', 255)->nullable();
            $table->string('reference_relationship', 255)->nullable();
            $table->string('reference_contactno', 255)->nullable();
            $table->dropColumn('references');
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_applications', function($table)
        {
            $table->dropColumn('reference_name');
            $table->dropColumn('reference_address');
            $table->dropColumn('reference_relationship');
            $table->dropColumn('reference_contactno');
            $table->text('references')->nullable();
        });
    }
}
