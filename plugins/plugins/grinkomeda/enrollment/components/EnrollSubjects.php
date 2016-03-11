<?php namespace Grinkomeda\Enrollment\Components;

use Cms\Classes\ComponentBase;
use Grinkomeda\Enrollment\Models\Subjects;

class EnrollSubjects extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'EnrollSubjects Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $subjects = Subjects::where( 'level', 'First Year' )->first();
        var_dump($subjects);
    }
}