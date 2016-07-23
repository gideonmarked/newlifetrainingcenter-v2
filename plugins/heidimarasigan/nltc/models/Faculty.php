<?php namespace HeidiMarasigan\Nltc\Models;

use Model;

/**
 * Faculty Model
 */
class Faculty extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'heidimarasigan_nltc_faculties';

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
        'profile' => ['HeidiMarasigan\Nltc\Models\Profile'],
    ];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}