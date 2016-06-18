<?php namespace heidimarasigan\nltc\Components;

use Cms\Classes\ComponentBase;
//use System\Classes\CombineAssets;
use heidimarasigan\nltc\Models\Applications as ApplicationModel;
use BackendAuth;
use Mail;
use Session;
use Redirect;


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
        $this->addCss('formwidgets/customdatepicker/assets/css/jquery-ui.css');
        $this->addCss('formwidgets/customdatepicker/assets/css/jquery-ui.structure.css');

        $this->addJs('assets/js/my_script.js');

        $this->page['children'] = array(
                array(
                    'child_name' => '',
                    'child_age' => '',
                    'child_gender' => ''
                    )
            );

        $this->page['training'] = array(
                array(
                    'christian_training_type' => '',
                    'christian_training_venue' => '',
                    'christian_training_date' => ''
                    )
            );

         $this->page['reference'] = array(
                array(
                    'reference_name' => '',
                    'reference_relationship' => '',
                    'reference_address' => '',
                    'reference_contactno' => ''
                    )
            );
     }

    public function getChurchList()
    {
        $church_list = array();
        $church_list[] = "New Life, Alabang";
        $church_list[] = "New Life, Bacoor";
        $church_list[] = "New Life, Baguio";
        $church_list[] = "New Life, Balingasag";
        $church_list[] = "New Life, Bontoc";
        $church_list[] = "New Life, Borongan";
        $church_list[] = "New Life, Burauen";
        $church_list[] = "New Life, Cadiz";
        $church_list[] = "New Life, Cagayan De Oro";
        $church_list[] = "New Life, Calapan";
        $church_list[] = "New Life, Calbayog";
        $church_list[] = "New Life, Carigara";
        $church_list[] = "New Life, Catbalogan";
        $church_list[] = "New Life, Catubig";
        $church_list[] = "New Life, Danao";
        $church_list[] = "New Life, Hibubullao";
        $church_list[] = "New Life, Hinunangan";
        $church_list[] = "New Life, Iligan";
        $church_list[] = "New Life, La Trinidad";
        $church_list[] = "New Life, Maydolong";
        $church_list[] = "New Life, North Metro";
        $church_list[] = "New Life, Port Area (BASECO)";
        $church_list[] = "New Life, San Jose";
        $church_list[] = "New Life, San Roque";
        $church_list[] = "New Life, Sorsogon";
        $church_list[] = "New Life, Sta.Rosa";
        $church_list[] = "New Life, Surigao";
        $church_list[] = "New Life, Tacloban";
        $church_list[] = "New Life, Taguig";
        $church_list[] = "New Life, Tagum";
        $church_list[] = "New Life, Tanza";
        $church_list[] = "New Life, The Fort";
        $church_list[] = "New Life, Tondo";
        $church_list[] = "New Life, Kathmandu Nepal";
        $church_list[] = "New Life, Yangoon Myanmar";
        return $church_list;
    }
      
    public function getOccupationList()
    {
        $occupation_list = array();
        $occupation_list[] = "Accounting / Finance";
        $occupation_list[] = "Admin & Office Services";
        $occupation_list[] = "Advertising / Promotions / Events";
        $occupation_list[] = "Audit / Taxation";
        $occupation_list[] = "Beauty / Personal Care";
        $occupation_list[] = "Corporate Planning / Business Dev.";
        $occupation_list[] = "Customer Service";
        $occupation_list[] = "Data / Statistical Analysis";
        $occupation_list[] = "Design / Specifications";
        $occupation_list[] = "Education / Training & Developmen";
        $occupation_list[] = "Engineering / Technical";
        $occupation_list[] = "Environment / Health & Safety";
        $occupation_list[] = "Hospitality / Tourism";
        $occupation_list[] = "Human Resources";
        $occupation_list[] = "Information Technology";
        $occupation_list[] = "Legal / Secretarial Services";
        $occupation_list[] = "Logistics / Supply Chain Management";
        $occupation_list[] = "Management";
        $occupation_list[] = "Marketing";
        $occupation_list[] = "Merchandising / Purchasing";
        $occupation_list[] = "Nursing";
        $occupation_list[] = "Operations";
        $occupation_list[] = "Product Development";
        $occupation_list[] = "Production / Manufacturing";
        $occupation_list[] = "Project Management";
        $occupation_list[] = "Public Relations / Communications";
        $occupation_list[] = "Quality Control / Assurance";
        $occupation_list[] = "R&D / Sciences / Laboratory";
        $occupation_list[] = "Sales";
        $occupation_list[] = "Others";

        return $occupation_list;

    }

    public function onAddChild()
    {

        $children = $this->setChildrenData( post() );

        $children[] = array(
                    'child_name' => '',
                    'child_age' => '',
                    'child_gender' => ''
                    );

        $this->page['children'] = $children;
    }

    public function onDeleteChild()
    {
        $children = $this->setChildrenData( post() );
        unset( $children[post('data_id')] );
        $this->page['children'] = $children;
    }

    private function setChildrenData( $post )
    {
        // we get the values of name array children
        $child_names = $post['child_name']; 
        // we get the values of age array children
        $child_ages = $post['child_age']; 
        // we get the values of array children
        $child_genders = isset($post['child_gender']) ? $post['child_gender'] : null;


        $children = array();

        for ($i=0; $i < count($child_names); $i++) {
            $children[] = array(
                    'child_name' => isset($child_names[$i]) ? $child_names[$i] : '',
                    'child_age' => isset($child_ages[$i]) ? $child_ages[$i] : '',
                    'child_gender' => isset($child_genders[$i]) ? $child_genders[$i] : ''
                    );
        }

        return $children;
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

    //this is for Training Attended
    public function onAddTraining()
    {
        $training = $this->setTrainingData( post() );

        $training[] = array(
            'christian_training_type' => '',
            'christian_training_venue' => '',
            'christian_training_date' => ''
            );

         $this->page['training'] = $training;
    }

    private function setTrainingData( $post )
    {
          // we get the values of type array training
        $training_types = $post['christian_training_type']; 
        // we get the values of venue array training
        $training_venues = $post['christian_training_venue']; 
        // we get the values of date array training
        $training_dates = $post['christian_training_date']; 


        $training = array();

        for ($i=0; $i < count($training_types); $i++) {
            $training[] = array(
                    'christian_training_type' => isset($training_types[$i]) ? $training_types[$i] : '',
                    'christian_training_venue' => isset($training_venues[$i]) ? $training_venues[$i] : '',
                    'christian_training_date' => isset($training_dates[$i]) ? $training_dates[$i] : ''
                    );
        }

        return $training;
    }

     public function onDeleteTraining()
    {
        $training = $this->setTrainingData( post() );
        unset( $training[post('data_id')] );
        $this->page['training'] = $training;
    }


    //this is for Reference Details
    public function onAddReference()
    {
        $reference = $this->setReferenceDetails( post() );

        $reference[] = array(
            'reference_name' => '',
            'reference_relationship' => '',
            'reference_address' => '',
            'reference_contactno' => ''
            );

         $this->page['reference'] = $reference;
    }

    private function setReferenceDetails( $post )
    {
        // var_dump($post);
          // we get the values of name array reference
        $reference_names = $post['reference_name']; 
        // we get the values of relation array reference
        $reference_relationships = $post['reference_relationship']; 
        // we get the values of address array reference
        $reference_addresses = $post['reference_address']; 
         // we get the values of contact no. array reference
        $reference_contactnos = $post['reference_contactno']; 


        $reference = array();

        for ($i=0; $i < count($reference_names); $i++) {
            $reference[] = array(
                    'reference_name' => isset($reference_names[$i]) ? $reference_names[$i] : '',
                    'reference_relationship' => isset($reference_relationships[$i]) ? $reference_relationships[$i] : '',
                    'reference_address' => isset($reference_addresses[$i]) ? $reference_addresses[$i] : '',
                    'reference_contactno' => isset($reference_contactnos[$i]) ? $reference_contactnos[$i] : ''
                    );
        }

        return $reference;
    }

    public function onDeleteReference()
    {
        $reference = $this->setReferenceDetails( post() );
        unset( $reference[post('data_id')] );
        $this->page['reference'] = $reference;
    }

    private function onRetainArrays()
    {
        $family_background = Session::get('family_background');
        if(empty($family_background['child_name']))
        {
            $this->page['children'] = array(
                array(
                    'child_name' => '',
                    'child_age' => '',
                    'child_gender' => ''
                    )
            );
        } else {
            $temp_array = array(
                    "child_name" => $family_background['child_name'],
                    "child_age" => $family_background['child_age'],
                    "child_gender" => isset($family_background['child_gender'])
                                        ? $family_background['child_gender'] 
                                        : ''
                );
           $this->page['children'] = $this->setChildrenData( $temp_array );
        }

        $ministry_involvement = Session::get('ministry_involvement');
        if(empty($ministry_involvement['christian_training_type']))
        {
            $this->page['training'] = array(
                array(
                    'christian_training_type' => '',
                    'christian_training_venue' => '',
                    'christian_training_date' => ''
                    )
            );
        } else {
            $temp_array = array(
                    "christian_training_type" => $ministry_involvement['christian_training_type'],
                    "christian_training_venue" => $ministry_involvement['christian_training_venue'],
                    "christian_training_date" => $ministry_involvement['christian_training_date']
                );
           $this->page['training'] = $this->setTrainingData( $temp_array );
        }

        $personal_references = Session::get('personal_references');
        if(empty($personal_references['reference_name']))
        {
            $this->page['reference'] = array(
                array(
                    'reference_name' => '',
                    'reference_relationship' => '',
                    'reference_address' => '',
                    'reference_contactno' => ''
                    )
            );
        } else {
            $temp_array = array(
                    "reference_name" => $personal_references['reference_name'],
                    "reference_relationship" => $personal_references['reference_relationship'],
                    "reference_address" => $personal_references['reference_address'],
                    "reference_contactno" => $personal_references['reference_contactno']
                );
           $this->page['reference'] = $this->setReferenceDetails( $temp_array );
        }
    }

    public function onSave()
    {

        $page = post('page');

        switch ($page) {
            case 1:
                if( $this->formStudyProgramValidation( post() ) )
                    $this->storeStudyProgram( post() );
                break;
            case 2:
                if( $this->formPersonalInfomationValidation( post() ) )
                    $this->storePersonalInformation( post() );
                break;
            case 3:
                if( $this->formFamilyBackgroundValidation( post() ) )
                {    
                    $this->storeFamilyBackground( post() );
                    // $post = post();
                    // $children_json = "{";
                    // $last_key = count($post["child_name"]);
                    // foreach ($post["child_name"] as $key => $child_name) {
                    //     $children_json .= "" . "\"" . ($key+1) . "\":";
                    //     $children_json .= "{";
                    //     $children_json .= "\"" . "child_name" . "\":";
                    //     $children_json .= "\"" . $post["child_name"][$key] . "\",";
                    //     $children_json .= "\"" . "child_age" . "\":";
                    //     $children_json .= "\"" . $post["child_age"][$key] . "\",";
                    //     $children_json .= "\"" . "child_gender" . "\":";
                    //     $children_json .= "\"" . $post["child_gender"][$key] . "\"";
                    //     $children_json .= "}";
                    //     if ($key < $last_key-1) {
                    //         $children_json .= ",";
                    //     }
                    // }
                    // $children_json .= "}";
                }
                break;
            case 4:
                if( $this->formEducationalBackgroundValidation( post() ) )
                    $this->storeEducationalBackground( post() );
                break;
            case 5:
                if( $this->formChristianLifeValidation( post() ) )
                    $this->storeChristianLife( post() );
                break;
            case 6:
                if( $this->formMinistryInvolvementValidation( post() ) )
                    $this->storeMinistryInvolvement( post() );
                break;
            case 7:
                if( $this->formPhysicalHealthConditionValidation( post() ) )
                    $this->storePhysicalHealthCondition( post() );
                break;
            case 8:
                if( $this->formPersonalReferencesValidation( post() ) )
                    $this->storePersonalReferences( post() );
                break;
            case 9: 
                if( $this->formInterviewDetailsValidation( post() ) )
                    $this->storeInterviewDetails( post() );
                break;
        }
        $this->page['study_program_values'] = Session::get('study_program');
        $this->page['personal_information_values'] = Session::get('personal_information');
        $this->page['family_background_values'] = Session::get('family_background');
        $this->page['educational_background_values'] = Session::get('educational_background');
        $this->page['christian_life_values'] = Session::get('christian_life');
        $this->page['ministry_involvement_values'] = Session::get('ministry_involvement');
        $this->page['physical_health_condition_values'] = Session::get('physical_health_condition');
        $this->page['personal_references_values'] = Session::get('personal_references');
        $this->page['interview_details_values'] = Session::get('interview_details');

        $this->onRetainArrays();
        // $this->refreshValues();
    }

    private function refreshValues()
    {
        $this->page['study_program'] = Session::get('study_program');
        $this->page['personal_information'] = Session::get('personal_information');
        $this->page['family_bakcground'] = Session::get('family_background');
        $this->page['educational_background'] = Session::get('educational_background');
        $this->page['christian_life'] = Session::get('christian_life');
        $this->page['ministry_involvement'] = Session::get('ministry_involvement');
        $this->page['physical_health_condition'] = Session::get('physical_health_condition');
        $this->page['personal_references'] = Session::get('personal_references');
        $this->page['interview_details'] = Session::get('interview_details');
    }

// start function validation
    private function formStudyProgramValidation( $post )
    {
        //wag muna validation
        return true;
    }

    private function formPersonalInfomationValidation( $post )
    {
        //wag muna validation
        return true;
    }

    private function formFamilyBackgroundValidation( $post )
    {
        //wag muna validation
        return true;
    }

    private function formEducationalBackgroundValidation( $post )
    {
        //wag muna validation
        return true;
    }

    private function formChristianLifeValidation( $post )
    {
        //wag muna validation
        return true;
    }

    private function formMinistryInvolvementValidation( $post )
    {
        //wag muna validation
        return true;
    }

    private function formPhysicalHealthConditionValidation( $post )
    {
        //wag muna validation
        return true;
    }

    private function formPersonalReferencesValidation( $post )
    {
        //wag muna validation
        return true;
    }

    private function formInterviewDetailsValidation( $post )
    {
        //wag muna validation
        return true;
    }
// end function validation

// start function stores
    private function storeStudyProgram( $post )
    {
        Session::put('study_program', $post);
    }

    private function storePersonalInformation( $post )
    {
        Session::put('personal_information', $post);
    }

     private function storeFamilyBackground( $post )
    {
        Session::put('family_background', $post);
    }

    private function storeEducationalBackground( $post )
    {
        Session::put('educational_background', $post);
    }

     private function storeChristianLife( $post )
    {
        Session::put('christian_life', $post);
    }

     private function storeMinistryInvolvement( $post )
    {
        Session::put('ministry_involvement', $post);
    }
    
    private function storePhysicalHealthCondition( $post )
    {
        Session::put('physical_health_condition', $post);
    }

    private function storePersonalReferences( $post )
    {
        Session::put('personal_references', $post);
    }

    private function storeInterviewDetails( $post )
    {
        Session::put('interview_details', $post);
        $this->saveData();
    }

// end function stores


    private function saveData()
    {
        $study_program = Session::get('study_program');
        $personal_information = Session::get('personal_information');
        $family_background = Session::get('family_background');
        $educational_background = Session::get('educational_background');
        $christian_life = Session::get('christian_life');
        $ministry_involvement = Session::get('ministry_involvement');
        $physical_health_condition = Session::get('physical_health_condition');
        $personal_references = Session::get('personal_references');
        $interview_details = Session::get('interview_details');

        $application_model = new ApplicationModel;

        $application_model->school_year = $study_program['school_year'];
        $application_model->application_type = $study_program['application_type'];
        $application_model->level = $study_program['level'];

        $application_model->first_name = $personal_information['first_name'];
        $application_model->middle_name = $personal_information['middle_name'];
        $application_model->last_name = $personal_information['last_name'];
        $application_model->address = $personal_information['address'];
        $application_model->city = $personal_information['city'];
        $application_model->state = $personal_information['state'];
        $application_model->country = $personal_information['country'];
        $application_model->citizenship = $personal_information['citizenship'];
        $application_model->phone = $personal_information['phone'];
        $application_model->mobile = $personal_information['mobile'];
        $application_model->facebook = $personal_information['facebook'];
        $application_model->email = $personal_information['email'];
        $application_model->website = $personal_information['website'];
        $application_model->age = $personal_information['age'];
        $application_model->date_of_birth = $personal_information['date_of_birth'];
        $application_model->place_of_birth = $personal_information['place_of_birth'];
        $application_model->gender = $personal_information['gender'];
        $application_model->civil_status = $personal_information['civil_status'];
        $application_model->occupational_field = $personal_information['occupational_field'];
        $application_model->role = $personal_information['role'];
        $application_model->travelling = $personal_information['travelling'];
        $application_model->travelling_frequency = $personal_information['travel_details'];

        $application_model->spouse_name = $family_background['spouse_name'];
        $application_model->spouse_occupation = $family_background['spouse_occupation'];
        // // $application_model->children = $family_background['children'];
        // $application_model->child_name = $family_background['child_name'];
        // $application_model->child_age = $family_background['child_age'];
        // $application_model->child_gender = $family_background['child_gender'];
        $application_model->in_agreement = $family_background['in_agreement'];

        $application_model->education_primary = $educational_background['education_primary'];
        $application_model->education_primary_year = $educational_background['education_primary_year'];
        $application_model->education_secondary = $educational_background['education_secondary'];
        $application_model->education_secondary_year = $educational_background['education_secondary_year'];
        $application_model->education_tertiary = $educational_background['education_tertiary'];
        $application_model->education_tertiary_year = $educational_background['education_tertiary_year'];
        $application_model->course = $educational_background['course'];
        $application_model->other_course = $educational_background['other_course'];

        $application_model->christian_when_saved = $christian_life['christian_when_saved'];
        $application_model->christian_baptized = $christian_life['christian_baptized'];
        $application_model->christian_baptized_date = $christian_life['christian_baptized_date'];
        $application_model->christian_baptized_place = $christian_life['christian_baptized_place'];
        $application_model->christian_church = $christian_life['christian_church'];
        $application_model->christian_church_name = $christian_life['christian_church_name'];
        $application_model->christian_nonnewlife = $christian_life['christian_nonnewlife'];
        $application_model->christian_position = $christian_life['christian_position'];
        $application_model->christian_senior_pastor = $christian_life['christian_senior_pastor'];
        $application_model->christian_length_attend = $christian_life['christian_length_attend'];

        $application_model->christian_ministry_name = $ministry_involvement['christian_ministry_name'];
        $application_model->christian_ministry_head = $ministry_involvement['christian_ministry_head'];
        $application_model->christian_years_of_stay = $ministry_involvement['christian_years_of_stay'];
        $application_model->christian_ministry_responsibilities = $ministry_involvement['christian_ministry_responsibilities'];
        $application_model->christian_whyattend = $ministry_involvement['christian_whyattend'];
        $application_model->christian_lifegroup_lead = $ministry_involvement['christian_lifegroup_lead'];
        $application_model->christian_lifegroup_lead_started = $ministry_involvement['christian_lifegroup_lead_started'];
        $application_model->christian_lifegroup_member = $ministry_involvement['christian_lifegroup_member'];
        $application_model->christian_lifegroup_member_started = $ministry_involvement['christian_lifegroup_member_started'];
        $application_model->christian_fulltime = $ministry_involvement['christian_fulltime'];
        $application_model->christian_tither = $ministry_involvement['christian_tither'];
        // $application_model->christian_trainings = $ministry_involvement['christian_trainings'];
        // $application_model->christian_training_type = $ministry_involvement['christian_training_type'];
        // $application_model->christian_training_venue = $ministry_involvement['christian_training_venue'];
        // $application_model->christian_training_date = $ministry_involvement['christian_training_date'];
        $application_model->christian_ntc_volunteer = $ministry_involvement['christian_ntc_volunteer'];
        $application_model->christian_ntc_volunteer_area = $ministry_involvement['christian_ntc_volunteer_area'];
        $application_model->training_fee = $ministry_involvement['training_fee'];

        $application_model->physical_handicap = $physical_health_condition['physical_handicap'];
        $application_model->physical_criminal = $physical_health_condition['physical_criminal'];
        $application_model->physical_abuse = $physical_health_condition['physical_abuse'];
        $application_model->physical_phsychological = $physical_health_condition['physical_psychological'];

        // $application_model->reference_name = $personal_references['reference_name'];
        // $application_model->reference_address = $personal_references['reference_address'];
        // $application_model->reference_relationship = $personal_references['reference_relationship'];
        // $application_model->reference_contactno = $personal_references['reference_contactno'];

        $application_model->interview_date = $interview_details['interview_date'];
        $application_model->interview_time = $interview_details['interview_time']; 



        $application_model->save();
        Session::flush();
        // return Redirect::to('/thank-you');
    }

    public function onRedirect()
    {
        $this->page['study_program_values'] = Session::get('study_program');
        $this->page['personal_information_values'] = Session::get('personal_information');
        $this->page['family_background_values'] = Session::get('family_background');
        $this->page['educational_background_values'] = Session::get('educational_background');
        $this->page['christian_life_values'] = Session::get('christian_life');
        $this->page['ministry_involvement_values'] = Session::get('ministry_involvement');
        $this->page['physical_health_condition_values'] = Session::get('physical_health_condition');
        $this->page['personal_references_values'] = Session::get('personal_references');
        $this->page['interview_details_values'] = Session::get('interview_details');

        $this->onSave();
    }

}
