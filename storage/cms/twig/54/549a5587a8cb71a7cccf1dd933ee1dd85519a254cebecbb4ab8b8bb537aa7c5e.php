<?php

/* C:\xampp\htdocs\v2.newlifetrainingcenter.com/themes/newlifetrainingcenter/pages/application.htm */
class __TwigTemplate_56bfb7d307b319a29dbe756588fdcec983d066373c5302b35da694bc2cbe6cf4 extends Twig_Template
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
  
  <div class=\"panel-body\">

    <!-- Content Row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Welcome to Newlife Training Center! We offer a one-year and two-year Bible training program.</p>
          <p>We are so glad that you have made this quality decision to enroll at Newlife Training Center. Our online procedure will help facilitate and guide you through the application process quickly and easily.</p>
        </div>
    </div>
    
    <hr />
    
    ";
        // line 15
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("applicationform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 16
        echo "    
  </div>
  
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\v2.newlifetrainingcenter.com/themes/newlifetrainingcenter/pages/application.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  35 => 15,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   */
/*   <div class="panel-body">*/
/* */
/*     <!-- Content Row -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*           <p>Welcome to Newlife Training Center! We offer a one-year and two-year Bible training program.</p>*/
/*           <p>We are so glad that you have made this quality decision to enroll at Newlife Training Center. Our online procedure will help facilitate and guide you through the application process quickly and easily.</p>*/
/*         </div>*/
/*     </div>*/
/*     */
/*     <hr />*/
/*     */
/*     {% component 'applicationform' %}*/
/*     */
/*   </div>*/
/*   */
/* </div>*/
