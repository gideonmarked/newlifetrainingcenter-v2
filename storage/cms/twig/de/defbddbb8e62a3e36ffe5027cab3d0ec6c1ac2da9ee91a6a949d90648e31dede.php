<?php

/* C:\xampp\htdocs\nltcv2/plugins/heidimarasigan/nltc/components/applicationform/child_item.htm */
class __TwigTemplate_333e5c833b67ed581fc926e59869a580a2490348093098302f6d4affd81d630b extends Twig_Template
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
        echo "\t\t\t\t\t\t\t<div class=\"col-md-1\"><h5>No.</h5></div>
\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t<h5 class=\"text-center\">Child's Name</h5>
\t\t\t\t\t \t\t</div>
\t\t\t\t \t\t\t<div class=\"col-md-2\">
\t\t\t\t \t\t\t\t<h5 class=\"text-center\">Child's Age</h5>
\t\t\t\t \t\t\t</div>
\t\t\t\t \t\t\t<div class=\"col-md-3\">
\t\t\t\t \t\t\t\t<h5 class=\"text-center\">Child's Gender</h5>
\t\t\t\t\t \t\t</div>
\t\t\t\t\t \t\t<div class=\"col-md-1\">
\t\t\t\t\t \t\t\t<h5 class=\"text-center\">Remove</h5>
\t\t\t\t\t \t\t</div>
\t\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["children"]) ? $context["children"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 15
            echo "\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-1 text-center\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo ". </div>
\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t \t\t\t<div class=\"form-group\">
\t\t\t\t\t \t\t\t\t<input type=\"text\" class=\"form-control\" name=\"child_name[]\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "child_name", array()), "html", null, true);
            echo "\" >
\t\t\t\t\t \t\t\t</div>
\t\t\t\t\t \t\t</div>
\t\t\t\t \t\t\t<div class=\"col-md-2\">
\t\t\t\t\t \t\t\t<div class=\"form-group\">
\t\t\t\t\t \t\t\t\t<input type=\"text\" class=\"form-control\" name=\"child_age[]\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "child_age", array()), "html", null, true);
            echo "\">
\t\t\t\t\t \t\t\t</div>
\t\t\t\t \t\t\t</div>
\t\t\t\t \t\t\t<div class=\"col-md-3\">
\t\t\t\t\t \t\t\t<div class=\"form-group\">
\t\t\t\t\t \t\t\t\t<div class=\"radio col-md-6\">
\t\t\t\t\t\t \t\t\t\t<label>

\t\t\t\t\t\t \t\t\t\t\t<input type=\"radio\"
\t\t\t\t\t\t \t\t\t\t\tname=\"child_gender[";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "]\"
\t\t\t\t\t\t \t\t\t\t\tvalue=\"male\" ";
            // line 34
            if (($this->getAttribute($context["child"], "child_gender", array()) == "male")) {
                echo " checked=\"checked\" ";
            }
            echo " >Male
\t\t\t\t\t\t \t\t\t\t</label>
\t\t\t\t\t\t \t\t\t</div>
\t\t\t\t\t\t \t\t\t<div class=\"radio col-md-6\" style=\"margin-top: 10px;\">
\t\t\t\t\t\t \t\t\t\t<label>
\t\t\t\t\t\t \t\t\t\t\t<input type=\"radio\"
\t\t\t\t\t\t \t\t\t\t\tname=\"child_gender[";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "]\"
\t\t\t\t\t\t \t\t\t\t\tvalue=\"female\" ";
            // line 41
            if (($this->getAttribute($context["child"], "child_gender", array()) == "female")) {
                echo " checked=\"checked\" ";
            }
            echo " >Female
\t\t\t\t\t\t \t\t\t\t</label>
\t\t\t\t\t\t \t\t\t</div>\t\t \t\t\t
\t\t\t\t\t \t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t\t\t\t";
            // line 47
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 48
                echo "\t\t\t\t\t\t\t\t\t<a href=\"#\"
\t\t\t\t\t\t\t\t\tdata-request-data=\"data_id : ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\tdata-request=\"";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
                echo "::onDeleteChild\"
\t\t\t\t\t\t\t\t\tdata-request-update=\"'";
                // line 51
                echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
                echo "::child_item':'#children_wrapper'\"
\t\t\t\t\t\t\t\t\tdata-request-confirm=\"Are you sure you want to delete this item?\"
\t\t\t\t\t\t\t\t\tstyle=\"font-size: 20px;padding-top: 8px;display: block;\"><i class=\"glyphicon glyphicon-minus-sign\"></i></a>
\t\t\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nltcv2/plugins/heidimarasigan/nltc/components/applicationform/child_item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 55,  123 => 51,  119 => 50,  115 => 49,  112 => 48,  110 => 47,  99 => 41,  95 => 40,  84 => 34,  80 => 33,  68 => 24,  60 => 19,  54 => 16,  51 => 15,  34 => 14,  19 => 1,);
    }
}
/* 							<div class="col-md-1"><h5>No.</h5></div>*/
/* 							<div class="col-md-5">*/
/* 								<h5 class="text-center">Child's Name</h5>*/
/* 					 		</div>*/
/* 				 			<div class="col-md-2">*/
/* 				 				<h5 class="text-center">Child's Age</h5>*/
/* 				 			</div>*/
/* 				 			<div class="col-md-3">*/
/* 				 				<h5 class="text-center">Child's Gender</h5>*/
/* 					 		</div>*/
/* 					 		<div class="col-md-1">*/
/* 					 			<h5 class="text-center">Remove</h5>*/
/* 					 		</div>*/
/* 						{% for child in children %}*/
/* 						<div class="row">*/
/* 							<div class="col-md-1 text-center">{{ loop.index }}. </div>*/
/* 							<div class="col-md-5">*/
/* 					 			<div class="form-group">*/
/* 					 				<input type="text" class="form-control" name="child_name[]" value="{{ child.child_name }}" >*/
/* 					 			</div>*/
/* 					 		</div>*/
/* 				 			<div class="col-md-2">*/
/* 					 			<div class="form-group">*/
/* 					 				<input type="text" class="form-control" name="child_age[]" value="{{ child.child_age }}">*/
/* 					 			</div>*/
/* 				 			</div>*/
/* 				 			<div class="col-md-3">*/
/* 					 			<div class="form-group">*/
/* 					 				<div class="radio col-md-6">*/
/* 						 				<label>*/
/* */
/* 						 					<input type="radio"*/
/* 						 					name="child_gender[{{ loop.index0 }}]"*/
/* 						 					value="male" {% if child.child_gender == 'male' %} checked="checked" {% endif %} >Male*/
/* 						 				</label>*/
/* 						 			</div>*/
/* 						 			<div class="radio col-md-6" style="margin-top: 10px;">*/
/* 						 				<label>*/
/* 						 					<input type="radio"*/
/* 						 					name="child_gender[{{ loop.index0 }}]"*/
/* 						 					value="female" {% if child.child_gender == 'female' %} checked="checked" {% endif %} >Female*/
/* 						 				</label>*/
/* 						 			</div>		 			*/
/* 					 			</div>*/
/* 							</div>*/
/* 							<div class="col-md-1">*/
/* 								{% if loop.index0 > 0 %}*/
/* 									<a href="#"*/
/* 									data-request-data="data_id : {{ loop.index0 }}"*/
/* 									data-request="{{ __SELF__ }}::onDeleteChild"*/
/* 									data-request-update="'{{ __SELF__ }}::child_item':'#children_wrapper'"*/
/* 									data-request-confirm="Are you sure you want to delete this item?"*/
/* 									style="font-size: 20px;padding-top: 8px;display: block;"><i class="glyphicon glyphicon-minus-sign"></i></a>*/
/* 								{% endif %}*/
/* 							</div>*/
/* 						</div>*/
/* 						{% endfor %}*/
