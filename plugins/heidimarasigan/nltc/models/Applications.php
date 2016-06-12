<?php namespace HeidiMarasigan\Nltc\Models;

use Model;
use Mail;
//use RainLab\User\Models\User;

/**
 * Model
 */
class Applications extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
				//email'   								=> 'required|between:3,255|email',
        //'email'   								=> 'required|between:3,255|email|unique:users',
        //'interview_date' 					=> 'required|between:2,64',
        //'interview_time' 					=> 'required|between:2,64',
        //'username' 							=> 'required|between:2,64|unique:users',
        //'password' 							=> 'required:create|between:4,255|confirmed',
        //'password_confirmation' => 'required_with:password|between:4,255'
    ];
		
    public $customMessages = [
        //'email.required' => 'You must input a valid email.'
				//'interview_date.required' 	=> 'You must select available dates: June 1-3, 8-10, 15-17, 22-24, 29-30 / July 1, 6-7, 13-15, 20-22, 27-29'
    ];
		
    protected $jsonable = [
				'children',
				'christian_trainings',
				'christian_lifegroup',
				'christian_ntc_volunteer_area',
				'references',
				'date_of_birth',
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;
		

    /**
     * @var string The database table used by the model.
     */
    public $table = 'heidimarasigan_nltc_applications';

    /**
     * @var array Relations
     */
		public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
				'students' => ['HeidiMarasigan\Nltc\Models\Students']
		];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
		
		
		public function afterCreate() 
		{
			
			// These variables are available inside the message as Twig
			$vars = [
			'school_year' => $this->school_year, 
			'application_type' => $this->application_type, 
			'level' => $this->level,
			'nickname' => $this->nickname,
			'first_name' => $this->first_name,
			'middle_name' => $this->middle_name,
			'last_name' => $this->last_name,
			'address' => $this->address,
			'city' => $this->city,
			'state' => $this->state,
			'zip' => $this->zip,
			'country' => $this->country,
			'citizenship' => $this->citizenship,
			'age' => $this->age, 
			'email' => $this->email, 
			'phone' => $this->phone, 
			'mobile' => $this->mobile, 
			'gender' => $this->gender, 
			'civil_status' => $this->civil_status, 
			'date_of_birth' => $this->date_of_birth,
			'place_of_birth' => $this->place_of_birth,
			'interview_date' => $this->interview_date, 
			'interview_time' => $this->interview_time
			];
			
			Mail::send('heidimarasigan.nltc.application', $vars, function($message) {
			
					$message->to($this->email, $this->first_name);
					$message->cc('nltc@newlife.ph', 'New Life Training center');
					$message->bcc('loisjune@gmail.com', 'webmaster');
					$message->replyTo('nltc@newlife.ph', 'New Life Training center');
					$message->subject('[NLTC] Application Details');
			
			});
		}
		
}

