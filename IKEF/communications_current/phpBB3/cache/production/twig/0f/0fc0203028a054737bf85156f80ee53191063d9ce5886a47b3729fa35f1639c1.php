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

/* ucp_avatar_options.html */
class __TwigTemplate_bf20948c720362ee3a09369ae398012bb22439b39646213c550fd8926188ce4f extends \Twig\Template
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
        echo "<div class=\"panel\">
\t<div class=\"inner\">
\t";
        // line 3
        if ( !($context["S_AVATARS_ENABLED"] ?? null)) {
            // line 4
            echo "\t\t<p>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AVATAR_FEATURES_DISABLED");
            echo "</p>
\t";
        }
        // line 6
        echo "
\t<fieldset>
\t";
        // line 8
        if (($context["ERROR"] ?? null)) {
            echo "<p class=\"error\">";
            echo ($context["ERROR"] ?? null);
            echo "</p>";
        }
        // line 9
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 10
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CURRENT_IMAGE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AVATAR_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>";
        // line 11
        if (($context["AVATAR"] ?? null)) {
            echo ($context["AVATAR"] ?? null);
        } else {
            echo "<img src=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/images/no_avatar.gif\" alt=\"\" />";
        }
        echo "</dd>
\t\t\t<dd><label for=\"avatar_delete\"><input type=\"checkbox\" name=\"avatar_delete\" id=\"avatar_delete\" /> ";
        // line 12
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_AVATAR");
        echo "</label></dd>
\t\t</dl>
\t</fieldset>
\t<h3>";
        // line 15
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AVATAR_SELECT");
        echo "</h3>
\t<fieldset>
\t\t<dl>
\t\t\t<dt><label>";
        // line 18
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AVATAR_TYPE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><select name=\"avatar_driver\" id=\"avatar_driver\" data-togglable-settings=\"true\">
\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "avatar_drivers", []));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
            // line 21
            echo "\t\t\t\t<option value=\"";
            echo $this->getAttribute($context["avatar_drivers"], "DRIVER", []);
            echo "\"";
            if ($this->getAttribute($context["avatar_drivers"], "SELECTED", [])) {
                echo " selected=\"selected\"";
            }
            echo " data-toggle-setting=\"#avatar_option_";
            echo $this->getAttribute($context["avatar_drivers"], "DRIVER", []);
            echo "\">";
            echo $this->getAttribute($context["avatar_drivers"], "L_TITLE", []);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t</select></dd>
\t\t</dl>
\t</fieldset>
\t<div id=\"avatar_options\">
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "avatar_drivers", []));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
            // line 28
            echo "\t<div id=\"avatar_option_";
            echo $this->getAttribute($context["avatar_drivers"], "DRIVER", []);
            echo "\">
\t<noscript>
\t<h3 class=\"avatar_section_header\">";
            // line 30
            echo $this->getAttribute($context["avatar_drivers"], "L_TITLE", []);
            echo "</h3>
\t</noscript>
\t<p>";
            // line 32
            echo $this->getAttribute($context["avatar_drivers"], "L_EXPLAIN", []);
            echo "</p>

\t<fieldset>
\t";
            // line 35
            echo $this->getAttribute($context["avatar_drivers"], "OUTPUT", []);
            echo "
\t</fieldset>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t</div>
";
        // line 40
        if ( !($context["S_GROUP_MANAGE"] ?? null)) {
            // line 41
            echo "\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"reset\" value=\"";
            // line 42
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" name=\"reset\" class=\"button2\" /> &nbsp;
\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 43
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" class=\"button1\" />
\t</fieldset>
";
        }
        // line 46
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 46,  160 => 43,  156 => 42,  153 => 41,  151 => 40,  148 => 39,  138 => 35,  132 => 32,  127 => 30,  121 => 28,  117 => 27,  111 => 23,  94 => 21,  90 => 20,  84 => 18,  78 => 15,  72 => 12,  62 => 11,  55 => 10,  52 => 9,  46 => 8,  42 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_avatar_options.html", "");
    }
}
