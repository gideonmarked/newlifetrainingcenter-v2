<?php

/* C:\xampp\htdocs\newlifetrainingcenter-v2/plugins/heidimarasigan/nltc/components/applicationform/personalinformation.htm */
class __TwigTemplate_162b5fe219b1993ceb530d3dd90cf81dbe9c9251c90cdc5bf98f6c6293dbc738 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"panel panel-default\">
\t<div class=\"wrapper panel-body\">
\t\t<h3>Personal Information</h3>
\t\t<form>
\t\t\t<div class=\"row\">
\t\t \t\t<div class=\"col-md-6\">
\t\t\t \t\t\t<div class=\"form-group\">
\t\t\t \t\t\t\t<h5>First Name</h5>
\t\t\t \t\t\t\t<input type=\"text\" 
\t\t\t \t\t\t\tname=\"first_name\" 
\t\t\t \t\t\t\tclass=\"form-control\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "first_name", array()), "html", null, true);
        echo "\">
\t\t\t \t\t\t</div>
\t\t \t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Middle Name</h5>
\t\t \t\t\t\t<input type=\"text\" 
\t\t \t\t\t\tname=\"middle_name\" 
\t\t \t\t\t\tclass=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "middle_name", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Last Name</h5>
\t\t \t\t\t\t<input type=\"text\" 
\t\t \t\t\t\tname=\"last_name\" 
\t\t \t\t\t\tclass=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "last_name", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-md-12\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Address</h5>
\t\t \t\t\t\t<input type=\"text\" 
\t\t \t\t\t\tname=\"address\" 
\t\t \t\t\t\tclass=\"form-control\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "address", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t\t \t\t\t<div class=\"form-group\">
\t\t\t \t\t\t\t<h5>City</h5>
\t\t\t \t\t\t\t<input type=\"text\" 
\t\t\t \t\t\t\tname=\"city\" 
\t\t\t \t\t\t\tclass=\"form-control\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "city", array()), "html", null, true);
        echo "\">
\t\t\t \t\t\t</div>
\t\t \t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>State</h5>
\t\t \t\t\t\t<input type=\"text\" 
\t\t \t\t\t\tname=\"state\" 
\t\t \t\t\t\tclass=\"form-control\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "state", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t\t \t\t\t<div class=\"form-group\">
\t\t\t \t\t\t\t<h5>Country</h5>
\t\t\t \t\t\t\t<input type=\"text\" 
\t\t\t \t\t\t\tname=\"country\" 
\t\t\t \t\t\t\tclass=\"form-control\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "country", array()), "html", null, true);
        echo "\">
\t\t\t \t\t\t</div>
\t\t \t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Citizenship</h5>
\t\t \t\t\t\t<input type=\"text\" 
\t\t \t\t\t\tname=\"citizenship\" 
\t\t \t\t\t\tclass=\"form-control\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "citizenship", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t\t \t\t\t<div class=\"form-group\">
\t\t\t \t\t\t\t<h5>Phone</h5>
\t\t\t \t\t\t\t<input type=\"text\" 
\t\t\t \t\t\t\tname=\"phone\" 
\t\t\t \t\t\t\tclass=\"form-control\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "phone", array()), "html", null, true);
        echo "\">
\t\t\t \t\t\t</div>
\t\t \t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Mobile</h5>
\t\t \t\t\t\t<input type=\"text\" 
\t\t \t\t\t\tname=\"mobile\" 
\t\t \t\t\t\tclass=\"form-control\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "mobile", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t\t \t\t\t<div class=\"form-group\">
\t\t\t \t\t\t\t<h5>Facebook</h5>
\t\t\t \t\t\t\t<input type=\"text\" 
\t\t\t \t\t\t\tname=\"facebook\" 
\t\t\t \t\t\t\tclass=\"form-control\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "facebook", array()), "html", null, true);
        echo "\">
\t\t\t \t\t\t</div>
\t\t \t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Email</h5>
\t\t \t\t\t\t<input type=\"text\" 
\t\t \t\t\t\tname=\"email\" 
\t\t \t\t\t\tclass=\"form-control\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "email", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t\t \t\t\t<div class=\"form-group\">
\t\t\t \t\t\t\t<h5>Website</h5>
\t\t\t \t\t\t\t<input type=\"text\" 
\t\t\t \t\t\t\tname=\"website\" 
\t\t\t \t\t\t\tclass=\"form-control\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "website", array()), "html", null, true);
        echo "\">
\t\t\t \t\t\t</div>
\t\t \t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Age</h5>
\t\t \t\t\t\t<input type=\"text\" 
\t\t \t\t\t\tname=\"age\" 
\t\t \t\t\t\tclass=\"form-control\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "age", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Date of Birth</h5>\t\t\t \t\t\t\t       
\t\t \t\t\t\t<div class='input-group date' >
\t\t                    <input type='text' name=\"date_of_birth\" 
\t\t                    class=\"form-control datepicker\" id='date_of_birth'
\t\t                    value=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "date_of_birth", array()), "html", null, true);
        echo "\">
\t\t                    <span class=\"input-group-addon\">
\t\t                    \t<span class=\"glyphicon glyphicon-calendar\"></span>
                \t\t\t</span>
            \t\t\t</div>
        \t\t\t</div>
        \t\t</div>\t\t\t \t\t\t\t\t\t\t
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Place of Birth</h5>
\t\t \t\t\t\t<input type=\"text\" 
\t\t \t\t\t\tname=\"place_of_birth\" 
\t\t \t\t\t\tclass=\"form-control\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "place_of_birth", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Gender</h5>
\t\t \t\t\t\t<div class=\"radio\">
\t\t\t \t\t\t\t<label>
\t\t\t \t\t\t\t\t<input type=\"radio\" name=\"gender\" value=\"Male\"  
\t\t\t \t\t\t\t\t";
        // line 145
        if (($this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "gender", array()) == "Male")) {
            // line 146
            echo "\t\t\t\t    \t\t\tchecked=\"checked\"
\t\t\t\t    \t\t\t";
        }
        // line 148
        echo "\t\t\t\t    \t\t\t>Male
\t\t\t \t\t\t\t</label>
\t\t\t \t\t\t</div>
\t\t\t \t\t\t<div class=\"radio\">
\t\t\t \t\t\t\t<label>
\t\t\t \t\t\t\t\t<input type=\"radio\" name=\"gender\" value=\"Female\" 
\t\t\t \t\t\t\t\t";
        // line 154
        if (($this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "gender", array()) == "Female")) {
            // line 155
            echo "\t\t\t \t\t\t\t\tchecked=\"checked\"
\t\t\t\t    \t\t\t";
        }
        // line 157
        echo "\t\t\t \t\t\t\t\t>Female
\t\t\t \t\t\t\t</label>
\t\t\t \t\t\t</div>\t\t\t \t\t\t
\t\t \t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Civil Status</h5>
\t\t \t\t\t\t<div class=\"dropdown\">\t
\t\t \t\t\t\t\t<select name=\"civil_status\" 
\t\t \t\t\t\t\tclass=\"form-control\">
\t\t \t\t\t\t\t\t<option> --Select item from list--</option>
\t\t \t\t\t\t\t\t<option value = \"Single\"
\t\t \t\t\t\t\t\t";
        // line 170
        if (($this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "civil_status", array()) == "Single")) {
            // line 171
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 173
        echo "\t\t \t\t\t\t\t\t>Single</option>
\t\t\t\t\t\t        <option value = \"Married\"
\t\t\t\t\t\t        ";
        // line 175
        if (($this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "civil_status", array()) == "Married")) {
            // line 176
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 178
        echo "\t\t\t\t\t\t        >Married</option>
\t\t\t\t\t\t        <option value = \"Separated\"
\t\t\t\t\t\t        ";
        // line 180
        if (($this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "civil_status", array()) == "Separated")) {
            // line 181
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 183
        echo "\t\t\t\t    \t\t\t>Separated</option>
\t\t\t\t\t\t        <option value = \"Widowed\"
\t\t\t\t\t\t        ";
        // line 185
        if (($this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "civil_status", array()) == "Widowed")) {
            // line 186
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 188
        echo "\t\t\t\t    \t\t\t>Widowed</option>
\t\t\t\t\t\t        <option value = \"Remarried\" 
\t\t\t\t\t\t        ";
        // line 190
        if (($this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "civil_status", array()) == "Remarried")) {
            // line 191
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 193
        echo "\t\t\t\t    \t\t\t>Remarried</option>
\t\t \t\t\t\t\t</select>
\t\t \t\t\t\t</div>
\t\t \t\t\t</div>
\t\t \t\t</div>\t
\t\t \t\t<div class=\"row\">
\t\t \t\t\t<div class=\" col-md-12\">
\t\t\t \t\t<div class=\"col-md-6\">
\t\t\t \t\t\t<div class=\"form-group\">
\t\t\t \t\t\t\t<h5>Occupational Field</h5>
\t\t\t \t\t\t\t<div class=\"dropdown\">\t
\t\t\t \t\t\t\t\t<select name=\"occupational_field\" class=\"form-control\">
\t\t\t \t\t\t\t\t\t";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "getOccupationList", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["occupational_field"]) {
            // line 206
            echo "\t\t\t                    \t<option value=\"";
            echo twig_escape_filter($this->env, $context["occupational_field"], "html", null, true);
            echo "\"
\t\t\t                    \t";
            // line 207
            if (($this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "occupational_field", array()) == $context["occupational_field"])) {
                echo " 
\t\t\t                    \tselected=\"selected\" 
\t\t\t                    \t";
            }
            // line 210
            echo "\t\t\t                    \t>
\t\t\t                    \t";
            // line 211
            echo twig_escape_filter($this->env, $context["occupational_field"], "html", null, true);
            echo "
\t\t\t                    \t</option>
\t\t\t                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['occupational_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "\t\t\t \t\t\t\t\t</select>
\t\t\t \t\t\t\t</div>
\t\t\t \t\t\t</div>\t\t \t\t\t
\t\t \t\t\t</div>\t\t \t\t\t\t
\t\t\t \t\t<div class=\"col-md-6\">
\t\t\t \t\t\t<div class=\"form-group\">        
\t\t\t \t\t\t\t<h5>Specific Function / Role</h5>
\t\t\t \t\t\t\t<input type=\"text\" name=\"role\" placeholder=\"eg. Finance Manager\" 
\t\t\t \t\t\t\tclass=\"form-control\" autocomplete=\"off\" maxlength=\"255\" value=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "role", array()), "html", null, true);
        echo "\">
\t\t\t \t\t\t</div>
\t\t\t \t\t</div>\t
\t\t\t \t\t</div> \t
\t\t \t\t</div>
\t\t \t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\" id=\"Form-field-Applications-travelling-group\">
\t\t \t\t\t\t<h5>Does your present occupation involve travelling out of town / the country?</h5>
\t\t \t\t\t\t<div class=\"radio\">
\t\t\t \t\t\t\t<label>
\t\t\t \t\t\t\t\t<input type=\"radio\" name=\"travelling\" value=\"yes\"  onclick=\"\$('#travel_details').show();\" 
\t\t\t \t\t\t\t\t";
        // line 233
        if (($this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "travelling", array()) == "yes")) {
            // line 234
            echo "\t\t\t\t    \t\t\tchecked=\"checked\"
\t\t\t\t    \t\t\t";
        }
        // line 236
        echo "\t\t\t\t    \t\t\t>Yes
\t\t\t \t\t\t\t</label>
\t\t\t \t\t\t</div>
\t\t\t \t\t\t<div class=\"radio\">
\t\t\t \t\t\t\t<label>
\t\t\t \t\t\t\t\t<input type=\"radio\" name=\"travelling\" value=\"no\" onclick=\"\$('#travel_details').hide();\" 
\t\t\t \t\t\t\t\t";
        // line 242
        if (($this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "travelling", array()) == "no")) {
            // line 243
            echo "\t\t\t\t    \t\t\tchecked=\"checked\"
\t\t\t\t    \t\t\t";
        }
        // line 245
        echo "\t\t\t\t    \t\t\t>No
\t\t\t \t\t\t\t</label>
\t\t\t \t\t\t</div>\t\t\t \t\t\t
\t\t \t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\" id=\"travel_details\" 
\t\t\t\t";
        // line 251
        if (($this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "travelling", array()) != "yes")) {
            // line 252
            echo "\t\t\t\tstyle=\"display:none;\"
\t\t\t\t";
        }
        // line 253
        echo "\t>\t\t\t
\t\t\t\t\t<div class=\"form-group  dropdown-field span-right\" name=\"travelling_frequency\" data-field-name=\"travel_details\" data-trigger=\"[name=\"application_travelling\"]\" data-trigger-action=\"show\" data-trigger-condition=\"value[yes]\" data-trigger-closest-parent=\"form\" id=\"Form-field-Applications-travelling_frequency-group\">
\t\t\t\t\t<h5>How often (Please specify)?</h5>
\t\t\t\t\t<!-- Dropdown -->
\t\t\t\t\t\t<select id=\"Form-field-Applications-travelling_frequency\" name=\"travel_details\" class=\"form-control custom-select select2-hidden-accessible\" data-disposable=\"data-disposable\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t        <option value=\"Weekly\"
\t\t\t\t\t        ";
        // line 259
        if (($this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "travel_details", array()) == "Weekly")) {
            // line 260
            echo "\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t    \t\t\t";
        }
        // line 262
        echo "\t\t\t    \t\t\t>Weekly</option>
\t\t\t\t\t        <option value=\"Monthly\" 
\t\t\t\t\t        ";
        // line 264
        if (($this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "travel_details", array()) == "Monthly")) {
            // line 265
            echo "\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t    \t\t\t";
        }
        // line 267
        echo "\t\t\t    \t\t\t>Monthly</option>
\t\t\t\t\t        <option value=\"Annually\"  ";
        // line 268
        if (($this->getAttribute((isset($context["personal_information_values"]) ? $context["personal_information_values"] : null), "travel_details", array()) == "Annually")) {
            // line 269
            echo "\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t    \t\t\t";
        }
        // line 271
        echo "\t\t\t    \t\t\t>Annually</option>
\t\t\t\t\t\t</select>            \t\t
\t\t\t\t\t</div>\t
            \t</div>
\t\t \t</div>\t
\t\t  
\t      \t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"btn-group  pull-left\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\tdata-request=\"";
        // line 280
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onRedirect\" data-request-data=\"page: 2\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::studyprogram':'#form_wrapper'\"
\t\t\t\t\t\t\t>Back:Study Program</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"btn-group  pull-right\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\tdata-request-data=\"page: 2\"
\t\t\t\t\t\tdata-request=\"";
        // line 288
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSave\"
\t\t\t\t\t\tdata-request-update=\"'";
        // line 289
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::familybackground':'#form_wrapper'\">Next:Family Background</button> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t </form>\t\t
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\newlifetrainingcenter-v2/plugins/heidimarasigan/nltc/components/applicationform/personalinformation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 289,  450 => 288,  437 => 280,  426 => 271,  422 => 269,  420 => 268,  417 => 267,  413 => 265,  411 => 264,  407 => 262,  403 => 260,  401 => 259,  393 => 253,  389 => 252,  387 => 251,  379 => 245,  375 => 243,  373 => 242,  365 => 236,  361 => 234,  359 => 233,  345 => 222,  335 => 214,  326 => 211,  323 => 210,  317 => 207,  312 => 206,  308 => 205,  294 => 193,  290 => 191,  288 => 190,  284 => 188,  280 => 186,  278 => 185,  274 => 183,  270 => 181,  268 => 180,  264 => 178,  260 => 176,  258 => 175,  254 => 173,  250 => 171,  248 => 170,  233 => 157,  229 => 155,  227 => 154,  219 => 148,  215 => 146,  213 => 145,  201 => 136,  186 => 124,  174 => 115,  163 => 107,  152 => 99,  141 => 91,  130 => 83,  119 => 75,  108 => 67,  97 => 59,  86 => 51,  75 => 43,  64 => 35,  53 => 27,  42 => 19,  31 => 11,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* 	<div class="wrapper panel-body">*/
/* 		<h3>Personal Information</h3>*/
/* 		<form>*/
/* 			<div class="row">*/
/* 		 		<div class="col-md-6">*/
/* 			 			<div class="form-group">*/
/* 			 				<h5>First Name</h5>*/
/* 			 				<input type="text" */
/* 			 				name="first_name" */
/* 			 				class="form-control" value="{{ personal_information_values.first_name }}">*/
/* 			 			</div>*/
/* 		 		</div>*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Middle Name</h5>*/
/* 		 				<input type="text" */
/* 		 				name="middle_name" */
/* 		 				class="form-control" value="{{ personal_information_values.middle_name }}">*/
/* 		 			</div>*/
/* 	 			</div>*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Last Name</h5>*/
/* 		 				<input type="text" */
/* 		 				name="last_name" */
/* 		 				class="form-control" value="{{ personal_information_values.last_name }}">*/
/* 		 			</div>*/
/* 	 			</div>*/
/* 	 			<div class="col-md-12">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Address</h5>*/
/* 		 				<input type="text" */
/* 		 				name="address" */
/* 		 				class="form-control" value="{{ personal_information_values.address }}">*/
/* 		 			</div>*/
/* 	 			</div>*/
/* 	 			<div class="col-md-6">*/
/* 			 			<div class="form-group">*/
/* 			 				<h5>City</h5>*/
/* 			 				<input type="text" */
/* 			 				name="city" */
/* 			 				class="form-control" value="{{ personal_information_values.city }}">*/
/* 			 			</div>*/
/* 		 		</div>*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>State</h5>*/
/* 		 				<input type="text" */
/* 		 				name="state" */
/* 		 				class="form-control" value="{{ personal_information_values.state }}">*/
/* 		 			</div>*/
/* 	 			</div>*/
/* 	 			<div class="col-md-6">*/
/* 			 			<div class="form-group">*/
/* 			 				<h5>Country</h5>*/
/* 			 				<input type="text" */
/* 			 				name="country" */
/* 			 				class="form-control" value="{{ personal_information_values.country }}">*/
/* 			 			</div>*/
/* 		 		</div>*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Citizenship</h5>*/
/* 		 				<input type="text" */
/* 		 				name="citizenship" */
/* 		 				class="form-control" value="{{ personal_information_values.citizenship }}">*/
/* 		 			</div>*/
/* 	 			</div>*/
/* 	 			<div class="col-md-6">*/
/* 			 			<div class="form-group">*/
/* 			 				<h5>Phone</h5>*/
/* 			 				<input type="text" */
/* 			 				name="phone" */
/* 			 				class="form-control" value="{{ personal_information_values.phone }}">*/
/* 			 			</div>*/
/* 		 		</div>*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Mobile</h5>*/
/* 		 				<input type="text" */
/* 		 				name="mobile" */
/* 		 				class="form-control" value="{{ personal_information_values.mobile }}">*/
/* 		 			</div>*/
/* 	 			</div>*/
/* 	 			<div class="col-md-6">*/
/* 			 			<div class="form-group">*/
/* 			 				<h5>Facebook</h5>*/
/* 			 				<input type="text" */
/* 			 				name="facebook" */
/* 			 				class="form-control" value="{{ personal_information_values.facebook }}">*/
/* 			 			</div>*/
/* 		 		</div>*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Email</h5>*/
/* 		 				<input type="text" */
/* 		 				name="email" */
/* 		 				class="form-control" value="{{ personal_information_values.email }}">*/
/* 		 			</div>*/
/* 	 			</div>*/
/* 	 			<div class="col-md-6">*/
/* 			 			<div class="form-group">*/
/* 			 				<h5>Website</h5>*/
/* 			 				<input type="text" */
/* 			 				name="website" */
/* 			 				class="form-control" value="{{ personal_information_values.website }}">*/
/* 			 			</div>*/
/* 		 		</div>*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Age</h5>*/
/* 		 				<input type="text" */
/* 		 				name="age" */
/* 		 				class="form-control" value="{{ personal_information_values.age }}">*/
/* 		 			</div>*/
/* 	 			</div>*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Date of Birth</h5>			 				       */
/* 		 				<div class='input-group date' >*/
/* 		                    <input type='text' name="date_of_birth" */
/* 		                    class="form-control datepicker" id='date_of_birth'*/
/* 		                    value="{{ personal_information_values.date_of_birth }}">*/
/* 		                    <span class="input-group-addon">*/
/* 		                    	<span class="glyphicon glyphicon-calendar"></span>*/
/*                 			</span>*/
/*             			</div>*/
/*         			</div>*/
/*         		</div>			 							*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Place of Birth</h5>*/
/* 		 				<input type="text" */
/* 		 				name="place_of_birth" */
/* 		 				class="form-control" value="{{ personal_information_values.place_of_birth }}">*/
/* 		 			</div>*/
/* 	 			</div>*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Gender</h5>*/
/* 		 				<div class="radio">*/
/* 			 				<label>*/
/* 			 					<input type="radio" name="gender" value="Male"  */
/* 			 					{% if personal_information_values.gender == "Male" %}*/
/* 				    			checked="checked"*/
/* 				    			{% endif %}*/
/* 				    			>Male*/
/* 			 				</label>*/
/* 			 			</div>*/
/* 			 			<div class="radio">*/
/* 			 				<label>*/
/* 			 					<input type="radio" name="gender" value="Female" */
/* 			 					{% if personal_information_values.gender == "Female" %}*/
/* 			 					checked="checked"*/
/* 				    			{% endif %}*/
/* 			 					>Female*/
/* 			 				</label>*/
/* 			 			</div>			 			*/
/* 		 			</div>*/
/* 				</div>*/
/* 				<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Civil Status</h5>*/
/* 		 				<div class="dropdown">	*/
/* 		 					<select name="civil_status" */
/* 		 					class="form-control">*/
/* 		 						<option> --Select item from list--</option>*/
/* 		 						<option value = "Single"*/
/* 		 						{% if personal_information_values.civil_status == "Single" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 		 						>Single</option>*/
/* 						        <option value = "Married"*/
/* 						        {% if personal_information_values.civil_status == "Married" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 						        >Married</option>*/
/* 						        <option value = "Separated"*/
/* 						        {% if personal_information_values.civil_status == "Separated" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 				    			>Separated</option>*/
/* 						        <option value = "Widowed"*/
/* 						        {% if personal_information_values.civil_status == "Widowed" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 				    			>Widowed</option>*/
/* 						        <option value = "Remarried" */
/* 						        {% if personal_information_values.civil_status == "Remarried" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 				    			>Remarried</option>*/
/* 		 					</select>*/
/* 		 				</div>*/
/* 		 			</div>*/
/* 		 		</div>	*/
/* 		 		<div class="row">*/
/* 		 			<div class=" col-md-12">*/
/* 			 		<div class="col-md-6">*/
/* 			 			<div class="form-group">*/
/* 			 				<h5>Occupational Field</h5>*/
/* 			 				<div class="dropdown">	*/
/* 			 					<select name="occupational_field" class="form-control">*/
/* 			 						{% for occupational_field in __SELF__.getOccupationList() %}*/
/* 			                    	<option value="{{ occupational_field }}"*/
/* 			                    	{% if personal_information_values.occupational_field == occupational_field %} */
/* 			                    	selected="selected" */
/* 			                    	{% endif %}*/
/* 			                    	>*/
/* 			                    	{{ occupational_field }}*/
/* 			                    	</option>*/
/* 			                    {% endfor %}*/
/* 			 					</select>*/
/* 			 				</div>*/
/* 			 			</div>		 			*/
/* 		 			</div>		 				*/
/* 			 		<div class="col-md-6">*/
/* 			 			<div class="form-group">        */
/* 			 				<h5>Specific Function / Role</h5>*/
/* 			 				<input type="text" name="role" placeholder="eg. Finance Manager" */
/* 			 				class="form-control" autocomplete="off" maxlength="255" value="{{ personal_information_values.role }}">*/
/* 			 			</div>*/
/* 			 		</div>	*/
/* 			 		</div> 	*/
/* 		 		</div>*/
/* 		 		<div class="col-md-6">*/
/* 		 			<div class="form-group" id="Form-field-Applications-travelling-group">*/
/* 		 				<h5>Does your present occupation involve travelling out of town / the country?</h5>*/
/* 		 				<div class="radio">*/
/* 			 				<label>*/
/* 			 					<input type="radio" name="travelling" value="yes"  onclick="$('#travel_details').show();" */
/* 			 					{% if personal_information_values.travelling == "yes" %}*/
/* 				    			checked="checked"*/
/* 				    			{% endif %}*/
/* 				    			>Yes*/
/* 			 				</label>*/
/* 			 			</div>*/
/* 			 			<div class="radio">*/
/* 			 				<label>*/
/* 			 					<input type="radio" name="travelling" value="no" onclick="$('#travel_details').hide();" */
/* 			 					{% if personal_information_values.travelling == "no" %}*/
/* 				    			checked="checked"*/
/* 				    			{% endif %}*/
/* 				    			>No*/
/* 			 				</label>*/
/* 			 			</div>			 			*/
/* 		 			</div>*/
/* 				</div>*/
/* 				<div class="col-md-6" id="travel_details" */
/* 				{% if personal_information_values.travelling  != "yes" %}*/
/* 				style="display:none;"*/
/* 				{% endif %}	>			*/
/* 					<div class="form-group  dropdown-field span-right" name="travelling_frequency" data-field-name="travel_details" data-trigger="[name="application_travelling"]" data-trigger-action="show" data-trigger-condition="value[yes]" data-trigger-closest-parent="form" id="Form-field-Applications-travelling_frequency-group">*/
/* 					<h5>How often (Please specify)?</h5>*/
/* 					<!-- Dropdown -->*/
/* 						<select id="Form-field-Applications-travelling_frequency" name="travel_details" class="form-control custom-select select2-hidden-accessible" data-disposable="data-disposable" tabindex="-1" aria-hidden="true">*/
/* 					        <option value="Weekly"*/
/* 					        {% if personal_information_values.travel_details == "Weekly" %}*/
/* 		 					selected="selected"*/
/* 			    			{% endif %}*/
/* 			    			>Weekly</option>*/
/* 					        <option value="Monthly" */
/* 					        {% if personal_information_values.travel_details == "Monthly" %}*/
/* 		 					selected="selected"*/
/* 			    			{% endif %}*/
/* 			    			>Monthly</option>*/
/* 					        <option value="Annually"  {% if personal_information_values.travel_details == "Annually" %}*/
/* 		 					selected="selected"*/
/* 			    			{% endif %}*/
/* 			    			>Annually</option>*/
/* 						</select>            		*/
/* 					</div>	*/
/*             	</div>*/
/* 		 	</div>	*/
/* 		  */
/* 	      		<div class="col-md-6">*/
/* 					<div class="btn-group  pull-left" role="group" aria-label="align-right">*/
/* 						<button type="button" class="btn btn-primary"*/
/* 							data-request="{{ __SELF__ }}::onRedirect" data-request-data="page: 2" data-request-update="'{{ __SELF__ }}::studyprogram':'#form_wrapper'"*/
/* 							>Back:Study Program</button>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-md-6">*/
/* 					<div class="btn-group  pull-right" role="group" aria-label="align-right">*/
/* 						<button type="button" class="btn btn-primary"*/
/* 						data-request-data="page: 2"*/
/* 						data-request="{{ __SELF__ }}::onSave"*/
/* 						data-request-update="'{{ __SELF__ }}::familybackground':'#form_wrapper'">Next:Family Background</button> */
/* 					</div>*/
/* 				</div>*/
/* 			*/
/* 		 </form>		*/
/* 	</div>*/
/* </div>*/
