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

/* themes/contrib/d8w3css/templates/form/fieldset.html.twig */
class __TwigTemplate_9d68fcfb4c112b48ff7f1eafd2573c39 extends \Twig\Template
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
        // line 29
        $context["classes"] = [0 => "w3-container", 1 => "js-form-item", 2 => "form-item", 3 => "js-form-wrapper", 4 => "form-wrapper"];
        // line 37
        echo "<fieldset";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
        echo ">
  ";
        // line 39
        $context["legend_span_classes"] = [0 => "w3-bar", 1 => "fieldset-legend", 2 => ((        // line 42
($context["required"] ?? null)) ? ("js-form-required") : ("")), 3 => ((        // line 43
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 46
        echo "  ";
        // line 47
        echo "  <legend";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo ">
    <span";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 48), "addClass", [0 => ($context["legend_span_classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "</span>
  </legend>
  <div class=\"fieldset-wrapper w3-panel\">
    ";
        // line 51
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 51))) {
            // line 52
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 52), "addClass", [0 => "w3-panel w3-small description"], "method", false, false, true, 52), 52, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 54
        echo "    ";
        if (($context["errors"] ?? null)) {
            // line 55
            echo "      <div class=\"w3-section w3-pale-red w3-leftbar w3-border w3-border-red form-item--error-message\">
        <strong>";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 56, $this->source), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 59
        echo "    ";
        if (($context["prefix"] ?? null)) {
            // line 60
            echo "      <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 60, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 62
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 62, $this->source), "html", null, true);
        echo "
    ";
        // line 63
        if (($context["suffix"] ?? null)) {
            // line 64
            echo "      <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 64, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 66
        echo "    ";
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 66))) {
            // line 67
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 67), "addClass", [0 => "w3-panel w3-small description"], "method", false, false, true, 67), 67, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 69
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/form/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 69,  112 => 67,  109 => 66,  103 => 64,  101 => 63,  96 => 62,  90 => 60,  87 => 59,  81 => 56,  78 => 55,  75 => 54,  67 => 52,  65 => 51,  57 => 48,  52 => 47,  50 => 46,  48 => 43,  47 => 42,  46 => 39,  41 => 37,  39 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/d8w3css/templates/form/fieldset.html.twig", "/var/www/html/web/themes/contrib/d8w3css/templates/form/fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 51);
        static $filters = array("escape" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
