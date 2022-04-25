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

/* themes/contrib/d8w3css/templates/content/taxonomy-term.html.twig */
class __TwigTemplate_2d1fbc8dfd4d4b7c3c4292c2fa6b7504 extends \Twig\Template
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
        // line 27
        $context["classes"] = [0 => "taxonomy-term", 1 => ("vocabulary-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 29
($context["term"] ?? null), "bundle", [], "any", false, false, true, 29), 29, $this->source)))];
        // line 32
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "id", 1 => ("taxonomy-term-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["term"] ?? null), "id", [], "any", false, false, true, 32), 32, $this->source))], "method", false, false, true, 32), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 32), 32, $this->source), "html", null, true);
        echo ">
  ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 33, $this->source), "html", null, true);
        echo "
  ";
        // line 34
        if ((($context["name"] ?? null) &&  !($context["page"] ?? null))) {
            // line 35
            echo "    <h2 class=\"w3-opacity w3-margin-left\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 35, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 35, $this->source), "html", null, true);
            echo "</a></h2>
  ";
        }
        // line 37
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 37, $this->source), "html", null, true);
        echo "
  <div class=\"w3-row-padding content\">
    ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 39, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/content/taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 39,  61 => 37,  53 => 35,  51 => 34,  47 => 33,  42 => 32,  40 => 29,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a taxonomy term.
 *
 * Available variables:
 * - url: URL of the current term.
 * - name: (optional) Name of the current term.
 * - content: Items for the content of the term (fields and description).
 *   Use 'content' to print them all, or print a subset such as
 *   'content.description'. Use the following code to exclude the
 *   printing of a given child element:
 *   @code
 *   {{ content|without('description') }}
 *   @endcode
 * - attributes: HTML attributes for the wrapper.
 * - page: Flag for the full page state.
 * - term: The taxonomy term entity, including:
 *   - id: The ID of the taxonomy term.
 *   - bundle: Machine name of the current vocabulary.
 * - view_mode: View mode, e.g. 'full', 'teaser', etc.
 *
 * @see template_preprocess_taxonomy_term()
 */
#}
{%
  set classes = [
    'taxonomy-term',
    'vocabulary-' ~ term.bundle|clean_class,
  ]
%}
<div{{ attributes.setAttribute('id', 'taxonomy-term-' ~ term.id).addClass(classes) }}>
  {{ title_prefix }}
  {% if name and not page %}
    <h2 class=\"w3-opacity w3-margin-left\"><a href=\"{{ url }}\">{{ name }}</a></h2>
  {% endif %}
  {{ title_suffix }}
  <div class=\"w3-row-padding content\">
    {{ content }}
  </div>
</div>
", "themes/contrib/d8w3css/templates/content/taxonomy-term.html.twig", "/var/www/html/web/themes/contrib/d8w3css/templates/content/taxonomy-term.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27, "if" => 34);
        static $filters = array("clean_class" => 29, "escape" => 32);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
