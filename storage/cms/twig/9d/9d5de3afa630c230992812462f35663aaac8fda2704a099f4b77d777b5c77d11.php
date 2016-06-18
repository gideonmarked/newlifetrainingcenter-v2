<?php

/* C:\xampp\htdocs\newlifetrainingcenter-v2/plugins/heidimarasigan/nltc/components/applicationform/personalreferences.htm */
class __TwigTemplate_97caf3fcc9c429c955733e07a09ffa51b63efbed377b13b01e1eb58602f13de3 extends Twig_Template
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
\t\t<h3>Personal References</h3>
\t\t<p>Please list two (2) references of people who personally know you for at least 2 years</p>
\t\t<form>
\t\t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>References</h5>\t \t\t\t
\t\t \t\t\t\t<a class=\"btn\" href=\"#\" data-request=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onAddReference\"
\t\t \t\t\t\tdata-request-update=\"'";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::reference_details':'#reference_wrapper'\" name=\"references\">
\t  \t\t\t\t\t\t<i class=\"glyphicon glyphicon-plus-sign\"></i> Add </a>
\t  \t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t\t<!-- wrapper of all reference details -->
\t\t\t<div id=\"reference_wrapper\">
\t\t\t\t";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::reference_details")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "\t\t\t</div>
\t\t\t<!-- end of wrapper of all reference details -->
\t\t\t<div class=\"col-md-6\">
\t      \t\t<div class=\"pull-left\">
\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\tdata-request=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onRedirect\" data-request-data=\"page: 8\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::physicalhealthcondition':'#form_wrapper'\"
\t\t\t\t\t\t\t>Back:Physical and Health Condition</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t      \t\t<div class=\"pull-right\">
\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\tdata-request-data=\"page: 8\"
\t\t\t\t\t\t\tdata-request=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSave\"
\t\t\t\t\t\t\tdata-request-update=\"'";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::interviewdetails':'#form_wrapper'\">Next:Interview Details</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\newlifetrainingcenter-v2/plugins/heidimarasigan/nltc/components/applicationform/personalreferences.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 34,  69 => 33,  54 => 23,  46 => 17,  42 => 16,  33 => 10,  29 => 9,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* 	<div class="wrapper panel-body">*/
/* 		<h3>Personal References</h3>*/
/* 		<p>Please list two (2) references of people who personally know you for at least 2 years</p>*/
/* 		<form>*/
/* 			<div class="col-md-12">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>References</h5>	 			*/
/* 		 				<a class="btn" href="#" data-request="{{ __SELF__ }}::onAddReference"*/
/* 		 				data-request-update="'{{ __SELF__ }}::reference_details':'#reference_wrapper'" name="references">*/
/* 	  						<i class="glyphicon glyphicon-plus-sign"></i> Add </a>*/
/* 	  			</div>				*/
/* 			</div>*/
/* 			<!-- wrapper of all reference details -->*/
/* 			<div id="reference_wrapper">*/
/* 				{% partial __SELF__~'::reference_details' %}*/
/* 			</div>*/
/* 			<!-- end of wrapper of all reference details -->*/
/* 			<div class="col-md-6">*/
/* 	      		<div class="pull-left">*/
/* 					<div class="btn-group" role="group" aria-label="align-right">*/
/* 						<button type="button" class="btn btn-primary"*/
/* 							data-request="{{ __SELF__ }}::onRedirect" data-request-data="page: 8" data-request-update="'{{ __SELF__ }}::physicalhealthcondition':'#form_wrapper'"*/
/* 							>Back:Physical and Health Condition</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-md-6">*/
/* 	      		<div class="pull-right">*/
/* 					<div class="btn-group" role="group" aria-label="align-right">*/
/* 							<button type="button" class="btn btn-primary"*/
/* 							data-request-data="page: 8"*/
/* 							data-request="{{ __SELF__ }}::onSave"*/
/* 							data-request-update="'{{ __SELF__ }}::interviewdetails':'#form_wrapper'">Next:Interview Details</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
