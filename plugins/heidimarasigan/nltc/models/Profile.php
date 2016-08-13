<?php namespace HeidiMarasigan\Nltc\Models;

use Model;

/**
 * Profile Model
 */
class Profile extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'heidimarasigan_nltc_profiles';

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
        'faculty' => ['HeidiMarasigan\Nltc\Models\Faculty'],
        // 'user' => ['Backend\Models\User']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}