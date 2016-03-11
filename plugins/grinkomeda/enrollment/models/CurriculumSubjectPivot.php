<?php namespace Grinkomeda\Enrollment\Models;

use October\Rain\Database\Pivot;

/**
 * CurriculumSubjectPivot Model
 */
class CurriculumSubjectPivot extends Pivot
{

    /**
     * @var array Relations
     */
    
    public $belongsTo = [
        'level' => ['Grinkomeda\Enrollment\Models\Level'],
    ];

}