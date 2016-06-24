<?php namespace HeidiMarasigan\Nltc\Models;

use Model;

/**
 * Model
 */
class Subjects extends Model
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
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'heidimarasigan_nltc_subjects';
		
    /**
     * @var array Relations
     */
    public $belongsTo = [
        'country' => ['HeidiMarasigan\Nltc\Models\Levels']
    ];

    /**
     * @var array Cache for subjectList() method
     */
    protected static $subjectList = [];

    public static function getSubjectList($subject_name)
    {
        if (isset(self::$subjectList[$id]))
            return self::$subjectList[$id];

        return self::$subjectList[$id] = self::whereCountryId($id)->lists('subject_name', 'id');
    }

    public static function formSelect($subject_name, $id = null, $selectedValue = null, $options = [])
    {
        return Form::select($name, self::getsubjectList($id), $selectedValue, $options);
    }

    public static function getDefault()
    {
        return static::find(Settings::get('default_state', 1));
    }


}