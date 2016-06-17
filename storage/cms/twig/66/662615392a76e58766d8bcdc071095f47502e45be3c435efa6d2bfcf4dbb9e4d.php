<?php

/* C:\xampp\htdocs\newlifetrainingcenter-v2/plugins/heidimarasigan/nltc/components/applicationform/default.htm */
class __TwigTemplate_cbfd1e94de6ed5617720f5de8ffa8f777022a4c3690a59498511261e492f6d11 extends Twig_Template
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
        echo "<div id=\"form_wrapper\">

     ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::studyprogram")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\newlifetrainingcenter-v2/plugins/heidimarasigan/nltc/components/applicationform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div id="form_wrapper">*/
/* */
/*      {% partial __SELF__~'::studyprogram' %}*/
/* </div>*/
