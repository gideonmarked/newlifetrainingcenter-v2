<?php namespace HeidiMarasigan\Nltc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHeidimarasiganNltcStudents extends Migration
{
    public function up()
    {
        Schema::table('heidimarasigan_nltc_students', function($table)
        {
            $table->text('subjects')->nullable();
            $table->integer('application_no')->nullable()->change();
            $table->dropColumn('first_name');
        });
    }
    
    public function down()
    {
        Schema::table('heidimarasigan_nltc_students', function($table)
        {
            $table->dropColumn('subjects');
            $table->integer('application_no')->nullable(false)->change();
            $table->string('first_name', 255)->nullable();
        });
    }
}
