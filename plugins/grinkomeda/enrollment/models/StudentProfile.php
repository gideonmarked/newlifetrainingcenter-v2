<?php namespace Grinkomeda\Enrollment\Models;

use Model;

/**
 * StudentProfile Model
 */
class StudentProfile extends Model
{
    public $rules = [
        'email'    => 'required|between:3,255|email|unique:users',
        'username' => 'required|between:2,64|unique:users',
        'password' => 'required:create|between:4,255|confirmed',
        'password_confirmation' => 'required_with:password|between:4,255'
    ];
    
    /**
     * @var string The database table used by the model.
     */
    public $table = 'grinkomeda_enrollment_student_profiles';

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
    public $hasOne = [
        'primary_education' => ['Grinkomeda\Enrollment\Models\Education'],
        'secondary_education' => ['Grinkomeda\Enrollment\Models\Education'],
        'tertiary_education' => ['Grinkomeda\Enrollment\Models\Education'],
        'christianity' => ['Grinkomeda\Enrollment\Models\Christianity'],
        'spouse' => ['Grinkomeda\Enrollment\Models\Spouse'],
        'interview' => ['Grinkomeda\Enrollment\Models\Interview'],
    ];
    public $hasMany = [
        'character_reference' => ['Grinkomeda\Enrollment\Models\CharacterReference'],
        'tertiary_education' => ['Grinkomeda\Enrollment\Models\Education'],
        'children' => ['Grinkomeda\Enrollment\Models\Children'],
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}