<?php namespace Grinkomeda\Enrollment\Components;

use Cms\Classes\ComponentBase;
use Grinkomeda\Enrollment\Models\Education;
use Session;

class EducationForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Education Form',
            'description' => 'Educational background for enrollment form'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSaveEducation()
    {
        $id = Session::get('application_id');

        $school = new Education;
        $school->student_profile_id = $id;
        $school->name = post('schoolname1');
        $school->year = post('schoolyear1');
        $school->save();

        $school = new Education;
        $school->student_profile_id = $id;
        $school->name = post('schoolname2');
        $school->year = post('schoolyear2');
        $school->save();

        $school = new Education;
        $school->student_profile_id = $id;
        $school->name = post('schoolname3');
        $school->year = post('schoolyear3');
        $school->course = post('course');
        $school->save();

        $school = new Education;
        $school->student_profile_id = $id;
        $school->name = post('schoolname4');
        $school->year = post('schoolyear4');
        $school->save();
    }

}