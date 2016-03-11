<?php

/* C:\xampp\htdocs\v2.newlifetrainingcenter.com/themes/newlifetrainingcenter/partials/footer.htm */
class __TwigTemplate_d36419c605a00c3edb64a75d5c6cd8a1e2325e01e18a192f28832b6ba4154f8f extends Twig_Template
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

    <!-- jQuery -->
    <script src=\"";
        // line 14
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js"));
        echo "\"></script>
    
    <!-- Date Picker -->
    <script src=\"";
        // line 17
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/bootstrap-datepicker.js"));
        echo "\"></script>
    
\t\t";
        // line 19
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 20
        echo "
    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/bootstrap.min.js"));
        echo "\"></script>
    

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src=\"";
        // line 27
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jqBootstrapValidation.js"));
        echo "\"></script>
    <script src=\"";
        // line 28
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
        return "C:\\xampp\\htdocs\\v2.newlifetrainingcenter.com/themes/newlifetrainingcenter/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 28,  60 => 27,  52 => 22,  48 => 20,  45 => 19,  40 => 17,  34 => 14,  19 => 1,);
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
/*     <!-- jQuery -->*/
/*     <script src="{{ ['assets/javascript/jquery.js']|theme }}"></script>*/
/*     */
/*     <!-- Date Picker -->*/
/*     <script src="{{ ['assets/javascript/bootstrap-datepicker.js']|theme }}"></script>*/
/*     */
/* 		{% framework %}*/
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
