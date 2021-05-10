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

/* partials/base.html.twig */
class __TwigTemplate_041e1fbcd2a270bde1b3320a501028b6177c64b51130aee97244edb6439440d7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 62
        echo "    </head>
    <body>
        ";
        // line 64
        $this->displayBlock('header', $context, $blocks);
        // line 67
        echo "
        ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "

        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/js/bootstrap.min.js\" type=\"text/javascript\" ></script>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/js/tm-scripts.js\" type=\"text/javascript\" ></script>

        ";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
        // line 79
        echo "
        ";
        // line 80
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "

    </body>
</html>
l
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/img/favicon.ico\" />
         ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "
        ";
        // line 44
        $this->displayBlock('assets', $context, $blocks);
        // line 48
        echo "
        <script>
        \$(window).load( function(){

         jQuery('.camera_wrap').camera();

     });
        </script>

        ";
        // line 57
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) < 9))) {
            // line 58
            echo "                 <div style='text-align:center'><a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\"><img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" /></a></div>
         ";
        }
        // line 60
        echo "
        ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 11
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bootstrap.css"], "method");
        // line 12
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css"], "method");
        // line 13
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/camera.css"], "method");
        // line 14
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"], "method");
        // line 15
        echo "                ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) < 9))) {
            // line 16
            echo "               ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/tm/css/tm_docs.css"], "method");
            // line 17
            echo "                ";
        }
        // line 18
        echo "
        ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        // line 22
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 23
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery-migrate-1.2.1.js"], "method");
        // line 24
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/superfish.js"], "method");
        // line 25
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.easing.1.3.js"], "method");
        // line 26
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.mobilemenu.js"], "method");
        // line 27
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.ui.totop.js"], "method");
        // line 28
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.touchSwipe.min.js"], "method");
        // line 29
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.equalheights.js"], "method");
        // line 30
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/camera.js"], "method");
        // line 31
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/animate-scroll.js"], "method");
        // line 32
        echo "
            ";
        // line 33
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) > 9)) || ($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) != "msie"))) {
            // line 34
            echo "                 ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.mobile.customized.min.js"], "method");
            // line 35
            echo "            ";
        }
        // line 36
        echo "
            ";
        // line 37
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) < 9))) {
            // line 38
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/assets/js/html5shiv.js"], "method");
            // line 39
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/assets/js/respond.min.js"], "method");
            // line 40
            echo "            ";
        }
        // line 41
        echo "
        ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 44
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 45
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
        // line 46
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 64
    public function block_header($context, array $blocks = [])
    {
        // line 65
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 65)->display($context);
        // line 66
        echo "        ";
    }

    // line 68
    public function block_body($context, array $blocks = [])
    {
        // line 69
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "        ";
    }

    // line 69
    public function block_content($context, array $blocks = [])
    {
    }

    // line 76
    public function block_footer($context, array $blocks = [])
    {
        // line 77
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 77)->display($context);
        // line 78
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 78,  285 => 77,  282 => 76,  277 => 69,  273 => 70,  270 => 69,  267 => 68,  263 => 66,  260 => 65,  257 => 64,  250 => 46,  245 => 45,  242 => 44,  232 => 41,  229 => 40,  226 => 39,  223 => 38,  221 => 37,  218 => 36,  215 => 35,  212 => 34,  210 => 33,  207 => 32,  204 => 31,  201 => 30,  198 => 29,  195 => 28,  192 => 27,  189 => 26,  186 => 25,  183 => 24,  180 => 23,  177 => 22,  174 => 21,  169 => 18,  166 => 17,  163 => 16,  160 => 15,  157 => 14,  154 => 13,  151 => 12,  148 => 11,  145 => 10,  140 => 60,  136 => 58,  134 => 57,  123 => 48,  121 => 44,  118 => 43,  116 => 21,  113 => 20,  111 => 10,  107 => 9,  104 => 8,  102 => 7,  94 => 6,  91 => 5,  88 => 4,  77 => 80,  74 => 79,  72 => 76,  67 => 74,  63 => 73,  59 => 71,  57 => 68,  54 => 67,  52 => 64,  48 => 62,  46 => 4,  41 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/img/favicon.ico\" />
         {% block stylesheets %}
                {% do assets.addCss('theme://css/bootstrap.css') %}
                {% do assets.addCss('theme://css/style.css') %}
                {% do assets.addCss('theme://css/camera.css') %}
                {% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css')%}
                {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}
               {% do assets.addCss('theme://assets/tm/css/tm_docs.css') %}
                {% endif %}

        {% endblock %}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://js/jquery-migrate-1.2.1.js') %}
            {% do assets.addJs('theme://js/superfish.js') %}
            {% do assets.addJs('theme://js/jquery.easing.1.3.js') %}
            {% do assets.addJs('theme://js/jquery.mobilemenu.js') %}
            {% do assets.addJs('theme://js/jquery.ui.totop.js') %}
            {% do assets.addJs('theme://js/jquery.touchSwipe.min.js') %}
            {% do assets.addJs('theme://js/jquery.equalheights.js') %}
            {% do assets.addJs('theme://js/camera.js') %}
            {% do assets.addJs('theme://js/animate-scroll.js') %}

            {% if browser.getBrowser == 'msie' and browser.getVersion > 9 or browser.getBrowser != 'msie' %}
                 {% do assets.addJs('theme://js/jquery.mobile.customized.min.js') %}
            {% endif %}

            {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}
                {% do assets.addJs('theme://assets/assets/js/html5shiv.js') %}
                {% do assets.addJs('theme://assets/assets/js/respond.min.js') %}
            {% endif %}

        {% endblock %}

        {% block assets deferred %}
            {{ assets.css()|raw }}
            {{ assets.js()|raw }}
        {% endblock %}

        <script>
        \$(window).load( function(){

         jQuery('.camera_wrap').camera();

     });
        </script>

        {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}
                 <div style='text-align:center'><a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\"><img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" /></a></div>
         {% endif %}

        {% endblock head%}
    </head>
    <body>
        {% block header %}
             {% include 'partials/header.html.twig' %}
        {% endblock %}

        {% block body %}
            {% block content %}{% endblock %}
        {% endblock %}


        <script src=\"{{ theme_url }}/js/bootstrap.min.js\" type=\"text/javascript\" ></script>
        <script src=\"{{ theme_url }}/js/tm-scripts.js\" type=\"text/javascript\" ></script>

        {% block footer %}
             {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {{ assets.js('bottom')|raw }}

    </body>
</html>
l
", "partials/base.html.twig", "D:\\Work\\git\\Brabusz_Grav\\user\\themes\\mytheme\\templates\\partials\\base.html.twig");
    }
}
