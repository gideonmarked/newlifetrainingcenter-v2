<?php namespace HeidiMarasigan\Nltc\Models;

use Model;

/**
 * ClassRecord Model
 */
class ClassRecord extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'heidimarasigan_nltc_class_records';

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
    public $belongsTo = [
        'subject' => [
                        'HeidiMarasigan\Nltc\Models\Subject',
                        'table' =>  'heidimarasigan_nltc_subjects'
                    ],       
    ];
    public $belongsToMany = [
        'faculty' => [
                        'HeidiMarasigan\Nltc\Models\Faculty',
                        'table' =>  'heidimarasigan_nltc_class_records_faculties'
                    ],
        'student' => [
                        'HeidiMarasigan\Nltc\Models\Student',
                        'table' => 'heidimarasigan_nltc_class_records_students',
                        'pivot' => ['grade','evaluation']
                    ], 
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}