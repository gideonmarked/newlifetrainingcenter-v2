<?php

/* C:\xampp\htdocs\v2.newlifetrainingcenter.com/themes/newlifetrainingcenter/layouts/full-width.htm */
class __TwigTemplate_a44b15323536b7dd006d198f0bc2f1c14a05a63a4954ec8b078e7b8ed78a4b21 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->partialFunction("navigation-top"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "    
    \t\t";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("heading-breadcrumbs-fullwidth"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "    

        <!-- Content Row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
\t\t\t \t\t\t\t";
        // line 11
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 12
        echo "            </div>
        </div>

        <!-- Call to Action Section -->
        <div class=\"well\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <p>Welcome to Newlife Training Center! We offer a one-year and two-year Bible training program.</p>
                    <p>We are so glad that you have made this quality decision to enroll at Newlife Training Center. Our online procedure will help facilitate and guide you through the application process quickly and easily.</p>
                </div>
                <div class=\"col-md-4\">
                    <a class=\"btn btn-lg btn-default btn-block\" href=\"application\">Apply Now</a>
                </div>
            </div>
        </div>

";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\v2.newlifetrainingcenter.com/themes/newlifetrainingcenter/layouts/full-width.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 28,  46 => 12,  44 => 11,  37 => 6,  33 => 5,  30 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% partial "header" %}*/
/* */
/* 		{% partial "navigation-top" %}*/
/*     */
/*     		{% partial "heading-breadcrumbs-fullwidth" %}*/
/*     */
/* */
/*         <!-- Content Row -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/* 			 				{% page %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Call to Action Section -->*/
/*         <div class="well">*/
/*             <div class="row">*/
/*                 <div class="col-md-8">*/
/*                     <p>Welcome to Newlife Training Center! We offer a one-year and two-year Bible training program.</p>*/
/*                     <p>We are so glad that you have made this quality decision to enroll at Newlife Training Center. Our online procedure will help facilitate and guide you through the application process quickly and easily.</p>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <a class="btn btn-lg btn-default btn-block" href="application">Apply Now</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* {% partial "footer" %}*/
