<?php namespace HeidiMarasigan\Nltc\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Students extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController','Backend\Behaviors\RelationController'];

    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = [
        'heidimarasigan.nltc.manage_student_accounts' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('HeidiMarasigan.Nltc', 'NLTC', 'enrolled_students');
    }
}