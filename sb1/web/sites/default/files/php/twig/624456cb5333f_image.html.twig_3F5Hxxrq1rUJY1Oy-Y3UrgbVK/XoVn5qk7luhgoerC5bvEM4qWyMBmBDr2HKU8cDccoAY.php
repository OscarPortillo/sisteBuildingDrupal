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

/* themes/contrib/d8w3css/templates/field/image.html.twig */
class __TwigTemplate_07f7fa377e7ac6e0dbcd05d824dc5d6c extends \Twig\Template
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
        // line 14
        $context["classes"] = [0 => "w3-image", 1 => ((        // line 16
($context["style_name"] ?? null)) ? (("image-style-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["style_name"] ?? null), 16, $this->source)))) : (""))];
        // line 19
        echo "<img";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 19), 19, $this->source), "html", null, true);
        echo " />
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/field/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 19,  40 => 16,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override of an image.
 *
 * Available variables:
 * - attributes: HTML attributes for the img tag.
 * - style_name: (optional) The name of the image style applied.
 *
 * @see template_preprocess_image()
 */
#}
{%
set classes = [
  'w3-image',
  style_name ? 'image-style-' ~ style_name|clean_class,
]
%}
<img{{ attributes.addClass(classes) }} />
", "themes/contrib/d8w3css/templates/field/image.html.twig", "/var/www/html/web/themes/contrib/d8w3css/templates/field/image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14);
        static $filters = array("clean_class" => 16, "escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
