<?php namespace Grinkomeda\Enrollment\Components;

use Cms\Classes\ComponentBase;
use Grinkomeda\Enrollment\Models\StudentProfile;
use Grinkomeda\Enrollment\Models\Spouse;
use Session;

class ApplicationForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Personal Information',
            'description' => 'Personal information for applicants'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onInit()
    {

    }

    public function onRun()
    {

    }

    public function getDropdownOptions($fieldName = null, $keyValue = null)
    {
        var_dump($fieldName . 'yahoooo!');
        // if ($fieldName == 'status')
        //     return ['all' => 'All'];
        // else
        //     return ['' => '-- none --'];
    }

    public function onSaveStudyProgram()
    {
        
    }

    public function onSavePersonalInformation()
    {
        
    }

    public function onSaveProfile()
    {
        $profile = new StudentProfile;
        $profile->first_name = post('firstname');
        $profile->middle_name = post('middlename');
        $profile->last_name = post('lastname');
        $profile->nickname = post('nickname');
        $profile->street = post('street');
        $profile->city = post('city');
        $profile->region = post('region');
        $profile->postal_code = post('postalcode');
        $profile->country = post('country');
        $profile->citizenship = post('citizenship');
        $profile->phone = post('phone');
        $profile->mobile = post('mobile');
        $profile->email = post('email');
        $profile->website = post('website');
        $profile->facebook = post('facebook');
        $profile->birth_date = post('birthdate');
        $profile->birth_place = post('birthplace');
        $profile->age = (post('age') != null ? post('age') : 0) ;
        $profile->gender = post('gender');
        $profile->civil_status = post('civilstatus');
        $profile->gender = post('gender');
        $profile->occupation = post('occupation');
        $profile->specific_function = post('specificfunction');
        $profile->with_travel = post('withtravel');
        $profile->travel_frequency = post('travelfrequency');
        $profile->save();

        $spouse = new Spouse;
        $spouse->student_profile_id = $profile->id;
        $spouse->save();

        Session::put('application_id', $profile->id);
    }

}