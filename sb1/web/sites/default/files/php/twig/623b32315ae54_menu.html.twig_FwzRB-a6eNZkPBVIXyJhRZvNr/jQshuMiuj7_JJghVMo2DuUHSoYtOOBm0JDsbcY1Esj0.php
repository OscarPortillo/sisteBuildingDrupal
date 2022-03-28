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

/* themes/contrib/d8w3css/templates/navigation/menu.html.twig */
class __TwigTemplate_63245859f3d4fcd16db84c3793711b45 extends \Twig\Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)], 26, $context, $this->getSourceContext()));
        echo "
";
    }

    // line 27
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 28
            echo "  ";
            $macros["menus"] = $this;
            // line 29
            echo "  ";
            // line 30
            $context["menu_classes"] = [0 => ("ul-parent ul-parent-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 31
($context["menu_name"] ?? null), 31, $this->source)))];
            // line 34
            echo "  ";
            // line 35
            $context["submenu_classes"] = [0 => ("ul-child ul-child-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 36
($context["menu_name"] ?? null), 36, $this->source)))];
            // line 39
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 40
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 41
                    echo "<ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["menu_classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo " role=\"menu\">
  ";
                } else {
                    // line 43
                    echo "  <ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["menu_classes"] ?? null)], "method", false, false, true, 43), "addClass", [0 => ($context["submenu_classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo " role=\"menu\">
    ";
                }
                // line 45
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    echo "      ";
                    // line 47
                    $context["item_classes"] = [0 => ("li-item li-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 48
($context["menu_name"] ?? null), 48, $this->source))), 1 => ((twig_get_attribute($this->env, $this->source,                     // line 49
$context["item"], "is_expanded", [], "any", false, false, true, 49)) ? ("li-expanded") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,                     // line 50
$context["item"], "is_expanded", [], "any", false, false, true, 50) && (($context["menu_level"] ?? null) == 0))) ? ("li-parent") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 51
$context["item"], "in_active_trail", [], "any", false, false, true, 51)) ? ("active") : (""))];
                    // line 54
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 54))) {
                        // line 55
                        echo "      <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 55), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 55), 55, $this->source), "html", null, true);
                        echo " role=\"none\">

        ";
                        // line 57
                        if (((is_string($__internal_compile_0 = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 57))) && is_string($__internal_compile_1 = "/") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1))) || (is_string($__internal_compile_2 = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 57))) && is_string($__internal_compile_3 = "http") && ('' === $__internal_compile_3 || 0 === strpos($__internal_compile_2, $__internal_compile_3))))) {
                            // line 58
                            echo "          <a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                            echo "\" class=\"w3-button link-enabled clickable-dropdown-menu-link toggle-parent\" role=\"menuitem\" aria-haspopup=\"true\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                            echo "</a>
          <span class=\"dropdown-arrow w3-hover-over clickable-dropdown-menu-fa-down\"><i class=\"fa fa-chevron-down\"></i></span>
        ";
                        } else {
                            // line 61
                            echo "          <a href=\"#\" class=\"w3-button link-disabled tMenu toggle-parent\" role=\"menuitem\" aria-haspopup=\"true\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                            echo "
            <span class=\"dropdown-arrow\"><i class=\"fa fa-chevron-down\"></i></span>
          </a>
        ";
                        }
                        // line 65
                        echo "
      ";
                    } elseif (((                    // line 66
($context["menu_level"] ?? null) != 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 66))) {
                        // line 67
                        echo "      <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 67), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 67), 67, $this->source), "html", null, true);
                        echo " role=\"none\">

        ";
                        // line 69
                        if (((is_string($__internal_compile_4 = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 69))) && is_string($__internal_compile_5 = "/") && ('' === $__internal_compile_5 || 0 === strpos($__internal_compile_4, $__internal_compile_5))) || (is_string($__internal_compile_6 = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 69))) && is_string($__internal_compile_7 = "http") && ('' === $__internal_compile_7 || 0 === strpos($__internal_compile_6, $__internal_compile_7))))) {
                            // line 70
                            echo "          <a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                            echo "\" class=\"w3-button link-enabled clickable-dropdown-menu-link toggle-child\" role=\"menuitem\" aria-haspopup=\"true\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                            echo "</a>
          <span class=\"right-arrow w3-hover-over clickable-dropdown-menu-fa-right\"><i class=\"fa fa-chevron-right\"></i></span>
          <span class=\"dropdown-arrow w3-hover-over clickable-dropdown-menu-fa-down\"><i class=\"fa fa-chevron-down\"></i></span>
        ";
                        } else {
                            // line 74
                            echo "          <a href=\"#\" class=\"w3-button link-disabled tMenu toggle-child\" role=\"menuitem\" aria-haspopup=\"true\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                            echo "
            <span class=\"right-arrow w3-hover-over\"><i class=\"fa fa-chevron-right\"></i></span>
            <span class=\"dropdown-arrow w3-hover-over\"><i class=\"fa fa-chevron-down\"></i></span>
          </a>
        ";
                        }
                        // line 79
                        echo "
      ";
                    } else {
                        // line 81
                        echo "        ";
                        // line 82
                        $context["link_classes"] = [0 => ("w3-button li-link li-link-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                        // line 83
($context["menu_name"] ?? null), 83, $this->source)))];
                        // line 86
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 86), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 86), 86, $this->source), "html", null, true);
                        echo " role=\"none\">
        ";
                        // line 87
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                         // line 89
$context["item"], "title", [], "any", false, false, true, 89), 89, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                         // line 90
$context["item"], "url", [], "any", false, false, true, 90), 90, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 91
$context["item"], "attributes", [], "any", false, false, true, 91), "removeClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 91), "addClass", [0 => ($context["link_classes"] ?? null)], "method", false, false, true, 91), 91, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 92
$context["item"], "attributes", [], "any", false, false, true, 92), "setAttribute", [0 => "role", 1 => "menuitem"], "method", false, false, true, 92), 92, $this->source)), "html", null, true);
                        // line 94
                        echo "
      ";
                    }
                    // line 96
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 96)) {
                        // line 97
                        echo "        ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 97), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)], 97, $context, $this->getSourceContext()));
                        echo "
      ";
                    }
                    // line 99
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "  </ul>
  ";
            }
            // line 103
            echo "  ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 103,  207 => 101,  200 => 99,  194 => 97,  191 => 96,  187 => 94,  185 => 92,  184 => 91,  183 => 90,  182 => 89,  181 => 87,  176 => 86,  174 => 83,  173 => 82,  171 => 81,  167 => 79,  158 => 74,  148 => 70,  146 => 69,  140 => 67,  138 => 66,  135 => 65,  127 => 61,  118 => 58,  116 => 57,  110 => 55,  107 => 54,  105 => 51,  104 => 50,  103 => 49,  102 => 48,  101 => 47,  99 => 46,  94 => 45,  88 => 43,  82 => 41,  79 => 40,  76 => 39,  74 => 36,  73 => 35,  71 => 34,  69 => 31,  68 => 30,  66 => 29,  63 => 28,  47 => 27,  41 => 26,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/d8w3css/templates/navigation/menu.html.twig", "/var/www/html/web/themes/contrib/d8w3css/templates/navigation/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 27, "set" => 30, "if" => 39, "for" => 45);
        static $filters = array("clean_class" => 31, "escape" => 41, "render" => 57);
        static $functions = array("link" => 88);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
                ['clean_class', 'escape', 'render'],
                ['link']
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
