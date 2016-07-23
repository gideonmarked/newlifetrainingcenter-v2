<?php namespace HeidiMarasigan\Nltc\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Profiles Back-end Controller
 */
class Profiles extends Controller
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

        BackendMenu::setContext('HeidiMarasigan.Nltc', 'nltc', 'profiles');
    }
}