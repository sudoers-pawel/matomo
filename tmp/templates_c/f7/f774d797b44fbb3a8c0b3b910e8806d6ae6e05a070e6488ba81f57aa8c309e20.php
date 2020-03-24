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

/* @LogViewer/index.twig */
class __TwigTemplate_d066f432734889844fde9f5472b1883fb8bc171c322d00eff2fe6345c42fc70b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("admin.twig", "@LogViewer/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div piwik-log-viewer limit=\"";
        echo \Piwik\piwik_escape_filter($this->env, ($context["limit"] ?? $this->getContext($context, "limit")), "html_attr");
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "@LogViewer/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% block content %}
    <div piwik-log-viewer limit=\"{{ limit|e('html_attr') }}\"></div>
{% endblock %}", "@LogViewer/index.twig", "/home/development/DEVELOPMENT/development_analytics_matomo/plugins/LogViewer/templates/index.twig");
    }
}
