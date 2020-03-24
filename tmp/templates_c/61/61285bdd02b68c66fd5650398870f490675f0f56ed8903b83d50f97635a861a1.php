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

/* @CoreHome/_angularComponent.twig */
class __TwigTemplate_8e623738766b3d848dbcfdf4e43a5d1eb864dd43ac211a3031c5f08e0a2491a2 extends \Twig\Template
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
        // line 1
        echo "<";
        echo \Piwik\piwik_escape_filter($this->env, ($context["componentName"] ?? $this->getContext($context, "componentName")), "html");
        echo "
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["componentParameters"] ?? $this->getContext($context, "componentParameters")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 3
            echo "    ";
            echo \Piwik\piwik_escape_filter($this->env, $context["key"], "html");
            echo "=\"";
            echo \Piwik\piwik_escape_filter($this->env, $context["value"], "html_attr");
            echo "\"
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "/>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_angularComponent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<{{ componentName|e('html') }}
    {% for key, value in componentParameters %}
    {{ key|e('html') }}=\"{{ value|e('html_attr') }}\"
    {% endfor %}
/>", "@CoreHome/_angularComponent.twig", "/home/development/DEVELOPMENT/development_analytics_matomo/plugins/CoreHome/templates/_angularComponent.twig");
    }
}
