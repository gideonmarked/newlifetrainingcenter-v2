<?php

/* C:\xampp\htdocs\nltcv2/plugins/heidimarasigan/nltc/components/applicationform/physicalhealthcondition.htm */
class __TwigTemplate_791233609133bbe78601f96d6efbe807a7a39ae6d2a877ed08549dd9bae2ab76 extends Twig_Template
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
\t\t \t\t\t\t\t<input type=\"radio\" name=\"physical_illness\">Yes
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"physical_illness\">No
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t\t \t\t\t
\t \t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Have you ever been convicted of any criminal offense?</h5>
\t \t\t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"criminal_offense\">Yes
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"criminal_offense\">No
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t\t \t\t\t
\t \t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Have you undergone rehabilitation for substance abuse?</h5>
\t \t\t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"substance_abuse\">Yes
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"substance_abuse\">No
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t\t \t\t\t
\t \t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Have you undergone or still in any psychological and/or psychiatric therapy/medication?</h5>
\t \t\t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"theraphy_medication\">Yes
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"theraphy_medication\">No
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t\t \t\t\t
\t \t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t      \t\t<div class=\"pull-left\">
\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\tdata-request=\"";
        // line 69
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
        // line 79
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSave\"
\t\t\t\t\t\t\tdata-request-update=\"'";
        // line 80
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
        return "C:\\xampp\\htdocs\\nltcv2/plugins/heidimarasigan/nltc/components/applicationform/physicalhealthcondition.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 80,  104 => 79,  89 => 69,  19 => 1,);
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
/* 		 					<input type="radio" name="physical_illness">Yes*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="physical_illness">No*/
/* 		 				</label>*/
/* 		 			</div>			 			*/
/* 	 			</div>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Have you ever been convicted of any criminal offense?</h5>*/
/* 	 				<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="criminal_offense">Yes*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="criminal_offense">No*/
/* 		 				</label>*/
/* 		 			</div>			 			*/
/* 	 			</div>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Have you undergone rehabilitation for substance abuse?</h5>*/
/* 	 				<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="substance_abuse">Yes*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="substance_abuse">No*/
/* 		 				</label>*/
/* 		 			</div>			 			*/
/* 	 			</div>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Have you undergone or still in any psychological and/or psychiatric therapy/medication?</h5>*/
/* 	 				<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="theraphy_medication">Yes*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="theraphy_medication">No*/
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
