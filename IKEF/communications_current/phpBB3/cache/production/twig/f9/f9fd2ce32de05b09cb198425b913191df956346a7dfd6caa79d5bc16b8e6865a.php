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

/* ucp_notifications.html */
class __TwigTemplate_f5c7566c583e0d5a7f9a940edbdeaf075c7d89e10860d96245cf9c39a21efe94 extends \Twig\Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_notifications.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">

<h2>";
        // line 5
        echo ($context["TITLE"] ?? null);
        echo "</h2>
<div class=\"panel\">
\t<div class=\"inner\">

\t\t<p>";
        // line 9
        echo ($context["TITLE_EXPLAIN"] ?? null);
        echo "</p>

\t\t";
        // line 11
        if ((($context["MODE"] ?? null) == "notification_options")) {
            // line 12
            echo "\t\t\t<table class=\"table1\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATION_TYPE");
            echo "</th>
\t\t\t\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "notification_methods", []));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                // line 17
                echo "\t\t\t\t\t\t\t<th class=\"mark\">";
                echo $this->getAttribute($context["notification_methods"], "NAME", []);
                echo "</th>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "notification_types", []));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_types"]) {
                // line 23
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["notification_types"], "GROUP_NAME", [])) {
                    // line 24
                    echo "\t\t\t\t\t\t<tr class=\"bg3\">
\t\t\t\t\t\t\t<td colspan=\"";
                    // line 25
                    echo ($context["NOTIFICATION_TYPES_COLS"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["notification_types"], "GROUP_NAME", []);
                    echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                } else {
                    // line 28
                    echo "\t\t\t\t\t\t<tr class=\"";
                    if (($this->getAttribute($context["notification_types"], "S_ROW_COUNT", []) % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                    // line 30
                    echo $this->getAttribute($context["notification_types"], "NAME", []);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 31
                    if ($this->getAttribute($context["notification_types"], "EXPLAIN", [])) {
                        echo "<br />&nbsp; &nbsp;";
                        echo $this->getAttribute($context["notification_types"], "EXPLAIN", []);
                    }
                    // line 32
                    echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["notification_types"], "notification_methods", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                        // line 34
                        echo "\t\t\t\t\t\t\t\t<td class=\"mark\"><input type=\"checkbox\" name=\"";
                        echo $this->getAttribute($context["notification_types"], "TYPE", []);
                        echo "_";
                        echo $this->getAttribute($context["notification_methods"], "METHOD", []);
                        echo "\"";
                        if (($this->getAttribute($context["notification_methods"], "AVAILABLE", []) && $this->getAttribute($context["notification_methods"], "SUBSCRIBED", []))) {
                            echo " checked=\"checked\"";
                        }
                        if ( !$this->getAttribute($context["notification_methods"], "AVAILABLE", [])) {
                            echo " disabled=\"disabled\"";
                        }
                        echo " /></td>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_types'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t";
        } else {
            // line 42
            echo "\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "notification_list", []))) {
                // line 43
                echo "\t\t\t\t<div class=\"action-bar bar-top\">
\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t";
                // line 45
                if (($context["U_MARK_ALL"] ?? null)) {
                    echo "<a href=\"";
                    echo ($context["U_MARK_ALL"] ?? null);
                    echo "\" class=\"mark\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS_MARK_ALL_READ");
                    echo "</a> &bull; ";
                }
                // line 46
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo " [<strong>";
                echo ($context["TOTAL_COUNT"] ?? null);
                echo "</strong>]
\t\t\t\t\t\t";
                // line 47
                if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                    // line 48
                    echo "\t\t\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_notifications.html", 48)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 49
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 50
                    echo "\t\t\t\t\t\t\t &bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t<div class=\"notification_list\">
\t\t\t\t<ul class=\"topiclist two-columns\">
\t\t\t\t\t<li class=\"header\">
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 59
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo "</div></dt>
\t\t\t\t\t\t\t<dd class=\"mark\">";
                // line 60
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_READ");
                echo "</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"topiclist cplist two-columns\">
\t\t\t\t\t";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "notification_list", []));
                foreach ($context['_seq'] as $context["_key"] => $context["notification_list"]) {
                    // line 66
                    echo "\t\t\t\t\t\t<li class=\"row";
                    if ($this->getAttribute($context["notification_list"], "UNREAD", [])) {
                        echo " bg3";
                    } else {
                        if (($this->getAttribute($context["notification_list"], "S_ROW_COUNT", []) % 2 == 1)) {
                            echo " bg1";
                        } else {
                            echo " bg2";
                        }
                    }
                    if ($this->getAttribute($context["notification_list"], "STYLING", [])) {
                        echo " ";
                        echo $this->getAttribute($context["notification_list"], "STYLING", []);
                    }
                    echo "\">
\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t<dt>
\t\t\t\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 70
                    if ($this->getAttribute($context["notification_list"], "AVATAR", [])) {
                        echo $this->getAttribute($context["notification_list"], "AVATAR", []);
                    } else {
                        echo "<img src=\"";
                        echo ($context["T_THEME_PATH"] ?? null);
                        echo "/images/no_avatar.gif\" alt=\"\" />";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"notifications\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 72
                    if ($this->getAttribute($context["notification_list"], "URL", [])) {
                        echo "<a href=\"";
                        if ($this->getAttribute($context["notification_list"], "UNREAD", [])) {
                            echo $this->getAttribute($context["notification_list"], "U_MARK_READ", []);
                        } else {
                            echo $this->getAttribute($context["notification_list"], "URL", []);
                        }
                        echo "\">";
                    }
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"notifications_title\">";
                    echo $this->getAttribute($context["notification_list"], "FORMATTED_TITLE", []);
                    if ($this->getAttribute($context["notification_list"], "REFERENCE", [])) {
                        echo " ";
                        echo $this->getAttribute($context["notification_list"], "REFERENCE", []);
                    }
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 74
                    if ($this->getAttribute($context["notification_list"], "URL", [])) {
                        echo "</a>";
                    }
                    // line 75
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["notification_list"], "FORUM", [])) {
                        echo "<p class=\"notifications_forum\">";
                        echo $this->getAttribute($context["notification_list"], "FORUM", []);
                        echo "</p>";
                    }
                    // line 76
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["notification_list"], "REASON", [])) {
                        echo "<p class=\"notifications_reason\">";
                        echo $this->getAttribute($context["notification_list"], "REASON", []);
                        echo "</p>";
                    }
                    // line 77
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"notifications_time\">";
                    echo $this->getAttribute($context["notification_list"], "TIME", []);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</dt>

\t\t\t\t\t\t\t\t<dd class=\"mark\">&nbsp;<input type=\"checkbox\" name=\"mark[]\" value=\"";
                    // line 82
                    echo $this->getAttribute($context["notification_list"], "NOTIFICATION_ID", []);
                    echo "\"";
                    if ( !$this->getAttribute($context["notification_list"], "UNREAD", [])) {
                        echo " disabled=\"disabled\"";
                    }
                    echo " /> <dfn>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_READ");
                    echo "</dfn>&nbsp;</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"action-bar bar-bottom\">
\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t";
                // line 91
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo " [<strong>";
                echo ($context["TOTAL_COUNT"] ?? null);
                echo "</strong>]
\t\t\t\t\t";
                // line 92
                if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                    // line 93
                    echo "\t\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_notifications.html", 93)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 94
                    echo "\t\t\t\t\t";
                } else {
                    // line 95
                    echo "\t\t\t\t\t\t  &bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
            } else {
                // line 101
                echo "\t\t\t\t<p><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_NOTIFICATIONS");
                echo "</strong></p>
\t\t\t";
            }
            // line 103
            echo "
\t\t";
        }
        // line 105
        echo "\t</div>
</div>

";
        // line 108
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "notification_types", [])) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "notification_list", [])))) {
            // line 109
            echo "<fieldset class=\"display-actions\">
\t<input type=\"hidden\" name=\"form_time\" value=\"";
            // line 110
            echo ($context["FORM_TIME"] ?? null);
            echo "\" />
\t";
            // line 111
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 112
            if ((($context["MODE"] ?? null) == "notification_options")) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_READ");
            }
            echo "\" class=\"button1\" />
\t<div><a href=\"#\" onclick=\"\$('#ucp input:checkbox').prop('checked', true); return false;\">";
            // line 113
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"\$('#ucp input:checkbox').prop('checked', false); return false;\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
            echo "</a></div>
\t";
            // line 114
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
</fieldset>
";
        }
        // line 117
        echo "
</form>

";
        // line 120
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_notifications.html", 120)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_notifications.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 120,  425 => 117,  419 => 114,  413 => 113,  405 => 112,  401 => 111,  397 => 110,  394 => 109,  392 => 108,  387 => 105,  383 => 103,  377 => 101,  371 => 97,  365 => 95,  362 => 94,  349 => 93,  347 => 92,  341 => 91,  334 => 86,  318 => 82,  309 => 77,  302 => 76,  295 => 75,  291 => 74,  282 => 73,  272 => 72,  269 => 71,  261 => 70,  241 => 66,  237 => 65,  229 => 60,  225 => 59,  216 => 52,  210 => 50,  207 => 49,  194 => 48,  192 => 47,  185 => 46,  177 => 45,  173 => 43,  170 => 42,  165 => 39,  159 => 38,  155 => 36,  137 => 34,  133 => 33,  130 => 32,  125 => 31,  121 => 30,  111 => 28,  103 => 25,  100 => 24,  97 => 23,  93 => 22,  88 => 19,  79 => 17,  75 => 16,  71 => 15,  66 => 12,  64 => 11,  59 => 9,  52 => 5,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_notifications.html", "");
    }
}
