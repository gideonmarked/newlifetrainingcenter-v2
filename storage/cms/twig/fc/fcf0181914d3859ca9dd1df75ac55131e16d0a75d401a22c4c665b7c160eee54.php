<?php

/* C:\xampp\htdocs\nltcv2/themes/newlifetrainingcenter/layouts/about.htm */
class __TwigTemplate_32cc6106659f2b68a4dabd5453f89a7faf3efdfd76ed9bcbce3f3931cc53d12a extends Twig_Template
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

    <!-- Custom Fonts -->
    <link href=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/font-awesome/css/font-awesome.min.css"));
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    

    <title>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

";
        // line 41
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 42
        echo "
</head>

<body>


    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"home\">NTC</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"welcome-message\">Welcome Message</a>
                    </li>
                    <li>
                        <a href=\"about-us\">About Us</a>
                    </li>
                    <li>
                        <a href=\"lifeatntc\">Life @ NTC</a>
                    </li>
                    <li>
                        <a href=\"programs\">Programs</a>
                    </li>
                    <li>
                        <a href=\"trainingcalendar\">Training Calendar</a>
                    </li>
                    <li>
                        <a href=\"admissions\">Admissions</a>
                    </li>
                    <li>
                        <a href=\"application\">Apply Now</a>
                    </li>
                    <li>
                        <a href=\"downloadables\">Downloadables</a>
                    </li>
                    <li>
                        <a href=\"contact\">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Page Content -->
    <div class=\"container\">

        <!-- Content Row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <img src=\"";
        // line 105
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/NTC-Web-Banner.png");
        echo "\" width=\"800\" height=\"231\" class=\"img-responsive\"> 
            </div>
        </div>


        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "
                    <small></small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"home\">Home</a>
                    </li>
                    <li class=\"active\">About</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        
        <!-- Content Row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
\t\t\t \t\t\t\t";
        // line 128
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 129
        echo "            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy 2015; New Life Training Center. All rights reserved.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=\"";
        // line 145
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js"));
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 148
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/bootstrap.min.js"));
        echo "\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nltcv2/themes/newlifetrainingcenter/layouts/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 148,  203 => 145,  185 => 129,  183 => 128,  165 => 113,  154 => 105,  89 => 42,  86 => 41,  74 => 32,  64 => 25,  58 => 22,  52 => 19,  47 => 16,  44 => 15,  39 => 13,  33 => 10,  29 => 9,  19 => 1,);
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
/*     <!-- Custom Fonts -->*/
/*     <link href="{{ ['assets/font-awesome/css/font-awesome.min.css']|theme }}" rel="stylesheet" type="text/css">*/
/*     */
/*     */
/*     <!-- Google Fonts -->*/
/*     <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>*/
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
/* {% framework %}*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* */
/*     <!-- Navigation -->*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="home">NTC</a>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li>*/
/*                         <a href="welcome-message">Welcome Message</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="about-us">About Us</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="lifeatntc">Life @ NTC</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="programs">Programs</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="trainingcalendar">Training Calendar</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="admissions">Admissions</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="application">Apply Now</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="downloadables">Downloadables</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="contact">Contact Us</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
/* */
/* */
/*     <!-- Page Content -->*/
/*     <div class="container">*/
/* */
/*         <!-- Content Row -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <img src="{{ 'assets/images/NTC-Web-Banner.png'|theme }}" width="800" height="231" class="img-responsive"> */
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <!-- Page Heading/Breadcrumbs -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{{ this.page.title }}*/
/*                     <small></small>*/
/*                 </h1>*/
/*                 <ol class="breadcrumb">*/
/*                     <li><a href="home">Home</a>*/
/*                     </li>*/
/*                     <li class="active">About</li>*/
/*                 </ol>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/*         */
/*         <!-- Content Row -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/* 			 				{% page %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Footer -->*/
/*         <footer>*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <p>Copyright &copy 2015; New Life Training Center. All rights reserved.</p>*/
/*                 </div>*/
/*             </div>*/
/*         </footer>*/
/* */
/*     </div>*/
/*     <!-- /.container -->*/
/* */
/*     <!-- jQuery -->*/
/*     <script src="{{ ['assets/javascript/jquery.js']|theme }}"></script>*/
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="{{ ['assets/javascript/bootstrap.min.js']|theme }}"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
