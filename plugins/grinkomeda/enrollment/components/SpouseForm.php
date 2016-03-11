<?php namespace Grinkomeda\Enrollment\Components;

use Cms\Classes\ComponentBase;
use Grinkomeda\Enrollment\Models\Spouse;
use Session;

class SpouseForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Spouse Form',
            'description' => 'Spouse info for enrollment form'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSaveSpouse()
    {
        $id = Session::get('application_id');

        $spouse = Spouse::where( 'student_profile_id',$id )->first();

        $spouse->first_name = post('first_name');
        $spouse->last_name = post('last_name');
        $spouse->occupation = post('occupation');
        $spouse->allowed = post('allowed');
        $spouse->save();
    }

}