<?php

/* C:\xampp\htdocs\v2.newlifetrainingcenter.com/plugins/grinkomeda/enrollment/components/applicationform/default.htm */
class __TwigTemplate_7955bd30ceffb2fa4fcfecdd0cf42e00985686e0a73bf71c085101623295f0e8 extends Twig_Template
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
        echo "<div>
     ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::familybackground")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\v2.newlifetrainingcenter.com/plugins/grinkomeda/enrollment/components/applicationform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div>*/
/*      {% partial __SELF__~'::familybackground' %}*/
/* </div>*/
