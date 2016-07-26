<?php namespace HeidiMarasigan\Nltc\Components;

use Cms\Classes\ComponentBase;
use HeidiMarasigan\Nltc\Models\Applications;

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
        $this->page['email'] = $applicant->email;

    }

    public function defineProperties()
    {
        return [];
    }

}