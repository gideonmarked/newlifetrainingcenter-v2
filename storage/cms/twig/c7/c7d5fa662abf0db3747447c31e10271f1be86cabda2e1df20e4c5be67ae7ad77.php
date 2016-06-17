<?php

/* C:\xampp\htdocs\newlifetrainingcenter-v2/plugins/heidimarasigan/nltc/components/applicationform/training_attended.htm */
class __TwigTemplate_14ba2f8d389189b5461b8ebe9c53cc39344d13d9e260981ee1d2cf161f33f287 extends Twig_Template
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
<div class=\"col-md-4\">
\t<h5 class=\"text-center\">Training Type</h5>
</div>
<div class=\"col-md-3\">
\t<h5 class=\"text-center\">Training Venue</h5>
</div>
<div class=\"col-md-3\">
\t<h5 class=\"text-center\">Training Date</h5>
</div>
<div class=\"col-md-1\">
\t<h5 class=\"text-center\">Remove</h5>
</div>
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["training"]) ? $context["training"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "<div class=\"row\">
\t<div class=\"col-md-1 text-center\" style=\"padding-top: 8px\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo ". </div>
\t<div class=\"col-md-4\">
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" class=\"form-control\" name=\"christian_training_type[]\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "christian_training_type", array()), "html", null, true);
            echo "\">
\t\t</div>
\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" class=\"form-control\" name=\"christian_training_venue[]\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "christian_training_venue", array()), "html", null, true);
            echo "\">
\t\t</div>
\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group\">
\t\t\t<div class='input-group date' >
\t\t        <input type='date' class=\"form-control\" id='datepicker' name=\"christian_training_date[]\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "christian_training_date", array()), "html", null, true);
            echo "\">
\t\t        <span class=\"input-group-addon\">
\t\t        \t<span class=\"glyphicon glyphicon-calendar\"></span>
\t\t\t\t</span>
\t\t\t</div>\t \t\t\t
\t\t</div>
\t</div>
\t<div class=\"col-md-1 text-center\">
\t\t";
            // line 40
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 41
                echo "\t\t\t<a href=\"#\"
\t\t\tdata-request-data=\"data_id : ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\"
\t\t\tdata-request=\"";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
                echo "::onDeleteTraining\"
\t\t\tdata-request-update=\"'";
                // line 44
                echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
                echo "::training_attended':'#training_wrapper'\"
\t\t\tdata-request-confirm=\"Are you sure you want to delete this item?\"
\t\t\tstyle=\"font-size: 20px;padding-top: 8px;display: block; margin-left: -30px;\" ><i class=\"glyphicon glyphicon-minus-sign\"></i></a>
\t\t";
            }
            // line 48
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\newlifetrainingcenter-v2/plugins/heidimarasigan/nltc/components/applicationform/training_attended.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 48,  103 => 44,  99 => 43,  95 => 42,  92 => 41,  90 => 40,  79 => 32,  70 => 26,  62 => 21,  56 => 18,  53 => 17,  36 => 16,  19 => 1,);
    }
}
/* <div class="col-md-1">*/
/* 	<h5 style="margin-left: 5px;">No.</h5>*/
/* </div>*/
/* <div class="col-md-4">*/
/* 	<h5 class="text-center">Training Type</h5>*/
/* </div>*/
/* <div class="col-md-3">*/
/* 	<h5 class="text-center">Training Venue</h5>*/
/* </div>*/
/* <div class="col-md-3">*/
/* 	<h5 class="text-center">Training Date</h5>*/
/* </div>*/
/* <div class="col-md-1">*/
/* 	<h5 class="text-center">Remove</h5>*/
/* </div>*/
/* {% for item in training %}*/
/* <div class="row">*/
/* 	<div class="col-md-1 text-center" style="padding-top: 8px">{{ loop.index }}. </div>*/
/* 	<div class="col-md-4">*/
/* 		<div class="form-group">*/
/* 			<input type="text" class="form-control" name="christian_training_type[]" value="{{ item.christian_training_type }}">*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<div class="form-group">*/
/* 			<input type="text" class="form-control" name="christian_training_venue[]" value="{{ item.christian_training_venue }}">*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<div class="form-group">*/
/* 			<div class='input-group date' >*/
/* 		        <input type='date' class="form-control" id='datepicker' name="christian_training_date[]" value="{{ item.christian_training_date }}">*/
/* 		        <span class="input-group-addon">*/
/* 		        	<span class="glyphicon glyphicon-calendar"></span>*/
/* 				</span>*/
/* 			</div>	 			*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-1 text-center">*/
/* 		{% if loop.index0 > 0 %}*/
/* 			<a href="#"*/
/* 			data-request-data="data_id : {{ loop.index0 }}"*/
/* 			data-request="{{ __SELF__ }}::onDeleteTraining"*/
/* 			data-request-update="'{{ __SELF__ }}::training_attended':'#training_wrapper'"*/
/* 			data-request-confirm="Are you sure you want to delete this item?"*/
/* 			style="font-size: 20px;padding-top: 8px;display: block; margin-left: -30px;" ><i class="glyphicon glyphicon-minus-sign"></i></a>*/
/* 		{% endif %}*/
/* 	</div>*/
/* </div>*/
/* {% endfor %}*/
