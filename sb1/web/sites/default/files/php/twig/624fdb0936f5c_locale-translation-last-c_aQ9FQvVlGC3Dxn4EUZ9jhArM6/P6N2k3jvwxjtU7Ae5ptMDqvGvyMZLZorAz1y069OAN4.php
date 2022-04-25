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

/* core/modules/locale/templates/locale-translation-last-check.html.twig */
class __TwigTemplate_a9271a888f937abd86a493b13f78dd53 extends \Twig\Template
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
        // line 17
        echo "<div class=\"locale checked\">
  <p>
  ";
        // line 19
        if (($context["last_checked"] ?? null)) {
            // line 20
            echo "    ";
            echo t("Last checked: @time ago", array("@time" => ($context["time"] ?? null), ));
            // line 21
            echo "  ";
        } else {
            // line 22
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last checked: never"));
            echo "
  ";
        }
        // line 24
        echo "  <span class=\"check-manually\">(";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 24, $this->source), "html", null, true);
        echo ")</span></p>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/locale/templates/locale-translation-last-check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 24,  51 => 22,  48 => 21,  45 => 20,  43 => 19,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the last time we checked for update data.
 *
 * Available variables:
 * - last_checked: Whether or not locale updates have been checked before.
 * - time: The formatted time ago when the site last checked for available
 *   updates.
 * - link: A link to manually check available updates.
 *
 * @see template_preprocess_locale_translation_last_check()
 *
 * @ingroup themeable
 */
#}
<div class=\"locale checked\">
  <p>
  {% if last_checked %}
    {% trans %} Last checked: {{ time }} ago {% endtrans %}
  {% else %}
    {{ 'Last checked: never'|t }}
  {% endif %}
  <span class=\"check-manually\">({{ link }})</span></p>
</div>
", "core/modules/locale/templates/locale-translation-last-check.html.twig", "/var/www/html/web/core/modules/locale/templates/locale-translation-last-check.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "trans" => 20);
        static $filters = array("escape" => 20, "t" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 't'],
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
