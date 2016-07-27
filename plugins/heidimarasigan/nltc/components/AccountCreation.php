<?php namespace HeidiMarasigan\Nltc\Components;

use Cms\Classes\ComponentBase;
use HeidiMarasigan\Nltc\Models\Applications;
use HeidiMarasigan\Nltc\Models\Profile;
use HeidiMarasigan\Nltc\Models\Level;
use HeidiMarasigan\Nltc\Models\Student;
use Backend\Models\User;
use Backend\Models\UserGroup;

use Input;
use Request;

class AccountCreation extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'AccountCreation Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function onRun()
    {
        $applicant = Applications::where('registration_code', $this->param('code'))->first();
        if($applicant)
            $this->page['email'] = $applicant->email;

    }

    public function onCreate()
    {
        $application = Applications::where( 'email' , post('user_email') )->first();
        $user = new User;
        $user->email = $user->login = post('user_email');
        $user->password = post('user_password');
        $user->password_confirmation = post('user_retype_password');
        $user->is_activated = 1;
        $user->first_name = $application->first_name;
        $user->last_name = $application->last_name;
        $user->groups = [UserGroup::find(5)->first()];
        $user->save();

        $application->user = $user;
        $application->save();

        $student = new Student;
        $student->user = $user;
        $student->type = $application->application_type;
        $student->school_year = $application->school_year;
        $student->level = Level::where('title', $application->level )->first();
        $student->save();

        $profile = new Profile;
        $profile->user = $user;
        $profile->firstname = $user->first_name;
        $profile->lastname = $user->last_name;
        $profile->save();
    }

    public function defineProperties()
    {
        return [];
    }

}