<?php

/* C:\xampp\htdocs\newlifetrainingcenter-v2/themes/newlifetrainingcenter/pages/home.htm */
class __TwigTemplate_5bb0aca4cddc08df9bb0d3c9f6b0247e362c2208b876c72a87b1dd3115df1677 extends Twig_Template
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
        echo "<!-- Content Row -->
<div class=\"row\">  
    <!-- Call to Action Column -->
    <div class=\"col-md-7\">
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
        ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("ntcSlider"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "        </div>
      </div>
    </div>
    
    <div class=\"col-md-5\">
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
        <iframe  class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"  width=\"100%\" height=\"350\" src=\"https://www.youtube.com/embed/Ktq-aB1KlyQ?list=PLBkRqDNG_WBIV-iyLlqrrUfnURa5acBFF?autohide=1&autoplay=0&controls=2&fs=1&loop=0&modestbranding=0&playlist=F_OIscN3eN8%2CDdel2ht4LE0%2CurrolSLzRSU%2CasUvqqpCPb8%2C+ge4NPf7W_J0&rel=0&showinfo=1&theme=light&wmode=opaque\" frameborder=\"0\" allowfullscreen=\"true\"></iframe>
        </div>
      </div>
    </div>
    
    <!-- Video Column
    <div class=\"col-md-5\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">Video Announcements</h3>
        </div>
        <div class=\"panel-body\">
          <iframe  class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"  width=\"100%\" height=\"310\" src=\"https://www.youtube.com/embed/Ktq-aB1KlyQ?list=PLBkRqDNG_WBIV-iyLlqrrUfnURa5acBFF?autohide=1&autoplay=0&controls=2&fs=1&loop=0&modestbranding=0&playlist=F_OIscN3eN8%2CDdel2ht4LE0%2CurrolSLzRSU%2CasUvqqpCPb8%2C+ge4NPf7W_J0&rel=0&showinfo=1&theme=light&wmode=opaque\" frameborder=\"0\" allowfullscreen=\"true\"></iframe>
        </div>
      </div>  
    </div>
    -->
     
     
</div>
<!-- /.row -->


<div class=\"row\">
    <!-- Slider Column -->
    <div class=\"col-md-12\">
    \t";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("calltoaction"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "    </div>
</div>
<!-- /.row -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\newlifetrainingcenter-v2/themes/newlifetrainingcenter/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 42,  66 => 41,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <!-- Content Row -->*/
/* <div class="row">  */
/*     <!-- Call to Action Column -->*/
/*     <div class="col-md-7">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/*         {% component "ntcSlider" %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     */
/*     <div class="col-md-5">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/*         <iframe  class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  width="100%" height="350" src="https://www.youtube.com/embed/Ktq-aB1KlyQ?list=PLBkRqDNG_WBIV-iyLlqrrUfnURa5acBFF?autohide=1&autoplay=0&controls=2&fs=1&loop=0&modestbranding=0&playlist=F_OIscN3eN8%2CDdel2ht4LE0%2CurrolSLzRSU%2CasUvqqpCPb8%2C+ge4NPf7W_J0&rel=0&showinfo=1&theme=light&wmode=opaque" frameborder="0" allowfullscreen="true"></iframe>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     */
/*     <!-- Video Column*/
/*     <div class="col-md-5">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title">Video Announcements</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*           <iframe  class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  width="100%" height="310" src="https://www.youtube.com/embed/Ktq-aB1KlyQ?list=PLBkRqDNG_WBIV-iyLlqrrUfnURa5acBFF?autohide=1&autoplay=0&controls=2&fs=1&loop=0&modestbranding=0&playlist=F_OIscN3eN8%2CDdel2ht4LE0%2CurrolSLzRSU%2CasUvqqpCPb8%2C+ge4NPf7W_J0&rel=0&showinfo=1&theme=light&wmode=opaque" frameborder="0" allowfullscreen="true"></iframe>*/
/*         </div>*/
/*       </div>  */
/*     </div>*/
/*     -->*/
/*      */
/*      */
/* </div>*/
/* <!-- /.row -->*/
/* */
/* */
/* <div class="row">*/
/*     <!-- Slider Column -->*/
/*     <div class="col-md-12">*/
/*     	{% partial "calltoaction" %}*/
/*     </div>*/
/* </div>*/
/* <!-- /.row -->*/
