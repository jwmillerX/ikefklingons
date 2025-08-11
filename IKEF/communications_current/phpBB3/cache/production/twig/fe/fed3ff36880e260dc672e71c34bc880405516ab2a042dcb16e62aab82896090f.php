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

/* index_body.html */
class __TwigTemplate_05e9901ac8fbb03965c2153d766eb8156cd9d5e238711b3a24b4a2d481801327 extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<p class=\"";
        // line 3
        echo ($context["S_CONTENT_FLOW_END"] ?? null);
        echo " responsive-center time";
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo " rightside";
        }
        echo "\">";
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo ($context["LAST_VISIT_DATE"] ?? null);
        } else {
            echo ($context["CURRENT_TIME"] ?? null);
        }
        echo "</p>
";
        // line 4
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "<p class=\"responsive-center time\">";
            echo ($context["CURRENT_TIME"] ?? null);
            echo "</p>";
        }
        // line 5
        echo "
";
        // line 6
        // line 7
        if (($context["U_MARK_FORUMS"] ?? null)) {
            // line 8
            echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
            // line 9
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\" class=\"mark-read rightside\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_FORUMS_READ");
            echo "</a>
\t</div>
";
        }
        // line 12
        // line 13
        echo "
";
        // line 14
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 14)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 15
        echo "
";
        // line 16
        // line 17
        echo "
";
        // line 18
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 19
            echo "\t<div class=\"forabg\">
\t\t<div class=\"inner\">
\t\t\t<form method=\"post\" action=\"";
            // line 21
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\" id=\"headerspace\">
\t\t\t\t<ul class=\"topiclist\">
\t\t\t\t\t<li class=\"header\">
\t\t\t\t\t\t<dl id=\"icon\">
\t\t\t\t\t\t\t<dt><a href=\"";
            // line 25
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a>";
            if (($context["S_REGISTER_ENABLED"] ?? null)) {
                echo "&nbsp; &bull; &nbsp;<a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                echo "</a>";
            }
            echo "</dt>
\t\t\t\t\t\t\t<dd></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"topiclist forums\">
\t\t\t\t\t<li class=\"row login\">
\t\t\t\t\t\t<fieldset class=\"quick-login\">
\t\t\t\t\t\t\t<label for=\"username\"><span>";
            // line 33
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "\" /></label>
\t\t\t\t\t\t\t<label for=\"password\"><span>";
            // line 34
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t\t\t\t\t";
            // line 35
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                // line 36
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORGOT_PASS");
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t\t";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 39
                echo "\t\t\t\t\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t\t\t\t\t";
            // line 42
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t\t\t\t\t\t";
            // line 43
            echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
            echo "
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</form>
\t\t</div>
\t</div>
";
        }
        // line 51
        echo "
";
        // line 52
        // line 53
        echo "
<div class=\"statistics-container\">
         ";
        // line 55
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 56
            echo "            <div class=\"stat-block online-list\">
               ";
            // line 57
            if (($context["U_VIEWONLINE"] ?? null)) {
                echo "<h3><i class=\"icon fa-wifi fa-fw icon-darkred icon-xl\" aria-hidden=\"true\" style=\"vertical-align:middle; padding-right:5px;\"></i><a href=\"";
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3><i class=\"icon fa-wifi fa-fw icon-lightgray icon-xl\" aria-hidden=\"true\" style=\"vertical-align:middle; padding-right:5px;\"></i>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 58
            echo "               <p>
                  ";
            // line 59
            // line 60
            echo "                  ";
            echo ($context["TOTAL_USERS_ONLINE"] ?? null);
            echo " (";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo ($context["RECORD_USERS"] ?? null);
            echo "<br /> 
                  ";
            // line 61
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 62
                echo "                     <br />";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "
                     ";
                // line 63
                if (($context["LEGEND"] ?? null)) {
                    echo "<br /><em>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LEGEND");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo ($context["LEGEND"] ?? null);
                    echo "</em>";
                }
                // line 64
                echo "                  ";
            }
            // line 65
            echo "                  ";
            // line 66
            echo "               </p>
            </div>
         ";
        }
        // line 69
        echo "
         ";
        // line 70
        // line 71
        echo "
         ";
        // line 72
        if (($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null)) {
            // line 73
            echo "            <div class=\"stat-block birthday-list\">
               <h3><i class=\"icon fa-birthday-cake fa-fw icon-lightgray icon-xl\" aria-hidden=\"true\" style=\"vertical-align:middle; padding-right:5px;\"></i>";
            // line 74
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BIRTHDAYS");
            echo "</h3>
               <p>
                  ";
            // line 76
            // line 77
            echo "                  ";
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "birthdays", []))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "birthdays", []));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo $this->getAttribute($context["birthdays"], "USERNAME", []);
                    if (($this->getAttribute($context["birthdays"], "AGE", []) !== "")) {
                        echo " (";
                        echo $this->getAttribute($context["birthdays"], "AGE", []);
                        echo ")";
                    }
                    if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", [])) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_BIRTHDAYS");
            }
            // line 78
            echo "                  ";
            // line 79
            echo "               </p>
            </div>
         ";
        }
        // line 82
        echo "
         ";
        // line 83
        if (($context["NEWEST_USER"] ?? null)) {
            // line 84
            echo "            <div class=\"stat-block statistics\">
               <h3><i class=\"icon fa-signal fa-fw icon-lightgray icon-xl\" aria-hidden=\"true\" style=\"vertical-align:middle; padding-right:5px;\"></i>";
            // line 85
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STATISTICS");
            echo "</h3>
               <p>
                  ";
            // line 87
            // line 88
            echo "                  ";
            echo ($context["TOTAL_POSTS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_USERS"] ?? null);
            echo " &bull; ";
            echo ($context["NEWEST_USER"] ?? null);
            echo "
                  ";
            // line 89
            // line 90
            echo "               </p>
            </div>
         ";
        }
        // line 93
        echo "
";
        // line 94
        // line 95
        echo "      </div>

";
        // line 97
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 97)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 97,  342 => 95,  341 => 94,  338 => 93,  333 => 90,  332 => 89,  321 => 88,  320 => 87,  315 => 85,  312 => 84,  310 => 83,  307 => 82,  302 => 79,  300 => 78,  274 => 77,  273 => 76,  268 => 74,  265 => 73,  263 => 72,  260 => 71,  259 => 70,  256 => 69,  251 => 66,  249 => 65,  246 => 64,  237 => 63,  232 => 62,  230 => 61,  221 => 60,  220 => 59,  217 => 58,  205 => 57,  202 => 56,  200 => 55,  196 => 53,  195 => 52,  192 => 51,  181 => 43,  177 => 42,  172 => 41,  166 => 39,  163 => 38,  155 => 36,  153 => 35,  146 => 34,  139 => 33,  118 => 25,  111 => 21,  107 => 19,  105 => 18,  102 => 17,  101 => 16,  98 => 15,  86 => 14,  83 => 13,  82 => 12,  74 => 9,  71 => 8,  69 => 7,  68 => 6,  65 => 5,  59 => 4,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
