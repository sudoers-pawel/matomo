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

/* @Ecommerce/getSparklines.twig */
class __TwigTemplate_4518f841aee1d1d9c9e774c892dc022db8af1c67498adc7255b670483ee6f8c7 extends \Twig\Template
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
        echo "<div class=\"card\"><div class=\"card-content\">
<div id='leftcolumn' style=\"clear:both;";
        // line 2
        if ( !($context["isWidget"] ?? $this->getContext($context, "isWidget"))) {
            echo "width:33%;'";
        }
        echo "\">
    <div class=\"sparkline\">";
        // line 3
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [($context["urlSparklineConversions"] ?? $this->getContext($context, "urlSparklineConversions"))]);
        echo "
\t<div>
        <strong>";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [($context["nb_conversions"] ?? $this->getContext($context, "nb_conversions"))]), "html", null, true);
        echo "</strong>
        ";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_EcommerceOrders"]), "html", null, true);
        echo "
        <img src='plugins/Morpheus/images/ecommerceOrder.png'>

        ";
        // line 9
        if (((isset($context["goalAllowMultipleConversionsPerVisit"]) || array_key_exists("goalAllowMultipleConversionsPerVisit", $context)) && ($context["goalAllowMultipleConversionsPerVisit"] ?? $this->getContext($context, "goalAllowMultipleConversionsPerVisit")))) {
            // line 10
            echo "            (";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_NVisits", (("<strong>" . ($context["nb_visits_converted"] ?? $this->getContext($context, "nb_visits_converted"))) . "</strong>")]);
            echo ")
        ";
        }
        // line 12
        echo "\t</div>
    </div>

    <div class=\"sparkline\">
        ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [($context["urlSparklineRevenue"] ?? $this->getContext($context, "urlSparklineRevenue"))]);
        echo "
\t<div>
        ";
        // line 18
        $context["revenue"] = call_user_func_array($this->env->getFilter('money')->getCallable(), [($context["revenue"] ?? $this->getContext($context, "revenue")), ($context["idSite"] ?? $this->getContext($context, "idSite"))]);
        // line 19
        echo "        <strong>";
        echo ($context["revenue"] ?? $this->getContext($context, "revenue"));
        echo "</strong> ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_TotalRevenue"]), "html", null, true);
        echo "
\t</div>
    </div>

    <div class=\"sparkline\">";
        // line 23
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [($context["urlSparklineAverageOrderValue"] ?? $this->getContext($context, "urlSparklineAverageOrderValue"))]);
        echo "
\t<div>
        <strong>";
        // line 25
        echo call_user_func_array($this->env->getFilter('money')->getCallable(), [($context["avg_order_revenue"] ?? $this->getContext($context, "avg_order_revenue")), ($context["idSite"] ?? $this->getContext($context, "idSite"))]);
        echo "</strong>
        ";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_AverageOrderValue"]), "html", null, true);
        echo "
\t</div>
    </div>
</div>
<div id='leftcolumn' ";
        // line 30
        if ( !($context["isWidget"] ?? $this->getContext($context, "isWidget"))) {
            echo "style='width:33%;'";
        }
        echo ">
    <div class=\"sparkline\">";
        // line 31
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [($context["urlSparklineConversionRate"] ?? $this->getContext($context, "urlSparklineConversionRate"))]);
        echo "
\t<div>
        ";
        // line 33
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_EcommerceOrders"]), "html", null, true);
        $context["ecommerceOrdersText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "        ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_ConversionRate", ((("<strong>" . call_user_func_array($this->env->getFilter('percent')->getCallable(), [($context["conversion_rate"] ?? $this->getContext($context, "conversion_rate"))])) . "</strong> ") . ($context["ecommerceOrdersText"] ?? $this->getContext($context, "ecommerceOrdersText")))]);
        echo "
\t</div>
    </div>
    <div class=\"sparkline\">";
        // line 37
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [($context["urlSparklinePurchasedProducts"] ?? $this->getContext($context, "urlSparklinePurchasedProducts"))]);
        echo "
\t<div>
    <strong>";
        // line 39
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [($context["items"] ?? $this->getContext($context, "items"))]), "html", null, true);
        echo "</strong> ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_PurchasedProducts"]), "html", null, true);
        echo "</div></div>
</div>
<div id='rightcolumn' ";
        // line 41
        if ( !($context["isWidget"] ?? $this->getContext($context, "isWidget"))) {
            echo "style='width:30%;'";
        }
        echo ">
    <div>
        <img src='plugins/Morpheus/images/ecommerceAbandonedCart.png'> ";
        // line 43
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_AbandonedCarts"]), "html", null, true);
        echo "
    </div>

    <div class=\"sparkline\">
        ";
        // line 47
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [($context["cart_urlSparklineConversions"] ?? $this->getContext($context, "cart_urlSparklineConversions"))]);
        echo "
\t<div>
        ";
        // line 49
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_AbandonedCart"]), "html", null, true);
        $context["ecommerceAbandonedCartsText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "        <strong>";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [($context["cart_nb_conversions"] ?? $this->getContext($context, "cart_nb_conversions"))]), "html", null, true);
        echo "</strong> ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_VisitsWith", ($context["ecommerceAbandonedCartsText"] ?? $this->getContext($context, "ecommerceAbandonedCartsText"))]), "html", null, true);
        echo "
\t</div>
    </div>

    <div class=\"sparkline\">
        ";
        // line 55
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [($context["cart_urlSparklineRevenue"] ?? $this->getContext($context, "cart_urlSparklineRevenue"))]);
        echo "
\t<div>
        ";
        // line 57
        ob_start();
        echo call_user_func_array($this->env->getFilter('money')->getCallable(), [($context["cart_revenue"] ?? $this->getContext($context, "cart_revenue")), ($context["idSite"] ?? $this->getContext($context, "idSite"))]);
        $context["revenue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "        ";
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnRevenue"]), "html", null, true);
        $context["revenueText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "        <strong>";
        echo \Piwik\piwik_escape_filter($this->env, ($context["revenue"] ?? $this->getContext($context, "revenue")), "html", null, true);
        echo "</strong> ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_LeftInCart", ($context["revenueText"] ?? $this->getContext($context, "revenueText"))]), "html", null, true);
        echo "
\t</div>
    </div>

    <div class=\"sparkline\">
        ";
        // line 64
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [($context["cart_urlSparklineConversionRate"] ?? $this->getContext($context, "cart_urlSparklineConversionRate"))]);
        echo "
\t<div>
        <strong>";
        // line 66
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('percent')->getCallable(), [($context["cart_conversion_rate"] ?? $this->getContext($context, "cart_conversion_rate"))]), "html", null, true);
        echo "</strong>
        ";
        // line 67
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_VisitsWith", ($context["ecommerceAbandonedCartsText"] ?? $this->getContext($context, "ecommerceAbandonedCartsText"))]), "html", null, true);
        echo "
\t</div>
    </div>
</div>
<div style=\"clear: left;\"></div>
";
        // line 72
        $this->loadTemplate("_sparklineFooter.twig", "@Ecommerce/getSparklines.twig", 72)->display($context);
        // line 73
        echo "    </div></div>
";
    }

    public function getTemplateName()
    {
        return "@Ecommerce/getSparklines.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 73,  211 => 72,  203 => 67,  199 => 66,  194 => 64,  183 => 59,  178 => 58,  174 => 57,  169 => 55,  158 => 50,  154 => 49,  149 => 47,  142 => 43,  135 => 41,  128 => 39,  123 => 37,  116 => 34,  112 => 33,  107 => 31,  101 => 30,  94 => 26,  90 => 25,  85 => 23,  75 => 19,  73 => 18,  68 => 16,  62 => 12,  56 => 10,  54 => 9,  48 => 6,  44 => 5,  39 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\"><div class=\"card-content\">
<div id='leftcolumn' style=\"clear:both;{% if not isWidget %}width:33%;'{% endif %}\">
    <div class=\"sparkline\">{{ sparkline(urlSparklineConversions) }}
\t<div>
        <strong>{{ nb_conversions|number }}</strong>
        {{ 'General_EcommerceOrders'|translate }}
        <img src='plugins/Morpheus/images/ecommerceOrder.png'>

        {% if goalAllowMultipleConversionsPerVisit is defined and goalAllowMultipleConversionsPerVisit %}
            ({{ 'General_NVisits'|translate(\"<strong>\"~nb_visits_converted~\"</strong>\")|raw }})
        {% endif %}
\t</div>
    </div>

    <div class=\"sparkline\">
        {{ sparkline(urlSparklineRevenue) }}
\t<div>
        {% set revenue=revenue|money(idSite) %}
        <strong>{{ revenue|raw }}</strong> {{ 'General_TotalRevenue'|translate }}
\t</div>
    </div>

    <div class=\"sparkline\">{{ sparkline(urlSparklineAverageOrderValue) }}
\t<div>
        <strong>{{ avg_order_revenue|money(idSite)|raw }}</strong>
        {{ 'General_AverageOrderValue'|translate }}
\t</div>
    </div>
</div>
<div id='leftcolumn' {% if not isWidget %}style='width:33%;'{% endif %}>
    <div class=\"sparkline\">{{ sparkline(urlSparklineConversionRate) }}
\t<div>
        {% set ecommerceOrdersText %}{{ 'General_EcommerceOrders'|translate }}{% endset %}
        {{ 'Goals_ConversionRate'|translate(\"<strong>\"~conversion_rate|percent~\"</strong> \"~ecommerceOrdersText)|raw }}
\t</div>
    </div>
    <div class=\"sparkline\">{{ sparkline(urlSparklinePurchasedProducts) }}
\t<div>
    <strong>{{ items|number }}</strong> {{ 'General_PurchasedProducts'|translate }}</div></div>
</div>
<div id='rightcolumn' {% if not isWidget %}style='width:30%;'{% endif %}>
    <div>
        <img src='plugins/Morpheus/images/ecommerceAbandonedCart.png'> {{ 'General_AbandonedCarts'|translate }}
    </div>

    <div class=\"sparkline\">
        {{ sparkline(cart_urlSparklineConversions) }}
\t<div>
        {% set ecommerceAbandonedCartsText %}{{ 'Goals_AbandonedCart'|translate }}{% endset %}
        <strong>{{ cart_nb_conversions|number }}</strong> {{ 'General_VisitsWith'|translate(ecommerceAbandonedCartsText) }}
\t</div>
    </div>

    <div class=\"sparkline\">
        {{ sparkline(cart_urlSparklineRevenue) }}
\t<div>
        {% set revenue %}{{ cart_revenue|money(idSite)|raw }}{% endset %}
        {% set revenueText %}{{ 'General_ColumnRevenue'|translate }}{% endset %}
        <strong>{{ revenue }}</strong> {{ 'Goals_LeftInCart'|translate(revenueText) }}
\t</div>
    </div>

    <div class=\"sparkline\">
        {{ sparkline(cart_urlSparklineConversionRate) }}
\t<div>
        <strong>{{ cart_conversion_rate|percent }}</strong>
        {{ 'General_VisitsWith'|translate(ecommerceAbandonedCartsText) }}
\t</div>
    </div>
</div>
<div style=\"clear: left;\"></div>
{% include \"_sparklineFooter.twig\" %}
    </div></div>
", "@Ecommerce/getSparklines.twig", "/home/development/DEVELOPMENT/development_analytics_matomo/plugins/Ecommerce/templates/getSparklines.twig");
    }
}
