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

/* about.html.twig */
class __TwigTemplate_33613d0816e43efcfae5dcb51f6a5de667f6ef63b88b6ec8cb50a62a17d999c3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<div id=\"content\">
    <div class=\"row_5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7 col-md-7 col-sm-7 reserve_table\">
                    ";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                </div>

                <div class=\"col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-sm-4\">
                    <h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "work", []), "title", []), "html", null, true);
        echo "</h2>
                    <hr class=\"line2\">
                    <p class=\"title5\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "work", []), "description", []), "html", null, true);
        echo ".</p>
                    <h2 class=\"pad_bot1\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hiretitle", []), "html", null, true);
        echo "</h2>
                    ";
        // line 17
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "enabled", [])) {
            // line 18
            echo "                      ";
            $this->loadTemplate("forms/form.html.twig", "about.html.twig", 18)->display(twig_array_merge($context, ["form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), ["contact-form"])]));
            // line 19
            echo "                    ";
        }
        // line 20
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  74 => 19,  71 => 18,  69 => 17,  65 => 16,  61 => 15,  56 => 13,  49 => 9,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<div id=\"content\">
    <div class=\"row_5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7 col-md-7 col-sm-7 reserve_table\">
                    {{ page.content|raw }}
                </div>

                <div class=\"col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-sm-4\">
                    <h2>{{ page.header.work.title }}</h2>
                    <hr class=\"line2\">
                    <p class=\"title5\">{{ page.header.work.description }}.</p>
                    <h2 class=\"pad_bot1\">{{ page.header.hiretitle }}</h2>
                    {% if config.plugins.form.enabled %}
                      {% include \"forms/form.html.twig\" with { form: forms('contact-form') } %}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "about.html.twig", "D:\\Work\\git\\Brabusz_Grav\\user\\themes\\mytheme\\templates\\about.html.twig");
    }
}
