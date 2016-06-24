<?php namespace HeidiMarasigan\Nltc\FormWidgets;

use Carbon\Carbon;
use Backend\Classes\FormField;
use Backend\Classes\FormWidgetBase;

/**
 * Custom Date Picker
 * Renders a date picker field.
 *
 * @package heidimarasigan\backend
 * @author Alexey Bobkov, Samuel Georges
 */
class CustomDatePicker extends FormWidgetBase
{

    /**
     * @var string the minimum/earliest date that can be selected.
     */
    public $minDate = '1940-01-01';

    /**
     * @var string the maximum/latest date that can be selected.
     */
    public $maxDate = '2020-12-31';

    /**
     * {@inheritDoc}
     */
    protected $defaultAlias = 'customdatepicker';

    /**
     * {@inheritDoc}
     */
    public function init()
    {
        $this->fillFromConfig([
            'minDate',
            'maxDate',
            'disabledDates'
        ]);

        $this->minDate = is_integer($this->minDate)
            ? Carbon::createFromTimestamp($this->minDate)
            : Carbon::parse($this->minDate);

        $this->maxDate = is_integer($this->maxDate)
            ? Carbon::createFromTimestamp($this->maxDate)
            : Carbon::parse($this->maxDate);
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('customdatepicker');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;

        if ($value = $this->getLoadValue()) {


            if (is_string($value)) {
                $value = substr($value, 0, 10);
            }
            elseif (is_object($value)) {
                $value = $value->toDateString();
            }

        }

        $this->vars['value'] = $value ?: '';
        $this->vars['field'] = $this->formField;
        $this->vars['minDate'] = $this->minDate;
        $this->vars['maxDate'] = $this->maxDate;
    }

    /**
     * {@inheritDoc}
     */
    public function loadAssets()
    {
        $this->addCss('css/jquery-ui.css', 'core');
        $this->addCss('css/jquery-ui.structure.css', 'core');
        $this->addJs('js/jquery-1.10.2.js', 'core');
        $this->addJs('js/jquery-ui.js', 'core');
        $this->addCss('css/customdatepicker.css', 'HeidiMarasigan.Nltc');
        $this->addJs('js/customdatepicker.js', 'HeidiMarasigan.Nltc');
    }

    /**
     * {@inheritDoc}
     */
    public function getSaveValue($value)
    {
        return $value;
    }

    

}
