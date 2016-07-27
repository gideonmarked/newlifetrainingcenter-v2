<?php namespace HeidiMarasigan\Nltc\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use HeidiMarasigan\Nltc\Models\Student;
use HeidiMarasigan\Nltc\Models\Subject;

/**
 * Enrollments Back-end Controller
 */
class Enrollments extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
    ];

    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('HeidiMarasigan.Nltc', 'NLTC', 'enrollments');
    }

    public function getSubjects()
    {
        $student  = Student::where('user_id',$this->user->id)->first();
        return Subject::where('level_id',$student->level_id)->get();
    }

    public function onCreateEnrollment()
    {
        var_dump('test');
    }
}