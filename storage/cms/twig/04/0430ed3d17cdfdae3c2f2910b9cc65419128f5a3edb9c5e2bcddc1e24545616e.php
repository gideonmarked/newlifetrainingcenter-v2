<?php

/* C:\xampp\htdocs\nltcv2/plugins/heidimarasigan/nltc/components/applicationform/familybackground.htm */
class __TwigTemplate_8cf1b44f2e2e0a425b20ce725cab4145be7be53f000136dffa13cbb34426c7ff extends Twig_Template
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
\t\t<h3>Family Background</h3>
\t\t<form>\t\t
\t\t\t<div class=\"col-md-6\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Spouse Name</h5>
\t \t\t\t\t<input type=\"text\" name=\"spouse_name\" class=\"form-control\">
\t \t\t\t</div>
\t \t\t</div>
 \t\t\t<div class=\"col-md-6\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Spouse Occupation</h5>
\t \t\t\t\t<input type=\"text\" name=\"spose_occupation\" class=\"form-control\">
\t \t\t\t</div>
 \t\t\t</div>
 \t\t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Children <a class=\"btn\" name=\"children\" href=\"#\"
\t\t \t\t\t\tdata-request=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onAddChild\"
\t\t \t\t\t\tdata-request-update=\"'";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::child_item':'#children_wrapper'\"
\t\t \t\t\t\t> 
\t  \t\t\t\t\t\t<i class=\"glyphicon glyphicon-plus-sign\"></i> Add </a></h5>
\t\t  \t\t</div>
\t  \t\t</div>
\t\t\t<!-- wrapper of all the list of children -->
\t\t\t<div id=\"children_wrapper\">
\t\t\t\t";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::child_item")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "\t\t\t</div>
\t\t\t<!-- end of wrapper of all the list of children -->
\t \t\t\t
 \t\t\t

 \t\t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Is your spouse (if married), or your parents / guardians (if not married), in agreement with you to enroll in NTC this school year?</h5>
\t \t\t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"in_agreement\">Yes
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"in_agreement\">No
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t\t \t\t\t
\t \t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t      \t\t<div class=\"pull-left\">
\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\tdata-request=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onRedirect\" data-request-data=\"page: 3\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::personalinformation':'#form_wrapper'\"
\t\t\t\t\t\t\t>Back:Personal Information</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t      \t\t<div class=\"pull-right\">
\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\tdata-request-data=\"page: 3\"
\t\t\t\t\t\t\tdata-request=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSave\"
\t\t\t\t\t\t\tdata-request-update=\"'";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::educationalbackground':'#form_wrapper'\">Next:Educational Background</button> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nltcv2/plugins/heidimarasigan/nltc/components/applicationform/familybackground.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 64,  99 => 63,  84 => 53,  58 => 29,  54 => 28,  44 => 21,  40 => 20,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* 	<div class="wrapper panel-body">*/
/* 		<h3>Family Background</h3>*/
/* 		<form>		*/
/* 			<div class="col-md-6">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Spouse Name</h5>*/
/* 	 				<input type="text" name="spouse_name" class="form-control">*/
/* 	 			</div>*/
/* 	 		</div>*/
/*  			<div class="col-md-6">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Spouse Occupation</h5>*/
/* 	 				<input type="text" name="spose_occupation" class="form-control">*/
/* 	 			</div>*/
/*  			</div>*/
/*  			<div class="col-md-12">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Children <a class="btn" name="children" href="#"*/
/* 		 				data-request="{{ __SELF__ }}::onAddChild"*/
/* 		 				data-request-update="'{{ __SELF__ }}::child_item':'#children_wrapper'"*/
/* 		 				> */
/* 	  						<i class="glyphicon glyphicon-plus-sign"></i> Add </a></h5>*/
/* 		  		</div>*/
/* 	  		</div>*/
/* 			<!-- wrapper of all the list of children -->*/
/* 			<div id="children_wrapper">*/
/* 				{% partial __SELF__~'::child_item' %}*/
/* 			</div>*/
/* 			<!-- end of wrapper of all the list of children -->*/
/* 	 			*/
/*  			*/
/* */
/*  			<div class="col-md-12">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Is your spouse (if married), or your parents / guardians (if not married), in agreement with you to enroll in NTC this school year?</h5>*/
/* 	 				<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="in_agreement">Yes*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="in_agreement">No*/
/* 		 				</label>*/
/* 		 			</div>			 			*/
/* 	 			</div>*/
/* 			</div>*/
/* 			<div class="col-md-6">*/
/* 	      		<div class="pull-left">*/
/* 					<div class="btn-group" role="group" aria-label="align-right">*/
/* 						<button type="button" class="btn btn-primary"*/
/* 							data-request="{{ __SELF__ }}::onRedirect" data-request-data="page: 3" data-request-update="'{{ __SELF__ }}::personalinformation':'#form_wrapper'"*/
/* 							>Back:Personal Information</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-md-6">*/
/* 	      		<div class="pull-right">*/
/* 					<div class="btn-group" role="group" aria-label="align-right">*/
/* 							<button type="button" class="btn btn-primary"*/
/* 							data-request-data="page: 3"*/
/* 							data-request="{{ __SELF__ }}::onSave"*/
/* 							data-request-update="'{{ __SELF__ }}::educationalbackground':'#form_wrapper'">Next:Educational Background</button> */
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
