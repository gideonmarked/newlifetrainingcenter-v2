<?php

/* C:\xampp\htdocs\nltcv2/themes/newlifetrainingcenter/layouts/404.htm */
class __TwigTemplate_20178d4f1fb8c4eb4518ac222b7cb7f11297e2a3c15a05311baa527f35f86cf9 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
\t\t";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "    
    \t\t";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("heading-breadcrumbs"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
        <!-- Content Row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
\t\t\t \t\t\t\t";
        // line 10
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 11
        echo "            </div>
        </div>

";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nltcv2/themes/newlifetrainingcenter/layouts/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  45 => 11,  43 => 10,  37 => 6,  33 => 5,  30 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% partial "header" %}*/
/* */
/* 		{% partial "navigation" %}*/
/*     */
/*     		{% partial "heading-breadcrumbs" %}*/
/* */
/*         <!-- Content Row -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/* 			 				{% page %}*/
/*             </div>*/
/*         </div>*/
/* */
/* {% partial "footer" %}*/
