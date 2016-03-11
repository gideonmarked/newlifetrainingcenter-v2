<?php

/* C:\xampp\htdocs\v2.newlifetrainingcenter.com/themes/newlifetrainingcenter/partials/blog-sidebar.htm */
class __TwigTemplate_1c39feaa8131bbb025199729c0f00309a0da29bccc808bb148be1d3e91d3eb98 extends Twig_Template
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
        echo "<!-- Blog Sidebar Widgets Column -->
<div class=\"col-md-4\">

    <!-- Blog Search Well -->
    <div class=\"well\">
        <h4>Search</h4>
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\">
            <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-search\"></i></button>
            </span>
        </div>
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class=\"well\">
        <h4>News Categories</h4>
        
\t\t\t\t<div class=\"row\">
            <div class=\"col-lg-12\">
                
                ";
        // line 23
        $context["categories"] = $this->getAttribute((isset($context["blogCategories"]) ? $context["blogCategories"] : null), "categories", array());
        // line 24
        echo "                ";
        $context["currentCategorySlug"] = $this->getAttribute((isset($context["blogCategories"]) ? $context["blogCategories"] : null), "currentCategorySlug", array());
        // line 25
        echo "                
                <ul class=\"list-unstyled\">
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 28
            echo "                        ";
            $context["postCount"] = $this->getAttribute($context["category"], "post_count", array());
            // line 29
            echo "                        <li ";
            if (($this->getAttribute($context["category"], "slug", array()) == (isset($context["currentCategorySlug"]) ? $context["currentCategorySlug"] : null))) {
                echo "class=\"active\"";
            }
            echo ">
                            
                            ";
            // line 31
            if ((isset($context["postCount"]) ? $context["postCount"] : null)) {
                // line 32
                echo "                                <span class=\"badge\">";
                echo twig_escape_filter($this->env, (isset($context["postCount"]) ? $context["postCount"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            // line 34
            echo "                            
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </ul>
                
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well
    <div class=\"well\">
        <h4>Side Widget Well</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>
\t\t-->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\v2.newlifetrainingcenter.com/themes/newlifetrainingcenter/partials/blog-sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 38,  78 => 35,  75 => 34,  69 => 32,  67 => 31,  59 => 29,  56 => 28,  52 => 27,  48 => 25,  45 => 24,  43 => 23,  19 => 1,);
    }
}
/* <!-- Blog Sidebar Widgets Column -->*/
/* <div class="col-md-4">*/
/* */
/*     <!-- Blog Search Well -->*/
/*     <div class="well">*/
/*         <h4>Search</h4>*/
/*         <div class="input-group">*/
/*             <input type="text" class="form-control">*/
/*             <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>*/
/*             </span>*/
/*         </div>*/
/*         <!-- /.input-group -->*/
/*     </div>*/
/* */
/*     <!-- Blog Categories Well -->*/
/*     <div class="well">*/
/*         <h4>News Categories</h4>*/
/*         */
/* 				<div class="row">*/
/*             <div class="col-lg-12">*/
/*                 */
/*                 {% set categories = blogCategories.categories %}*/
/*                 {% set currentCategorySlug = blogCategories.currentCategorySlug %}*/
/*                 */
/*                 <ul class="list-unstyled">*/
/*                     {% for category in categories %}*/
/*                         {% set postCount = category.post_count %}*/
/*                         <li {% if category.slug == currentCategorySlug %}class="active"{% endif %}>*/
/*                             */
/*                             {% if postCount %}*/
/*                                 <span class="badge">{{ postCount }}</span>*/
/*                             {% endif %}*/
/*                             */
/*                             <a href="{{ category.url }}">{{ category.name }}</a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*                 */
/*             </div>*/
/*             <!-- /.col-lg-12 -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*     </div>*/
/* */
/*     <!-- Side Widget Well*/
/*     <div class="well">*/
/*         <h4>Side Widget Well</h4>*/
/*         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>*/
/*     </div>*/
/* 		-->*/
/* </div>*/
