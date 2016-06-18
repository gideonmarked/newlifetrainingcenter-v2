<?php

/* C:\xampp\htdocs\nltcv2/themes/newlifetrainingcenter/partials/header.htm */
class __TwigTemplate_3ec1874f069c542e6e2e8d13e6536d353b2ae1d9ff92db60d1e9b674ff7a28f0 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"New Life Training Center\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ntc-logo.jpg");
        echo "\" />
    
    ";
        // line 15
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 16
        echo "
    
    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 19
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.min.css"));
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/modern-business.css"));
        echo "\" rel=\"stylesheet\">

    <!-- Date Picker CSS -->
    <link href=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/datepicker.css"));
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/font-awesome/css/font-awesome.min.css"));
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- jQuery -->
    <script src=\"";
        // line 35
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js"));
        echo "\"></script>
    
    <!-- jQuery UI -->
    <script src=\"";
        // line 38
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery-ui.js"));
        echo "\"></script>
    

    <title>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

 ";
        // line 50
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 51
        echo "
</head>

<body>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nltcv2/themes/newlifetrainingcenter/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 51,  104 => 50,  92 => 41,  86 => 38,  80 => 35,  70 => 28,  64 => 25,  58 => 22,  52 => 19,  47 => 16,  44 => 15,  39 => 13,  33 => 10,  29 => 9,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="{{ this.page.meta_description }}">*/
/*     <meta name="title" content="{{ this.page.meta_title }}">*/
/*     <meta name="author" content="New Life Training Center">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <link rel="icon" type="image/jpg" href="{{ 'assets/images/ntc-logo.jpg'|theme }}" />*/
/*     */
/*     {% styles %}*/
/* */
/*     */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="{{ ['assets/css/bootstrap.min.css']|theme }}" rel="stylesheet">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="{{ ['assets/css/modern-business.css']|theme }}" rel="stylesheet">*/
/* */
/*     <!-- Date Picker CSS -->*/
/*     <link href="{{ ['assets/css/datepicker.css']|theme }}" rel="stylesheet">*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link href="{{ ['assets/font-awesome/css/font-awesome.min.css']|theme }}" rel="stylesheet" type="text/css">*/
/*     */
/*     */
/*     <!-- Google Fonts -->*/
/*     <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>*/
/* */
/*     <!-- jQuery -->*/
/*     <script src="{{ ['assets/javascript/jquery.js']|theme }}"></script>*/
/*     */
/*     <!-- jQuery UI -->*/
/*     <script src="{{ ['assets/javascript/jquery-ui.js']|theme }}"></script>*/
/*     */
/* */
/*     <title>{{ this.page.title }}</title>*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/*  {% scripts %}*/
/* */
/* </head>*/
/* */
/* <body>*/
