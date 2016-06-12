<?php namespace HeidiMarasigan\Nltc;

use System\Classes\PluginBase;
use App;
use Event;
use Backend;
use System;
use Backend\Models\User as BackendUserModel;
use Backend\Controllers\Users as BackendUsersController;

/*use RainLab\User\Models\User as UserModel;
use RainLab\User\Controllers\Users as UsersController;*/




class Plugin extends PluginBase
{
    public function registerComponents()
    {
				return [
            'HeidiMarasigan\Nltc\Components\ApplicationForm'							=> 'applicationform',
        ];
    }

    public function registerSettings()
    {
    }
		
		public function boot()
		{

				/*BackendUserModel::extend(function($model) {
						$model->hasOne['applications'] = ['HeidiMarasigan\Nltc\Models\Applications'];
				});*/
				
				/*BackendUsersController::extendFormFields(function($form, $model, $context) {
					
						$form->addTabFields([
						
								'applications[first_name]' => [
										'label'	=> 'First Name',
										'tab' => 'Profile',
										'type' = 'textarea',
								],
								'applications[last_name]' => [
										'label'	=> 'Last Name',
										'tab' => 'Profile',
										'type' = 'textarea',
								],
						
						
						]
				});*/
		}

}
