<?php namespace Grinkomeda\Enrollment;

use System\Classes\PluginBase;
use App;
use Event;
use Backend;
use System;
use Backend\Models\User as BackendUserModel;
use Backend\Controllers\Users as BackendUsersController;
use Grinkomeda\Enrollment\Models\HandledSubjects as HandledSubjectsModel; 

/**
 * System Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Enrollment',
            'description' => 'Enrollment Form for New Life Training Center',
            'author'      => 'Grinkomeda',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerPermissions()
    {
        return [
            'grinkomeda.enrollment.access_subject' => [
                'label' => 'Manage the subjects',
                'tab' => 'Subjects'
            ]
        ];
    }

    public function registerNavigation()
    {
        return [
            'enrollment'      => 
            [
                'label'                 => 'Enrollment System',
                'url'                   => Backend::url('grinkomeda/enrollment/Subject'),
                'icon'                  => 'icon-university',
                'permissions'           => ['grinkomeda.enrollment.access_subject'],
                'order'                 => 500,
                'sideMenu'              => [
                    'subjects'              => [
                        'label'                 => 'Subjects',
                        'url'                   => Backend::url('grinkomeda/enrollment/Subject'),
                        'icon'                  => 'icon-book',
                        'permissions'           => ['grinkomeda.enrollment.access_subject'],
                    ],

                    'curriculum'              => [
                        'label'                 => 'Curriculum',
                        'url'                   => Backend::url('grinkomeda/enrollment/Curriculums'),
                        'icon'                  => 'icon-book',
                        'permissions'           => ['enrollment.*'],
                    ],

                    'faculty'               => [
                        'label'                 => 'Faculty',
                        'url'                   => Backend::url('grinkomeda/enrollment/Faculty'),
                        'icon'                  => 'icon-briefcase',
                        'permissions'           => ['enrollment.*'],
                    ],

                    'student_profiles'          => [
                        'label'                 => 'StudentProfiles',
                        'url'                   => Backend::url('grinkomeda/enrollment/StudentProfiles'),
                        'icon'                  => 'icon-briefcase',
                        'permissions'           => ['enrollment.*'],
                    ],

                    'spouses'          => [
                        'label'                 => 'Spouses',
                        'url'                   => Backend::url('grinkomeda/enrollment/Spouses'),
                        'icon'                  => 'icon-briefcase',
                        'permissions'           => ['enrollment.*'],
                    ],
                ]
            ],

            'myaccount'      => 
            [
                'label'                 => 'My Account',
                'url'                   => Backend::url('backend/users/myaccount'),
                'icon'                  => 'icon-user-secret',
                'permissions'           => ['grinkomeda.enrollment.access_subject'],
                'order'                 => 500,
            ],
        ]   ;
    }

    public function registerComponents()
    {
        return [
            'Grinkomeda\Enrollment\Components\ApplicationForm'       => 'applicationform',
            'Grinkomeda\Enrollment\Components\SpouseForm'       => 'spouseform',
            'Grinkomeda\Enrollment\Components\ChildForm'       => 'childform',
            'Grinkomeda\Enrollment\Components\EducationForm'       => 'educationform',
            'Grinkomeda\Enrollment\Components\InterviewForm'       => 'interviewform',
        ];
    }

    public function boot()
    {
        // BackendUserModel::extend(function($model){
        //     $model->hasOne['handledSubjects'] = ['Grinkomeda\Enrollment\Models\HandledSubjects'];
        // });

        // BackendUsersController::extendFormFields(function($form, $model ,$context){

        //     if(!$model instanceOf BackendUserModel)
        //         return;

            

        //     if(!$model->exists)
        //         return;

        //     HandledSubjectsModel::getHandledSubjectsFromUser($model);

        //     $form->addTabFields([

        //         'handledSubjects[about_me]' =>
        //         [
        //             'label' => 'About Me',
        //             'tab' => 'Handled Subjects',
        //             'type' => 'textarea',
        //         ],
        //         'handledSubjects[interests]' =>
        //         [
        //             'label' => 'Interests',
        //             'tab' => 'Handled Subjects',
        //             'type' => 'textarea',
        //         ],
        //         'handledSubjects[books]' =>
        //         [
        //             'label' => 'Books',
        //             'tab' => 'Handled Subjects',
        //             'type' => 'textarea',
        //         ],
        //         'handledSubjects[music]' =>
        //         [
        //             'label' => 'Music',
        //             'tab' => 'Handled Subjects',
        //             'type' => 'textarea',
        //         ],

        //     ]);

        // });
    }

}
