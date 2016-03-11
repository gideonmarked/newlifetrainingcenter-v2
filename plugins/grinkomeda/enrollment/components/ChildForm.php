<?php namespace Grinkomeda\Enrollment\Components;

use Cms\Classes\ComponentBase;
use Grinkomeda\Enrollment\Models\Children;
use Session;

class ChildForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Child Form',
            'description' => 'Children for enrollment form'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onAddItem()
    {
        $cnames = post('childname', []);
        $cages = post('childage', []);
        $cgenders = post('childgender', []);

        if (($childname = post('newchildname')) != '') {
            $cnames[] = $childname;
        }

        if (($childage = post('newchildage')) != '') {
            $cages[] = $childage;
        }
        if (($childgender = post('newchildgender')) != '') {
            $cgenders[] = $childgender;
        }

        $this->page['cnames'] = $cnames;
        $this->page['cages'] = $cages;
        $this->page['cgenders'] = $cgenders;
        $this->page['max'] = count($cnames);
    }

    public function onSaveChildren()
    {
        $cnames = post('childname', []);
        $cages = post('childage', []);
        $cgenders = post('childgender', []);

        $id = Session::get('application_id');
        
        foreach ($cnames as $key => $cname) {
            $child = new Children;
            $child->student_profile_id = $id;
            $child->name = $cname;
            $child->age = $cages[$key];
            $child->gender = $cgenders[$key];
            $child->save();
        }
    }

}