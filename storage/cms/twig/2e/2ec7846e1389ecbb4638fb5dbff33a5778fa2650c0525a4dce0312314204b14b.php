<?php

/* C:\xampp\htdocs\nltcv2/plugins/heidimarasigan/nltc/components/applicationform/christianlife.htm */
class __TwigTemplate_13133b2ebea1e5debc54ebe1af639ae8ec5a30c080a3583912acebdee58f2ed1 extends Twig_Template
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
\t\t<h3>Christian Life</h3>
\t\t<form>
\t\t \t<div class=\"row\">
\t\t \t\t<div class=\"col-md-12\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>When did you receive Jesus as personal Lord and Savior?</h5>
\t\t\t \t\t\t<input type=\"text\" name=\"christian_when_saved\" class=\"form-control\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_when_saved", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t\t \t\t</div>
\t\t \t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Have you been baptized in the Holy Spirit with the evidence of speaking with other tongues?</h5>
\t\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"christian_baptized\" value='yes' 
\t\t \t\t\t\t\t";
        // line 20
        if (($this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_baptized", array()) == "yes")) {
            // line 21
            echo "\t\t\t    \t\t\tchecked=\"checked\"
\t\t\t    \t\t\t";
        }
        // line 22
        echo ">Yes
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>
\t\t \t\t\t<div class=\"radio\">
\t\t \t\t\t\t<label>
\t\t \t\t\t\t\t<input type=\"radio\" name=\"christian_baptized\" value='no'
\t\t \t\t\t\t\t";
        // line 28
        if (($this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_baptized", array()) == "no")) {
            // line 29
            echo "\t\t\t    \t\t\tchecked=\"checked\"
\t\t\t    \t\t\t";
        }
        // line 30
        echo ">No
\t\t \t\t\t\t</label>
\t\t \t\t\t</div>\t\t
\t\t \t\t\t</div>
\t\t \t\t</div>
\t\t
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<h5>Date</h5>\t\t \t\t\t\t\t \t\t\t\t       
\t\t \t\t\t\t<div class='input-group date'>
\t\t                    <input type='text' name=\"christian_baptized_date\" class=\"form-control\" data-control=\"custom_picker\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_baptized_date", array()), "html", null, true);
        echo "\">
\t\t                    <span class=\"input-group-addon\">
\t\t\t                    \t<span class=\"glyphicon glyphicon-calendar\"></span>
                    \t\t</span>\t\t                    \t
\t        \t\t\t</div>
\t    \t\t\t</div>
\t        \t</div>
\t        \t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Place</h5>
\t\t\t \t\t\t<input type=\"text\" name=\"christian_baptized_place\" class=\"form-control\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_baptized_place", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t\t \t\t</div>
\t\t \t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Church</h5>
\t\t \t\t\t\t<div class=\"dropdown-toggle\" data-toggle=\"dropdown\">\t
\t\t \t\t\t\t\t<select id=\"church\" name=\"christian_church\" class=\"form-control\">
\t\t \t\t\t\t\t\t<option> --Select item from list--</option>
\t\t \t\t\t\t\t\t<option value=\"new_life\"
\t\t \t\t\t\t\t\t";
        // line 60
        if (($this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_church", array()) == "new_life")) {
            // line 61
            echo "\t\t\t\t    \t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 63
        echo "\t\t \t\t\t\t\t\t>New Life</option>
\t\t\t\t\t\t        <option value=\"non_new_life\"
\t\t\t\t\t\t        ";
        // line 65
        if (($this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_church", array()) == "non_new_life")) {
            // line 66
            echo "\t\t\t\t    \t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t\t        >Non-New Life</option>\t\t\t\t\t\t        
\t\t \t\t\t\t\t</select>
\t\t \t\t\t\t</div>
\t\t \t\t\t</div>
\t\t \t\t</div>\t
\t\t \t\t<div class=\"col-md-6 col-md-offset-6\" id=\"church_hide\">
\t\t \t\t\t
\t\t \t\t</div>\t\t \t\t
    \t\t\t<div class=\"col-md-6\" id=\"NewLifeChurches\"
    \t\t\t";
        // line 77
        if (($this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_church", array()) != "new_life")) {
            // line 78
            echo "    \t\t\tstyle=\"display:none;\"
    \t\t\t";
        }
        // line 80
        echo "    \t\t\t>
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Church Name</h5>
\t\t \t\t\t\t<div class=\"dropdown\">
\t\t \t\t\t\t\t<select name=\"christian_church_name\" class=\"form-control\">
\t\t\t                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "getChurchList", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["church"]) {
            // line 86
            echo "\t\t\t                    \t<option value=\"";
            echo twig_escape_filter($this->env, $context["church"], "html", null, true);
            echo "\"
\t\t\t                    \t";
            // line 87
            if (($this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_church_name", array()) == $context["church"])) {
                // line 88
                echo "\t\t\t                    \t\tselected=\"selected\" 
\t\t\t                    \t";
            }
            // line 90
            echo "\t\t\t                    \t>
\t\t\t                    \t";
            // line 91
            echo twig_escape_filter($this->env, $context["church"], "html", null, true);
            echo "
\t\t\t                    \t</option>
\t\t\t                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['church'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "               \t\t\t\t</select>
\t\t \t\t\t\t</div>
\t\t \t\t\t</div>
\t\t \t\t</div>\t
     \t\t\t<div class=\"col-md-6\" id=\"NonNewLifeChurches\" style=\"display:none;\">
\t             \t<div class=\"form-group\">
\t\t               <h5>Name of Church (Non-New Life)</h5>
\t\t               <input type=\"text\" name=\"christian_nonnewlife\" id=\"non_new_life\" class=\"form-control\" placeholder=\"Name of Church\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_nonnewlife", array()), "html", null, true);
        echo "\">
\t                </div>
     \t\t\t</div>\t     \t\t
     \t\t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>Indicate if you are a</h5>
\t\t \t\t\t\t<div class=\"dropdown\">\t
\t\t \t\t\t\t\t<select name=\"christian_position\" class=\"form-control\">
\t\t \t\t\t\t\t\t<option value=\"Senior Pastor\" 
\t\t \t\t\t\t\t\t";
        // line 110
        if (($this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_position", array()) == "Senior Pastor")) {
            // line 111
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 113
        echo "\t\t\t\t    \t\t\t>Senior Pastor</option>
\t\t\t\t\t\t        <option value=\"Lead Pastor\"
\t\t\t\t\t\t        ";
        // line 115
        if (($this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_position", array()) == "Lead Pastor")) {
            // line 116
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 118
        echo "\t\t\t\t    \t\t\t>Lead Pastor</option>
\t\t\t\t\t\t        <option value=\"Ministry Head\"
\t\t\t\t\t\t        ";
        // line 120
        if (($this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_position", array()) == "Ministry Head")) {
            // line 121
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 123
        echo "\t\t\t\t    \t\t\t>Ministry Head</option>
\t\t\t\t\t\t        <option value=\"Pastoral Staff\" 
\t\t\t\t\t\t        ";
        // line 125
        if (($this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_position", array()) == "Pastoral Staff")) {
            // line 126
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 128
        echo "\t\t\t\t    \t\t\t>Pastoral Staff</option>
\t\t\t\t\t\t        <option value=\"Staff / Church Worker\" 
\t\t\t\t\t\t        ";
        // line 130
        if (($this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_position", array()) == "Staff / Church Worker")) {
            // line 131
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 133
        echo "\t\t\t\t    \t\t\t>Staff / Church Worker</option>
\t\t\t\t\t\t        <option value=\"Member\" 
\t\t\t\t\t\t        ";
        // line 135
        if (($this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_position", array()) == "Member")) {
            // line 136
            echo "\t\t\t \t\t\t\t\tselected=\"selected\"
\t\t\t\t    \t\t\t";
        }
        // line 138
        echo "\t\t\t\t    \t\t\t>Member</option>\t\t
\t\t \t\t\t\t\t</select>
\t\t \t\t\t\t</div>
\t\t \t\t\t</div>
\t\t \t\t</div>
\t\t \t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>What is the name of your senior pastor or lead pastor?</h5>
\t\t\t \t\t\t<input type=\"text\" name=\"christian_senior_pastor\" class=\"form-control\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_senior_pastor", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t\t \t\t</div>\t
\t\t \t\t<div class=\"col-md-6\">
\t\t \t\t\t<div class=\"form-group\">
\t\t \t\t\t\t<h5>How long have you been faithfully attending the said church?</h5>
\t\t\t \t\t\t<input type=\"text\" name=\"christian_length_attend\" class=\"form-control\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["christian_life_values"]) ? $context["christian_life_values"] : null), "christian_length_attend", array()), "html", null, true);
        echo "\">
\t\t \t\t\t</div>
\t\t \t\t</div>\t
\t        </div>
\t    <div class=\"col-md-6\">
      \t\t<div class=\"pull-left\">
\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\tdata-request=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onRedirect\" data-request-data=\"page: 5\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::educationalbackground':'#form_wrapper'\"
\t\t\t\t\t\t>Back:Educational Background</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
      \t\t<div class=\"pull-right\">
\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"align-right\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\tdata-request-data=\"page: 5\"
\t\t\t\t\t\tdata-request=\"";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSave\"
\t\t\t\t\t\tdata-request-update=\"'";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::ministryinvolvement':'#form_wrapper'\">Next:Ministry Involvement
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        </div>    \t
\t\t</form>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nltcv2/plugins/heidimarasigan/nltc/components/applicationform/christianlife.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 171,  290 => 170,  275 => 160,  264 => 152,  255 => 146,  245 => 138,  241 => 136,  239 => 135,  235 => 133,  231 => 131,  229 => 130,  225 => 128,  221 => 126,  219 => 125,  215 => 123,  211 => 121,  209 => 120,  205 => 118,  201 => 116,  199 => 115,  195 => 113,  191 => 111,  189 => 110,  177 => 101,  168 => 94,  159 => 91,  156 => 90,  152 => 88,  150 => 87,  145 => 86,  141 => 85,  134 => 80,  130 => 78,  128 => 77,  117 => 68,  113 => 66,  111 => 65,  107 => 63,  103 => 61,  101 => 60,  88 => 50,  75 => 40,  63 => 30,  59 => 29,  57 => 28,  49 => 22,  45 => 21,  43 => 20,  29 => 9,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* 	<div class="wrapper panel-body">*/
/* 		<h3>Christian Life</h3>*/
/* 		<form>*/
/* 		 	<div class="row">*/
/* 		 		<div class="col-md-12">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>When did you receive Jesus as personal Lord and Savior?</h5>*/
/* 			 			<input type="text" name="christian_when_saved" class="form-control" value="{{ christian_life_values.christian_when_saved }}">*/
/* 		 			</div>*/
/* 		 		</div>*/
/* 		 	</div>*/
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Have you been baptized in the Holy Spirit with the evidence of speaking with other tongues?</h5>*/
/* 			 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="christian_baptized" value='yes' */
/* 		 					{% if christian_life_values.christian_baptized == "yes" %}*/
/* 			    			checked="checked"*/
/* 			    			{% endif %}>Yes*/
/* 		 				</label>*/
/* 		 			</div>*/
/* 		 			<div class="radio">*/
/* 		 				<label>*/
/* 		 					<input type="radio" name="christian_baptized" value='no'*/
/* 		 					{% if christian_life_values.christian_baptized == "no" %}*/
/* 			    			checked="checked"*/
/* 			    			{% endif %}>No*/
/* 		 				</label>*/
/* 		 			</div>		*/
/* 		 			</div>*/
/* 		 		</div>*/
/* 		*/
/* 				<div class="col-md-6">*/
/* 					<div class="form-group">*/
/* 						<h5>Date</h5>		 					 				       */
/* 		 				<div class='input-group date'>*/
/* 		                    <input type='text' name="christian_baptized_date" class="form-control" data-control="custom_picker" value="{{ christian_life_values.christian_baptized_date }}">*/
/* 		                    <span class="input-group-addon">*/
/* 			                    	<span class="glyphicon glyphicon-calendar"></span>*/
/*                     		</span>		                    	*/
/* 	        			</div>*/
/* 	    			</div>*/
/* 	        	</div>*/
/* 	        	<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Place</h5>*/
/* 			 			<input type="text" name="christian_baptized_place" class="form-control" value="{{ christian_life_values.christian_baptized_place }}">*/
/* 		 			</div>*/
/* 		 		</div>*/
/* 		 		<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Church</h5>*/
/* 		 				<div class="dropdown-toggle" data-toggle="dropdown">	*/
/* 		 					<select id="church" name="christian_church" class="form-control">*/
/* 		 						<option> --Select item from list--</option>*/
/* 		 						<option value="new_life"*/
/* 		 						{% if christian_life_values.christian_church == "new_life" %}*/
/* 				    			selected="selected"*/
/* 				    			{% endif %}*/
/* 		 						>New Life</option>*/
/* 						        <option value="non_new_life"*/
/* 						        {% if christian_life_values.christian_church == "non_new_life" %}*/
/* 				    			selected="selected"*/
/* 				    			{% endif %}*/
/* 						        >Non-New Life</option>						        */
/* 		 					</select>*/
/* 		 				</div>*/
/* 		 			</div>*/
/* 		 		</div>	*/
/* 		 		<div class="col-md-6 col-md-offset-6" id="church_hide">*/
/* 		 			*/
/* 		 		</div>		 		*/
/*     			<div class="col-md-6" id="NewLifeChurches"*/
/*     			{% if christian_life_values.christian_church  != "new_life" %}*/
/*     			style="display:none;"*/
/*     			{% endif %}*/
/*     			>*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Church Name</h5>*/
/* 		 				<div class="dropdown">*/
/* 		 					<select name="christian_church_name" class="form-control">*/
/* 			                    {% for church in __SELF__.getChurchList() %}*/
/* 			                    	<option value="{{ church }}"*/
/* 			                    	{% if christian_life_values.christian_church_name == church %}*/
/* 			                    		selected="selected" */
/* 			                    	{% endif %}*/
/* 			                    	>*/
/* 			                    	{{ church }}*/
/* 			                    	</option>*/
/* 			                    {% endfor %}*/
/*                				</select>*/
/* 		 				</div>*/
/* 		 			</div>*/
/* 		 		</div>	*/
/*      			<div class="col-md-6" id="NonNewLifeChurches" style="display:none;">*/
/* 	             	<div class="form-group">*/
/* 		               <h5>Name of Church (Non-New Life)</h5>*/
/* 		               <input type="text" name="christian_nonnewlife" id="non_new_life" class="form-control" placeholder="Name of Church" value="{{ christian_life_values.christian_nonnewlife }}">*/
/* 	                </div>*/
/*      			</div>	     		*/
/*      			<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>Indicate if you are a</h5>*/
/* 		 				<div class="dropdown">	*/
/* 		 					<select name="christian_position" class="form-control">*/
/* 		 						<option value="Senior Pastor" */
/* 		 						{% if christian_life_values.christian_position == "Senior Pastor" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 				    			>Senior Pastor</option>*/
/* 						        <option value="Lead Pastor"*/
/* 						        {% if christian_life_values.christian_position == "Lead Pastor" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 				    			>Lead Pastor</option>*/
/* 						        <option value="Ministry Head"*/
/* 						        {% if christian_life_values.christian_position == "Ministry Head" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 				    			>Ministry Head</option>*/
/* 						        <option value="Pastoral Staff" */
/* 						        {% if christian_life_values.christian_position == "Pastoral Staff" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 				    			>Pastoral Staff</option>*/
/* 						        <option value="Staff / Church Worker" */
/* 						        {% if christian_life_values.christian_position == "Staff / Church Worker" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 				    			>Staff / Church Worker</option>*/
/* 						        <option value="Member" */
/* 						        {% if christian_life_values.christian_position == "Member" %}*/
/* 			 					selected="selected"*/
/* 				    			{% endif %}*/
/* 				    			>Member</option>		*/
/* 		 					</select>*/
/* 		 				</div>*/
/* 		 			</div>*/
/* 		 		</div>*/
/* 		 		<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>What is the name of your senior pastor or lead pastor?</h5>*/
/* 			 			<input type="text" name="christian_senior_pastor" class="form-control" value="{{ christian_life_values.christian_senior_pastor }}">*/
/* 		 			</div>*/
/* 		 		</div>	*/
/* 		 		<div class="col-md-6">*/
/* 		 			<div class="form-group">*/
/* 		 				<h5>How long have you been faithfully attending the said church?</h5>*/
/* 			 			<input type="text" name="christian_length_attend" class="form-control" value="{{ christian_life_values.christian_length_attend }}">*/
/* 		 			</div>*/
/* 		 		</div>	*/
/* 	        </div>*/
/* 	    <div class="col-md-6">*/
/*       		<div class="pull-left">*/
/* 				<div class="btn-group" role="group" aria-label="align-right">*/
/* 					<button type="button" class="btn btn-primary"*/
/* 						data-request="{{ __SELF__ }}::onRedirect" data-request-data="page: 5" data-request-update="'{{ __SELF__ }}::educationalbackground':'#form_wrapper'"*/
/* 						>Back:Educational Background</button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-6">*/
/*       		<div class="pull-right">*/
/* 				<div class="btn-group" role="group" aria-label="align-right">*/
/* 						<button type="button" class="btn btn-primary"*/
/* 						data-request-data="page: 5"*/
/* 						data-request="{{ __SELF__ }}::onSave"*/
/* 						data-request-update="'{{ __SELF__ }}::ministryinvolvement':'#form_wrapper'">Next:Ministry Involvement*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/*         </div>    	*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
