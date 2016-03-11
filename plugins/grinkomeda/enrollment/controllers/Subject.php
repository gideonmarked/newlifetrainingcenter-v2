<?php namespace Grinkomeda\Enrollment\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Subject Back-end Controller
 */
class Subject extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Grinkomeda.Enrollment', 'enrollment', 'subject');
    }
}