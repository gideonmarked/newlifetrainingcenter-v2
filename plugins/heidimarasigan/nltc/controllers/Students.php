<?php namespace HeidiMarasigan\Nltc\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Students Back-end Controller
 */
class Students extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend\Behaviors\ReorderController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'heidimarasigan.nltc.manage_students' 
    ];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('HeidiMarasigan.Nltc', 'NLTC', 'students');
    }
}