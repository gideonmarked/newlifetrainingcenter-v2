<?php

/* C:\xampp\htdocs\v2.newlifetrainingcenter.com/themes/newlifetrainingcenter/pages/home.htm */
class __TwigTemplate_76d03f406a1077713448f034449525b4b15ec78f8dd7d24495461dd7755daab9 extends Twig_Template
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
    
    <!-- Video Column -->
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
</div>
<!-- /.row -->


<div class=\"row\">
    <!-- News Column -->
    <div class=\"col-md-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><a href=\"news\">News Events</a>
          <div class=\"pull-right\">
              <div class=\"btn-group\">
                  <a class=\"btn btn-primary btn-xs\" href=\"news\">
                      View All
                  </a>
              </div>
          </div>
          </h3>
          
        </div>
        
        ";
        // line 44
        if ( !(isset($context["category"]) ? $context["category"] : null)) {
            // line 45
            echo "          <div class=\"panel-body\"></div>
        ";
        } else {
            // line 46
            echo " 
        
        <div class=\"panel-body\">
            
        \t";
            // line 50
            $context["posts"] = $this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "posts", array());
            // line 51
            echo "
            <!-- News Row -->
            <div class=\"row\">
    \t\t\t\t
            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 56
                echo "                <div class=\"col-md-4 img-portfolio\">
                    ";
                // line 57
                if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                    // line 58
                    echo "                        <div class=\"featured-images text-left\">
                            ";
                    // line 59
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "featured_images", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 60
                        echo "                                <p>
                                    <img
                                        data-src=\"";
                        // line 62
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                        echo "\"
                                        src=\"";
                        // line 63
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                        echo "\"
                                        alt=\"";
                        // line 64
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                        echo "\"
                                        style=\"max-width: 100%\" />
                                </p>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 68
                    echo "                        </div>
                    ";
                }
                // line 70
                echo "                   
                    <h3>
                        <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</a>
                    </h3>
                    
                    <p class=\"info\">
                      Posted
                      ";
                // line 77
                if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                    echo " in ";
                }
                // line 78
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 79
                    echo "                          <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</a>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    // line 80
                    echo "                      ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "                      on ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
                echo "
                    </p>
                    
                    <p class=\"excerpt\">";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "summary", array()), "html", null, true);
                echo "</p>
               </div>
               <!--/.col-md-4 img-portfolio-->
               
               ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 89
                echo "               
               <div class=\"col-md-4 img-portfolio\">";
                // line 90
                echo twig_escape_filter($this->env, (isset($context["noPostsMessage"]) ? $context["noPostsMessage"] : null), "html", null, true);
                echo "</div>
               
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo " 
                
            </div>
            <!-- /.row -->
            
            
            <!-- Pagination -->
            <div class=\"row text-center\">
                <div class=\"col-md-12\">
    
               \t\t<a class=\"btn btn-lg btn-default btn-block\" href=\"news\">View All</a>
                
                </div>
                <!--/.col-md-12-->
             </div>
             <!-- /.row -->
        </div>
        <!--/.panel-body-->
        
        ";
        }
        // line 112
        echo "        
        
      </div>
      <!--/.panel-->
    </div>
    <!--/.col-md-12-->
</div>
<!-- /.row -->


<div class=\"row\">
    <!-- Slider Column -->
    <div class=\"col-md-12\">
    \t";
        // line 125
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("calltoaction"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 126
        echo "    </div>
</div>
<!-- /.row -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\v2.newlifetrainingcenter.com/themes/newlifetrainingcenter/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 126,  257 => 125,  242 => 112,  220 => 92,  211 => 90,  208 => 89,  198 => 84,  191 => 81,  177 => 80,  168 => 79,  150 => 78,  146 => 77,  136 => 72,  132 => 70,  128 => 68,  118 => 64,  114 => 63,  110 => 62,  106 => 60,  102 => 59,  99 => 58,  97 => 57,  94 => 56,  89 => 55,  83 => 51,  81 => 50,  75 => 46,  71 => 45,  69 => 44,  31 => 8,  27 => 7,  19 => 1,);
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
/*     <!-- Video Column -->*/
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
/* </div>*/
/* <!-- /.row -->*/
/* */
/* */
/* <div class="row">*/
/*     <!-- News Column -->*/
/*     <div class="col-md-12">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title"><a href="news">News Events</a>*/
/*           <div class="pull-right">*/
/*               <div class="btn-group">*/
/*                   <a class="btn btn-primary btn-xs" href="news">*/
/*                       View All*/
/*                   </a>*/
/*               </div>*/
/*           </div>*/
/*           </h3>*/
/*           */
/*         </div>*/
/*         */
/*         {% if not category %}*/
/*           <div class="panel-body"></div>*/
/*         {% else %} */
/*         */
/*         <div class="panel-body">*/
/*             */
/*         	{% set posts = blogPosts.posts %}*/
/* */
/*             <!-- News Row -->*/
/*             <div class="row">*/
/*     				*/
/*             {% for post in posts %}*/
/*                 <div class="col-md-4 img-portfolio">*/
/*                     {% if post.featured_images.count %}*/
/*                         <div class="featured-images text-left">*/
/*                             {% for image in post.featured_images %}*/
/*                                 <p>*/
/*                                     <img*/
/*                                         data-src="{{ image.filename }}"*/
/*                                         src="{{ image.path }}"*/
/*                                         alt="{{ image.description }}"*/
/*                                         style="max-width: 100%" />*/
/*                                 </p>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                    */
/*                     <h3>*/
/*                         <a href="{{ post.url }}">{{ post.title }}</a>*/
/*                     </h3>*/
/*                     */
/*                     <p class="info">*/
/*                       Posted*/
/*                       {% if post.categories.count %} in {% endif %}*/
/*                       {% for category in post.categories %}*/
/*                           <a href="{{ category.url }}">{{ category.name }}</a>{% if not loop.last %}, {% endif %}*/
/*                       {% endfor %}*/
/*                       on {{ post.published_at|date('M d, Y') }}*/
/*                     </p>*/
/*                     */
/*                     <p class="excerpt">{{ post.summary }}</p>*/
/*                </div>*/
/*                <!--/.col-md-4 img-portfolio-->*/
/*                */
/*                {% else %}*/
/*                */
/*                <div class="col-md-4 img-portfolio">{{ noPostsMessage }}</div>*/
/*                */
/*                {% endfor %} */
/*                 */
/*             </div>*/
/*             <!-- /.row -->*/
/*             */
/*             */
/*             <!-- Pagination -->*/
/*             <div class="row text-center">*/
/*                 <div class="col-md-12">*/
/*     */
/*                		<a class="btn btn-lg btn-default btn-block" href="news">View All</a>*/
/*                 */
/*                 </div>*/
/*                 <!--/.col-md-12-->*/
/*              </div>*/
/*              <!-- /.row -->*/
/*         </div>*/
/*         <!--/.panel-body-->*/
/*         */
/*         {% endif %}*/
/*         */
/*         */
/*       </div>*/
/*       <!--/.panel-->*/
/*     </div>*/
/*     <!--/.col-md-12-->*/
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
