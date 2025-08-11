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

/* top_modern.html */
class __TwigTemplate_555dd97a9f90622cc664c91d27ded27c3c624460fbbe1af6dad99dc57cf50233 extends \Twig\Template
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
        echo "<div class=\"top_modern\">
\t<div class=\"inner\">
 
            <h5 class=\"modern-sitedescription\">";
        // line 4
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "</h5>
            <p class=\"skiplink\"><a href=\"#start_here\">";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SKIP");
        echo "</a></p>
   <a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>
            ";
        // line 7
        // line 8
        echo "         <div class=\"search\">
         ";
        // line 9
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 10
            echo "         <div id=\"search-box\" class=\"search-box search-header\" role=\"search\">
            <form action=\"";
            // line 11
            echo ($context["U_SEARCH"] ?? null);
            echo "\" method=\"get\" id=\"search\">
            <fieldset>
               <input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 13
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
            echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_MINI");
            echo "\" />
               <button class=\"button button-search\" type=\"submit\" title=\"";
            // line 14
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\">
                  <i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
               </button>
               <a href=\"";
            // line 17
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button button-search-end\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\">
                  <i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 18
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "</span>
               </a>
               ";
            // line 20
            echo ($context["S_SEARCH_HIDDEN_FIELDS"] ?? null);
            echo "
            </fieldset>
            </form>
         </div>
         ";
        }
        // line 25
        echo "         </div>
         ";
        // line 26
        // line 27
        echo "
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "top_modern.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 27,  97 => 26,  94 => 25,  86 => 20,  81 => 18,  75 => 17,  70 => 15,  66 => 14,  58 => 13,  53 => 11,  50 => 10,  48 => 9,  45 => 8,  44 => 7,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "top_modern.html", "");
    }
}
