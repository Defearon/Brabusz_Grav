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

/* partials/header.html.twig */
class __TwigTemplate_e229a64c115d788f53b81dd254c0ba3a633c6602573c2bb1ccbf02418ca1265e extends \Twig\Template
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
        echo "<header id=\"header\">
      <div class=\"container\">
        <div class=\"animate__wobble\">
          <h1 class=\"navbar-brand navbar-brand_\"><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\"><img alt=\"Logo\" width=\"300px\" height=\"75px\" src=\"";
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/img/logo.svg\"></a></h1>
        </div>
      </div>
      <div class=\"menuheader\">
          <div class=\"container\">
            <nav class=\"navbar navbar-default navbar-static-top tm_navbar\" role=\"navigation\">
                ";
        // line 10
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 10)->display($context);
        // line 11
        echo "            </nav>

          </div>

          ";
        // line 15
        $this->loadTemplate("partials/language-selector.html.twig", "partials/header.html.twig", 15)->display($context);
        // line 16
        echo "  
          <br/>
      </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  54 => 15,  48 => 11,  46 => 10,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\">
      <div class=\"container\">
        <div class=\"animate__wobble\">
          <h1 class=\"navbar-brand navbar-brand_\"><a href=\"{{ base_url_absolute }}\"><img alt=\"Logo\" width=\"300px\" height=\"75px\" src=\"{{ theme_url }}/img/logo.svg\"></a></h1>
        </div>
      </div>
      <div class=\"menuheader\">
          <div class=\"container\">
            <nav class=\"navbar navbar-default navbar-static-top tm_navbar\" role=\"navigation\">
                {% include 'partials/navigation.html.twig' %}
            </nav>

          </div>

          {% include 'partials/language-selector.html.twig' %}
  
          <br/>
      </div>
</header>
", "partials/header.html.twig", "D:\\Work\\git\\Brabusz_Grav\\user\\themes\\mytheme\\templates\\partials\\header.html.twig");
    }
}
