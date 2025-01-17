<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* macros.twig */
class __TwigTemplate_3b59f71f80ba89b2bb220d7999ec6b7aa058c829b3dc2439cdecfc73db637460 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 18
        echo "
";
    }

    // line 1
    public function getlogoHtml($__metadata__ = null, $__alt__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "metadata" => $__metadata__,
            "alt" => $__alt__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            if ($this->getAttribute(($context["metadata"] ?? null), "logo", [], "array", true, true)) {
                // line 3
                echo "        ";
                if ($this->getAttribute(($context["metadata"] ?? null), "logoWidth", [], "array", true, true)) {
                    // line 4
                    echo "            ";
                    ob_start();
                    echo "width=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "logoWidth", [], "array"), "html", null, true);
                    echo "\"";
                    $context["width"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 5
                    echo "        ";
                }
                // line 6
                echo "        ";
                if ($this->getAttribute(($context["metadata"] ?? null), "logoHeight", [], "array", true, true)) {
                    // line 7
                    echo "            ";
                    ob_start();
                    echo "height=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "logoHeight", [], "array"), "html", null, true);
                    echo "\"";
                    $context["height"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 8
                    echo "        ";
                }
                // line 9
                echo "        ";
                if ($this->getAttribute(($context["metadata"] ?? null), "logoWidth", [], "array", true, true)) {
                    // line 10
                    echo "            ";
                    ob_start();
                    echo "width=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "logoWidth", [], "array"), "html", null, true);
                    echo "\"";
                    $context["width"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 11
                    echo "        ";
                }
                // line 12
                echo "        ";
                if ( !twig_test_empty(($context["alt"] ?? $this->getContext($context, "alt")))) {
                    // line 13
                    echo "            ";
                    ob_start();
                    echo "title='";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["alt"] ?? $this->getContext($context, "alt")), "html", null, true);
                    echo "' alt='";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["alt"] ?? $this->getContext($context, "alt")), "html", null, true);
                    echo "'";
                    $context["alt"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 14
                    echo "        ";
                }
                // line 15
                echo "        <img ";
                echo \Piwik\piwik_escape_filter($this->env, ($context["alt"] ?? $this->getContext($context, "alt")), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, (((isset($context["width"]) || array_key_exists("width", $context))) ? (_twig_default_filter(($context["width"] ?? $this->getContext($context, "width")), "")) : ("")), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, (((isset($context["height"]) || array_key_exists("height", $context))) ? (_twig_default_filter(($context["height"] ?? $this->getContext($context, "height")), "")) : ("")), "html", null, true);
                echo " src='";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "logo", [], "array"), "html", null, true);
                echo "' />
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function getinlineHelp($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 21
            echo "    <div class=\"ui-inline-help\" >
        ";
            // line 22
            echo ($context["text"] ?? $this->getContext($context, "text"));
            echo "
    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 22,  142 => 21,  130 => 20,  105 => 15,  102 => 14,  93 => 13,  90 => 12,  87 => 11,  80 => 10,  77 => 9,  74 => 8,  67 => 7,  64 => 6,  61 => 5,  54 => 4,  51 => 3,  48 => 2,  35 => 1,  30 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro logoHtml(metadata, alt='') %}
    {% if metadata['logo'] is defined %}
        {% if metadata['logoWidth'] is defined %}
            {% set width %}width=\"{{ metadata['logoWidth'] }}\"{% endset %}
        {% endif %}
        {% if metadata['logoHeight'] is defined %}
            {% set height %}height=\"{{ metadata['logoHeight'] }}\"{% endset %}
        {% endif %}
        {% if metadata['logoWidth'] is defined %}
            {% set width %}width=\"{{ metadata['logoWidth'] }}\"{% endset %}
        {% endif %}
        {% if alt is not empty %}
            {% set alt %}title='{{ alt }}' alt='{{ alt }}'{% endset %}
        {% endif %}
        <img {{ alt }} {{ width|default('') }} {{ height|default('') }} src='{{ metadata['logo'] }}' />
    {% endif %}
{% endmacro %}

{# Deprecated: use form-group and form-help DIVs instead #}
{% macro inlineHelp(text) %}
    <div class=\"ui-inline-help\" >
        {{ text|raw }}
    </div>
{% endmacro %}", "macros.twig", "/home/development/DEVELOPMENT/development_analytics_matomo/plugins/Morpheus/templates/macros.twig");
    }
}
