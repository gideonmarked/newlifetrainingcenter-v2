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
\t\t\t \t\t\t\t\t<input type=\"radio\" name=\"application_type\">Regular
\t\t\t \t\t\t\t</label>
\t\t\t \t\t\t</div>
\t\t\t \t\t\t<div class=\"radio\">
\t\t\t \t\t\t\t<label>
\t\t\t \t\t\t\t\t<input type=\"radio\" name=\"application_type\">Irregular (Students with incomplete subjects in their year level)
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
            \t\t\t\t<select name=\"school_year\"  class=\"form-control\">
\t\t\t\t\t\t\t\t<option>2016-2017</option>
\t\t\t\t\t\t        <option>2017-2018</option>
\t\t\t\t\t\t        <option>2018-2019</option>
\t\t\t\t\t\t        <option>2019-2020</option>    
\t\t\t\t\t\t        <option>2020-2021</option>
\t\t\t\t\t\t        <option>2021-2022</option>
\t\t\t\t\t\t        <option>2022-2023</option>
\t\t\t\t\t\t        <option>2024-2025</option>      
\t\t\t\t\t\t        <option>2025-2026</option>
\t\t\t\t\t\t        <option>2027-2028</option>
\t\t\t\t\t\t        <option>2028-2029</option>    
\t\t\t\t\t\t        <option>2029-2030</option>         
        \t\t\t\t\t</select>
\t\t \t\t\t\t</div>
\t\t \t\t\t</div>
\t\t \t\t</div>
\t\t \t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Level</h5>
\t\t \t\t\t\t<div class=\"dropdown\">\t
\t\t \t\t\t\t\t<select name=\"level\" class=\"form-control\">
\t\t \t\t\t\t\t\t<option>First Year</option>
\t\t\t\t\t\t        <option>Second Year</option>
\t\t\t\t\t\t        <option>Pastoral Track</option>
\t\t \t\t\t\t\t</select>
\t\t \t\t\t\t</div>
\t\t \t\t\t</div>
\t\t \t\t</div>\t\t \t
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t      \t\t<div class=\"pull-right\">
\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t<!-- <button type=\"button\" class=\"btn btn-default\"><a href=\"#\">Back</a></button> -->
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" form=\"form1\" value=\"Submit\"   data-request=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSave\" data-request-update=\"'";
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
        return array (  81 => 61,  19 => 1,);
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
/* 			 					<input type="radio" name="application_type">Regular*/
/* 			 				</label>*/
/* 			 			</div>*/
/* 			 			<div class="radio">*/
/* 			 				<label>*/
/* 			 					<input type="radio" name="application_type">Irregular (Students with incomplete subjects in their year level)*/
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
/*             				<select name="school_year"  class="form-control">*/
/* 								<option>2016-2017</option>*/
/* 						        <option>2017-2018</option>*/
/* 						        <option>2018-2019</option>*/
/* 						        <option>2019-2020</option>    */
/* 						        <option>2020-2021</option>*/
/* 						        <option>2021-2022</option>*/
/* 						        <option>2022-2023</option>*/
/* 						        <option>2024-2025</option>      */
/* 						        <option>2025-2026</option>*/
/* 						        <option>2027-2028</option>*/
/* 						        <option>2028-2029</option>    */
/* 						        <option>2029-2030</option>         */
/*         					</select>*/
/* 		 				</div>*/
/* 		 			</div>*/
/* 		 		</div>*/
/* 		 		<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Level</h5>*/
/* 		 				<div class="dropdown">	*/
/* 		 					<select name="level" class="form-control">*/
/* 		 						<option>First Year</option>*/
/* 						        <option>Second Year</option>*/
/* 						        <option>Pastoral Track</option>*/
/* 		 					</select>*/
/* 		 				</div>*/
/* 		 			</div>*/
/* 		 		</div>		 	*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 	      		<div class="pull-right">*/
/* 					<div class="btn-group" role="group" aria-label="align-right">*/
/* 						<!-- <button type="button" class="btn btn-default"><a href="#">Back</a></button> -->*/
/* 						<button type="submit" class="btn btn-primary" form="form1" value="Submit"   data-request="{{ __SELF__ }}::onSave" data-request-update="'{{ __SELF__ }}::personalinformation':'#form_wrapper'">Next:Personal Information</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>			*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
