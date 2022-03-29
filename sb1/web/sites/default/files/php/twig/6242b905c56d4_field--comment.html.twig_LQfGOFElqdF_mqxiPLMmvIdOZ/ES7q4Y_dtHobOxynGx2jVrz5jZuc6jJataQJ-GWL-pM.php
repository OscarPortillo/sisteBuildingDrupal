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

/* themes/contrib/d8w3css/templates/field/field--comment.html.twig */
class __TwigTemplate_277921e1cb0cdeae27bbe03280578f09 extends \Twig\Template
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
        $context["classes"] = [0 => "w3-row", 1 => "field", 2 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 32
($context["field_name"] ?? null), 32, $this->source))), 3 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 33
($context["field_type"] ?? null), 33, $this->source))), 4 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 34
($context["label_display"] ?? null), 34, $this->source)), 5 => "comment-wrapper"];
        // line 39
        $context["title_classes"] = [0 => "title", 1 => (((        // line 41
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 44
        echo "<section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        echo ">
  ";
        // line 45
        if ((($context["comments"] ?? null) &&  !($context["label_hidden"] ?? null))) {
            // line 46
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 46, $this->source), "html", null, true);
            echo "
    <h2";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 47, $this->source), "html", null, true);
            echo "</h2>
    ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 48, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 50
        echo "
  ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comments"] ?? null), 51, $this->source), "html", null, true);
        echo "

  ";
        // line 53
        if (($context["comment_form"] ?? null)) {
            // line 54
            echo "    <h2 class=\"comment-form__title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add new comment"));
            echo "</h2>
    ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_form"] ?? null), 55, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 57
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/field/field--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 57,  85 => 55,  80 => 54,  78 => 53,  73 => 51,  70 => 50,  65 => 48,  59 => 47,  54 => 46,  52 => 45,  47 => 44,  45 => 41,  44 => 39,  42 => 34,  41 => 33,  40 => 32,  39 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/d8w3css/templates/field/field--comment.html.twig", "/var/www/html/web/themes/contrib/d8w3css/templates/field/field--comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 45);
        static $filters = array("clean_class" => 32, "escape" => 44, "t" => 54);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 't'],
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
