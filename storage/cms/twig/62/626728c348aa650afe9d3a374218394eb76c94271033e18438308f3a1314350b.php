<?php

/* C:\xampp\htdocs\nltcv2/themes/newlifetrainingcenter/partials/footer.htm */
class __TwigTemplate_9f4bcf0fe5640d304a1a70fad94c67b0d1615ab0ac59e2ad5ee2bc51508046a8 extends Twig_Template
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
        echo "<!-- Footer -->
    <footer>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright &copy 2015. New Life Training Center. All rights reserved.</p>
            </div>
        </div>
    </footer>\t

    </div>
    <!-- /.container -->

    
\t\t";
        // line 14
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 15
        echo "
    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 17
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/bootstrap.min.js"));
        echo "\"></script>
    

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jqBootstrapValidation.js"));
        echo "\"></script>
    <script src=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/contact_me.js"));
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function () {
                
                \$('.datepicker').datepicker({
                    format: \"dd/mm/yyyy\"
                });  
            
            }); 
    </script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nltcv2/themes/newlifetrainingcenter/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 23,  53 => 22,  45 => 17,  41 => 15,  34 => 14,  19 => 1,);
    }
}
/* <!-- Footer -->*/
/*     <footer>*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <p>Copyright &copy 2015. New Life Training Center. All rights reserved.</p>*/
/*             </div>*/
/*         </div>*/
/*     </footer>	*/
/* */
/*     </div>*/
/*     <!-- /.container -->*/
/* */
/*     */
/* 		{% framework extras%}*/
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="{{ ['assets/javascript/bootstrap.min.js']|theme }}"></script>*/
/*     */
/* */
/*     <!-- Contact Form JavaScript -->*/
/*     <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->*/
/*     <script src="{{ ['assets/javascript/jqBootstrapValidation.js']|theme }}"></script>*/
/*     <script src="{{ ['assets/javascript/contact_me.js']|theme }}"></script>*/
/* */
/*     <script type="text/javascript">*/
/*         $(document).ready(function () {*/
/*                 */
/*                 $('.datepicker').datepicker({*/
/*                     format: "dd/mm/yyyy"*/
/*                 });  */
/*             */
/*             }); */
/*     </script>*/
/* */
/* </body>*/
/* */
/* </html>*/
