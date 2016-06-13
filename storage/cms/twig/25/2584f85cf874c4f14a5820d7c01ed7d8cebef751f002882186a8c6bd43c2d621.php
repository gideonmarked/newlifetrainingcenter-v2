<?php

/* C:\wamp\www\nltcv2/themes/newlifetrainingcenter/partials/heading-breadcrumbs.htm */
class __TwigTemplate_d67b90239d71e06be4a33980372539455701ad66ff9c5842650b6c23b451804d extends Twig_Template
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
        echo "<!-- Page Content -->
    <div class=\"container\">

        <!-- Content Row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <a href=\"home\"><img src=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/NTC-Web-Banner.png");
        echo "\" width=\"800\" height=\"231\" class=\"img-responsive\"></a> 
            </div>
        </div>
        
        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
        \t\t<div class=\"col-lg-3\">
            </div>
            
            <div class=\"col-lg-9\">
                <h3 class=\"page-header\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h3>
                <!--<ol class=\"breadcrumb\">
                    <li><a href=\"home\">Home</a>
                    </li>
                    <li class=\"active\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</li>
                </ol> -->
            </div>
        </div>
        <!-- /.row -->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\nltcv2/themes/newlifetrainingcenter/partials/heading-breadcrumbs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 21,  40 => 17,  27 => 7,  19 => 1,);
    }
}
/* <!-- Page Content -->*/
/*     <div class="container">*/
/* */
/*         <!-- Content Row -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <a href="home"><img src="{{ 'assets/images/NTC-Web-Banner.png'|theme }}" width="800" height="231" class="img-responsive"></a> */
/*             </div>*/
/*         </div>*/
/*         */
/*         <!-- Page Heading/Breadcrumbs -->*/
/*         <div class="row">*/
/*         		<div class="col-lg-3">*/
/*             </div>*/
/*             */
/*             <div class="col-lg-9">*/
/*                 <h3 class="page-header">{{ this.page.title }}</h3>*/
/*                 <!--<ol class="breadcrumb">*/
/*                     <li><a href="home">Home</a>*/
/*                     </li>*/
/*                     <li class="active">{{ this.page.title }}</li>*/
/*                 </ol> -->*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
