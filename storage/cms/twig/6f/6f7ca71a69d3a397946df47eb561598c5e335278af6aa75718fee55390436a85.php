<?php

/* C:\xampp\htdocs\newlifetrainingcenter-v2/plugins/heidimarasigan/nltc/components/applicationform/physicalhealthcondition.htm */
class __TwigTemplate_a5a7e2650272662da3af8d3a4c37dc98d4e168c27cfc580e59c00b699f52dd1e extends Twig_Template
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
\t\t<h3>Physical and Health Condition</h3>
\t\t<form>
\t\t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Do you have any physical handicaps or illnesses?</h5>
\t \t\t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"physical_handicap\" value=\"yes\"
\t\t \t\t\t\t\t";
        // line 11
        if (($this->getAttribute((isset($context["physical_health_condition_values"]) ? $context["physical_health_condition_values"] : null), "physical_handicap", array()) == "yes")) {
            // line 12
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 14
        echo "\t\t \t\t\t\t\t>Yes
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"physical_handicap\" value=\"no\"
\t\t \t\t\t\t\t";
        // line 20
        if (($this->getAttribute((isset($context["physical_health_condition_values"]) ? $context["physical_health_condition_values"] : null), "physical_handicap", array()) == "no")) {
            // line 21
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 23
        echo "\t\t \t\t\t\t\t>No
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t\t \t\t\t
\t \t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Have you ever been convicted of any criminal offense?</h5>
\t \t\t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"physical_criminal\" value=\"yes\"
\t\t \t\t\t\t\t";
        // line 34
        if (($this->getAttribute((isset($context["physical_health_condition_values"]) ? $context["physical_health_condition_values"] : null), "physical_criminal", array()) == "yes")) {
            // line 35
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 37
        echo "\t\t \t\t\t\t\t>Yes
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"physical_criminal\" value=\"no\"
\t\t \t\t\t\t\t";
        // line 43
        if (($this->getAttribute((isset($context["physical_health_condition_values"]) ? $context["physical_health_condition_values"] : null), "physical_criminal", array()) == "no")) {
            // line 44
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 46
        echo "\t\t \t\t\t\t\t>No
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t\t \t\t\t
\t \t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Have you undergone rehabilitation for substance abuse?</h5>
\t \t\t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"physical_abuse\" value=\"yes\"
\t\t \t\t\t\t\t";
        // line 57
        if (($this->getAttribute((isset($context["physical_health_condition_values"]) ? $context["physical_health_condition_values"] : null), "physical_abuse", array()) == "yes")) {
            // line 58
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 60
        echo "\t\t \t\t\t\t\t>Yes
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"physical_abuse\" value=\"no\"
\t\t \t\t\t\t\t";
        // line 66
        if (($this->getAttribute((isset($context["physical_health_condition_values"]) ? $context["physical_health_condition_values"] : null), "physical_abuse", array()) == "no")) {
            // line 67
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 69
        echo "\t\t \t\t\t\t\t>No
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t\t \t\t\t
\t \t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Have you undergone or still in any psychological and/or psychiatric therapy/medication?</h5>
\t \t\t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"physical_psychological\" value=\"yes\"
\t\t \t\t\t\t\t";
        // line 80
        if (($this->getAttribute((isset($context["physical_health_condition_values"]) ? $context["physical_health_condition_values"] : null), "physical_psychological", array()) == "yes")) {
            // line 81
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 83
        echo "\t\t \t\t\t\t\t>Yes
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"physical_psychological\" value=\"no\"
\t\t \t\t\t\t\t";
        // line 89
        if (($this->getAttribute((isset($context["physical_health_condition_values"]) ? $context["physical_health_condition_values"] : null), "physical_psychological", array()) == "no")) {
            // line 90
            echo "\t\t \t\t\t\t\t\tchecked=\"checked\"
\t\t \t\t\t\t\t";
        }
        // line 92
        echo "\t\t \t\t\t\t\t>No
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t\t \t\t\t
\t \t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t      \t\t<div class=\"pull-left\">
\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\tdata-request=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onRedirect\" data-request-data=\"page: 7\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::ministryinvolvement':'#form_wrapper'\"
\t\t\t\t\t\t\t>Back:Ministry Involvement</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t      \t\t<div class=\"pull-right\">
\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\tdata-request-data=\"page: 7\"
\t\t\t\t\t\t\tdata-request=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSave\"
\t\t\t\t\t\t\tdata-request-update=\"'";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::personalreferences':'#form_wrapper'\">Next:Personal References</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\newlifetrainingcenter-v2/plugins/heidimarasigan/nltc/components/applicationform/physicalhealthcondition.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 112,  176 => 111,  161 => 101,  150 => 92,  146 => 90,  144 => 89,  136 => 83,  132 => 81,  130 => 80,  117 => 69,  113 => 67,  111 => 66,  103 => 60,  99 => 58,  97 => 57,  84 => 46,  80 => 44,  78 => 43,  70 => 37,  66 => 35,  64 => 34,  51 => 23,  47 => 21,  45 => 20,  37 => 14,  33 => 12,  31 => 11,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* 	<div class="wrapper panel-body">*/
/* 		<h3>Physical and Health Condition</h3>*/
/* 		<form>*/
/* 			<div class="col-md-12">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Do you have any physical handicaps or illnesses?</h5>*/
/* 	 				<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="physical_handicap" value="yes"*/
/* 		 					{% if physical_health_condition_values.physical_handicap == "yes" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}*/
/* 		 					>Yes*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="physical_handicap" value="no"*/
/* 		 					{% if physical_health_condition_values.physical_handicap == "no" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}*/
/* 		 					>No*/
/* 		 				</label>*/
/* 		 			</div>			 			*/
/* 	 			</div>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Have you ever been convicted of any criminal offense?</h5>*/
/* 	 				<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="physical_criminal" value="yes"*/
/* 		 					{% if physical_health_condition_values.physical_criminal == "yes" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}*/
/* 		 					>Yes*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="physical_criminal" value="no"*/
/* 		 					{% if physical_health_condition_values.physical_criminal == "no" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}*/
/* 		 					>No*/
/* 		 				</label>*/
/* 		 			</div>			 			*/
/* 	 			</div>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Have you undergone rehabilitation for substance abuse?</h5>*/
/* 	 				<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="physical_abuse" value="yes"*/
/* 		 					{% if physical_health_condition_values.physical_abuse == "yes" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}*/
/* 		 					>Yes*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="physical_abuse" value="no"*/
/* 		 					{% if physical_health_condition_values.physical_abuse == "no" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}*/
/* 		 					>No*/
/* 		 				</label>*/
/* 		 			</div>			 			*/
/* 	 			</div>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Have you undergone or still in any psychological and/or psychiatric therapy/medication?</h5>*/
/* 	 				<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="physical_psychological" value="yes"*/
/* 		 					{% if physical_health_condition_values.physical_psychological == "yes" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}*/
/* 		 					>Yes*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="physical_psychological" value="no"*/
/* 		 					{% if physical_health_condition_values.physical_psychological == "no" %}*/
/* 		 						checked="checked"*/
/* 		 					{% endif %}*/
/* 		 					>No*/
/* 		 				</label>*/
/* 		 			</div>			 			*/
/* 	 			</div>*/
/* 			</div>*/
/* 			<div class="col-md-6">*/
/* 	      		<div class="pull-left">*/
/* 					<div class="btn-group" role="group" aria-label="align-right">*/
/* 						<button type="button" class="btn btn-primary"*/
/* 							data-request="{{ __SELF__ }}::onRedirect" data-request-data="page: 7" data-request-update="'{{ __SELF__ }}::ministryinvolvement':'#form_wrapper'"*/
/* 							>Back:Ministry Involvement</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-md-6">*/
/* 	      		<div class="pull-right">*/
/* 					<div class="btn-group" role="group" aria-label="align-right">*/
/* 							<button type="button" class="btn btn-primary"*/
/* 							data-request-data="page: 7"*/
/* 							data-request="{{ __SELF__ }}::onSave"*/
/* 							data-request-update="'{{ __SELF__ }}::personalreferences':'#form_wrapper'">Next:Personal References</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
