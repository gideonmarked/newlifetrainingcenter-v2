<?php

/* C:\xampp\htdocs\nltcv2/plugins/heidimarasigan/nltc/components/applicationform/educationalbackground.htm */
class __TwigTemplate_e176f1752a1876fc1bd2cc3d6a47830fb69cab7ea65fa3f038ec8c354df04f21 extends Twig_Template
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
\t\t<h3>Educational Background</h3>
\t\t<form>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Primary</h5>
\t\t \t\t\t\t<input type=\"text\" name=\"education_primary\" class=\"form-control\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["educational_background_values"]) ? $context["educational_background_values"] : null), "education_primary", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t\t \t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Year of Completion</h5>
\t\t \t\t\t\t<input type=\"text\" name=\"education_primary_year\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["educational_background_values"]) ? $context["educational_background_values"] : null), "education_primary_year", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Secondary</h5>
\t\t \t\t\t\t<input type=\"text\" name=\"education_secondary\" class=\"form-control\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["educational_background_values"]) ? $context["educational_background_values"] : null), "education_secondary", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Year of Completion</h5>
\t\t \t\t\t\t<input type=\"text\" name=\"education_secondary_year\" class=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["educational_background_values"]) ? $context["educational_background_values"] : null), "education_secondary_year", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Tertiary</h5>
\t\t \t\t\t\t<input type=\"text\" name=\"education_tertiary\" class=\"form-control\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["educational_background_values"]) ? $context["educational_background_values"] : null), "education_tertiary", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t\t \t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Year of Completion</h5>
\t\t \t\t\t\t<input type=\"text\" name=\"education_tertiary_year\" class=\"form-control\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["educational_background_values"]) ? $context["educational_background_values"] : null), "education_tertiary_year", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Course</h5>
\t\t \t\t\t\t<input type=\"text\" name=\"course\" class=\"form-control\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["educational_background_values"]) ? $context["educational_background_values"] : null), "course", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t\t \t\t</div>
\t \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Other Course</h5>
\t\t \t\t\t\t<input type=\"text\" name=\"other_course\" class=\"form-control\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["educational_background_values"]) ? $context["educational_background_values"] : null), "other_course", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t \t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t      \t\t<div class=\"pull-left\">
\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\tdata-request=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onRedirect\" data-request-data=\"page: 4\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::familybackground':'#form_wrapper'\"
\t\t\t\t\t\t\t>Back:Family Background</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t      \t\t<div class=\"pull-right\">
\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\tdata-request-data=\"page: 4\"
\t\t\t\t\t\t\tdata-request=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSave\"
\t\t\t\t\t\t\tdata-request-update=\"'";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::christianlife':'#form_wrapper'\">Next:Christian Life</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nltcv2/plugins/heidimarasigan/nltc/components/applicationform/educationalbackground.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 70,  118 => 69,  103 => 59,  92 => 51,  83 => 45,  74 => 39,  65 => 33,  56 => 27,  47 => 21,  38 => 15,  29 => 9,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* 	<div class="wrapper panel-body">*/
/* 		<h3>Educational Background</h3>*/
/* 		<form>*/
/* 			<div class="row">*/
/* 				<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Primary</h5>*/
/* 		 				<input type="text" name="education_primary" class="form-control" value="{{ educational_background_values.education_primary }}">*/
/* 		 			</div>*/
/* 		 		</div>*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Year of Completion</h5>*/
/* 		 				<input type="text" name="education_primary_year" class="form-control" value="{{ educational_background_values.education_primary_year }}">*/
/* 		 			</div>*/
/* 	 			</div>*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Secondary</h5>*/
/* 		 				<input type="text" name="education_secondary" class="form-control" value="{{ educational_background_values.education_secondary }}">*/
/* 		 			</div>*/
/* 	 			</div>*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Year of Completion</h5>*/
/* 		 				<input type="text" name="education_secondary_year" class="form-control" value="{{ educational_background_values.education_secondary_year }}">*/
/* 		 			</div>*/
/* 	 			</div>*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Tertiary</h5>*/
/* 		 				<input type="text" name="education_tertiary" class="form-control" value="{{ educational_background_values.education_tertiary }}">*/
/* 		 			</div>*/
/* 		 		</div>*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Year of Completion</h5>*/
/* 		 				<input type="text" name="education_tertiary_year" class="form-control" value="{{ educational_background_values.education_tertiary_year }}">*/
/* 		 			</div>*/
/* 	 			</div>*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Course</h5>*/
/* 		 				<input type="text" name="course" class="form-control" value="{{ educational_background_values.course }}">*/
/* 		 			</div>*/
/* 		 		</div>*/
/* 	 			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Other Course</h5>*/
/* 		 				<input type="text" name="other_course" class="form-control" value="{{ educational_background_values.other_course }}">*/
/* 		 			</div>*/
/* 	 			</div>*/
/* 			</div>*/
/* 			<div class="col-md-6">*/
/* 	      		<div class="pull-left">*/
/* 					<div class="btn-group" role="group" aria-label="align-right">*/
/* 						<button type="button" class="btn btn-primary"*/
/* 							data-request="{{ __SELF__ }}::onRedirect" data-request-data="page: 4" data-request-update="'{{ __SELF__ }}::familybackground':'#form_wrapper'"*/
/* 							>Back:Family Background</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-md-6">*/
/* 	      		<div class="pull-right">*/
/* 					<div class="btn-group" role="group" aria-label="align-right">*/
/* 							<button type="button" class="btn btn-primary"*/
/* 							data-request-data="page: 4"*/
/* 							data-request="{{ __SELF__ }}::onSave"*/
/* 							data-request-update="'{{ __SELF__ }}::christianlife':'#form_wrapper'">Next:Christian Life</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
