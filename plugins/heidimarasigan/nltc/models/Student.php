<?php namespace HeidiMarasigan\Nltc\Models;

use Model;

/**
 * Student Model
 */
class Student extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'heidimarasigan_nltc_students';

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
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}