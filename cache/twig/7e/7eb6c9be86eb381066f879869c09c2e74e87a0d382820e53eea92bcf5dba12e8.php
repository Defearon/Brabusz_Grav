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

/* modular/portfolio.html.twig */
class __TwigTemplate_15fe8d6cf3c3cd2c01aacf2747421340c3529a6858ea2ac76dd2f4310f626a67 extends \Twig\Template
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
        echo "<div class=\"row_3\">
    <div class=\"container\">
        <div class=\"row\">
            <ul class=\"list3\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "                    <li class=\"col-lg-6 col-md-6 col-sm-6\">
                        <div class=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []), "html", null, true);
            echo "\">
                            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "linkurl", []), "html", null, true);
            echo "\" style=\"text-decoration: none;\">
                              <figure>";
            // line 9
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image", []), [], "array"), "html", []);
            echo "</figure>
                            </a>
                            <div class=\"info1 maxheight\">
                                <p class=\"list3title1\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title1", []), "html", null, true);
            echo "</p>
                                <p class=\"list3title2\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title2", []), "html", null, true);
            echo "</p>
                                <p class=\"list3title3\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title3", []), "html", null, true);
            echo "</p>
                                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "linkurl", []), "html", null, true);
            echo "\" class=\"btn-link btn-link1\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "linktext", []), "html", null, true);
            echo "<span></span></a>
                            </div>
                        </div>
                    </li>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                ";
        echo ($context["content"] ?? null);
        echo "
            </ul>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  51 => 9,  47 => 8,  43 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row_3\">
    <div class=\"container\">
        <div class=\"row\">
            <ul class=\"list3\">
                {% for item in page.header.portfolio %}
                    <li class=\"col-lg-6 col-md-6 col-sm-6\">
                        <div class=\"{{ item.class }}\">
                            <a href=\"{{ item.linkurl }}\" style=\"text-decoration: none;\">
                              <figure>{{ page.media[item.image].html|raw }}</figure>
                            </a>
                            <div class=\"info1 maxheight\">
                                <p class=\"list3title1\">{{ item.title1 }}</p>
                                <p class=\"list3title2\">{{ item.title2 }}</p>
                                <p class=\"list3title3\">{{ item.title3 }}</p>
                                <a href=\"{{ item.linkurl }}\" class=\"btn-link btn-link1\">{{ item.linktext }}<span></span></a>
                            </div>
                        </div>
                    </li>

                {% endfor %}
                {{ content|raw }}
            </ul>
        </div>
    </div>
</div>
", "modular/portfolio.html.twig", "D:\\Work\\git\\Brabusz_Grav\\user\\themes\\mytheme\\templates\\modular\\portfolio.html.twig");
    }
}
