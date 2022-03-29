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

/* themes/contrib/d8w3css/templates/form/form-element.html.twig */
class __TwigTemplate_23926e2d73ef8478a8d775a2ecd2b1a0 extends \Twig\Template
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
        // line 48
        $context["classes"] = [0 => "w3-section", 1 => "js-form-item", 2 => "form-item", 3 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["type"] ?? null), 52, $this->source))), 4 => ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["type"] ?? null), 53, $this->source))), 5 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["name"] ?? null), 54, $this->source))), 6 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["name"] ?? null), 55, $this->source))), 7 => ((!twig_in_filter(        // line 56
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 8 => (((        // line 57
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 9 => ((        // line 58
($context["errors"] ?? null)) ? ("form-item--error") : (""))];
        // line 62
        $context["description_classes"] = [0 => "w3-small", 1 => "w3-row", 2 => "description", 3 => (((        // line 66
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 69
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
        echo ">
  ";
        // line 70
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 71
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 71, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 73
        echo "  ";
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 74
            echo "    <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 74, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 76
        echo "  ";
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 76))) {
            // line 77
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo ">
      ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 81
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 81, $this->source), "html", null, true);
        echo "
  ";
        // line 82
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 83
            echo "    <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 83, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 85
        echo "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 86
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 86, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 88
        echo "  ";
        if (($context["errors"] ?? null)) {
            // line 89
            echo "    <div class=\"w3-panel w3-pale-red w3-leftbar w3-border w3-border-red form-item--error-message\">
      <strong>";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 90, $this->source), "html", null, true);
            echo "</strong>
    </div>
  ";
        }
        // line 93
        echo "  ";
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 93))) {
            // line 94
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 94), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 94), 94, $this->source), "html", null, true);
            echo ">
      ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 98
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 98,  129 => 95,  124 => 94,  121 => 93,  115 => 90,  112 => 89,  109 => 88,  103 => 86,  100 => 85,  94 => 83,  92 => 82,  87 => 81,  81 => 78,  76 => 77,  73 => 76,  67 => 74,  64 => 73,  58 => 71,  56 => 70,  51 => 69,  49 => 66,  48 => 62,  46 => 58,  45 => 57,  44 => 56,  43 => 55,  42 => 54,  41 => 53,  40 => 52,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/d8w3css/templates/form/form-element.html.twig", "/var/www/html/web/themes/contrib/d8w3css/templates/form/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48, "if" => 70);
        static $filters = array("clean_class" => 52, "escape" => 69);
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
