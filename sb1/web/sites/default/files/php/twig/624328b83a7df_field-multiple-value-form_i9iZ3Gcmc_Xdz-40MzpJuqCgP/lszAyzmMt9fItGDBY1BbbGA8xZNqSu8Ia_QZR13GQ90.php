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

/* core/modules/system/templates/field-multiple-value-form.html.twig */
class __TwigTemplate_8d72f2550d77a0372876fcbc17806d36 extends \Twig\Template
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
        // line 24
        if (($context["multiple"] ?? null)) {
            // line 25
            echo "  ";
            // line 26
            $context["classes"] = [0 => "js-form-item", 1 => "form-item"];
            // line 31
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "html", null, true);
            echo ">
    ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["table"] ?? null), 32, $this->source), "html", null, true);
            echo "
    ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 33)) {
                // line 34
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 34), "addClass", [0 => "description"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
                echo " >";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "</div>
    ";
            }
            // line 36
            echo "    ";
            if (($context["button"] ?? null)) {
                // line 37
                echo "      <div class=\"clearfix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button"] ?? null), 37, $this->source), "html", null, true);
                echo "</div>
    ";
            }
            // line 39
            echo "  </div>
";
        } else {
            // line 41
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 42
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["element"], 42, $this->source), "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/field-multiple-value-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 42,  77 => 41,  73 => 39,  67 => 37,  64 => 36,  56 => 34,  54 => 33,  50 => 32,  45 => 31,  43 => 26,  41 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for an individual form element.
 *
 * Available variables for all fields:
 * - multiple: Whether there are multiple instances of the field.
 *
 * Available variables for single cardinality fields:
 * - elements: Form elements to be rendered.
 *
 * Available variables when there are multiple fields.
 * - table: Table of field items.
 * - description: The description element containing the following properties:
 *   - content: The description content of the form element.
 *   - attributes: HTML attributes to apply to the description container.
 * - button: \"Add another item\" button.
 *
 * @see template_preprocess_field_multiple_value_form()
 *
 * @ingroup themeable
 */
#}
{% if multiple %}
  {%
    set classes = [
      'js-form-item',
      'form-item'
    ]
  %}
  <div{{ attributes.addClass(classes) }}>
    {{ table }}
    {% if description.content %}
      <div{{ description.attributes.addClass('description') }} >{{ description.content }}</div>
    {% endif %}
    {% if button %}
      <div class=\"clearfix\">{{ button }}</div>
    {% endif %}
  </div>
{% else %}
  {% for element in elements %}
    {{ element }}
  {% endfor %}
{% endif %}
", "core/modules/system/templates/field-multiple-value-form.html.twig", "/var/www/html/web/core/modules/system/templates/field-multiple-value-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24, "set" => 26, "for" => 41);
        static $filters = array("escape" => 31);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape'],
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
