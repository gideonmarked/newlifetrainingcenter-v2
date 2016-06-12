<?php namespace HeidiMarasigan\Nltc\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Faculty extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'heidimarasigan.nltc.manage_applications', 
        'heidimarasigan.nltc.faculty.manage_faculty' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('HeidiMarasigan.Nltc', 'NLTC', 'faculty');
    }
}