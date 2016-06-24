<?php namespace HeidiMarasigan\Nltc\Models;

use Model;

/**
 * Model
 */
class Students extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'heidimarasigan_nltc_students';
		
	

    public $belongsToMany = [
        'applicant' => ['HeidiMarasigan\Nltc\Models\Applications']
    ];

}