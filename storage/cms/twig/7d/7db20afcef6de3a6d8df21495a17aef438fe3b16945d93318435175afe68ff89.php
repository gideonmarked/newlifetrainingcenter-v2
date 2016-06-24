<?php

/* C:\xampp\htdocs\newlifetrainingcenter-v2/themes/newlifetrainingcenter/pages/test_application.htm */
class __TwigTemplate_d739a6bce54bb10a05015e2dc54d3b3c308f3c4f41f4fd7ff77cb745827c3e5b extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("applicationform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\newlifetrainingcenter-v2/themes/newlifetrainingcenter/pages/test_application.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% component 'applicationform' %}*/
