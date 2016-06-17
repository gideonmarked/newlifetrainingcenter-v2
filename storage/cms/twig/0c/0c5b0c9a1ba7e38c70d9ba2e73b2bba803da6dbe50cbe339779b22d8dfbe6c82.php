<?php

/* C:\xampp\htdocs\nltcv2/plugins/heidimarasigan/nltc/components/applicationform/ministryinvolvement.htm */
class __TwigTemplate_5b42f8120334259758591f7673b220ce4252621540bb9300e5ad905554c6b402 extends Twig_Template
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
\t \t\t\t\t<input type=\"text\" class=\"form-control\">
\t \t\t\t</div>
\t \t\t</div>
 \t\t\t<div class=\"col-md-6\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Ministry Head</h5>
\t \t\t\t\t<input type=\"text\" class=\"form-control\">
\t \t\t\t</div>
 \t\t\t</div>
 \t\t\t<div class=\"col-md-6\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Years of Stay</h5>
\t \t\t\t\t<input type=\"text\" class=\"form-control\">
\t \t\t\t</div>
\t \t\t</div>
 \t\t\t<div class=\"col-md-6\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Responsibilities</h5>
\t \t\t\t\t<textarea name=\"responsibilities\" class=\"form-control\" rows=\"5\" cols=\"10\"></textarea>\t \t\t\t\t
\t \t\t\t</div>
 \t\t\t</div>
 \t\t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\" >
\t \t\t\t\t<h5>Why do you want to attend NLTC?</h5>
\t \t\t\t\t<textarea name=\"why_attend\" placeholder=\"Limit your answer to 2-3 sentences or 100 characters.\" class=\"form-control\" rows=\"5\" cols=\"10\"></textarea>\t \t\t\t\t
\t \t\t\t</div>
 \t\t\t</div> \t\t
 \t\t\t<div class=\"col-md-6\" id=\"life_group\">
 \t\t\t\t<div class=\"form-group\" > \t\t\t\t
\t\t \t\t\t<div class=\"checkbox custom-checkbox\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"checkbox\" id=\"lg_leader\" value=\"leader\">I am a leader of a Life Group
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t
\t\t    \t</div>
\t\t    </div>\t
\t\t    <div class=\"col-md-6\" id=\"life_group\">
 \t\t\t\t<div class=\"form-group\" > \t\t\t\t
\t\t \t\t\t<div class=\"checkbox custom-checkbox\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"checkbox\" id=\"lg_member\" value=\"member\">I am a member of a Life Group
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t
\t\t    \t</div>
\t\t    </div>\t 
\t\t    <div class=\"col-md-6\" id=\"date_leader\" style=\"display:none;\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Date Started (Life Group Leader)</h5>
\t \t\t\t\t<div class='input-group date'>
\t\t \t\t\t\t<input type='date' class=\"form-control\" id='datepicker'>
\t                    <span class=\"input-group-addon\">
\t\t                    \t<span class=\"glyphicon glyphicon-calendar\"></span>
\t            \t\t</span>\t
\t            \t</div>
\t \t\t\t</div>
\t \t\t</div>\t \t\t
 \t\t\t<div class=\"col-md-6 pull-right\" id=\"date_member\" style=\"display:none;\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Date Started (Life Group Member)</h5>
\t \t\t\t\t<div class='input-group date'>
\t\t \t\t\t\t<input type='date' class=\"form-control\" id='datepicker'>
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
\t\t \t\t\t\t\t<input type=\"radio\" name=\"serve_ministry\">Yes
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"serve_ministry\">No
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t\t \t\t\t
\t \t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Are you a consistent tither?</h5>
\t \t\t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"consistent_tither\">Yes
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"consistent_tither\">No
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t\t \t\t\t
\t \t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>What other ministry trainings have you attended prior to application at NLTC?</h5>
\t\t \t\t\t\t<a class=\"btn\" href=\"#\" data-request=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onAddTraining\"
\t\t \t\t\t\tdata-request-update=\"'";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::training_attended':'#training_wrapper'\">
\t  \t\t\t\t\t\t<i class=\"glyphicon glyphicon-plus-sign\"></i> Add </a>\t  \t\t\t\t
\t  \t\t\t</div>\t\t\t\t
\t\t\t</div>

\t\t\t<!-- wrapper of all training attended -->
\t\t\t<div id=\"training_wrapper\">
\t\t\t\t";
        // line 117
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::training_attended")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 118
        echo "\t\t\t</div>
\t\t\t<!-- end of wrapper of all training attended -->

\t \t\t<div class=\"col-md-6\">
\t \t\t\t<div class=\"form-group\">
\t \t\t\t\t<h5>Do you have any desire to volunteer in NLTC?</h5>
\t \t\t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"desire_volunteer\">Yes
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"desire_volunteer\">No
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t\t \t\t\t
\t \t\t\t</div>
\t\t\t</div>\t\t
\t \t\t<div class=\"col-md-6\">
 \t\t\t\t<div class=\"form-group\" > \t\t\t\t
\t\t \t\t\t<div class=\"checkbox custom-checkbox\">
\t\t \t\t\t\t<h5>If yes, please check the following areas that you see yourself serving?</h5>
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"checkbox\">Teachers Assistant
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"checkbox custom-checkbox\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"checkbox\">Sound System
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t
\t\t \t\t\t<div class=\"checkbox custom-checkbox\">\t\t \t\t\t
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"checkbox\">Praise and Worship
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"checkbox custom-checkbox\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"checkbox\">Ushers or Usherettes
\t\t \t\t\t\t</label>\t\t
\t\t \t\t\t</div>\t\t\t
\t\t    \t</div>
\t\t    </div>\t
\t\t    <div class=\"col-md-12\">
\t \t\t\t<div class=\"form-group\" >
\t \t\t\t\t<h5>How do you plan to settle training fees on time?</h5>
\t \t\t\t\t<textarea name=\"why_attend\" class=\"form-control\" rows=\"5\" cols=\"10\"></textarea>\t \t\t\t\t
\t \t\t\t</div>
 \t\t\t</div> 
 \t\t\t<div class=\"col-md-6\">
\t      \t\t<div class=\"pull-left\">
\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\tdata-request=\"";
        // line 171
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
        // line 181
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSave\"
\t\t\t\t\t\t\tdata-request-update=\"'";
        // line 182
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
        return "C:\\xampp\\htdocs\\nltcv2/plugins/heidimarasigan/nltc/components/applicationform/ministryinvolvement.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 182,  217 => 181,  202 => 171,  147 => 118,  143 => 117,  133 => 110,  129 => 109,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* 	<div class="wrapper panel-body">*/
/* 		<h3>Ministry Involvement</h3>*/
/* 		<form>		*/
/* 			<div class="col-md-6">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Name of Ministry</h5>*/
/* 	 				<input type="text" class="form-control">*/
/* 	 			</div>*/
/* 	 		</div>*/
/*  			<div class="col-md-6">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Ministry Head</h5>*/
/* 	 				<input type="text" class="form-control">*/
/* 	 			</div>*/
/*  			</div>*/
/*  			<div class="col-md-6">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Years of Stay</h5>*/
/* 	 				<input type="text" class="form-control">*/
/* 	 			</div>*/
/* 	 		</div>*/
/*  			<div class="col-md-6">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Responsibilities</h5>*/
/* 	 				<textarea name="responsibilities" class="form-control" rows="5" cols="10"></textarea>	 				*/
/* 	 			</div>*/
/*  			</div>*/
/*  			<div class="col-md-12">*/
/* 	 			<div class="form-group" >*/
/* 	 				<h5>Why do you want to attend NLTC?</h5>*/
/* 	 				<textarea name="why_attend" placeholder="Limit your answer to 2-3 sentences or 100 characters." class="form-control" rows="5" cols="10"></textarea>	 				*/
/* 	 			</div>*/
/*  			</div> 		*/
/*  			<div class="col-md-6" id="life_group">*/
/*  				<div class="form-group" > 				*/
/* 		 			<div class="checkbox custom-checkbox">*/
/* 		 				<label>*/
/* 		 					<input type="checkbox" id="lg_leader" value="leader">I am a leader of a Life Group*/
/* 		 				</label>*/
/* 		 			</div>	*/
/* 		    	</div>*/
/* 		    </div>	*/
/* 		    <div class="col-md-6" id="life_group">*/
/*  				<div class="form-group" > 				*/
/* 		 			<div class="checkbox custom-checkbox">*/
/* 		 				<label>*/
/* 		 					<input type="checkbox" id="lg_member" value="member">I am a member of a Life Group*/
/* 		 				</label>*/
/* 		 			</div>		*/
/* 		    	</div>*/
/* 		    </div>	 */
/* 		    <div class="col-md-6" id="date_leader" style="display:none;">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Date Started (Life Group Leader)</h5>*/
/* 	 				<div class='input-group date'>*/
/* 		 				<input type='date' class="form-control" id='datepicker'>*/
/* 	                    <span class="input-group-addon">*/
/* 		                    	<span class="glyphicon glyphicon-calendar"></span>*/
/* 	            		</span>	*/
/* 	            	</div>*/
/* 	 			</div>*/
/* 	 		</div>	 		*/
/*  			<div class="col-md-6 pull-right" id="date_member" style="display:none;">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Date Started (Life Group Member)</h5>*/
/* 	 				<div class='input-group date'>*/
/* 		 				<input type='date' class="form-control" id='datepicker'>*/
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
/* 		 					<input type="radio" name="serve_ministry">Yes*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="serve_ministry">No*/
/* 		 				</label>*/
/* 		 			</div>			 			*/
/* 	 			</div>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>Are you a consistent tither?</h5>*/
/* 	 				<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="consistent_tither">Yes*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="consistent_tither">No*/
/* 		 				</label>*/
/* 		 			</div>			 			*/
/* 	 			</div>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 	 			<div class="form-group">*/
/* 	 				<h5>What other ministry trainings have you attended prior to application at NLTC?</h5>*/
/* 		 				<a class="btn" href="#" data-request="{{ __SELF__ }}::onAddTraining"*/
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
/* 		 					<input type="radio" name="desire_volunteer">Yes*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="desire_volunteer">No*/
/* 		 				</label>*/
/* 		 			</div>			 			*/
/* 	 			</div>*/
/* 			</div>		*/
/* 	 		<div class="col-md-6">*/
/*  				<div class="form-group" > 				*/
/* 		 			<div class="checkbox custom-checkbox">*/
/* 		 				<h5>If yes, please check the following areas that you see yourself serving?</h5>*/
/* 		 				<label>*/
/* 		 					<input type="checkbox">Teachers Assistant*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="checkbox custom-checkbox">*/
/* 		 				<label>*/
/* 		 					<input type="checkbox">Sound System*/
/* 		 				</label>*/
/* 		 			</div>	*/
/* 		 			<div class="checkbox custom-checkbox">		 			*/
/* 		 				<label>*/
/* 		 					<input type="checkbox">Praise and Worship*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="checkbox custom-checkbox">*/
/* 		 				<label>*/
/* 		 					<input type="checkbox">Ushers or Usherettes*/
/* 		 				</label>		*/
/* 		 			</div>			*/
/* 		    	</div>*/
/* 		    </div>	*/
/* 		    <div class="col-md-12">*/
/* 	 			<div class="form-group" >*/
/* 	 				<h5>How do you plan to settle training fees on time?</h5>*/
/* 	 				<textarea name="why_attend" class="form-control" rows="5" cols="10"></textarea>	 				*/
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
