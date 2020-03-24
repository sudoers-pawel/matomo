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

/* @Ecommerce/conversionOverview.twig */
class __TwigTemplate_529a8bbc9510001e201268f3290bf948f7d63bac99abb8741b9526179eb2481c extends \Twig\Template
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
        echo "<div piwik-content-block
     content-title=\"";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_ConversionsOverview"]), "html_attr");
        echo "\">
    <ul class=\"ulGoalTopElements\">
        ";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnRevenue"]), "html", null, true);
        echo ": ";
        echo call_user_func_array($this->env->getFilter('money')->getCallable(), [($context["revenue"] ?? $this->getContext($context, "revenue")), ($context["idSite"] ?? $this->getContext($context, "idSite"))]);
        // line 5
        if ( !twig_test_empty(($context["revenue_subtotal"] ?? $this->getContext($context, "revenue_subtotal")))) {
            echo ",
            ";
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Subtotal"]), "html", null, true);
            echo ": ";
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [($context["revenue_subtotal"] ?? $this->getContext($context, "revenue_subtotal")), ($context["idSite"] ?? $this->getContext($context, "idSite"))]);
        }
        // line 8
        if ( !twig_test_empty(($context["revenue_tax"] ?? $this->getContext($context, "revenue_tax")))) {
            echo ",
            ";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Tax"]), "html", null, true);
            echo ": ";
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [($context["revenue_tax"] ?? $this->getContext($context, "revenue_tax")), ($context["idSite"] ?? $this->getContext($context, "idSite"))]);
        }
        // line 11
        if ( !twig_test_empty(($context["revenue_shipping"] ?? $this->getContext($context, "revenue_shipping")))) {
            echo ",
            ";
            // line 12
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Shipping"]), "html", null, true);
            echo ": ";
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [($context["revenue_shipping"] ?? $this->getContext($context, "revenue_shipping")), ($context["idSite"] ?? $this->getContext($context, "idSite"))]);
        }
        // line 14
        if ( !twig_test_empty(($context["revenue_discount"] ?? $this->getContext($context, "revenue_discount")))) {
            echo ",
            ";
            // line 15
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Discount"]), "html", null, true);
            echo ": ";
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [($context["revenue_discount"] ?? $this->getContext($context, "revenue_discount")), ($context["idSite"] ?? $this->getContext($context, "idSite"))]);
        }
        // line 17
        echo "    </ul>
    <a href=\"javascript:;\" class=\"segmentedlog\" onclick=\"SegmentedVisitorLog.show('Goals.getMetrics', 'visitConvertedGoalId==";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, ($context["idGoal"] ?? $this->getContext($context, "idGoal")), "html", null, true);
        echo "', {})\">
        <span class=\"icon-visitor-profile rowActionIcon\"></span> ";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_RowActionTooltipWithDimension", call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Goal"])]), "html", null, true);
        echo "
    </a>
    <br style=\"clear:left\"/>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Ecommerce/conversionOverview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  81 => 18,  78 => 17,  73 => 15,  69 => 14,  64 => 12,  60 => 11,  55 => 9,  51 => 8,  46 => 6,  42 => 5,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div piwik-content-block
     content-title=\"{{ 'Goals_ConversionsOverview'|translate|e('html_attr') }}\">
    <ul class=\"ulGoalTopElements\">
        {{ 'General_ColumnRevenue'|translate }}: {{ revenue|money(idSite)|raw -}}
        {% if revenue_subtotal is not empty %},
            {{ 'General_Subtotal'|translate }}: {{ revenue_subtotal|money(idSite)|raw -}}
        {% endif %}
        {%- if revenue_tax is not empty -%},
            {{ 'General_Tax'|translate }}: {{ revenue_tax|money(idSite)|raw -}}
        {% endif %}
        {%- if revenue_shipping is not empty -%},
            {{ 'General_Shipping'|translate }}: {{ revenue_shipping|money(idSite)|raw -}}
        {% endif %}
        {%- if revenue_discount is not empty -%},
            {{ 'General_Discount'|translate }}: {{ revenue_discount|money(idSite)|raw -}}
        {% endif %}
    </ul>
    <a href=\"javascript:;\" class=\"segmentedlog\" onclick=\"SegmentedVisitorLog.show('Goals.getMetrics', 'visitConvertedGoalId=={{ idGoal }}', {})\">
        <span class=\"icon-visitor-profile rowActionIcon\"></span> {{ 'Live_RowActionTooltipWithDimension'|translate('General_Goal'|translate) }}
    </a>
    <br style=\"clear:left\"/>
</div>
", "@Ecommerce/conversionOverview.twig", "/home/development/DEVELOPMENT/development_analytics_matomo/plugins/Ecommerce/templates/conversionOverview.twig");
    }
}
