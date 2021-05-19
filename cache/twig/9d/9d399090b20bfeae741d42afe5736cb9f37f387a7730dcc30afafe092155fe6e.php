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

/* modular/welcome.html.twig */
class __TwigTemplate_38d346bd6a371ee1ecb99c99a3e7338276c1bdf0fff82b8a21a8d4fe1df59bfa extends \Twig\Template
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
        echo "<div class=\"row_1\">
    <div class=\"container\">
        <p class=\"title1\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</p>
        <p class=\"title2\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", []), "html", null, true);
        echo "</p>
        ";
        // line 5
        echo ($context["content"] ?? null);
        echo "
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 7
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "url", []), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "class", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "text", []), "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  50 => 7,  46 => 6,  42 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row_1\">
    <div class=\"container\">
        <p class=\"title1\">{{ page.header.title }}</p>
        <p class=\"title2\">{{ page.header.description }}</p>
        {{ content|raw }}
        {% for button in page.header.buttons %}
            <a href=\"{{ button.url }}\" class=\"{{ button.class }}\">{{ button.text }}</a>
        {% endfor %}
    </div>
</div>
", "modular/welcome.html.twig", "D:\\Work\\git\\Brabusz_Grav\\user\\themes\\photographer\\templates\\modular\\welcome.html.twig");
    }
}
