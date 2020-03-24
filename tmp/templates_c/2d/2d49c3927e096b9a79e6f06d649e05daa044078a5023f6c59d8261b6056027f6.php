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

/* @ProfessionalServices/promoSearchKeywords.twig */
class __TwigTemplate_f5c44f54b8fee30194b6c84a5d1ea6ff1b8c1ff1ac1f31fc25920c01d65d9e0f extends \Twig\Template
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
        echo "<p style=\"margin-top:3em;margin-bottom:3em\" class=\" alert-info alert\">Did you know?<br/>
    Use <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/recommends/search-keywords-performance/\">Search Keywords Performance</a>
    to see all keywords behind 'keyword not defined'.
    All keywords searched by your users on Google, Bing and other search engines will be listed
    and you can even monitor the SEO position of your website in their search results.
</p>
";
    }

    public function getTemplateName()
    {
        return "@ProfessionalServices/promoSearchKeywords.twig";
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
        return new Source("<p style=\"margin-top:3em;margin-bottom:3em\" class=\" alert-info alert\">Did you know?<br/>
    Use <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/recommends/search-keywords-performance/\">Search Keywords Performance</a>
    to see all keywords behind 'keyword not defined'.
    All keywords searched by your users on Google, Bing and other search engines will be listed
    and you can even monitor the SEO position of your website in their search results.
</p>
", "@ProfessionalServices/promoSearchKeywords.twig", "/home/development/DEVELOPMENT/development_analytics_matomo/plugins/ProfessionalServices/templates/promoSearchKeywords.twig");
    }
}
