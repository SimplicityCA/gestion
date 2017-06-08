<?php

/* themes/gestion/templates/views-view-unformatted--landing-section-carousels.html.twig */
class __TwigTemplate_f11c59fa80524efa211eb0057cf0db11fd03937fc8632b6f1b1ddf0d38b48dbb extends Twig_Template
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
        $tags = array("if" => 20, "for" => 26, "set" => 44);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 20
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 21
            echo "  <h3>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
";
        }
        // line 23
        echo "<div id=\"homePageCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 27
            echo "      ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 28
                echo "        <li data-target=\"#homePageCarousel\" data-slide-to=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true));
                echo "\" class=\"active\"></li>
      ";
            } else {
                // line 30
                echo "        <li data-target=\"#homePageCarousel\" data-slide-to=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true));
                echo "\"></li>
      ";
            }
            // line 32
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\">
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 38
            echo "      ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 39
                echo "        <div class=\"item active\">
      ";
            } else {
                // line 41
                echo "        <div class=\"item\">
      ";
            }
            // line 43
            echo "        ";
            // line 44
            $context["row_classes"] = array(0 => ((            // line 45
(isset($context["default_row_class"]) ? $context["default_row_class"] : null)) ? ("views-row") : ("")));
            // line 48
            echo "        <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => (isset($context["row_classes"]) ? $context["row_classes"] : null)), "method"), "html", null, true));
            echo ">
          ";
            // line 49
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
        </div>
      </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "  </div>

  <!-- Left and right controls -->
  <a class=\"left carousel-control\" href=\"#homePageCarousel\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#homePageCarousel\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gestion/templates/views-view-unformatted--landing-section-carousels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 53,  146 => 49,  141 => 48,  139 => 45,  138 => 44,  136 => 43,  132 => 41,  128 => 39,  125 => 38,  108 => 37,  102 => 33,  88 => 32,  82 => 30,  76 => 28,  73 => 27,  56 => 26,  51 => 23,  45 => 21,  43 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a view of unformatted rows.*/
/*  **/
/*  * Available variables:*/
/*  * - title: The title of this group of rows. May be empty.*/
/*  * - rows: A list of the view's row items.*/
/*  *   - attributes: The row's HTML attributes.*/
/*  *   - content: The row's content.*/
/*  * - view: The view object.*/
/*  * - default_row_class: A flag indicating whether default classes should be*/
/*  *   used on rows.*/
/*  **/
/*  * @see template_preprocess_views_view_unformatted()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if title %}*/
/*   <h3>{{ title }}</h3>*/
/* {% endif %}*/
/* <div id="homePageCarousel" class="carousel slide" data-ride="carousel">*/
/*   <!-- Indicators -->*/
/*   <ol class="carousel-indicators">*/
/*     {% for row in rows %}*/
/*       {% if loop.index == 1 %}*/
/*         <li data-target="#homePageCarousel" data-slide-to="{{ loop.index0 }}" class="active"></li>*/
/*       {% else %}*/
/*         <li data-target="#homePageCarousel" data-slide-to="{{ loop.index0 }}"></li>*/
/*       {% endif %}*/
/*     {% endfor %}*/
/*   </ol>*/
/* */
/*   <!-- Wrapper for slides -->*/
/*   <div class="carousel-inner">*/
/*     {% for row in rows %}*/
/*       {% if loop.index == 1 %}*/
/*         <div class="item active">*/
/*       {% else %}*/
/*         <div class="item">*/
/*       {% endif %}*/
/*         {%*/
/*           set row_classes = [*/
/*             default_row_class ? 'views-row',*/
/*           ]*/
/*         %}*/
/*         <div{{ row.attributes.addClass(row_classes) }}>*/
/*           {{ row.content }}*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* */
/*   <!-- Left and right controls -->*/
/*   <a class="left carousel-control" href="#homePageCarousel" data-slide="prev">*/
/*     <span class="glyphicon glyphicon-chevron-left"></span>*/
/*     <span class="sr-only">Previous</span>*/
/*   </a>*/
/*   <a class="right carousel-control" href="#homePageCarousel" data-slide="next">*/
/*     <span class="glyphicon glyphicon-chevron-right"></span>*/
/*     <span class="sr-only">Next</span>*/
/*   </a>*/
/* </div>*/
/* */
