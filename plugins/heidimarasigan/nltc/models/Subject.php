<?php namespace HeidiMarasigan\Nltc\Models;

use Model;

/**
 * Subjects Model
 */
class Subject extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'heidimarasigan_nltc_subjects';

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
        'level' => ['HeidiMarasigan\Nltc\Models\Level'],       
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}