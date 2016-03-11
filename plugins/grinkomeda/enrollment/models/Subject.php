<?php namespace Grinkomeda\Enrollment\Models;

use Model;

/**
 * Subject Model
 */
class Subject extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'grinkomeda_enrollment_subjects';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'name','description'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function beforeCreate() {
        
    }

}