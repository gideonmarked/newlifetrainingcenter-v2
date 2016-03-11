<?php

/* /home/newlifet/public_html/v2/themes/newlifetrainingcenter/layouts/blog-home-1.htm */
class __TwigTemplate_5a1e491bd7c81ff7b83a30eda397e6b29ff3f1d0ae8eea2a1e235f5982cdc09f extends Twig_Template
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
    <!-- Page Content -->
    <div class=\"container\">

        <!-- Content Row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <a href=\"home\"><img src=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/NTC-Web-Banner.png");
        echo "\" width=\"800\" height=\"231\" class=\"img-responsive\"></a> 
            </div>
        </div>

        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "
                    <!--<small>Subheading</small> -->
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"home\">Home</a>
                    </li>
                    <li class=\"active\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class=\"row\">

            <!-- Blog Entries Column -->
            <div class=\"col-md-8\">

  \t\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 36
        echo "
            </div>

\t\t\t\t\t\t";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("blog-sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "        
        </div>
        <!-- /.row -->
        
";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/newlifet/public_html/v2/themes/newlifetrainingcenter/layouts/blog-home-1.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 44,  83 => 40,  79 => 39,  74 => 36,  72 => 35,  58 => 24,  49 => 18,  39 => 11,  30 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% partial "header" %}*/
/* */
/* 		{% partial "navigation-top" %}*/
/* */
/*     <!-- Page Content -->*/
/*     <div class="container">*/
/* */
/*         <!-- Content Row -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <a href="home"><img src="{{ 'assets/images/NTC-Web-Banner.png'|theme }}" width="800" height="231" class="img-responsive"></a> */
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Page Heading/Breadcrumbs -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{{ this.page.title }}*/
/*                     <!--<small>Subheading</small> -->*/
/*                 </h1>*/
/*                 <ol class="breadcrumb">*/
/*                     <li><a href="home">Home</a>*/
/*                     </li>*/
/*                     <li class="active">{{ this.page.title }}</li>*/
/*                 </ol>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/* */
/*         <div class="row">*/
/* */
/*             <!-- Blog Entries Column -->*/
/*             <div class="col-md-8">*/
/* */
/*   						{% page %}*/
/* */
/*             </div>*/
/* */
/* 						{% partial "blog-sidebar" %}*/
/*         */
/*         </div>*/
/*         <!-- /.row -->*/
/*         */
/* {% partial "footer" %}*/
