<?php namespace HeidiMarasigan\Nltc\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class StudentProfile extends Controller
{
    public $implement = [];
    
    public $requiredPermissions = [
        'heidimarasigan.nltc.manage_student_accounts' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('HeidiMarasigan.Nltc', 'NLTC Students', 'My Profile');
    }
}