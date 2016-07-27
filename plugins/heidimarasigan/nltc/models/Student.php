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
    public $belongsTo = [
        'level' => ['HeidiMarasigan\Nltc\Models\Level'],
        'user' => ['Backend\Models\User']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function beforeCreate()
    {
        $this->student_code = $this->generateStudentCode();
    }

    private function generateStudentCode()
    {
        $code = 'NLTC' . date('Y') . '-';
        $count = self::all()->count() + 1;
        switch (true) {
            case ($count > 0 && $count < 10):
                $count = '0000' . $count;
                break;

            case ($count > 9 && $count < 100):
                $count = '000' . $count;
                break;

            case ($count > 99 && $count < 1000):
                $count = '00' . $count;
                break;

            case ($count > 999 && $count < 10000):
                $count = '0' . $count;
                break;

            default:
                $count = '' . $count;
                break;
        }
        $code .= $count;
        return $code;
    }

}