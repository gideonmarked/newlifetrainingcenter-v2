<?php namespace Grinkomeda\Enrollment\Components;

use Cms\Classes\ComponentBase;
use Backend\Classes\WidgetManager;
use Grinkomeda\Enrollment\Controllers\StudentProfiles;

class Application extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Application',
            'description' => 'Enrollment form for New Life Training Center'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        WidgetManager::instance()->registerFormWidgets(function ($manager) {
            $manager->registerFormWidget('Backend\FormWidgets\Repeater', [
                'label' => 'Repeater',
                'code'  => 'repeater'
            ]);
        });

        // Build a back-end form with the context of ‘frontend’
        $formController = new StudentProfiles();
        $formController->create('frontend');

        // Append the formController to the page
        $this->page['form'] = $formController;

        // Basic form CSS
        $this->addCss('/modules/system/assets/ui/storm.css', 'core');
        $this->addCss('/modules/backend/formwidgets/repeater/assets/css/repeater.css', 'core');

        // Trigger API
        $this->addJs('/modules/system/assets/ui/js/input.trigger.js', 'core');

        // Tab system
        $this->addJs('/modules/system/assets/ui/js/foundation.baseclass.js', 'core');
        $this->addJs('/modules/system/assets/ui/js/foundation.controlutils.js', 'core');
        $this->addJs('/modules/backend/assets/js/vendor/jquery.touchwipe.js', 'core');
        $this->addJs('/modules/system/assets/ui/vendor/mousewheel/mousewheel.js', 'core');
        $this->addJs('/modules/system/assets/ui/js/drag.scroll.js', 'core');
        $this->addJs('/modules/system/assets/ui/js/toolbar.js', 'core');
        $this->addJs('/modules/system/assets/ui/js/tab.js', 'core');

        // DependsOn
        $this->addJs('/modules/system/assets/ui/js/loader.base.js', 'core');
        $this->addJs('/modules/backend/widgets/form/assets/js/october.form.js', 'core');
    }

}