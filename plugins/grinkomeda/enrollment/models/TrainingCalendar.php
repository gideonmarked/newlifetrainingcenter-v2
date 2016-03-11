<?php namespace Grinkomeda\Enrollment\Models;

use Model;

/**
 * TrainingCalendar Model
 */
class TrainingCalendar extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'grinkomeda_enrollment_training_calendars';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'subjects' => [
            'Grinkomeda\Enrollment\Models\Subject',
            'table' => 'grinkomeda_enrollment_training_calendars_subjects',
            'pivot' => ['start_time','end_time'],
            'pivotModel' => 'Grinkomeda\Enrollment\Models\TrainingCalendarSubjectPivot',
        ],
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}