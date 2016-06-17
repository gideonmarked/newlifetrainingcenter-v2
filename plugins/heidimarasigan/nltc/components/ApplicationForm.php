<?php namespace heidimarasigan\nltc\Components;

use Cms\Classes\ComponentBase;
//use System\Classes\CombineAssets;
use heidimarasigan\nltc\Models\Applications as ApplicationModel;
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
        $this->addCss('formwidgets/customdatepicker/assets/css/jquery-ui.css');
        $this->addCss('formwidgets/customdatepicker/assets/css/jquery-ui.structure.css');
        $this->addJs('formwidgets/customdatepicker/assets/js/jquery-1.10.2.js');
        $this->addJs('formwidgets/customdatepicker/assets/js/jquery-ui.js');

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
                    'training_type' => '',
                    'training_venue' => '',
                    'training_date' => ''
                    )
            );

         $this->page['reference'] = array(
                array(
                    'reference_name' => '',
                    'reference_relation' => '',
                    'reference_address' => '',
                    'reference_contactno' => ''
                    )
            );

        $this->page['study_progam'] = 'yahoo';

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
            'training_type' => '',
            'training_venue' => '',
            'training_date' => ''
            );

         $this->page['training'] = $training;
    }

    private function setTrainingData( $post )
    {
          // we get the values of type array training
        $training_types = $post['training_type']; 
        // we get the values of venue array training
        $training_venues = $post['training_venue']; 
        // we get the values of date array training
        $training_dates = $post['training_date']; 


        $training = array();

        for ($i=0; $i < count($training_types); $i++) {
            $training[] = array(
                    'training_type' => isset($training_types[$i]) ? $training_types[$i] : '',
                    'training_venue' => isset($training_venues[$i]) ? $training_venues[$i] : '',
                    'training_date' => isset($training_dates[$i]) ? $training_dates[$i] : ''
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
            'reference_relation' => '',
            'reference_address' => '',
            'reference_contactno' => ''
            );

         $this->page['reference'] = $reference;
    }

    private function setReferenceDetails( $post )
    {
          // we get the values of name array reference
        $reference_names = $post['reference_name']; 
        // we get the values of relation array reference
        $reference_relations = $post['reference_relation']; 
        // we get the values of address array reference
        $reference_addresses = $post['reference_address']; 
         // we get the values of contact no. array reference
        $reference_contactnos = $post['reference_contactno']; 


        $reference = array();

        for ($i=0; $i < count($reference_names); $i++) {
            $reference[] = array(
                    'reference_name' => isset($reference_names[$i]) ? $reference_names[$i] : '',
                    'reference_relation' => isset($reference_relations[$i]) ? $reference_relations[$i] : '',
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


    public function onSave()
    {
        $this->page['children'] = array(
                array(
                    'child_name' => '',
                    'child_age' => '',
                    'child_gender' => ''
                    )
            );

        $this->page['training'] = array(
                array(
                    'training_type' => '',
                    'training_venue' => '',
                    'training_date' => ''
                    )
            );

         $this->page['reference'] = array(
                array(
                    'reference_name' => '',
                    'reference_relation' => '',
                    'reference_address' => '',
                    'reference_contactno' => ''
                    )
            );
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
                    $post = post();
                    $children_json = "{";
                    $last_key = count($post["child_name"]);
                    foreach ($post["child_name"] as $key => $child_name) {
                        $children_json .= "" . "\"" . ($key+1) . "\":";
                        $children_json .= "{";
                        $children_json .= "\"" . "child_name" . "\":";
                        $children_json .= "\"" . $post["child_name"][$key] . "\",";
                        $children_json .= "\"" . "child_age" . "\":";
                        $children_json .= "\"" . $post["child_age"][$key] . "\",";
                        $children_json .= "\"" . "child_gender" . "\":";
                        $children_json .= "\"" . $post["child_gender"][$key] . "\"";
                        $children_json .= "}";
                        if ($key < $last_key-1) {
                            $children_json .= ",";
                        }
                    }
                    $children_json .= "}";
                    var_dump($children_json);
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
                {
                    $this->storeInterviewDetails( post() );
                    $this->saveData();
                }

                break;
        }
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
    }

// end function stores


    private function saveData()
    {
        $study_program = Session::get('study_program');
        $personal_information = Session::get('personal_information');

        $application_model = new ApplicationModel;
        $application_model->first_name = $personal_information['first_name'];
        $application_model->last_name = $personal_information['last_name'];



        $application_model->save();

    }

    public function onRedirect()
    {
        switch ( post('page') ) {
            case 1:
                $this->page['study_program_values'] = Session::get('study_program');
                break;
       
            case 2:
                $this->page['personal_information_values'] = Session::get('personal_information');
                break;
       
            case 3:
                $this->page['family_background_values'] = Session::get('family_background');
                break;
       
            case 4:
                $this->page['educational_background_values'] = Session::get('educational_background');
                break;
       
            case 5:
                $this->page['christian_life_values'] = Session::get('christian_life');
                break;
       
            case 6:
                $this->page['ministry_involvement_values'] = Session::get('ministry_involvement');
                break;
       
            case 7:
                $this->page['physical_health_condition_values'] = Session::get('physical_health_condition');
                break;
       
            case 8:
                $this->page['personal_references_values'] = Session::get('personal_references');
                break;

            case 9:
                $this->page['interview_details_values'] = Session::get('interview_details');
                break;
        }
    }

}