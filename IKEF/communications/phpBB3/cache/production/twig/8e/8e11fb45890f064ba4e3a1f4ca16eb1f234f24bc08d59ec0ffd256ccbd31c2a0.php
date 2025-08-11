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

/* acp_groups.html */
class __TwigTemplate_743c0613fb1d655868e49ba5f88d64264480dd8c4bf40c103d247e4ab1a36219 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_groups.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (($context["S_EDIT"] ?? null)) {
            // line 6
            echo "
\t<a href=\"";
            // line 7
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 9
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_GROUPS_MANAGE");
            echo "</h1>

\t<p>";
            // line 11
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_EDIT_EXPLAIN");
            echo "</p>

\t";
            // line 13
            if (($context["S_ERROR"] ?? null)) {
                // line 14
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 15
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 16
                echo ($context["ERROR_MSG"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 19
            echo "
\t<form id=\"settings\" method=\"post\" action=\"";
            // line 20
            echo ($context["U_ACTION"] ?? null);
            echo "\" enctype=\"multipart/form-data\">

\t<fieldset>
\t\t<legend>";
            // line 23
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_DETAILS");
            echo "</legend>
\t<dl>
\t\t<dt><label";
            // line 25
            if ( !($context["S_SPECIAL_GROUP"] ?? null)) {
                echo " for=\"group_name\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_NAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd>";
            // line 26
            if (($context["S_SPECIAL_GROUP"] ?? null)) {
                echo "<strong>";
                echo ($context["GROUP_NAME"] ?? null);
                echo "</strong>";
            }
            echo "<input name=\"group_name\" type=\"";
            if (($context["S_SPECIAL_GROUP"] ?? null)) {
                echo "hidden";
            } else {
                echo "text";
            }
            echo "\" id=\"group_name\" value=\"";
            echo ($context["GROUP_INTERNAL_NAME"] ?? null);
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_desc\">";
            // line 29
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_DESC");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><textarea id=\"group_desc\" name=\"group_desc\" rows=\"5\" cols=\"45\">";
            // line 30
            echo ($context["GROUP_DESC"] ?? null);
            echo "</textarea></dd>
\t\t<dd><label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_bbcode\"";
            // line 31
            if (($context["S_DESC_BBCODE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_BBCODE");
            echo "</label>
\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_smilies\"";
            // line 32
            if (($context["S_DESC_SMILIES_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_SMILIES");
            echo "</label>
\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_urls\"";
            // line 33
            if (($context["S_DESC_URLS_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_URLS");
            echo "</label></dd>
\t</dl>
\t";
            // line 35
            if ( !($context["S_SPECIAL_GROUP"] ?? null)) {
                // line 36
                echo "\t\t<dl>
\t\t\t<dt><label for=\"group_type\">";
                // line 37
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_TYPE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_TYPE_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input name=\"group_type\" type=\"radio\" class=\"radio\" id=\"group_type\" value=\"";
                // line 39
                echo ($context["GROUP_TYPE_FREE"] ?? null);
                echo "\"";
                echo ($context["GROUP_FREE"] ?? null);
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_OPEN");
                echo "</label>
\t\t\t\t<label><input name=\"group_type\" type=\"radio\" class=\"radio\" value=\"";
                // line 40
                echo ($context["GROUP_TYPE_OPEN"] ?? null);
                echo "\"";
                echo ($context["GROUP_OPEN"] ?? null);
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_REQUEST");
                echo "</label>
\t\t\t\t<label><input name=\"group_type\" type=\"radio\" class=\"radio\" value=\"";
                // line 41
                echo ($context["GROUP_TYPE_CLOSED"] ?? null);
                echo "\"";
                echo ($context["GROUP_CLOSED"] ?? null);
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_CLOSED");
                echo "</label>
\t\t\t\t<label><input name=\"group_type\" type=\"radio\" class=\"radio\" value=\"";
                // line 42
                echo ($context["GROUP_TYPE_HIDDEN"] ?? null);
                echo "\"";
                echo ($context["GROUP_HIDDEN"] ?? null);
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_HIDDEN");
                echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
            } else {
                // line 46
                echo "\t\t<input name=\"group_type\" type=\"hidden\" value=\"";
                echo ($context["GROUP_TYPE_SPECIAL"] ?? null);
                echo "\" />
\t";
            }
            // line 48
            echo "
\t";
            // line 49
            if ((($context["S_ADD_GROUP"] ?? null) && ($context["S_GROUP_PERM"] ?? null))) {
                // line 50
                echo "\t\t<dl>
\t\t\t<dt><label for=\"group_perm_from\">";
                // line 51
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPY_PERMISSIONS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPY_PERMISSIONS_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><select id=\"group_perm_from\" name=\"group_perm_from\"><option value=\"0\">";
                // line 52
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_PERMISSIONS");
                echo "</option>";
                echo ($context["S_GROUP_OPTIONS"] ?? null);
                echo "</select></dd>
\t\t</dl>
\t";
            }
            // line 55
            echo "\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 58
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_OPTIONS_SAVE");
            echo "</legend>
\t";
            // line 59
            // line 60
            echo "\t";
            if (($context["S_USER_FOUNDER"] ?? null)) {
                // line 61
                echo "\t<dl>
\t\t<dt><label for=\"group_founder_manage\">";
                // line 62
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_FOUNDER_MANAGE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_FOUNDER_MANAGE_EXPLAIN");
                echo "</span></dt>
\t\t<dd><input name=\"group_founder_manage\" type=\"checkbox\" value=\"1\" class=\"radio\" id=\"group_founder_manage\"";
                // line 63
                echo ($context["GROUP_FOUNDER_MANAGE"] ?? null);
                echo " /></dd>
\t</dl>
\t";
            }
            // line 66
            echo "\t<dl>
\t\t<dt><label for=\"group_skip_auth\">";
            // line 67
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_SKIP_AUTH");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_SKIP_AUTH_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"group_skip_auth\" type=\"checkbox\" value=\"1\" class=\"radio\" id=\"group_skip_auth\"";
            // line 68
            echo ($context["GROUP_SKIP_AUTH"] ?? null);
            echo " /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_legend\">";
            // line 71
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_LEGEND");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"group_legend\" type=\"checkbox\" value=\"1\" class=\"radio\" id=\"group_legend\"";
            // line 72
            echo ($context["GROUP_LEGEND"] ?? null);
            echo " /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_teampage\">";
            // line 75
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_TEAMPAGE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"group_teampage\" type=\"checkbox\" value=\"1\" class=\"radio\" id=\"group_teampage\"";
            // line 76
            echo ($context["GROUP_TEAMPAGE"] ?? null);
            echo " /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_receive_pm\">";
            // line 79
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_RECEIVE_PM");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_RECEIVE_PM_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"group_receive_pm\" type=\"checkbox\" value=\"1\" class=\"radio\" id=\"group_receive_pm\"";
            // line 80
            echo ($context["GROUP_RECEIVE_PM"] ?? null);
            echo " /></dd>
\t</dl>
\t";
            // line 82
            // line 83
            echo "\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 86
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_SETTINGS_SAVE");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"group_message_limit\">";
            // line 88
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_MESSAGE_LIMIT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_MESSAGE_LIMIT_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"group_message_limit\" type=\"number\" id=\"group_message_limit\" min=\"0\" max=\"9999\" value=\"";
            // line 89
            echo ($context["GROUP_MESSAGE_LIMIT"] ?? null);
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_max_recipients\">";
            // line 92
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_MAX_RECIPIENTS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_MAX_RECIPIENTS_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"group_max_recipients\" type=\"number\" id=\"group_max_recipients\" min=\"0\" max=\"9999\" value=\"";
            // line 93
            echo ($context["GROUP_MAX_RECIPIENTS"] ?? null);
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_colour\">";
            // line 96
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_COLOR");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_COLOR_EXPLAIN");
            echo "</span></dt>
\t\t<dd>
\t\t\t<input name=\"group_colour\" type=\"text\" id=\"group_colour\" value=\"";
            // line 98
            echo ($context["GROUP_COLOUR"] ?? null);
            echo "\" size=\"6\" maxlength=\"6\" />
\t\t\t";
            // line 99
            if (($context["GROUP_COLOUR"] ?? null)) {
                echo "&nbsp;<span style=\"background-color: #";
                echo ($context["GROUP_COLOUR"] ?? null);
                echo "\">&nbsp; &nbsp;</span>";
            }
            echo "&nbsp;&nbsp;<span>
\t\t\t[ <a href=\"#\" id=\"color_palette_toggle\">";
            // line 100
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLOUR_SWATCH");
            echo "</a> ]</span>
\t\t\t<div id=\"color_palette_placeholder\" style=\"display: none;\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-target=\"#group_colour\"></div>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_rank\">";
            // line 105
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_RANK");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"group_rank\" id=\"group_rank\">";
            // line 106
            echo ($context["S_RANK_OPTIONS"] ?? null);
            echo "</select></dd>
\t</dl>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 111
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_AVATAR");
            echo "</legend>
\t<dl>
\t\t<dt><label>";
            // line 113
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CURRENT_IMAGE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AVATAR_EXPLAIN");
            echo "</span></dt>
\t\t<dd>";
            // line 114
            echo ($context["AVATAR"] ?? null);
            echo "</dd>
\t\t<dd><label for=\"avatar_delete\"><input type=\"checkbox\" name=\"avatar_delete\" id=\"avatar_delete\" /> ";
            // line 115
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_AVATAR");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
            // line 118
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AVATAR_TYPE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"avatar_driver\" id=\"avatar_driver\" data-togglable-settings=\"true\">
\t\t\t";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "avatar_drivers", []));
            foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
                // line 121
                echo "\t\t\t<option value=\"";
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
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "\t\t</select></dd>
\t</dl>
\t<div id=\"avatar_options\">
\t";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "avatar_drivers", []));
            foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
                // line 127
                echo "\t<div id=\"avatar_option_";
                echo $this->getAttribute($context["avatar_drivers"], "DRIVER", []);
                echo "\">
\t\t<p>";
                // line 128
                echo $this->getAttribute($context["avatar_drivers"], "L_EXPLAIN", []);
                echo "</p>
\t\t";
                // line 129
                echo $this->getAttribute($context["avatar_drivers"], "OUTPUT", []);
                echo "
\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "\t</div>
\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 136
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"update\" value=\"";
            // line 137
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 138
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" />
\t\t";
            // line 139
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 143
($context["S_LIST"] ?? null)) {
            // line 144
            echo "
\t<a href=\"";
            // line 145
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 147
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_MEMBERS");
            echo " :: ";
            echo ($context["GROUP_NAME"] ?? null);
            echo "</h1>

\t<p>";
            // line 149
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_MEMBERS_EXPLAIN");
            echo "</p>

\t<form id=\"list\" method=\"post\" action=\"";
            // line 151
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"quick\">
\t\t<a href=\"";
            // line 154
            echo ($context["U_DEFAULT_ALL"] ?? null);
            echo "\">&raquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAKE_DEFAULT_FOR_ALL");
            echo "</a>
\t</fieldset>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 160
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "</th>
\t\t<th>";
            // line 161
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_DEFAULT");
            echo "</th>
\t\t<th>";
            // line 162
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
            echo "</th>
\t\t<th>";
            // line 163
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
            echo "</th>
\t\t<th>";
            // line 164
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td class=\"row3\" colspan=\"5\"><strong>";
            // line 169
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_LEAD");
            echo "</strong></td>
\t</tr>
\t";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "leader", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
                // line 172
                echo "\t\t<tr>
\t\t\t<td>";
                // line 173
                if ($this->getAttribute($context["leader"], "USERNAME_COLOUR", [])) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["leader"], "U_USER_EDIT", []);
                    echo "\" style=\"color: #";
                    echo $this->getAttribute($context["leader"], "USERNAME_COLOUR", []);
                    echo ";\" class=\"username-coloured\">";
                    echo $this->getAttribute($context["leader"], "USERNAME", []);
                    echo "</a>";
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["leader"], "U_USER_EDIT", []);
                    echo "\">";
                    echo $this->getAttribute($context["leader"], "USERNAME", []);
                    echo "</a>";
                }
                echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                // line 174
                if ($this->getAttribute($context["leader"], "S_GROUP_DEFAULT", [])) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                }
                echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                // line 175
                echo $this->getAttribute($context["leader"], "JOINED", []);
                echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                // line 176
                echo $this->getAttribute($context["leader"], "USER_POSTS", []);
                echo "</td>
\t\t\t<td style=\"text-align: center;\"><input type=\"checkbox\" class=\"radio\" name=\"mark[]\" value=\"";
                // line 177
                echo $this->getAttribute($context["leader"], "USER_ID", []);
                echo "\" /></td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 180
                echo "\t\t<tr>
\t\t\t<td colspan=\"5\" style=\"text-align: center;\">";
                // line 181
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUPS_NO_MODS");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "\t<tr>
\t\t<td class=\"row3\" colspan=\"5\"><strong>";
            // line 185
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_APPROVED");
            echo "</strong></td>
\t</tr>
\t";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "member", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 188
                echo "\t\t";
                if ($this->getAttribute($context["member"], "S_PENDING", [])) {
                    // line 189
                    echo "\t\t<tr>
\t\t\t<td class=\"row3\" colspan=\"5\"><strong>";
                    // line 190
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_PENDING");
                    echo "</strong></td>
\t\t</tr>
\t\t";
                } else {
                    // line 193
                    echo "\t\t<tr>
\t\t\t<td>";
                    // line 194
                    if ($this->getAttribute($context["member"], "USERNAME_COLOUR", [])) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["member"], "U_USER_EDIT", []);
                        echo "\" style=\"color: #";
                        echo $this->getAttribute($context["member"], "USERNAME_COLOUR", []);
                        echo ";\" class=\"username-coloured\">";
                        echo $this->getAttribute($context["member"], "USERNAME", []);
                        echo "</a>";
                    } else {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["member"], "U_USER_EDIT", []);
                        echo "\">";
                        echo $this->getAttribute($context["member"], "USERNAME", []);
                        echo "</a>";
                    }
                    echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 195
                    if ($this->getAttribute($context["member"], "S_GROUP_DEFAULT", [])) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                    }
                    echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 196
                    echo $this->getAttribute($context["member"], "JOINED", []);
                    echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 197
                    echo $this->getAttribute($context["member"], "USER_POSTS", []);
                    echo "</td>
\t\t\t<td style=\"text-align: center;\"><input type=\"checkbox\" class=\"radio\" name=\"mark[]\" value=\"";
                    // line 198
                    echo $this->getAttribute($context["member"], "USER_ID", []);
                    echo "\" /></td>
\t\t</tr>
\t\t";
                }
                // line 201
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 202
                echo "\t\t<tr>
\t\t\t<td colspan=\"5\" style=\"text-align: center;\">";
                // line 203
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUPS_NO_MEMBERS");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "\t</tbody>
\t</table>
\t<div class=\"pagination\">
\t";
            // line 209
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 210
                echo "\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "acp_groups.html", 210)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 211
                echo "\t";
            }
            // line 212
            echo "\t</div>

\t<fieldset class=\"quick\">
\t\t<select name=\"action\"><option class=\"sep\" value=\"\">";
            // line 215
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_OPTION");
            echo "</option>";
            echo ($context["S_ACTION_OPTIONS"] ?? null);
            echo "</select>
\t\t<input class=\"button2\" type=\"submit\" name=\"update\" value=\"";
            // line 216
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t\t<p class=\"small\"><a href=\"#\" onclick=\"marklist('list', 'mark', true); return false;\">";
            // line 217
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('list', 'mark', false); return false;\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
            echo "</a></p>
\t</fieldset>

\t<h1>";
            // line 220
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_USERS");
            echo "</h1>

\t<p>";
            // line 222
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_USERS_EXPLAIN");
            echo "</p>

\t<fieldset>
\t\t<legend>";
            // line 225
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_USERS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"leader\">";
            // line 227
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_GROUP_LEADER");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input name=\"leader\" type=\"radio\" class=\"radio\" value=\"1\" /> ";
            // line 228
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t<label><input name=\"leader\" type=\"radio\" class=\"radio\" id=\"leader\" value=\"0\" checked=\"checked\" /> ";
            // line 229
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"default\">";
            // line 232
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_GROUP_DEFAULT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_GROUP_DEFAULT_EXPLAIN");
            echo "</span></dt>
\t\t<dd><label><input name=\"default\" type=\"radio\" class=\"radio\" value=\"1\" /> ";
            // line 233
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t<label><input name=\"default\" type=\"radio\" class=\"radio\" id=\"default\" value=\"0\" checked=\"checked\" /> ";
            // line 234
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"usernames\">";
            // line 237
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAMES_EXPLAIN");
            echo "</span></dt>
\t\t<dd><textarea id=\"usernames\" name=\"usernames\" cols=\"40\" rows=\"5\"></textarea></dd>
\t\t<dd>";
            // line 239
            echo "[ <a href=\"";
            echo ($context["U_FIND_USERNAME"] ?? null);
            echo "\" onclick=\"find_username(this.href); return false;\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
            echo "</a> ]";
            echo "</dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input class=\"button2\" type=\"submit\" name=\"addusers\" value=\"";
            // line 243
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t</p>
\t";
            // line 245
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 250
            echo "
\t<h1>";
            // line 251
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_GROUPS_MANAGE");
            echo "</h1>

\t<p>";
            // line 253
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_GROUPS_MANAGE_EXPLAIN");
            echo "</p>

\t";
            // line 255
            if (($context["S_ERROR"] ?? null)) {
                // line 256
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 257
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 258
                echo ($context["ERROR_MSG"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 261
            echo "
\t<h1>";
            // line 262
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_DEF_GROUPS");
            echo "</h1>

\t<p>";
            // line 264
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_DEF_GROUPS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_groups\" method=\"post\" action=\"";
            // line 266
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t";
            // line 268
            // line 269
            echo "\t<table class=\"table1\">
\t\t<col class=\"col1\" /><col class=\"col1\" /><col class=\"col1\" /><col class=\"col2\" /><col class=\"col2\" /><col class=\"col2\" />
\t<thead>
\t<tr>
\t\t<th style=\"width: 50%\">";
            // line 273
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP");
            echo "</th>
\t\t<th>";
            // line 274
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_MEMBERS");
            echo "</th>
\t\t<th>";
            // line 275
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PENDING_MEMBERS");
            echo "</th>
\t\t<th colspan=\"2\">";
            // line 276
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
            echo "</th>
\t\t<th>";
            // line 277
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTION");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "groups", []));
            foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
                // line 282
                echo "\t\t";
                if ($this->getAttribute($context["groups"], "S_SPECIAL", [])) {
                    // line 283
                    echo "\t\t";
                    if ($this->getAttribute($context["groups"], "S_FIRST_ROW", [])) {
                        // line 284
                        echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"6\" class=\"row3\">";
                        // line 285
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_GROUPS_CREATED");
                        echo "</td>
\t\t\t</tr>
\t\t";
                    }
                    // line 288
                    echo "\t</tbody>
\t</table>
\t";
                    // line 290
                    // line 291
                    echo "
\t<fieldset class=\"quick\">
\t\t";
                    // line 293
                    if (($context["S_GROUP_ADD"] ?? null)) {
                        // line 294
                        echo "\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CREATE_GROUP");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <input type=\"text\" name=\"group_name\" value=\"\" /> <input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                        echo "\" />
\t\t\t<input type=\"hidden\" name=\"add\" value=\"1\" />
\t\t";
                    }
                    // line 297
                    echo "\t\t";
                    echo ($context["S_FORM_TOKEN"] ?? null);
                    echo "
\t</fieldset>
\t</form>

\t<h1>";
                    // line 301
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SPECIAL_GROUPS");
                    echo "</h1>

\t<p>";
                    // line 303
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SPECIAL_GROUPS_EXPLAIN");
                    echo "</p>

\t<table class=\"table1\">
\t\t<col class=\"col1\" /><col class=\"col1\" /><col class=\"col1\" /><col class=\"col2\" /><col class=\"col2\" />
\t<thead>
\t<tr>
\t\t<th style=\"width: 50%\">";
                    // line 309
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP");
                    echo "</th>
\t\t<th>";
                    // line 310
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_MEMBERS");
                    echo "</th>
\t\t<th>";
                    // line 311
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PENDING_MEMBERS");
                    echo "</th>
\t\t<th colspan=\"2\">";
                    // line 312
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
                    echo "</th>
\t\t<th>";
                    // line 313
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTION");
                    echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t\t";
                } else {
                    // line 318
                    echo "\t\t<tr>
\t\t\t<td><strong";
                    // line 319
                    if ($this->getAttribute($context["groups"], "GROUP_COLOR", [])) {
                        echo " style=\"color: #";
                        echo $this->getAttribute($context["groups"], "GROUP_COLOR", []);
                        echo "\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["groups"], "GROUP_NAME", []);
                    echo "</strong></td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 320
                    echo $this->getAttribute($context["groups"], "TOTAL_MEMBERS", []);
                    echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 321
                    echo $this->getAttribute($context["groups"], "PENDING_MEMBERS", []);
                    echo "</td>
\t\t\t<td style=\"text-align: center;\"><a href=\"";
                    // line 322
                    echo $this->getAttribute($context["groups"], "U_EDIT", []);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SETTINGS");
                    echo "</a></td>
\t\t\t<td style=\"text-align: center;\"><a href=\"";
                    // line 323
                    echo $this->getAttribute($context["groups"], "U_LIST", []);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERS");
                    echo "</a></td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 324
                    if (( !$this->getAttribute($context["groups"], "S_GROUP_SPECIAL", []) && $this->getAttribute($context["groups"], "U_DELETE", []))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["groups"], "U_DELETE", []);
                        echo "\" data-ajax=\"row_delete\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                        echo "</a>";
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                    }
                    echo "</td>
\t\t</tr>
\t\t";
                }
                // line 327
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 328
            echo "\t</tbody>
\t</table>

";
        }
        // line 332
        echo "
";
        // line 333
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_groups.html", 333)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_groups.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1065 => 333,  1062 => 332,  1056 => 328,  1050 => 327,  1036 => 324,  1030 => 323,  1024 => 322,  1020 => 321,  1016 => 320,  1006 => 319,  1003 => 318,  995 => 313,  991 => 312,  987 => 311,  983 => 310,  979 => 309,  970 => 303,  965 => 301,  957 => 297,  947 => 294,  945 => 293,  941 => 291,  940 => 290,  936 => 288,  930 => 285,  927 => 284,  924 => 283,  921 => 282,  917 => 281,  910 => 277,  906 => 276,  902 => 275,  898 => 274,  894 => 273,  888 => 269,  887 => 268,  882 => 266,  877 => 264,  872 => 262,  869 => 261,  863 => 258,  859 => 257,  856 => 256,  854 => 255,  849 => 253,  844 => 251,  841 => 250,  833 => 245,  828 => 243,  817 => 239,  809 => 237,  803 => 234,  799 => 233,  792 => 232,  786 => 229,  782 => 228,  777 => 227,  772 => 225,  766 => 222,  761 => 220,  753 => 217,  749 => 216,  743 => 215,  738 => 212,  735 => 211,  722 => 210,  720 => 209,  715 => 206,  706 => 203,  703 => 202,  698 => 201,  692 => 198,  688 => 197,  684 => 196,  676 => 195,  658 => 194,  655 => 193,  649 => 190,  646 => 189,  643 => 188,  638 => 187,  633 => 185,  630 => 184,  621 => 181,  618 => 180,  610 => 177,  606 => 176,  602 => 175,  594 => 174,  576 => 173,  573 => 172,  568 => 171,  563 => 169,  555 => 164,  551 => 163,  547 => 162,  543 => 161,  539 => 160,  528 => 154,  522 => 151,  517 => 149,  510 => 147,  501 => 145,  498 => 144,  496 => 143,  489 => 139,  485 => 138,  481 => 137,  477 => 136,  471 => 132,  462 => 129,  458 => 128,  453 => 127,  449 => 126,  444 => 123,  427 => 121,  423 => 120,  417 => 118,  411 => 115,  407 => 114,  400 => 113,  395 => 111,  387 => 106,  382 => 105,  374 => 100,  366 => 99,  362 => 98,  354 => 96,  348 => 93,  341 => 92,  335 => 89,  328 => 88,  323 => 86,  318 => 83,  317 => 82,  312 => 80,  305 => 79,  299 => 76,  294 => 75,  288 => 72,  283 => 71,  277 => 68,  270 => 67,  267 => 66,  261 => 63,  254 => 62,  251 => 61,  248 => 60,  247 => 59,  243 => 58,  238 => 55,  230 => 52,  223 => 51,  220 => 50,  218 => 49,  215 => 48,  209 => 46,  198 => 42,  190 => 41,  182 => 40,  174 => 39,  166 => 37,  163 => 36,  161 => 35,  152 => 33,  144 => 32,  136 => 31,  132 => 30,  127 => 29,  109 => 26,  100 => 25,  95 => 23,  89 => 20,  86 => 19,  80 => 16,  76 => 15,  73 => 14,  71 => 13,  66 => 11,  61 => 9,  52 => 7,  49 => 6,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_groups.html", "");
    }
}
