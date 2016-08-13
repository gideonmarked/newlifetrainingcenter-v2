<?php namespace HeidiMarasigan\Nltc\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Class Records Back-end Controller
 */
class ClassRecords extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('HeidiMarasigan.Nltc', 'NLTC', 'classrecords');
    }
}