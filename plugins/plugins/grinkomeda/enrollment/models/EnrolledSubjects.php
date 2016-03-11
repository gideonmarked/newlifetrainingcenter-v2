<?php namespace Grinkomeda\Enrollment\Models;

use Model;

/**
 * EnrolledSubjects Model
 */
class EnrolledSubjects extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'grinkomeda_enrollment_enrolled_subjects';

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
    public $hasMany = [
        'subject' => ['Grinkomeda\Enrollment\Models\Subject'],
    ];
    public $belongsTo = [];
    public $belongsToMany = [
        'student_profile' => ['Grinkomeda\Enrollment\Models\StudentProfile'],
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}