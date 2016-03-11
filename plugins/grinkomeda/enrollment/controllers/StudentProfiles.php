<?php namespace Grinkomeda\Enrollment\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Student Profiles Back-end Controller
 */
class StudentProfiles extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Grinkomeda.Enrollment', 'enrollment', 'studentprofiles');
    }
}