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

/* @ProfessionalServices/promoBelowReferrerTypes.twig */
class __TwigTemplate_b2c8e73cf68e30e28d55dec9a52fc316288ccb12695bbb68ffe3d42ab4dc9962 extends \Twig\Template
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
        echo "<p style=\"margin-top:3em\" class=\" alert-info alert\">Did you know?
    <br/>You can get advanced insights into how much each of your marking channel truly contributes to your success by applying attribution models using the <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://plugins.piwik.org/MultiChannelConversionAttribution\">Multi Channel Conversion Attribution</a> premium feature.
</p>
";
    }

    public function getTemplateName()
    {
        return "@ProfessionalServices/promoBelowReferrerTypes.twig";
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
        return new Source("<p style=\"margin-top:3em\" class=\" alert-info alert\">Did you know?
    <br/>You can get advanced insights into how much each of your marking channel truly contributes to your success by applying attribution models using the <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://plugins.piwik.org/MultiChannelConversionAttribution\">Multi Channel Conversion Attribution</a> premium feature.
</p>
", "@ProfessionalServices/promoBelowReferrerTypes.twig", "/home/development/DEVELOPMENT/development_analytics_matomo/plugins/ProfessionalServices/templates/promoBelowReferrerTypes.twig");
    }
}
