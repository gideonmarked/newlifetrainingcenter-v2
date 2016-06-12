<?php namespace heidimarasigan\nltc\Components;

use Cms\Classes\ComponentBase;
//use System\Classes\CombineAssets;
use heidimarasigan\nltc\Models\Applications;
use BackendAuth;
use Mail;
use Session;


class ApplicationForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Application Form',
            'description' => 'New Life Training center applicants for bible school.'
        ];
    }

    public function defineProperties()
    {
				return [];
    }
		
    public function onInit()
    {

    }

		public function onRun()
		{
			
		/*$user = BackendAuth::getUser();
		$this->last_edited_by = $user->first_name;
		
		return $user;*/
		
		// This code will be executed when the page or layout is
    // loaded and the component is attached to it.

    //$student_id = $this->page['student_id'] = 'value'; // Inject some variable to the page
		}


    public function getDropdownOptions($fieldName = null, $keyValue = null)
    {
        var_dump($fieldName . 'yahoooo!');
        // if ($fieldName == 'status')
        //     return ['all' => 'All'];
        // else
        //     return ['' => '-- none --'];
    }

		//protected function getidApplicationIds()
//		{
//			return Applications::select('id', 'email')->orderBy('email')->get()->lists('email', 'id');
//		}

    public function onSaveProfile()
    {
			

			

        $profile = new Applications;
        $profile->application_type = post('application_type');
        $profile->school_year = post('school_year');
        $profile->level = post('level');
        $profile->first_name = post('firstname');
        $profile->middle_name = post('middlename');
        $profile->last_name = post('lastname');
        $profile->nickname = post('nickname');
        $profile->address = post('address');
        $profile->city = post('city');
        $profile->state = post('state');
        $profile->zip = post('zip');
        $profile->country = post('country');
        $profile->citizenship = post('citizenship');
        $profile->phone = post('phone');
        $profile->mobile = post('mobile');
        $profile->email = post('email');
        $profile->website = post('website');
        $profile->facebook = post('facebook');
        $profile->date_of_birth = post('date_of_birth');
        $profile->place_of_birth = post('place_of_birth');
        $profile->age = (post('age') != null ? post('age') : 0) ;
        $profile->gender = post('gender');
        $profile->civil_status = post('civil_status');
        $profile->occupational_field = post('occupational_field');
        $profile->role = post('role');
        $profile->travelling = post('travelling');
        $profile->travelling_frequency = post('travelling_frequency');
        $profile->spouse_name = post('spouse_name');
        $profile->spouse_occupation = post('spouse_occupation');
        $profile->in_agreement = post('inagreement');
        $profile->emergency_name = post('emergency_name');
        $profile->emergency_relation = post('emergency_relation');
        $profile->emergency_address = post('emergency_address');
        $profile->emergency_telno = post('emergency_telno');
        $profile->emergency_mobile = post('emergency_mobile');
        $profile->education_primary = post('education_primary');
        $profile->education_primary_year = post('education_primary_year');
        $profile->education_secondary = post('education_secondary');
        $profile->education_secondary_year = post('education_secondary_year');
        $profile->education_tertiary = post('education_tertiary');
        $profile->education_tertiary_year = post('education_tertiary_year');
        $profile->course = post('course');
        $profile->other_course = post('other_course');
        $profile->christian_when_saved = post('christian_when_saved');
        $profile->christian_baptized = post('christian_baptized');
        $profile->christian_baptized_date = post('christian_baptized_date');
        $profile->christian_baptized_place = post('christian_baptized_place');
        $profile->christian_church = post('christian_church');
        $profile->christian_church_name = post('christian_church_name');
        $profile->christian_nonnewlife = post('christian_nonnewlife');
        $profile->christian_position = post('christian_position');
        $profile->christian_whyattend = post('christian_whyattend');
        $profile->christian_senior_pastor = post('christian_senior_pastor');
        $profile->christian_length_attend = post('christian_length_attend');
        $profile->christian_ministry_name = post('christian_ministry_name');
        $profile->christian_ministry_head = post('christian_ministry_head');
        $profile->christian_lifegroup = post('christian_lifegroup');
        $profile->christian_fulltime = post('christian_fulltime');
        $profile->christian_tither = post('christian_tither');
        $profile->christian_trainings = post('christian_trainings');
        $profile->christian_ntc_volunteer = post('christian_ntc_volunteer');
        $profile->christian_ntc_volunteer_area = post('christian_ntc_volunteer_area');
        $profile->christian_currently_serving = post('christian_currently_serving');
				
        $profile->physical_handicap = post('physical_handicap');
        $profile->physical_criminal = post('physical_criminal');
        $profile->physical_abuse = post('physical_abuse');
        $profile->physical_phsychological = post('physical_phsychological');
        $profile->training_fee = post('training_fee');
        $profile->christian_currently_serving = post('christian_currently_serving');
        $profile->christian_currently_serving = post('christian_currently_serving');
        $profile->christian_currently_serving = post('christian_currently_serving');
				
        $profile->interview_date = post('interview_date');
        $profile->interview_time = post('interview_time');
				$profile->save();
    }
		
		
    public function onAddChild()
    {
        $cnames 	= post('childname', []);
        $cages 		= post('childage', []);
        $cgenders = post('childgender', []);

        if (($childname = post('newchildname')) != '') {
            $cnames[] = $childname;
        }

        if (($childage = post('newchildage')) != '') {
            $cages[] = $childage;
        }
        if (($childgender = post('newchildgender')) != '') {
            $cgenders[] = $childgender;
        }

        $this->page['cnames'] 	= $cnames;
        $this->page['cages'] 		= $cages;
        $this->page['cgenders'] = $cgenders;
        $this->page['max'] 			= count($cnames);
				
    }

    public function onSaveChildren()
    {
        $cnames = post('childname', []);
        $cages = post('childage', []);
        $cgenders = post('childgender', []);

        //$id = Session::get('application_id');
        
        foreach ($cnames as $key => $cname) {
            $child = new Children;
            $child->student_profile_id = $id;
            $child->name = $cname;
            $child->age = $cages[$key];
            $child->gender = $cgenders[$key];
            $child->save();
        }
    }

		

}