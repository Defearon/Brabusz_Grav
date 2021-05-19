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

/* partials/navigation.html.twig */
class __TwigTemplate_117051d39174dfe6d35d5d73aab36f641e72d4b0a06ac9696bf327df778934d4 extends \Twig\Template
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
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/navigation.html.twig", 1)->unwrap();
        // line 2
        echo "

<div class=\"inner\">
<!--
<div class = \"lng-slct\">
 ";
        // line 7
        $this->loadTemplate("partials/language-selector.html.twig", "partials/navigation.html.twig", 7)->display($context);
        // line 8
        echo "</div>-->
  <div class=\"navbar-logo\">
    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\"><img alt=\"Logo\" width=\"400px\" height=\"100px\" src=\"";
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/img/logo.svg\"></a>
  </div>


  <ul class=\"nav navbar-menu \">
      ";
        // line 15
        echo $context["macros"]->getnav_loop(($context["pages"] ?? null));
        echo "
  </ul>

  <div id=\"mobNav\" class=\"navbar-mobile overlay\">
  <a id=\"nav-mobile-close\" href=\"javascript:void(0)\" class=\"closebtn\">&times;</a>
    <div class=\"overlay-content\">
      ";
        // line 21
        echo $context["macros"]->getnav_loop(($context["pages"] ?? null));
        echo "
    </div>
  </div>

  <span id=\"nav-mobile-open\" style=\"font-size:30px;cursor:pointer\">&#9776;</span>

  <div class=\"navbar-button each\">
    <a href=\"/kapcsolat\" class=\"ajanlat \"><span>Kérjen ajánlatot!</span></a>
  </div>

</div>

<!--
";
        // line 51
        echo "
<div class=\"inner\">

<div class=\"navbar-logo\">
  <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\"><img alt=\"Logo\" width=\"150px\" height=\"75px\" src=\"";
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/img/logo.svg\"></a>
</div>

<ul class=\"nav sf-menu navbar-menu\">
    ";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "photographer", []), "dropdown", []), "enabled", [])) {
            // line 60
            echo "        ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
        ";
        } else {
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 63
                echo "            ";
                if ($this->getAttribute($context["page"], "visible", [])) {
                    // line 64
                    echo "                ";
                    $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                    // line 65
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
                    echo "\">
                        <a href=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                    echo "\">
                            ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                    echo "
                        </a>
                    </li>
                ";
                }
                // line 71
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "        ";
        }
        // line 73
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 74
            echo "            <li>
                <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "link", []), "html", null, true);
            echo "\">
                    ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "text", []), "html", null, true);
            echo "
                </a>
                ";
            // line 78
            if ($this->getAttribute($context["mitem"], "submenu", [])) {
                // line 79
                echo "                    <ul>
                        ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mitem"], "submenu", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["sub1"]) {
                    // line 81
                    echo "                            <li>";
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        echo "<img src=\"";
                        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
                        echo "/img/arrowup.png\" alt=\"\">";
                    }
                    // line 82
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sub1"], "link", []), "html", null, true);
                    echo "\">
                                    ";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sub1"], "text", []), "html", null, true);
                    echo "
                                </a>
                                ";
                    // line 85
                    if ($this->getAttribute($context["sub1"], "submenu", [])) {
                        // line 86
                        echo "                                    <ul>
                                        ";
                        // line 87
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sub1"], "submenu", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["sub2"]) {
                            // line 88
                            echo "                                            <li>
                                                <a href=\"";
                            // line 89
                            echo twig_escape_filter($this->env, $this->getAttribute($context["sub2"], "link", []), "html", null, true);
                            echo "\">
                                                    ";
                            // line 90
                            echo twig_escape_filter($this->env, $this->getAttribute($context["sub2"], "text", []), "html", null, true);
                            echo "
                                                </a>
                                            </li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 94
                        echo "                                    </ul>
                                ";
                    }
                    // line 96
                    echo "                            </li>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "                    </ul>
                ";
            }
            // line 100
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "    </ul>

    <div class=\"navbar-button\">
      <a href=\"/kapcsolat\" class=\"btn btn-primary btn-sm\">Ajánlatkérés</a>

    </div>
     ";
        // line 108
        $this->loadTemplate("partials/language-selector.html.twig", "partials/navigation.html.twig", 108)->display($context);
        // line 109
        echo "

</div>
-->
";
    }

    // line 34
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 35
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 36
                echo "        ";
                if ($this->getAttribute($context["p"], "visible", [])) {
                    // line 37
                    echo "            ";
                    $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                    // line 38
                    echo "            <li class=\"";
                    echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
                    echo "\">
                <a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                    echo "\">
                    ";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                    echo "
                </a>
                ";
                    // line 42
                    if (($this->getAttribute($this->getAttribute($context["p"], "children", []), "count", []) > 0)) {
                        // line 43
                        echo "                    <ul>
                        ";
                        // line 44
                        echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                        echo "
                    </ul>
                ";
                    }
                    // line 47
                    echo "            </li>
        ";
                }
                // line 49
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 49,  317 => 47,  311 => 44,  308 => 43,  306 => 42,  301 => 40,  297 => 39,  292 => 38,  289 => 37,  286 => 36,  281 => 35,  269 => 34,  261 => 109,  259 => 108,  251 => 102,  244 => 100,  240 => 98,  225 => 96,  221 => 94,  211 => 90,  207 => 89,  204 => 88,  200 => 87,  197 => 86,  195 => 85,  190 => 83,  185 => 82,  178 => 81,  161 => 80,  158 => 79,  156 => 78,  151 => 76,  147 => 75,  144 => 74,  139 => 73,  136 => 72,  130 => 71,  123 => 67,  119 => 66,  114 => 65,  111 => 64,  108 => 63,  103 => 62,  97 => 60,  95 => 59,  86 => 55,  80 => 51,  64 => 21,  55 => 15,  45 => 10,  41 => 8,  39 => 7,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macros/macros.html.twig' as macros %}


<div class=\"inner\">
<!--
<div class = \"lng-slct\">
 {% include 'partials/language-selector.html.twig' %}
</div>-->
  <div class=\"navbar-logo\">
    <a href=\"{{ base_url_absolute }}\"><img alt=\"Logo\" width=\"400px\" height=\"100px\" src=\"{{ theme_url }}/img/logo.svg\"></a>
  </div>


  <ul class=\"nav navbar-menu \">
      {{ macros.nav_loop(pages) }}
  </ul>

  <div id=\"mobNav\" class=\"navbar-mobile overlay\">
  <a id=\"nav-mobile-close\" href=\"javascript:void(0)\" class=\"closebtn\">&times;</a>
    <div class=\"overlay-content\">
      {{ macros.nav_loop(pages) }}
    </div>
  </div>

  <span id=\"nav-mobile-open\" style=\"font-size:30px;cursor:pointer\">&#9776;</span>

  <div class=\"navbar-button each\">
    <a href=\"/kapcsolat\" class=\"ajanlat \"><span>Kérjen ajánlatot!</span></a>
  </div>

</div>

<!--
{% macro loop(page) %}
    {% for p in page.children %}
        {% if p.visible %}
            {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ p.url }}\">
                    {{ p.menu }}
                </a>
                {% if p.children.count > 0 %}
                    <ul>
                        {{ _self.loop(p) }}
                    </ul>
                {% endif %}
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<div class=\"inner\">

<div class=\"navbar-logo\">
  <a href=\"{{ base_url_absolute }}\"><img alt=\"Logo\" width=\"150px\" height=\"75px\" src=\"{{ theme_url }}/img/logo.svg\"></a>
</div>

<ul class=\"nav sf-menu navbar-menu\">
    {% if config.themes.photographer.dropdown.enabled %}
        {{ _self.loop(pages) }}
        {% else %}
        {% for page in pages.children %}
            {% if page.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                    <li class=\"{{ current_page }}\">
                        <a href=\"{{ page.url }}\">
                            {{ page.menu }}
                        </a>
                    </li>
                {% endif %}
            {% endfor %}
        {% endif %}
        {% for mitem in site.menu %}
            <li>
                <a href=\"{{ mitem.link }}\">
                    {{ mitem.text }}
                </a>
                {% if mitem.submenu %}
                    <ul>
                        {% for sub1 in mitem.submenu %}
                            <li>{% if loop.first %}<img src=\"{{ theme_url }}/img/arrowup.png\" alt=\"\">{% endif %}
                                <a href=\"{{ sub1.link }}\">
                                    {{ sub1.text }}
                                </a>
                                {% if sub1.submenu %}
                                    <ul>
                                        {% for sub2 in sub1.submenu %}
                                            <li>
                                                <a href=\"{{ sub2.link }}\">
                                                    {{ sub2.text }}
                                                </a>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                {% endif %}
                            </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </li>
        {% endfor %}
    </ul>

    <div class=\"navbar-button\">
      <a href=\"/kapcsolat\" class=\"btn btn-primary btn-sm\">Ajánlatkérés</a>

    </div>
     {% include 'partials/language-selector.html.twig' %}


</div>
-->
", "partials/navigation.html.twig", "D:\\Work\\git\\Brabusz_Grav\\user\\themes\\mytheme\\templates\\partials\\navigation.html.twig");
    }
}
