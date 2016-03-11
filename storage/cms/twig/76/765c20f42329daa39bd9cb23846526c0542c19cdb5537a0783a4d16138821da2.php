<?php

/* C:\xampp\htdocs\v2.newlifetrainingcenter.com/themes/newlifetrainingcenter/partials/heading-breadcrumbs-fullwidth.htm */
class __TwigTemplate_6808d9e285c9e36153c94c7db3a97c8dbb6d7e93393fabd452c9693ffeecdcd2 extends Twig_Template
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
            
            <div class=\"col-lg-12\">
              ";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()) == "New Life Training Center")) {
            // line 16
            echo "              ";
        } else {
            // line 17
            echo "                <h3 class=\"page-header\">
                  ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
            echo "
                </h3>              
              ";
        }
        // line 21
        echo "                
                <!--<ol class=\"breadcrumb\">
                    <li><a href=\"home\">Home</a>
                    </li>
                    <li class=\"active\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</li>
                </ol> -->
            </div>
        </div>
        <!-- /.row -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\v2.newlifetrainingcenter.com/themes/newlifetrainingcenter/partials/heading-breadcrumbs-fullwidth.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 25,  52 => 21,  46 => 18,  43 => 17,  40 => 16,  38 => 15,  27 => 7,  19 => 1,);
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
/*             */
/*             <div class="col-lg-12">*/
/*               {% if this.page.title == "New Life Training Center" %}*/
/*               {% else %}*/
/*                 <h3 class="page-header">*/
/*                   {{ this.page.title }}*/
/*                 </h3>              */
/*               {% endif %}*/
/*                 */
/*                 <!--<ol class="breadcrumb">*/
/*                     <li><a href="home">Home</a>*/
/*                     </li>*/
/*                     <li class="active">{{ this.page.title }}</li>*/
/*                 </ol> -->*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
