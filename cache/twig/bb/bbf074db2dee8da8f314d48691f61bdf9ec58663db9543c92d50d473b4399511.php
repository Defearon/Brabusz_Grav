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

/* modular/footer.html.twig */
class __TwigTemplate_bee4645b4f7d835f0adfede26561aea6c7e40e66e501682a7296f4a0c5a9cd17 extends \Twig\Template
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
        echo "<div class=\"row_4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-4 chef row4_col ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "about", []), "classes", []), "html", null, true);
        echo "\">
                <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "about", []), "title", []), "html", null, true);
        echo "</h2>
                <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "about", []), "readme_url", []), "html", null, true);
        echo "\" style=\"text-decoration: none;\">
                  <figure>";
        // line 7
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "about", []), "image", []), [], "array"), "html", []);
        echo "</figure>
                </a>
                <p class=\"title3\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "about", []), "title2", []), "html", null, true);
        echo "</p>
                <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "about", []), "text", []), "html", null, true);
        echo "</p>
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "about", []), "readme_url", []), "html", null, true);
        echo "\" class=\"btn-link btn-link2\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "about", []), "readme_text", []), "html", null, true);
        echo "<span></span></a>
            </div>
            <div class=\"col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 row4_col ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services_classes", []), "html", null, true);
        echo "\">
                <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services_title", []), "html", null, true);
        echo "</h2>
                <ul class=\"list2\">
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "                        <div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "classes", []), "html", null, true);
            echo "\">
                          <li><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []), "html", null, true);
            echo "</a></li>
                        </div>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "               </ul>
           </div>
           <div class=\"col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 locations row4_col ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "locations", []), "classes", []), "html", null, true);
        echo "\">
            <h2>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "locations", []), "title", []), "html", null, true);
        echo "</h2>
            <a href=\"/\" style=\"text-decoration: none;\">
              <figure>";
        // line 26
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "locations", []), "logo", []), [], "array"), "html", []);
        echo "</figure>
            </a>
            <p class=\"title4\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "locations", []), "text", []), "html", null, true);
        echo "</p>
            <hr class=\"line1\">
            <a href=\"mailto:";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "locations", []), "email", []), "html", null, true);
        echo "\" class=\"btn-link btn-link3\"><span></span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "locations", []), "email", []), "html", null, true);
        echo "</a>
            <br/> <br/>
            <a href=\"tel.:";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "locations", []), "phone", []), "html", null, true);
        echo "\" class=\"btn-link btn-link5\"><span></span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "locations", []), "phone", []), "html", null, true);
        echo "</a>

        </div>
    </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 32,  119 => 30,  114 => 28,  109 => 26,  104 => 24,  100 => 23,  96 => 21,  85 => 18,  80 => 17,  76 => 16,  71 => 14,  67 => 13,  60 => 11,  56 => 10,  52 => 9,  47 => 7,  43 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row_4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-4 chef row4_col {{page.header.about.classes}}\">
                <h2>{{ page.header.about.title }}</h2>
                <a href=\"{{ page.header.about.readme_url }}\" style=\"text-decoration: none;\">
                  <figure>{{ page.media[page.header.about.image].html|raw }}</figure>
                </a>
                <p class=\"title3\">{{ page.header.about.title2 }}</p>
                <p>{{ page.header.about.text }}</p>
                <a href=\"{{ page.header.about.readme_url }}\" class=\"btn-link btn-link2\">{{ page.header.about.readme_text }}<span></span></a>
            </div>
            <div class=\"col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 row4_col {{page.header.services_classes}}\">
                <h2>{{ page.header.services_title }}</h2>
                <ul class=\"list2\">
                    {% for item in page.header.services %}
                        <div class=\"{{item.classes}}\">
                          <li><a href=\"{{ item.url }}\">{{ item.text }}</a></li>
                        </div>
                   {% endfor %}
               </ul>
           </div>
           <div class=\"col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 locations row4_col {{page.header.locations.classes}}\">
            <h2>{{ page.header.locations.title }}</h2>
            <a href=\"/\" style=\"text-decoration: none;\">
              <figure>{{ page.media[page.header.locations.logo].html|raw }}</figure>
            </a>
            <p class=\"title4\">{{ page.header.locations.text }}</p>
            <hr class=\"line1\">
            <a href=\"mailto:{{ page.header.locations.email }}\" class=\"btn-link btn-link3\"><span></span>{{ page.header.locations.email }}</a>
            <br/> <br/>
            <a href=\"tel.:{{ page.header.locations.phone }}\" class=\"btn-link btn-link5\"><span></span>{{ page.header.locations.phone }}</a>

        </div>
    </div>
</div>
</div>
", "modular/footer.html.twig", "D:\\Work\\git\\Brabusz_Grav\\user\\themes\\mytheme\\templates\\modular\\footer.html.twig");
    }
}
