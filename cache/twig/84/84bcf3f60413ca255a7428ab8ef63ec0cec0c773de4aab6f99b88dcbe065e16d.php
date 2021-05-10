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

/* partials/footer.html.twig */
class __TwigTemplate_7c19cfe06f19f9e7946e7c07f6c56bd77a54f3798274663622bf5a464a4cbe0d extends \Twig\Template
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
        echo "
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-4 footercol\">
                <ul class=\"social_icons clearfix\">
                     ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "                         <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
            echo "/img/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
            echo "\" alt=\"\"></a></li>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "                </ul>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 footerlogo footercol\">
                <a class=\"smalllogo2 logo\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/img/logo.svg\" alt=\"\"></a>
                <h2 align>
                FACEBOOK OLDAL HELYE, VAGY BÁRMI // PLACE SOMETHING HERE... (Márk)
                </h2>
            </div>
        </div>



    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  55 => 10,  42 => 8,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-4 footercol\">
                <ul class=\"social_icons clearfix\">
                     {% for item  in site.social %}
                         <li><a href=\"{{ item.url }}\"><img src=\"{{ theme_url }}/img/{{ item.icon }}\" alt=\"\"></a></li>
                     {% endfor %}
                </ul>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-4 footerlogo footercol\">
                <a class=\"smalllogo2 logo\" href=\"{{ base_url_absolute }}\"><img src=\"{{ theme_url }}/img/logo.svg\" alt=\"\"></a>
                <h2 align>
                FACEBOOK OLDAL HELYE, VAGY BÁRMI // PLACE SOMETHING HERE... (Márk)
                </h2>
            </div>
        </div>



    </div>
</footer>
", "partials/footer.html.twig", "D:\\Work\\git\\Brabusz_Grav\\user\\themes\\mytheme\\templates\\partials\\footer.html.twig");
    }
}
