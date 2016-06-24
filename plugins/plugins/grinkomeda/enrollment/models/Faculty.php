<?php namespace Grinkomeda\Enrollment\Models;

use Model;
use Backend\Models\User as BackendUserModel;

/**
 * Faculty Model
 */
class Faculty extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'grinkomeda_enrollment_faculties';

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
            'user' => ['RainLab\User\Models\User'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [
            
    ];

    public function afterCreate() {
        $rules = [];
        $user = new BackendUserModel;
        $user->rules = [];
        $user->login = $this->login;
        $user->email = $this->email;
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->password = 'ntcportal';
        $user->save();
    }

}