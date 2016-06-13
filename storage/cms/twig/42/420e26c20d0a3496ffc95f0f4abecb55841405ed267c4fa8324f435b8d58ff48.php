<?php

/* C:\xampp\htdocs\nltcv2/themes/newlifetrainingcenter/pages/category.htm */
class __TwigTemplate_d83a25c768315fef3e6a7db5df1460f3a5fabe06ade12ef1ea5a91bd3b9ccd70 extends Twig_Template
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
  
    ";
        // line 4
        if ( !(isset($context["category"]) ? $context["category"] : null)) {
            // line 5
            echo "        <h2>Category not found</h2>
    ";
        } else {
            // line 7
            echo "        <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo "</h2>
    
        ";
            // line 9
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("blogPosts"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 10
            echo "    ";
        }
        // line 11
        echo "    
  </div>    <!--/.panel-body-->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nltcv2/themes/newlifetrainingcenter/pages/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  40 => 10,  36 => 9,  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="panel-body">*/
/*   */
/*     {% if not category %}*/
/*         <h2>Category not found</h2>*/
/*     {% else %}*/
/*         <h2>{{ category.name }}</h2>*/
/*     */
/*         {% component 'blogPosts' %}*/
/*     {% endif %}*/
/*     */
/*   </div>    <!--/.panel-body-->*/
/* </div>*/
