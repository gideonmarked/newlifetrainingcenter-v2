<?php namespace Grinkomeda\Enrollment\Components;

use Cms\Classes\ComponentBase;
use Grinkomeda\Enrollment\Models\Interview;
use Session;

class InterviewForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Interview Form',
            'description' => 'Book interview for enrollment form'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSaveInterview()
    {
        $id = Session::get('application_id');
        
        $interview = new Interview;
        $interview->student_profile_id = $id;
        $interview->interview_date = post('interview_date');
        $interview->interview_time = post('interview_time');
        $interview->interview_name = 'Heidi Marasigan';
        $interview->save();
    }

}