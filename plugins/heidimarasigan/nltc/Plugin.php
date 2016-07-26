<?php namespace HeidiMarasigan\Nltc;

use System\Classes\PluginBase;
use App;
use Event;
use Backend;
use System;
use Backend\Models\User as BackendUserModel;
use Backend\Controllers\Users as BackendUsersController;
use HeidiMarasigan\Nltc\Controllers\Faculties;
use HeidiMarasigan\Nltc\Models\Faculty;
use HeidiMarasigan\Nltc\Controllers\Students;
use HeidiMarasigan\Nltc\Models\Student;

/*use RainLab\User\Models\User as UserModel;
use RainLab\User\Controllers\Users as UsersController;*/




class Plugin extends PluginBase
{
    public function registerComponents()
    {
				return [
            'HeidiMarasigan\Nltc\Components\ApplicationForm'							=> 'applicationform',
            'HeidiMarasigan\Nltc\Components\AccountCreation'							=> 'accountcreation',
        ];
    }

    public function registerSettings()
    {
    }
		
	public function boot()
	{
		
	}



	public function registerFormWidgets()
	{
	    return [
	        'HeidiMarasigan\Nltc\FormWidgets\CustomDatePicker' => [
	            'label' => 'Custom Date Picker',
	            'code'  => 'customdatepicker'
	        ]
	    ];
	}

}
