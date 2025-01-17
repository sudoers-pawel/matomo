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

/* ajaxMacros.twig */
class __TwigTemplate_d61ddec2c585e775f45f54c8bf109d51274feb012babbd17e0d606fd8832444c extends \Twig\Template
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
        // line 4
        echo "
";
        // line 15
        echo "
";
    }

    // line 1
    public function geterrorDiv($__id__ = "ajaxError", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    <div id=\"";
            echo \Piwik\piwik_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\" style=\"display:none\"></div>
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

    // line 5
    public function getloadingDiv($__id__ = "ajaxLoadingDiv", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 6
            echo "<div id=\"";
            echo \Piwik\piwik_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\" style=\"display:none;\">
    <div class=\"loadingPiwik\">
        <img src=\"plugins/Morpheus/images/loading-blue.gif\" alt=\"";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_LoadingData"]), "html", null, true);
            echo "\" />";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_LoadingData"]), "html", null, true);
            echo "
    </div>
    <div class=\"loadingSegment\">
        ";
            // line 11
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_LoadingSegmentedDataMayTakeSomeTime"]), "html", null, true);
            echo "
    </div>
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

    // line 16
    public function getrequestErrorDiv($__emailSuperUser__ = null, $__areAdsForProfessionalServicesEnabled__ = false, $__currentModule__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "emailSuperUser" => $__emailSuperUser__,
            "areAdsForProfessionalServicesEnabled" => $__areAdsForProfessionalServicesEnabled__,
            "currentModule" => $__currentModule__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 17
            echo "    <div id=\"loadingError\">
        <div class=\"alert alert-danger\">

            ";
            // line 20
            if (((isset($context["emailSuperUser"]) || array_key_exists("emailSuperUser", $context)) && ($context["emailSuperUser"] ?? $this->getContext($context, "emailSuperUser")))) {
                // line 21
                echo "                ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ErrorRequest", (("<a href=\"mailto:" . ($context["emailSuperUser"] ?? $this->getContext($context, "emailSuperUser"))) . "\">"), "</a>"]);
                echo "
            ";
            } else {
                // line 23
                echo "                ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ErrorRequest", "", ""]), "html", null, true);
                echo "
            ";
            }
            // line 25
            echo "
            <br /><br />
            ";
            // line 27
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_NeedMoreHelp"]), "html", null, true);
            echo "

            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/faq/troubleshooting/faq_19489/\">";
            // line 29
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Faq"]), "html", null, true);
            echo "</a> –
            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://forum.matomo.org/\">";
            // line 30
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_CommunityHelp"]), "html", null, true);
            echo "</a>";
            // line 32
            if (($context["areAdsForProfessionalServicesEnabled"] ?? $this->getContext($context, "areAdsForProfessionalServicesEnabled"))) {
                // line 33
                echo "                –
                ";
                // line 34
                $context["supportUrl"] = (("https://matomo.org/support-plans/?pk_campaign=Help&pk_medium=AjaxError&pk_content=" . ($context["currentModule"] ?? $this->getContext($context, "currentModule"))) . "&pk_source=Matomo_App");
                // line 35
                echo "                <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"";
                echo \Piwik\piwik_escape_filter($this->env, ($context["supportUrl"] ?? $this->getContext($context, "supportUrl")), "html_attr");
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Feedback_ProfessionalHelp"]), "html", null, true);
                echo "</a>";
            }
            // line 36
            echo ".
        </div>
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
        return "ajaxMacros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 36,  169 => 35,  167 => 34,  164 => 33,  162 => 32,  159 => 30,  155 => 29,  150 => 27,  146 => 25,  140 => 23,  134 => 21,  132 => 20,  127 => 17,  113 => 16,  94 => 11,  86 => 8,  80 => 6,  68 => 5,  50 => 2,  38 => 1,  33 => 15,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro errorDiv(id='ajaxError') %}
    <div id=\"{{ id }}\" style=\"display:none\"></div>
{% endmacro %}

{% macro loadingDiv(id='ajaxLoadingDiv') %}
<div id=\"{{ id }}\" style=\"display:none;\">
    <div class=\"loadingPiwik\">
        <img src=\"plugins/Morpheus/images/loading-blue.gif\" alt=\"{{ 'General_LoadingData'|translate }}\" />{{ 'General_LoadingData'|translate }}
    </div>
    <div class=\"loadingSegment\">
        {{ 'SegmentEditor_LoadingSegmentedDataMayTakeSomeTime'|translate }}
    </div>
</div>
{% endmacro %}

{% macro requestErrorDiv(emailSuperUser, areAdsForProfessionalServicesEnabled = false, currentModule = '') %}
    <div id=\"loadingError\">
        <div class=\"alert alert-danger\">

            {% if emailSuperUser is defined and emailSuperUser %}
                {{ 'General_ErrorRequest'|translate('<a href=\"mailto:' ~ emailSuperUser ~ '\">', '</a>')|raw }}
            {% else %}
                {{ 'General_ErrorRequest'|translate('', '') }}
            {% endif %}

            <br /><br />
            {{ 'General_NeedMoreHelp'|translate }}

            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/faq/troubleshooting/faq_19489/\">{{ 'General_Faq'|translate }}</a> –
            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://forum.matomo.org/\">{{ 'Feedback_CommunityHelp'|translate }}</a>

            {%- if areAdsForProfessionalServicesEnabled %}
                –
                {% set supportUrl = 'https://matomo.org/support-plans/?pk_campaign=Help&pk_medium=AjaxError&pk_content=' ~ currentModule ~ '&pk_source=Matomo_App' %}
                <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"{{ supportUrl|e('html_attr') }}\">{{ 'Feedback_ProfessionalHelp'|translate }}</a>
            {%- endif %}.
        </div>
    </div>
{% endmacro %}
", "ajaxMacros.twig", "/home/development/DEVELOPMENT/development_analytics_matomo/plugins/Morpheus/templates/ajaxMacros.twig");
    }
}
