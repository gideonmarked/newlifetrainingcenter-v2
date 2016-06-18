<?php

/* C:\xampp\htdocs\nltcv2/plugins/heidimarasigan/nltc/components/applicationform/interviewdetails.htm */
class __TwigTemplate_365a163238c6e03430b96a90bb7ac124f031842e451556097634e1bd090921f3 extends Twig_Template
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
\t\t<h3>Interview Details</h3>
\t\t<form>
\t\t\t<div class=\"row\">
\t\t \t \t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Interview Date</h5>\t\t\t \t\t\t\t       
\t\t \t\t\t\t<div class='input-group date' id='scheduled_date'>
\t\t                    <input type='text' class=\"form-control datepicker\" name=\"interview_date\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["interview_details_values"]) ? $context["interview_details_values"] : null), "interview_date", array()), "html", null, true);
        echo "\">
\t\t                    <span class=\"input-group-addon\">
\t\t                    \t<span class=\"glyphicon glyphicon-calendar\"></span>
                \t\t\t</span>
            \t\t\t</div>
        \t\t\t</div>
        \t\t\t<p class=\"help-block\">Available Dates:  June 1-2, 8-9, 15-16, 22-23, 29-30 /  July 6-7, 13-14, 20-21, 27-28 [Days: every Wednesdays and Thursdays only]</p>
\t            </div>\t\t\t \t\t\t\t\t\t\t
\t            <div class=\"col-md-6\">
\t            \t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Interview Time</h5>\t
\t\t \t\t\t\t<div class=\"dropdown-toggle\" data-toggle=\"dropdown\">\t
\t\t \t\t\t\t\t<select id=\"appt_time\" name=\"interview_time\" class=\"form-control\">
\t\t \t\t\t\t\t\t<option> --Select time from list--</option>
\t\t \t\t\t\t\t\t<option value=\"09:00 am\" 
\t\t \t\t\t\t\t\t";
        // line 25
        if (($this->getAttribute((isset($context["interview_details_values"]) ? $context["interview_details_values"] : null), "interview_time", array()) == "09:00 am")) {
            // line 26
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 28
        echo "\t\t\t\t    \t\t\t>09:00 am</option>
\t\t\t\t\t\t        <option value=\"10:00am\" 
\t\t \t\t\t\t\t\t";
        // line 30
        if (($this->getAttribute((isset($context["interview_details_values"]) ? $context["interview_details_values"] : null), "interview_time", array()) == "10:00am")) {
            // line 31
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 33
        echo "\t\t\t\t    \t\t\t>10:00am</option>
\t\t\t\t\t\t        <option value=\"11:00 am\" 
\t\t \t\t\t\t\t\t";
        // line 35
        if (($this->getAttribute((isset($context["interview_details_values"]) ? $context["interview_details_values"] : null), "interview_time", array()) == "11:00 am")) {
            // line 36
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 38
        echo "\t\t\t\t    \t\t\t>11:00 am</option>
\t\t\t\t\t\t        <option value=\"02:00 pm\" 
\t\t \t\t\t\t\t\t";
        // line 40
        if (($this->getAttribute((isset($context["interview_details_values"]) ? $context["interview_details_values"] : null), "interview_time", array()) == "02:00 pm")) {
            // line 41
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 43
        echo "\t\t\t\t    \t\t\t>02:00 pm</option>
\t\t\t\t\t\t        <option value=\"03:00 pm\" 
\t\t \t\t\t\t\t\t";
        // line 45
        if (($this->getAttribute((isset($context["interview_details_values"]) ? $context["interview_details_values"] : null), "interview_time", array()) == "03:00 pm")) {
            // line 46
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 48
        echo "\t\t\t\t    \t\t\t>03:00 pm</option>\t\t\t\t\t\t        
\t\t\t\t\t\t        <option value=\"04:00 pm\" 
\t\t \t\t\t\t\t\t";
        // line 50
        if (($this->getAttribute((isset($context["interview_details_values"]) ? $context["interview_details_values"] : null), "interview_time", array()) == "04:00 pm")) {
            // line 51
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 53
        echo "\t\t\t\t    \t\t\t>04:00 pm</option>\t\t\t\t\t\t        
\t\t \t\t\t\t\t</select>
\t\t \t\t\t\t</div>
\t            \t</div> 
        \t\t</div>        
            </div>
            <div class=\"col-md-6\">
\t      \t\t<div class=\"pull-left\">
\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\tdata-request=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onRedirect\" data-request-data=\"page: 9\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::personalreferences':'#form_wrapper'\"
\t\t\t\t\t\t\t>Back:Personal References</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t      \t\t<div class=\"pull-right\">
\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\tdata-request-data=\"page: 9\"
\t\t\t\t\t\t\tdata-request=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSave\">Confirm</button> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</form>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nltcv2/plugins/heidimarasigan/nltc/components/applicationform/interviewdetails.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 73,  116 => 63,  104 => 53,  100 => 51,  98 => 50,  94 => 48,  90 => 46,  88 => 45,  84 => 43,  80 => 41,  78 => 40,  74 => 38,  70 => 36,  68 => 35,  64 => 33,  60 => 31,  58 => 30,  54 => 28,  50 => 26,  48 => 25,  30 => 10,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* 	<div class="wrapper panel-body">*/
/* 		<h3>Interview Details</h3>*/
/* 		<form>*/
/* 			<div class="row">*/
/* 		 	 	<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Interview Date</h5>			 				       */
/* 		 				<div class='input-group date' id='scheduled_date'>*/
/* 		                    <input type='text' class="form-control datepicker" name="interview_date" value="{{ interview_details_values.interview_date }}">*/
/* 		                    <span class="input-group-addon">*/
/* 		                    	<span class="glyphicon glyphicon-calendar"></span>*/
/*                 			</span>*/
/*             			</div>*/
/*         			</div>*/
/*         			<p class="help-block">Available Dates:  June 1-2, 8-9, 15-16, 22-23, 29-30 /  July 6-7, 13-14, 20-21, 27-28 [Days: every Wednesdays and Thursdays only]</p>*/
/* 	            </div>			 							*/
/* 	            <div class="col-md-6">*/
/* 	            	<div class="form-group">*/
/* 		 				<h5>Interview Time</h5>	*/
/* 		 				<div class="dropdown-toggle" data-toggle="dropdown">	*/
/* 		 					<select id="appt_time" name="interview_time" class="form-control">*/
/* 		 						<option> --Select time from list--</option>*/
/* 		 						<option value="09:00 am" */
/* 		 						{% if interview_details_values.interview_time == "09:00 am" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 				    			>09:00 am</option>*/
/* 						        <option value="10:00am" */
/* 		 						{% if interview_details_values.interview_time == "10:00am" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 				    			>10:00am</option>*/
/* 						        <option value="11:00 am" */
/* 		 						{% if interview_details_values.interview_time == "11:00 am" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 				    			>11:00 am</option>*/
/* 						        <option value="02:00 pm" */
/* 		 						{% if interview_details_values.interview_time == "02:00 pm" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 				    			>02:00 pm</option>*/
/* 						        <option value="03:00 pm" */
/* 		 						{% if interview_details_values.interview_time == "03:00 pm" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 				    			>03:00 pm</option>						        */
/* 						        <option value="04:00 pm" */
/* 		 						{% if interview_details_values.interview_time == "04:00 pm" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 				    			>04:00 pm</option>						        */
/* 		 					</select>*/
/* 		 				</div>*/
/* 	            	</div> */
/*         		</div>        */
/*             </div>*/
/*             <div class="col-md-6">*/
/* 	      		<div class="pull-left">*/
/* 					<div class="btn-group" role="group" aria-label="align-right">*/
/* 						<button type="button" class="btn btn-primary"*/
/* 							data-request="{{ __SELF__ }}::onRedirect" data-request-data="page: 9" data-request-update="'{{ __SELF__ }}::personalreferences':'#form_wrapper'"*/
/* 							>Back:Personal References</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-md-6">*/
/* 	      		<div class="pull-right">*/
/* 					<div class="btn-group" role="group" aria-label="align-right">*/
/* 							<button type="button" class="btn btn-primary"*/
/* 							data-request-data="page: 9"*/
/* 							data-request="{{ __SELF__ }}::onSave">Confirm</button> */
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</form>*/
/* 	</div>*/
/* </div>*/
