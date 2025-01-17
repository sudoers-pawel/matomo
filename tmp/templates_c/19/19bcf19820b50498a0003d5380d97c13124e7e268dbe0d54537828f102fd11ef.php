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

/* @Feedback/feedbackPopup.twig */
class __TwigTemplate_5912bbfa274c3f47c09ce1285c4837e6519bed203ddd5de7e72fea859773c1ff extends \Twig\Template
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
        echo "<div piwik-feedback-popup prompt-for-feedback=\"";
        echo \Piwik\piwik_escape_filter($this->env, ($context["promptForFeedback"] ?? $this->getContext($context, "promptForFeedback")), "html", null, true);
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "@Feedback/feedbackPopup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div piwik-feedback-popup prompt-for-feedback=\"{{ promptForFeedback }}\"></div>
", "@Feedback/feedbackPopup.twig", "/home/development/DEVELOPMENT/development_analytics_matomo/plugins/Feedback/templates/feedbackPopup.twig");
    }
}
