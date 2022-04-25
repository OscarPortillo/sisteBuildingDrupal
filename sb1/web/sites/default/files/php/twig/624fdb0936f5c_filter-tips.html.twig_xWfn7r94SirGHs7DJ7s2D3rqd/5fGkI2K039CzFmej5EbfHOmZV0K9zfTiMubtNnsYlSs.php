<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/d8w3css/templates/content-edit/filter-tips.html.twig */
class __TwigTemplate_ad49959de7d1b938bb0e1505c45570b9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        if (($context["multiple"] ?? null)) {
            // line 20
            echo "  <h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Text Formats"));
            echo "</h2>
";
        }
        // line 22
        echo "
";
        // line 23
        if (twig_length_filter($this->env, ($context["tips"] ?? null))) {
            // line 24
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 25
                echo "    <div class=\"compose-tips\">
  ";
            }
            // line 27
            echo "
  ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tips"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["tip"]) {
                // line 29
                echo "    ";
                if (($context["multiple"] ?? null)) {
                    // line 30
                    echo "      ";
                    // line 31
                    $context["tip_classes"] = [0 => "filter-type", 1 => ("filter-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 33
$context["name"], 33, $this->source)))];
                    // line 36
                    echo "      <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tip"], "attributes", [], "any", false, false, true, 36), "addClass", [0 => ($context["tip_classes"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
                    echo ">
      <h3>";
                    // line 37
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tip"], "name", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                    echo "</h3>
    ";
                }
                // line 39
                echo "
    ";
                // line 40
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tip"], "list", [], "any", false, false, true, 40))) {
                    // line 41
                    echo "      <ul class=\"w3-ul tips\">
      ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tip"], "list", [], "any", false, false, true, 42));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 43
                        echo "        ";
                        // line 44
                        $context["item_classes"] = [0 => ((                        // line 45
($context["long"] ?? null)) ? (("filter-" . twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 45), 45, $this->source), ["/" => "-"]))) : (""))];
                        // line 48
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 48), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
                        echo ">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "tip", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                        echo "</li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "      </ul>
    ";
                }
                // line 52
                echo "
    ";
                // line 53
                if (($context["multiple"] ?? null)) {
                    // line 54
                    echo "      </div>
    ";
                }
                // line 56
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
  ";
            // line 58
            if (($context["multiple"] ?? null)) {
                // line 59
                echo "    </div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/content-edit/filter-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 59,  134 => 58,  131 => 57,  125 => 56,  121 => 54,  119 => 53,  116 => 52,  112 => 50,  101 => 48,  99 => 45,  98 => 44,  96 => 43,  92 => 42,  89 => 41,  87 => 40,  84 => 39,  79 => 37,  74 => 36,  72 => 33,  71 => 31,  69 => 30,  66 => 29,  62 => 28,  59 => 27,  55 => 25,  52 => 24,  50 => 23,  47 => 22,  41 => 20,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a set of filter tips.
 *
 * Available variables:
 * - tips: Descriptions and a CSS ID in the form of 'module-name/filter-id'
 *   (only used when 'long' is TRUE) for each filter in one or more text
 *   formats.
 * - long: A flag indicating whether the passed-in filter tips contain extended
 *   explanations, i.e. intended to be output on the path 'filter/tips'
 *   (TRUE), or are in a short format, i.e. suitable to be displayed below a
 *   form element. Defaults to FALSE.
 * - multiple: A flag indicating there is more than one filter tip.
 *
 * @see template_preprocess_filter_tips()
 */
#}
{% if multiple %}
  <h2>{{ 'Text Formats'|t }}</h2>
{% endif %}

{% if tips|length %}
  {% if multiple %}
    <div class=\"compose-tips\">
  {% endif %}

  {% for name, tip in tips %}
    {% if multiple %}
      {%
        set tip_classes = [
          'filter-type',
          'filter-' ~ name|clean_class,
        ]
      %}
      <div{{ tip.attributes.addClass(tip_classes) }}>
      <h3>{{ tip.name }}</h3>
    {% endif %}

    {% if tip.list|length %}
      <ul class=\"w3-ul tips\">
      {% for item in tip.list %}
        {%
          set item_classes = [
            long ? 'filter-' ~ item.id|replace({'/': '-'}),
          ]
        %}
        <li{{ item.attributes.addClass(item_classes) }}>{{ item.tip }}</li>
      {% endfor %}
      </ul>
    {% endif %}

    {% if multiple %}
      </div>
    {% endif %}
  {% endfor %}

  {% if multiple %}
    </div>
  {% endif %}
{% endif %}
", "themes/contrib/d8w3css/templates/content-edit/filter-tips.html.twig", "/var/www/html/web/themes/contrib/d8w3css/templates/content-edit/filter-tips.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "for" => 28, "set" => 31);
        static $filters = array("t" => 20, "length" => 23, "clean_class" => 33, "escape" => 36, "replace" => 45);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['t', 'length', 'clean_class', 'escape', 'replace'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
