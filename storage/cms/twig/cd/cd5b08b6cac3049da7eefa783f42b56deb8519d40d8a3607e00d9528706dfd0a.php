<?php

/* C:\xampp\htdocs\v2.newlifetrainingcenter.com/themes/newlifetrainingcenter/pages/news.htm */
class __TwigTemplate_ec83aa3bb420f03c301896fedda8f074a73f0b088f3416ce3439a55166bf52f0 extends Twig_Template
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
    
            <!-- News Row -->
            <div class=\"row\">
    \t\t\t\t
            \t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "            
            \t<div class=\"col-md-12 img-portfolio\">
            \t
            \t\t<div class=\"row\">
                
                \t\t<div class=\"col-md-3 img-portfolio\">
                      ";
            // line 15
            if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                // line 16
                echo "                          <div class=\"featured-images text-left\">
                              ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "featured_images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 18
                    echo "                                  <p>
                                      <img
                                          data-src=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                    echo "\"
                                          src=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                    echo "\"
                                          alt=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                    echo "\"
                                          style=\"max-width: 100%\" />
                                  </p>
                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                          </div><!--/.featured-image-->
                      ";
            }
            // line 28
            echo "                    </div><!--/.col-md-3 img-portfolio-->
                   
                    <div class=\"col-md-9 img-portfolio\">
                      
                      <h4><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h4>
                      
                      <p class=\"info\">
                        Posted
                        ";
            // line 36
            if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                echo " in ";
            }
            // line 37
            echo "                        ";
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
                // line 38
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 39
                echo "                        ";
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
            // line 40
            echo "                        on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "
                      </p>
                      
                      <p class=\"excerpt\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "summary", array()), "html", null, true);
            echo "</p>
                    </div><!--/.col-md-9 img-portfolio-->
            \t\t</div><!--/.row-->
                
               </div>
               <!--/.col-md-12 img-portfolio-->
               
               ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "               
               <div class=\"col-md-12 img-portfolio\">";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["noPostsMessage"]) ? $context["noPostsMessage"] : null), "html", null, true);
            echo "</div>
               
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo " 
                
            </div>
            <!-- /.row -->

";
        // line 59
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > 1)) {
            // line 60
            echo "    <ul class=\"pagination\">
        ";
            // line 61
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) > 1)) {
                // line 62
                echo "            <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 64
            echo "
        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 66
                echo "            <li class=\"";
                echo ((($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 67
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "
        ";
            // line 71
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()))) {
                // line 72
                echo "            <li><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 74
            echo "    </ul>
";
        }
        // line 76
        echo "    
  </div>    

  
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\v2.newlifetrainingcenter.com/themes/newlifetrainingcenter/pages/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 76,  222 => 74,  216 => 72,  214 => 71,  211 => 70,  200 => 67,  195 => 66,  191 => 65,  188 => 64,  182 => 62,  180 => 61,  177 => 60,  175 => 59,  168 => 54,  159 => 52,  156 => 51,  143 => 43,  136 => 40,  122 => 39,  113 => 38,  95 => 37,  91 => 36,  82 => 32,  76 => 28,  72 => 26,  62 => 22,  58 => 21,  54 => 20,  50 => 18,  46 => 17,  43 => 16,  41 => 15,  33 => 9,  28 => 8,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   */
/*   <div class="panel-body">*/
/*     */
/*             <!-- News Row -->*/
/*             <div class="row">*/
/*     				*/
/*             	{% for post in posts %}*/
/*             */
/*             	<div class="col-md-12 img-portfolio">*/
/*             	*/
/*             		<div class="row">*/
/*                 */
/*                 		<div class="col-md-3 img-portfolio">*/
/*                       {% if post.featured_images.count %}*/
/*                           <div class="featured-images text-left">*/
/*                               {% for image in post.featured_images %}*/
/*                                   <p>*/
/*                                       <img*/
/*                                           data-src="{{ image.filename }}"*/
/*                                           src="{{ image.path }}"*/
/*                                           alt="{{ image.description }}"*/
/*                                           style="max-width: 100%" />*/
/*                                   </p>*/
/*                               {% endfor %}*/
/*                           </div><!--/.featured-image-->*/
/*                       {% endif %}*/
/*                     </div><!--/.col-md-3 img-portfolio-->*/
/*                    */
/*                     <div class="col-md-9 img-portfolio">*/
/*                       */
/*                       <h4><a href="{{ post.url }}">{{ post.title }}</a></h4>*/
/*                       */
/*                       <p class="info">*/
/*                         Posted*/
/*                         {% if post.categories.count %} in {% endif %}*/
/*                         {% for category in post.categories %}*/
/*                             <a href="{{ category.url }}">{{ category.name }}</a>{% if not loop.last %}, {% endif %}*/
/*                         {% endfor %}*/
/*                         on {{ post.published_at|date('M d, Y') }}*/
/*                       </p>*/
/*                       */
/*                       <p class="excerpt">{{ post.summary }}</p>*/
/*                     </div><!--/.col-md-9 img-portfolio-->*/
/*             		</div><!--/.row-->*/
/*                 */
/*                </div>*/
/*                <!--/.col-md-12 img-portfolio-->*/
/*                */
/*                {% else %}*/
/*                */
/*                <div class="col-md-12 img-portfolio">{{ noPostsMessage }}</div>*/
/*                */
/*                {% endfor %} */
/*                 */
/*             </div>*/
/*             <!-- /.row -->*/
/* */
/* {% if posts.lastPage > 1 %}*/
/*     <ul class="pagination">*/
/*         {% if posts.currentPage > 1 %}*/
/*             <li><a href="{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}">&larr; Prev</a></li>*/
/*         {% endif %}*/
/* */
/*         {% for page in 1..posts.lastPage %}*/
/*             <li class="{{ posts.currentPage == page ? 'active' : null }}">*/
/*                 <a href="{{ this.page.baseFileName|page({ (pageParam): page }) }}">{{ page }}</a>*/
/*             </li>*/
/*         {% endfor %}*/
/* */
/*         {% if posts.lastPage > posts.currentPage %}*/
/*             <li><a href="{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}">Next &rarr;</a></li>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endif %}*/
/*     */
/*   </div>    */
/* */
/*   */
/* </div>*/
