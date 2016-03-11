<?php namespace Grinkomeda\Enrollment\Models;

use Model;

/**
 * Curriculum Model
 */
class Curriculum extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'grinkomeda_enrollment_curriculums';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'name'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'subjects' => [
            'Grinkomeda\Enrollment\Models\Subject',
            'table' => 'grinkomeda_enrollment_curriculums_subjects',
            'pivot' => ['level_id'],
            'pivotModel' => 'Grinkomeda\Enrollment\Models\CurriculumSubjectPivot',
        ],
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}