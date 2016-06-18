<?php

/* C:\xampp\htdocs\newlifetrainingcenter-v2/plugins/heidimarasigan/nltc/components/applicationform/reference_details.htm */
class __TwigTemplate_dc94a2d870fca472672f89c6806ace4fb154e6c0054993b2348bcc5fbfdf6646 extends Twig_Template
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
        echo "<div class=\"col-md-1\">
\t<h5 style=\"margin-left: 5px;\">No.</h5>
</div>
<div class=\"col-md-3\">
\t<h5 class=\"text-center\">Name</h5>
</div>
<div class=\"col-md-2\">
\t<h5 class=\"text-center\">Relationship</h5>
</div>
<div class=\"col-md-3\">
\t<h5 class=\"text-center\">Address</h5>
</div>
<div class=\"col-md-2\">
\t<h5 class=\"text-center\">Contact No.</h5>
</div>
<div class=\"col-md-1\">
\t<h5 class=\"text-center\">Remove</h5>
</div>
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reference"]) ? $context["reference"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["details"]) {
            // line 20
            echo "
<div class=\"row\">
\t<div class=\"col-md-1 text-center\" style=\"padding-top: 8px\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo ". </div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"form-group\">\t\t\t
\t\t\t\t<input type=\"text\" class=\"form-control\"  name=\"reference_name[]\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "reference_name", array()), "html", null, true);
            echo "\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"reference_relationship[]\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "reference_relationship", array()), "html", null, true);
            echo "\">\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"reference_address[]\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "reference_address", array()), "html", null, true);
            echo "\">
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"col-md-2\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"reference_contactno[]\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "reference_contactno", array()), "html", null, true);
            echo "\">\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-1 text-center\">
\t\t";
            // line 45
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 46
                echo "\t\t\t<a href=\"#\"
\t\t\tdata-request-data=\"data_id : ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\"
\t\t\tdata-request=\"";
                // line 48
                echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
                echo "::onDeleteReference\"
\t\t\tdata-request-update=\"'";
                // line 49
                echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
                echo "::reference_details':'#reference_wrapper'\"
\t\t\tdata-request-confirm=\"Are you sure you want to delete this item?\"
\t\t\tstyle=\"font-size: 20px;padding-top: 8px;display: block; margin-left: -30px;\" ><i class=\"glyphicon glyphicon-minus-sign\"></i></a>
\t\t";
            }
            // line 53
            echo "\t</div>
</div>
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\newlifetrainingcenter-v2/plugins/heidimarasigan/nltc/components/applicationform/reference_details.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 53,  111 => 49,  107 => 48,  103 => 47,  100 => 46,  98 => 45,  91 => 41,  82 => 35,  74 => 30,  66 => 25,  60 => 22,  56 => 20,  39 => 19,  19 => 1,);
    }
}
/* <div class="col-md-1">*/
/* 	<h5 style="margin-left: 5px;">No.</h5>*/
/* </div>*/
/* <div class="col-md-3">*/
/* 	<h5 class="text-center">Name</h5>*/
/* </div>*/
/* <div class="col-md-2">*/
/* 	<h5 class="text-center">Relationship</h5>*/
/* </div>*/
/* <div class="col-md-3">*/
/* 	<h5 class="text-center">Address</h5>*/
/* </div>*/
/* <div class="col-md-2">*/
/* 	<h5 class="text-center">Contact No.</h5>*/
/* </div>*/
/* <div class="col-md-1">*/
/* 	<h5 class="text-center">Remove</h5>*/
/* </div>*/
/* {% for details in reference %}*/
/* */
/* <div class="row">*/
/* 	<div class="col-md-1 text-center" style="padding-top: 8px">{{ loop.index }}. </div>*/
/* 		<div class="col-md-3">*/
/* 			<div class="form-group">			*/
/* 				<input type="text" class="form-control"  name="reference_name[]" value="{{ details.reference_name }}">*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-2">*/
/* 			<div class="form-group">*/
/* 				<input type="text" class="form-control" name="reference_relationship[]" value="{{ details.reference_relationship }}">		*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			<div class="form-group">*/
/* 				<input type="text" class="form-control" name="reference_address[]" value="{{ details.reference_address }}">*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		<div class="col-md-2">*/
/* 			<div class="form-group">*/
/* 				<input type="text" class="form-control" name="reference_contactno[]" value="{{ details.reference_contactno }}">		*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-1 text-center">*/
/* 		{% if loop.index0 > 0 %}*/
/* 			<a href="#"*/
/* 			data-request-data="data_id : {{ loop.index0 }}"*/
/* 			data-request="{{ __SELF__ }}::onDeleteReference"*/
/* 			data-request-update="'{{ __SELF__ }}::reference_details':'#reference_wrapper'"*/
/* 			data-request-confirm="Are you sure you want to delete this item?"*/
/* 			style="font-size: 20px;padding-top: 8px;display: block; margin-left: -30px;" ><i class="glyphicon glyphicon-minus-sign"></i></a>*/
/* 		{% endif %}*/
/* 	</div>*/
/* </div>*/
/* {% endfor %}*/
/* */
