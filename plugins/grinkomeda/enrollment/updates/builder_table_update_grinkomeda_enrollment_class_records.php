<?php namespace Grinkomeda\Enrollment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrinkomedaEnrollmentClassRecords extends Migration
{
    public function up()
    {
        Schema::rename('grinkomeda_enrollment_classes', 'grinkomeda_enrollment_class_records');
    }
    
    public function down()
    {
        Schema::rename('grinkomeda_enrollment_class_records', 'grinkomeda_enrollment_classes');
    }
}
