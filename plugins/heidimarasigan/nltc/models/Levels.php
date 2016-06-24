<?php namespace HeidiMarasigan\Nltc\Models;

use Model;

/**
 * Model
 */
class Levels extends Model
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
    public $table = 'heidimarasigan_nltc_levels';
		
    /**
     * @var array Relations
     */
    public $hasMany = [
        'subjects' => ['HeidiMarasigan\Nltc\Models\Subjects']
    ];
		
    /**
     * @var array Cache for subjectList() method
     */
    protected static $subjectList = null;

    public static function getSubjectList()
    {
        if (self::$subjectList)
            return self::$subjectList;

        return self::$subjectList = self::isEnabled()->lists('subject_name', 'id');
    }

    public static function formSelect($subject_name, $selectedValue = null, $options = [])
    {
        return Form::select($subject_name, self::getSubjectList(), $selectedValue, $options);
    }

    public function scopeIsEnabled($query)
    {
        return $query->where('is_enabled', true);
    }

    public static function getDefault()
    {
        return static::find(Settings::get('default_subject', 1));
    }
		
}