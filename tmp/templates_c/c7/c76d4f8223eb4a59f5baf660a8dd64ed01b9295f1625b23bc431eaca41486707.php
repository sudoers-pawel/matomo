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

/* @ProfessionalServices/promoBelowCampaigns.twig */
class __TwigTemplate_397ac551d6617c790ac29040af88b9c74547897f5be9e5fe55df2c1d5841c03c extends \Twig\Template
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
    <br/> <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/docs/tracking-campaigns/\">Campaign tracking</a> lets you measure the effectiveness of your marketing campaigns such as emails marketing, paid search, banner ads, affiliates links, etc.
    Use the <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/docs/tracking-campaigns/\">URL Builder tool</a> to create your links with new URL campaign parameters.
    ";
        // line 4
        if (($context["displayMarketingCampaignsReportingAd"] ?? $this->getContext($context, "displayMarketingCampaignsReportingAd"))) {
            // line 5
            echo "        <br/> Install our <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://plugins.matomo.org/MarketingCampaignsReporting\">Marketing Campaigns Reporting plugin</a> to get even more campaigns reports and new segments for up to five marketing channels (campaign, source, medium, keyword, content).
    ";
        }
        // line 7
        echo "    ";
        if (($context["multiChannelConversionAttributionAd"] ?? $this->getContext($context, "multiChannelConversionAttributionAd"))) {
            // line 8
            echo "        <br />
        Discover how much each campaign truly contributes to your success by applying attribution models using the <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://plugins.piwik.org/MarketingCampaignsReporting\">Multi Channel Conversion Attribution</a> premium feature.
    ";
        }
        // line 11
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "@ProfessionalServices/promoBelowCampaigns.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  44 => 8,  41 => 7,  37 => 5,  35 => 4,  30 => 1,);
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
    <br/> <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/docs/tracking-campaigns/\">Campaign tracking</a> lets you measure the effectiveness of your marketing campaigns such as emails marketing, paid search, banner ads, affiliates links, etc.
    Use the <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/docs/tracking-campaigns/\">URL Builder tool</a> to create your links with new URL campaign parameters.
    {% if displayMarketingCampaignsReportingAd %}
        <br/> Install our <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://plugins.matomo.org/MarketingCampaignsReporting\">Marketing Campaigns Reporting plugin</a> to get even more campaigns reports and new segments for up to five marketing channels (campaign, source, medium, keyword, content).
    {% endif %}
    {% if multiChannelConversionAttributionAd %}
        <br />
        Discover how much each campaign truly contributes to your success by applying attribution models using the <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://plugins.piwik.org/MarketingCampaignsReporting\">Multi Channel Conversion Attribution</a> premium feature.
    {% endif %}
</p>
", "@ProfessionalServices/promoBelowCampaigns.twig", "/home/development/DEVELOPMENT/development_analytics_matomo/plugins/ProfessionalServices/templates/promoBelowCampaigns.twig");
    }
}
