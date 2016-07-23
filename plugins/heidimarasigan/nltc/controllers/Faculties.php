<?php namespace HeidiMarasigan\Nltc\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Faculties Back-end Controller
 */
class Faculties extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'heidimarasigan.nltc.manage_levels' 
    ];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('HeidiMarasigan.Nltc', 'NLTC', 'faculties');
    }
}