<?php

/* C:\xampp\htdocs\newlifetrainingcenter-v2/plugins/heidimarasigan/nltc/components/applicationform/ministryinvolvement.htm */
class __TwigTemplate_46b8b1516927c5f09cc3c3cce86e52b5123a451cd3ab7657bbd8ac729da25e27 extends Twig_Template
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
\t\t<h3>Ministry Involvement</h3>
\t\t<form>\t\t
\t\t\t<div class=\"col-md-6\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Name of Ministry</h5>
\t \t\t\t\t<input type=\"text\" name=\"christian_ministry_name\" class=\"form-control\" 
\t \t\t\t\tvalue=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_ministry_name", array()), "html", null, true);
        echo "\">
\t \t\t\t</div>
\t \t\t</div>
 \t\t\t<div class=\"col-md-6\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Ministry Head</h5>
\t \t\t\t\t<input type=\"text\" name=\"christian_ministry_head\" class=\"form-control\" 
\t \t\t\t\tvalue=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_ministry_head", array()), "html", null, true);
        echo "\">
\t \t\t\t</div>
 \t\t\t</div>
 \t\t\t<div class=\"col-md-6\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Years of Stay</h5>
\t \t\t\t\t<input type=\"text\" name=\"christian_years_of_stay\" class=\"form-control\" 
\t \t\t\t\tvalue=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_years_of_stay", array()), "html", null, true);
        echo "\">
\t \t\t\t</div>
\t \t\t</div>
 \t\t\t<div class=\"col-md-6\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Responsibilities</h5>
\t \t\t\t\t<textarea name=\"christian_ministry_responsibilities\" class=\"form-control\" rows=\"5\" cols=\"10\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_ministry_responsibilities", array()), "html", null, true);
        echo "</textarea>\t \t\t\t\t
\t \t\t\t</div>
 \t\t\t</div>
 \t\t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\" >
\t \t\t\t\t<h5>Why do you want to attend NLTC?</h5>
\t \t\t\t\t<textarea name=\"christian_whyattend\" placeholder=\"Limit your answer to 2-3 sentences or 100 characters.\" class=\"form-control\" rows=\"5\" cols=\"10\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_whyattend", array()), "html", null, true);
        echo "</textarea>\t \t\t\t\t
\t \t\t\t</div>
 \t\t\t</div> \t\t
 \t\t\t<div class=\"col-md-6\" id=\"life_group\">
 \t\t\t\t<div class=\"form-group\" > \t\t\t\t
\t\t \t\t\t<div class=\"checkbox custom-checkbox\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"checkbox\" id=\"lg_leader\" name=\"christian_lifegroup_lead\" value=\"leader\"
\t\t \t\t\t\t\t";
        // line 43
        if (($this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_lifegroup_lead", array()) == "leader")) {
            // line 44
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 46
        echo "\t\t \t\t\t\t\t>I am a leader of a Life Group
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t
\t\t    \t</div>
\t\t    </div>\t
\t\t    <div class=\"col-md-6\" id=\"life_group\">
 \t\t\t\t<div class=\"form-group\" > \t\t\t\t
\t\t \t\t\t<div class=\"checkbox custom-checkbox\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"checkbox\" id=\"lg_member\" name=\"christian_lifegroup_member\" value=\"member\"
\t\t \t\t\t\t\t";
        // line 56
        if (($this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_lifegroup_member", array()) == "member")) {
            // line 57
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 59
        echo "\t\t \t\t\t\t\t>I am a member of a Life Group
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t
\t\t    \t</div>
\t\t    </div>\t 
\t\t    <div class=\"col-md-6\" id=\"date_leader\" 
\t\t    ";
        // line 65
        if (($this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_lifegroup_lead", array()) != "leader")) {
            // line 66
            echo "\t\t\t\tstyle=\"display:none;\"
\t\t\t";
        }
        // line 68
        echo "\t\t    >
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Date Started (Life Group Leader)</h5>
\t \t\t\t\t<div class='input-group date'>
\t\t \t\t\t\t<input type='text'
\t\t \t\t\t\tvalue=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_lifegroup_lead_started", array()), "html", null, true);
        echo "\"
\t\t \t\t\t\t name=\"christian_lifegroup_lead_started\" class=\"form-control\"  data-control=\"custom_picker\">
\t                    <span class=\"input-group-addon\">
\t\t                    \t<span class=\"glyphicon glyphicon-calendar\"></span>
\t            \t\t</span>\t
\t            \t</div>
\t \t\t\t</div>
\t \t\t</div>\t \t\t
 \t\t\t<div class=\"col-md-6 pull-right\" id=\"date_member\" 
 \t\t\t";
        // line 82
        if (($this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_lifegroup_member", array()) != "member")) {
            // line 83
            echo "\t\t\t\tstyle=\"display:none;\"
\t\t\t";
        }
        // line 85
        echo " \t\t\t>
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Date Started (Life Group Member)</h5>
\t \t\t\t\t<div class='input-group date'>
\t\t \t\t\t\t<input type='text'
\t\t \t\t\t\tvalue=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_lifegroup_member_started", array()), "html", null, true);
        echo "\"
\t\t \t\t\t\tname=\"christian_lifegroup_member_started\" class=\"form-control\" data-control=\"custom_picker\">
\t                    <span class=\"input-group-addon\">
\t\t                    \t<span class=\"glyphicon glyphicon-calendar\"></span>
\t            \t\t</span>\t
\t            \t</div>
\t \t\t\t</div>
\t \t\t</div>
\t \t\t
\t \t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Do you believe God is calling you to serve full time in any ministry?</h5>
\t \t\t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"christian_fulltime\" value=\"yes\"
\t\t \t\t\t\t\t";
        // line 105
        if (($this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_fulltime", array()) == "yes")) {
            // line 106
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 108
        echo "\t\t \t\t\t\t\t>Yes
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"christian_fulltime\" value=\"no\"
\t\t \t\t\t\t\t";
        // line 114
        if (($this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_fulltime", array()) == "no")) {
            // line 115
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 117
        echo "\t\t \t\t\t\t\t>No
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t\t \t\t\t
\t \t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Are you a consistent tither?</h5>
\t \t\t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"christian_tither\"
\t\t \t\t\t\t\t";
        // line 128
        if (($this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_tither", array()) == "yes")) {
            // line 129
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 131
        echo "\t\t \t\t\t\t\tvalue=\"yes\">Yes
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"christian_tither\"
\t\t \t\t\t\t\t";
        // line 137
        if (($this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_tither", array()) == "no")) {
            // line 138
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 140
        echo "\t\t \t\t\t\t\tvalue=\"no\">No
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t\t \t\t\t
\t \t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>What other ministry trainings have you attended prior to application at NLTC?</h5>
\t\t \t\t\t\t<a class=\"btn\" href=\"#\" name=\"christian_trainings\" data-request=\"";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onAddTraining\"
\t\t \t\t\t\tdata-request-update=\"'";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::training_attended':'#training_wrapper'\">
\t  \t\t\t\t\t\t<i class=\"glyphicon glyphicon-plus-sign\"></i> Add </a>\t  \t\t\t\t
\t  \t\t\t</div>\t\t\t\t
\t\t\t</div>

\t\t\t<!-- wrapper of all training attended -->
\t\t\t<div id=\"training_wrapper\">
\t\t\t\t";
        // line 156
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::training_attended")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 157
        echo "\t\t\t</div>
\t\t\t<!-- end of wrapper of all training attended -->

\t \t\t<div class=\"col-md-6\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Do you have any desire to volunteer in NLTC?</h5>
\t \t\t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"christian_ntc_volunteer\" value=\"yes\"
\t\t \t\t\t\t\t";
        // line 166
        if (($this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_ntc_volunteer", array()) == "yes")) {
            // line 167
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 168
        echo ">Yes
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"christian_ntc_volunteer\" value=\"no\"
\t\t \t\t\t\t\t";
        // line 174
        if (($this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_ntc_volunteer", array()) == "no")) {
            // line 175
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 176
        echo ">No
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t\t \t\t\t
\t \t\t\t</div>
\t\t\t</div>\t\t
\t \t\t<div class=\"col-md-6\">
 \t\t\t\t<div class=\"form-group\" > \t\t\t\t
\t\t \t\t\t<div class=\"checkbox custom-checkbox\">
\t\t \t\t\t\t<h5>If yes, please check the following areas that you see yourself serving?</h5>
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"checkbox\" name=\"christian_ntc_volunteer_area[0]\" value=\"Teachers Assistant\"
\t\t \t\t\t\t\t";
        // line 187
        if (($this->getAttribute($this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_ntc_volunteer_area", array()), 0, array(), "array") == "Teachers Assistant")) {
            // line 188
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 189
        echo ">Teachers Assistant
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"checkbox custom-checkbox\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"checkbox\" name=\"christian_ntc_volunteer_area[1]\" value=\"Sound System\"
\t\t \t\t\t\t\t";
        // line 195
        if (($this->getAttribute($this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_ntc_volunteer_area", array()), 1, array(), "array") == "Sound System")) {
            // line 196
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 197
        echo ">Sound System
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t
\t\t \t\t\t<div class=\"checkbox custom-checkbox\">\t\t \t\t\t
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"checkbox\" name=\"christian_ntc_volunteer_area[2]\" value=\"Praise and Worship\"
\t\t \t\t\t\t\t";
        // line 203
        if (($this->getAttribute($this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_ntc_volunteer_area", array()), 2, array(), "array") == "Praise and Worship")) {
            // line 204
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 205
        echo ">Praise and Worship
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"checkbox custom-checkbox\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"checkbox\" name=\"christian_ntc_volunteer_area[3]\" value=\"Ushers or Usherettes\"
\t\t \t\t\t\t\t";
        // line 211
        if (($this->getAttribute($this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "christian_ntc_volunteer_area", array()), 3, array(), "array") == "Ushers or Usherettes")) {
            // line 212
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 213
        echo ">Ushers or Usherettes
\t\t \t\t\t\t</label>\t\t
\t\t \t\t\t</div>\t\t\t
\t\t    \t</div>
\t\t    </div>\t
\t\t    <div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\" >
\t \t\t\t\t<h5>How do you plan to settle training fees on time?</h5>
\t \t\t\t\t<textarea name=\"training_fee\" class=\"form-control\" rows=\"5\" cols=\"10\">";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ministry_involvement_values"]) ? $context["ministry_involvement_values"] : null), "training_fee", array()), "html", null, true);
        echo "</textarea>\t \t\t\t\t
\t \t\t\t</div>
 \t\t\t</div> 
 \t\t\t<div class=\"col-md-6\">
\t      \t\t<div class=\"pull-left\">
\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\tdata-request=\"";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onRedirect\" data-request-data=\"page: 6\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::christianlife':'#form_wrapper'\"
\t\t\t\t\t\t\t>Back:Christian Life</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t      \t\t<div class=\"pull-right\">
\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\tdata-request-data=\"page: 6\"
\t\t\t\t\t\t\tdata-request=\"";
        // line 238
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSave\"
\t\t\t\t\t\t\tdata-request-update=\"'";
        // line 239
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::physicalhealthcondition':'#form_wrapper'\">Next:Physical and Health Condition</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
 \t\t</form>
 \t</div>
 </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\newlifetrainingcenter-v2/plugins/heidimarasigan/nltc/components/applicationform/ministryinvolvement.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 239,  374 => 238,  359 => 228,  349 => 221,  339 => 213,  335 => 212,  333 => 211,  325 => 205,  321 => 204,  319 => 203,  311 => 197,  307 => 196,  305 => 195,  297 => 189,  293 => 188,  291 => 187,  278 => 176,  274 => 175,  272 => 174,  264 => 168,  260 => 167,  258 => 166,  247 => 157,  243 => 156,  233 => 149,  229 => 148,  219 => 140,  215 => 138,  213 => 137,  205 => 131,  201 => 129,  199 => 128,  186 => 117,  182 => 115,  180 => 114,  172 => 108,  168 => 106,  166 => 105,  148 => 90,  141 => 85,  137 => 83,  135 => 82,  123 => 73,  116 => 68,  112 => 66,  110 => 65,  102 => 59,  98 => 57,  96 => 56,  84 => 46,  80 => 44,  78 => 43,  67 => 35,  58 => 29,  49 => 23,  39 => 16,  29 => 9,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* 	<div class="wrapper panel-body">*/
/* 		<h3>Ministry Involvement</h3>*/
/* 		<form>		*/
/* 			<div class="col-md-6">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Name of Ministry</h5>*/
/* 	 				<input type="text" name="christian_ministry_name" class="form-control" */
/* 	 				value="{{ ministry_involvement_values.christian_ministry_name }}">*/
/* 	 			</div>*/
/* 	 		</div>*/
/*  			<div class="col-md-6">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Ministry Head</h5>*/
/* 	 				<input type="text" name="christian_ministry_head" class="form-control" */
/* 	 				value="{{ ministry_involvement_values.christian_ministry_head }}">*/
/* 	 			</div>*/
/*  			</div>*/
/*  			<div class="col-md-6">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Years of Stay</h5>*/
/* 	 				<input type="text" name="christian_years_of_stay" class="form-control" */
/* 	 				value="{{ ministry_involvement_values.christian_years_of_stay }}">*/
/* 	 			</div>*/
/* 	 		</div>*/
/*  			<div class="col-md-6">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Responsibilities</h5>*/
/* 	 				<textarea name="christian_ministry_responsibilities" class="form-control" rows="5" cols="10">{{ ministry_involvement_values.christian_ministry_responsibilities }}</textarea>	 				*/
/* 	 			</div>*/
/*  			</div>*/
/*  			<div class="col-md-12">*/
/* 	 			<div class="form-group" >*/
/* 	 				<h5>Why do you want to attend NLTC?</h5>*/
/* 	 				<textarea name="christian_whyattend" placeholder="Limit your answer to 2-3 sentences or 100 characters." class="form-control" rows="5" cols="10">{{ ministry_involvement_values.christian_whyattend }}</textarea>	 				*/
/* 	 			</div>*/
/*  			</div> 		*/
/*  			<div class="col-md-6" id="life_group">*/
/*  				<div class="form-group" > 				*/
/* 		 			<div class="checkbox custom-checkbox">*/
/* 		 				<label>*/
/* 		 					<input type="checkbox" id="lg_leader" name="christian_lifegroup_lead" value="leader"*/
/* 		 					{% if ministry_involvement_values.christian_lifegroup_lead == "leader" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}*/
/* 		 					>I am a leader of a Life Group*/
/* 		 				</label>*/
/* 		 			</div>	*/
/* 		    	</div>*/
/* 		    </div>	*/
/* 		    <div class="col-md-6" id="life_group">*/
/*  				<div class="form-group" > 				*/
/* 		 			<div class="checkbox custom-checkbox">*/
/* 		 				<label>*/
/* 		 					<input type="checkbox" id="lg_member" name="christian_lifegroup_member" value="member"*/
/* 		 					{% if ministry_involvement_values.christian_lifegroup_member == "member" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}*/
/* 		 					>I am a member of a Life Group*/
/* 		 				</label>*/
/* 		 			</div>		*/
/* 		    	</div>*/
/* 		    </div>	 */
/* 		    <div class="col-md-6" id="date_leader" */
/* 		    {% if ministry_involvement_values.christian_lifegroup_lead != "leader" %}*/
/* 				style="display:none;"*/
/* 			{% endif %}*/
/* 		    >*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Date Started (Life Group Leader)</h5>*/
/* 	 				<div class='input-group date'>*/
/* 		 				<input type='text'*/
/* 		 				value="{{ ministry_involvement_values.christian_lifegroup_lead_started }}"*/
/* 		 				 name="christian_lifegroup_lead_started" class="form-control"  data-control="custom_picker">*/
/* 	                    <span class="input-group-addon">*/
/* 		                    	<span class="glyphicon glyphicon-calendar"></span>*/
/* 	            		</span>	*/
/* 	            	</div>*/
/* 	 			</div>*/
/* 	 		</div>	 		*/
/*  			<div class="col-md-6 pull-right" id="date_member" */
/*  			{% if ministry_involvement_values.christian_lifegroup_member != "member" %}*/
/* 				style="display:none;"*/
/* 			{% endif %}*/
/*  			>*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Date Started (Life Group Member)</h5>*/
/* 	 				<div class='input-group date'>*/
/* 		 				<input type='text'*/
/* 		 				value="{{ ministry_involvement_values.christian_lifegroup_member_started }}"*/
/* 		 				name="christian_lifegroup_member_started" class="form-control" data-control="custom_picker">*/
/* 	                    <span class="input-group-addon">*/
/* 		                    	<span class="glyphicon glyphicon-calendar"></span>*/
/* 	            		</span>	*/
/* 	            	</div>*/
/* 	 			</div>*/
/* 	 		</div>*/
/* 	 		*/
/* 	 		<div class="col-md-12">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Do you believe God is calling you to serve full time in any ministry?</h5>*/
/* 	 				<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="christian_fulltime" value="yes"*/
/* 		 					{% if ministry_involvement_values.christian_fulltime == "yes" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}*/
/* 		 					>Yes*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="christian_fulltime" value="no"*/
/* 		 					{% if ministry_involvement_values.christian_fulltime == "no" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}*/
/* 		 					>No*/
/* 		 				</label>*/
/* 		 			</div>			 			*/
/* 	 			</div>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Are you a consistent tither?</h5>*/
/* 	 				<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="christian_tither"*/
/* 		 					{% if ministry_involvement_values.christian_tither == "yes" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}*/
/* 		 					value="yes">Yes*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="christian_tither"*/
/* 		 					{% if ministry_involvement_values.christian_tither == "no" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}*/
/* 		 					value="no">No*/
/* 		 				</label>*/
/* 		 			</div>			 			*/
/* 	 			</div>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>What other ministry trainings have you attended prior to application at NLTC?</h5>*/
/* 		 				<a class="btn" href="#" name="christian_trainings" data-request="{{ __SELF__ }}::onAddTraining"*/
/* 		 				data-request-update="'{{ __SELF__ }}::training_attended':'#training_wrapper'">*/
/* 	  						<i class="glyphicon glyphicon-plus-sign"></i> Add </a>	  				*/
/* 	  			</div>				*/
/* 			</div>*/
/* */
/* 			<!-- wrapper of all training attended -->*/
/* 			<div id="training_wrapper">*/
/* 				{% partial __SELF__~'::training_attended' %}*/
/* 			</div>*/
/* 			<!-- end of wrapper of all training attended -->*/
/* */
/* 	 		<div class="col-md-6">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Do you have any desire to volunteer in NLTC?</h5>*/
/* 	 				<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="christian_ntc_volunteer" value="yes"*/
/* 		 					{% if ministry_involvement_values.christian_ntc_volunteer == "yes" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}>Yes*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="christian_ntc_volunteer" value="no"*/
/* 		 					{% if ministry_involvement_values.christian_ntc_volunteer == "no" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}>No*/
/* 		 				</label>*/
/* 		 			</div>			 			*/
/* 	 			</div>*/
/* 			</div>		*/
/* 	 		<div class="col-md-6">*/
/*  				<div class="form-group" > 				*/
/* 		 			<div class="checkbox custom-checkbox">*/
/* 		 				<h5>If yes, please check the following areas that you see yourself serving?</h5>*/
/* 		 				<label>*/
/* 		 					<input type="checkbox" name="christian_ntc_volunteer_area[0]" value="Teachers Assistant"*/
/* 		 					{% if ministry_involvement_values.christian_ntc_volunteer_area[0] == "Teachers Assistant" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}>Teachers Assistant*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="checkbox custom-checkbox">*/
/* 		 				<label>*/
/* 		 					<input type="checkbox" name="christian_ntc_volunteer_area[1]" value="Sound System"*/
/* 		 					{% if ministry_involvement_values.christian_ntc_volunteer_area[1] == "Sound System" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}>Sound System*/
/* 		 				</label>*/
/* 		 			</div>	*/
/* 		 			<div class="checkbox custom-checkbox">		 			*/
/* 		 				<label>*/
/* 		 					<input type="checkbox" name="christian_ntc_volunteer_area[2]" value="Praise and Worship"*/
/* 		 					{% if ministry_involvement_values.christian_ntc_volunteer_area[2] == "Praise and Worship" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}>Praise and Worship*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="checkbox custom-checkbox">*/
/* 		 				<label>*/
/* 		 					<input type="checkbox" name="christian_ntc_volunteer_area[3]" value="Ushers or Usherettes"*/
/* 		 					{% if ministry_involvement_values.christian_ntc_volunteer_area[3] == "Ushers or Usherettes" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}>Ushers or Usherettes*/
/* 		 				</label>		*/
/* 		 			</div>			*/
/* 		    	</div>*/
/* 		    </div>	*/
/* 		    <div class="col-md-12">*/
/* 	 			<div class="form-group" >*/
/* 	 				<h5>How do you plan to settle training fees on time?</h5>*/
/* 	 				<textarea name="training_fee" class="form-control" rows="5" cols="10">{{ ministry_involvement_values.training_fee }}</textarea>	 				*/
/* 	 			</div>*/
/*  			</div> */
/*  			<div class="col-md-6">*/
/* 	      		<div class="pull-left">*/
/* 					<div class="btn-group" role="group" aria-label="align-right">*/
/* 						<button type="button" class="btn btn-primary"*/
/* 							data-request="{{ __SELF__ }}::onRedirect" data-request-data="page: 6" data-request-update="'{{ __SELF__ }}::christianlife':'#form_wrapper'"*/
/* 							>Back:Christian Life</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-md-6">*/
/* 	      		<div class="pull-right">*/
/* 					<div class="btn-group" role="group" aria-label="align-right">*/
/* 							<button type="button" class="btn btn-primary"*/
/* 							data-request-data="page: 6"*/
/* 							data-request="{{ __SELF__ }}::onSave"*/
/* 							data-request-update="'{{ __SELF__ }}::physicalhealthcondition':'#form_wrapper'">Next:Physical and Health Condition</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/*  		</form>*/
/*  	</div>*/
/*  </div>*/
