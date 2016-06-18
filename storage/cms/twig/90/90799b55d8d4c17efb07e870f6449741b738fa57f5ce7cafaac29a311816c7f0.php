<?php

/* C:\xampp\htdocs\nltcv2/plugins/heidimarasigan/nltc/components/applicationform/studyprogram.htm */
class __TwigTemplate_d84170ae2d9de7f944a576e4f69a4eb5152e88007fcffe6782af30d34b3b4ae8 extends Twig_Template
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
\t\t<h3>Study Program</h3>
\t\t<form>
\t\t \t<div class=\"row\">
\t\t \t\t<div class=\"col-md-12\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Application Type</h5>
\t\t \t\t\t\t<div class=\"radio\">
\t\t\t \t\t\t\t<label>
\t\t\t \t\t\t\t\t";
        // line 11
        if (($this->getAttribute((isset($context["study_program_values"]) ? $context["study_program_values"] : null), "application_type", array()) == "Regular")) {
            // line 12
            echo "\t\t\t \t\t\t\t\t";
            $context["app_regular_default_value"] = "checked=\"checked\"";
            // line 13
            echo "\t\t\t \t\t\t\t\t";
        }
        // line 14
        echo "\t\t\t \t\t\t\t\t<input type=\"radio\" name=\"application_type\" value=\"Regular\" ";
        echo twig_escape_filter($this->env, (isset($context["app_regular_default_value"]) ? $context["app_regular_default_value"] : null), "html", null, true);
        echo " >Regular
\t\t\t \t\t\t\t</label>
\t\t\t \t\t\t</div>
\t\t\t \t\t\t<div class=\"radio\">
\t\t\t \t\t\t\t<label>
\t\t\t \t\t\t\t\t
\t\t\t \t\t\t\t\t";
        // line 20
        if (($this->getAttribute((isset($context["study_program_values"]) ? $context["study_program_values"] : null), "application_type", array()) == "Irregular")) {
            // line 21
            echo "\t\t\t \t\t\t\t\t";
            $context["app_irregular_default_value"] = "checked=\"checked\"";
            // line 22
            echo "\t\t\t \t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t \t\t\t\t\t<input type=\"radio\" name=\"application_type\" value=\"Irregular\" ";
        echo twig_escape_filter($this->env, (isset($context["app_irregular_default_value"]) ? $context["app_irregular_default_value"] : null), "html", null, true);
        echo " >Irregular (Students with incomplete subjects in their year level)
\t\t\t \t\t\t\t</label>
\t\t\t \t\t\t</div>\t\t\t \t\t\t
\t\t \t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t \t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>School Year</h5>
\t\t \t\t\t\t<div class=\"dropdown\">\t
\t\t \t\t\t\t
            \t\t\t\t<select name=\"school_year\"  class=\"form-control\">

            \t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(2016, 2029));
        foreach ($context['_seq'] as $context["_key"] => $context["start_year"]) {
            // line 38
            echo "\t\t\t\t\t\t\t    <option value=\"";
            echo twig_escape_filter($this->env, $context["start_year"], "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["start_year"] + 1), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t    ";
            // line 39
            if (($this->getAttribute((isset($context["study_program_values"]) ? $context["study_program_values"] : null), "school_year", array()) == (($context["start_year"] . "-") . ($context["start_year"] + 1)))) {
                // line 40
                echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t \t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t     >
\t\t\t\t\t\t\t    ";
            // line 43
            echo twig_escape_filter($this->env, $context["start_year"], "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["start_year"] + 1), "html", null, true);
            echo "
\t\t\t\t\t\t\t    </option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['start_year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "       
        \t\t\t\t\t</select>
\t\t \t\t\t\t</div>
\t\t \t\t\t</div>
\t\t \t\t</div>
\t\t \t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Level</h5>
\t\t \t\t\t\t<div class=\"dropdown\">\t
\t\t \t\t\t\t\t<select name=\"level\" class=\"form-control\">
\t\t \t\t\t\t\t\t<option
\t\t \t\t\t\t\t\t";
        // line 56
        if (($this->getAttribute((isset($context["study_program_values"]) ? $context["study_program_values"] : null), "level", array()) == "First Year")) {
            // line 57
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t \t\t\t\t\t";
        }
        // line 59
        echo "\t\t \t\t\t\t\t\t>First Year</option>
\t\t\t\t\t\t        <option
\t\t\t\t\t\t        ";
        // line 61
        if (($this->getAttribute((isset($context["study_program_values"]) ? $context["study_program_values"] : null), "level", array()) == "Second Year")) {
            // line 62
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t \t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t\t        >Second Year</option>
\t\t\t\t\t\t        <option
\t\t\t\t\t\t        ";
        // line 66
        if (($this->getAttribute((isset($context["study_program_values"]) ? $context["study_program_values"] : null), "level", array()) == "Pastoral Track")) {
            // line 67
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t \t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t\t        >Pastoral Track</option>
\t\t \t\t\t\t\t</select>
\t\t \t\t\t\t</div>
\t\t \t\t\t</div>
\t\t \t\t</div>\t\t \t
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t      \t\t<div class=\"pull-right\">
\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t<!-- <button type=\"button\" class=\"btn btn-default\"><a href=\"#\">Back</a></button> -->
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" form=\"form1\" value=\"Submit\"
\t\t\t\t\t\tdata-request-data=\"page: 1\"
\t\t\t\t\t\tdata-request=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSave\"
\t\t\t\t\t\tdata-request-update=\"'";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::personalinformation':'#form_wrapper'\">Next:Personal Information</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t</form>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nltcv2/plugins/heidimarasigan/nltc/components/applicationform/studyprogram.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 82,  159 => 81,  145 => 69,  141 => 67,  139 => 66,  135 => 64,  131 => 62,  129 => 61,  125 => 59,  121 => 57,  119 => 56,  106 => 45,  95 => 43,  92 => 42,  88 => 40,  86 => 39,  79 => 38,  75 => 37,  57 => 23,  54 => 22,  51 => 21,  49 => 20,  39 => 14,  36 => 13,  33 => 12,  31 => 11,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* 	<div class="wrapper panel-body">*/
/* 		<h3>Study Program</h3>*/
/* 		<form>*/
/* 		 	<div class="row">*/
/* 		 		<div class="col-md-12">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Application Type</h5>*/
/* 		 				<div class="radio">*/
/* 			 				<label>*/
/* 			 					{% if study_program_values.application_type == "Regular" %}*/
/* 			 					{% set app_regular_default_value = 'checked="checked"' %}*/
/* 			 					{% endif %}*/
/* 			 					<input type="radio" name="application_type" value="Regular" {{ app_regular_default_value }} >Regular*/
/* 			 				</label>*/
/* 			 			</div>*/
/* 			 			<div class="radio">*/
/* 			 				<label>*/
/* 			 					*/
/* 			 					{% if study_program_values.application_type == "Irregular" %}*/
/* 			 					{% set app_irregular_default_value = 'checked="checked"' %}*/
/* 			 					{% endif %}*/
/* 			 					<input type="radio" name="application_type" value="Irregular" {{ app_irregular_default_value }} >Irregular (Students with incomplete subjects in their year level)*/
/* 			 				</label>*/
/* 			 			</div>			 			*/
/* 		 			</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 		 		<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>School Year</h5>*/
/* 		 				<div class="dropdown">	*/
/* 		 				*/
/*             				<select name="school_year"  class="form-control">*/
/* */
/*             				{% for start_year in 2016..2029 %}*/
/* 							    <option value="{{ start_year }}-{{ start_year + 1 }}"*/
/* 							    {% if study_program_values.school_year == (start_year ~ "-" ~ (start_year + 1) ) %}*/
/* 			 					selected="selected"*/
/* 			 					{% endif %}*/
/* 							     >*/
/* 							    {{ start_year }}-{{ start_year + 1 }}*/
/* 							    </option>*/
/* 							{% endfor %}       */
/*         					</select>*/
/* 		 				</div>*/
/* 		 			</div>*/
/* 		 		</div>*/
/* 		 		<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Level</h5>*/
/* 		 				<div class="dropdown">	*/
/* 		 					<select name="level" class="form-control">*/
/* 		 						<option*/
/* 		 						{% if study_program_values.level == "First Year" %}*/
/* 			 					selected="selected"*/
/* 			 					{% endif %}*/
/* 		 						>First Year</option>*/
/* 						        <option*/
/* 						        {% if study_program_values.level == "Second Year" %}*/
/* 			 					selected="selected"*/
/* 			 					{% endif %}*/
/* 						        >Second Year</option>*/
/* 						        <option*/
/* 						        {% if study_program_values.level == "Pastoral Track" %}*/
/* 			 					selected="selected"*/
/* 			 					{% endif %}*/
/* 						        >Pastoral Track</option>*/
/* 		 					</select>*/
/* 		 				</div>*/
/* 		 			</div>*/
/* 		 		</div>		 	*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 	      		<div class="pull-right">*/
/* 					<div class="btn-group" role="group" aria-label="align-right">*/
/* 						<!-- <button type="button" class="btn btn-default"><a href="#">Back</a></button> -->*/
/* 						<button type="submit" class="btn btn-primary" form="form1" value="Submit"*/
/* 						data-request-data="page: 1"*/
/* 						data-request="{{ __SELF__ }}::onSave"*/
/* 						data-request-update="'{{ __SELF__ }}::personalinformation':'#form_wrapper'">Next:Personal Information</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>			*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
