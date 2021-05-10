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

/* gallery.html.twig */
class __TwigTemplate_253e1cb81756f3e151426e7520f317ab17cbfc1ce08801a0f39bb9a5e9ce2d8b extends \Twig\Template
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
        // line 3
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/touchTouch.css"], "method");
        // line 4
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/touchTouch.jquery.js"], "method");
        // line 5
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.isotope.min.js"], "method");
        // line 6
        $context["script"] = ('' === $tmp = "\$(window).load(function() {
    var \$container = \$('#container');
    //Run to initialise column sizes
    updateSize();

    //Load masonry when images all loaded
    \$container.imagesLoaded( function(){

        \$container.isotope({
            // options
            itemSelector : '.element',
            layoutMode : 'masonry',
            transformsEnabled: true,
            columnWidth: function( containerWidth ) {
                containerWidth = \$browserWidth;
                return Math.floor(containerWidth / \$cols);
            }
        });
    });

        // update columnWidth on window resize
        \$(window).smartresize(function(){
            updateSize();
            \$container.isotope( 'reLayout' );
        });

    //Set item size
    function updateSize() {
        \$browserWidth = \$container.width();
        \$cols = 4;

        if (\$browserWidth >= 1170) {
            \$cols = 4;
        }
        else if (\$browserWidth >= 800 && \$browserWidth < 1170) {
            \$cols = 3;
        }
        else if (\$browserWidth >= 480 && \$browserWidth < 800) {
            \$cols = 2;
        }
        else if (\$browserWidth >= 320 && \$browserWidth < 480) {
            \$cols = 1;
        }
        else if (\$browserWidth < 401) {
            \$cols = 1;
        }
        //console.log(\"Browser width is:\" + \$browserWidth);
        //console.log(\"Cols is:\" + \$cols);

        // \$gutterTotal = \$cols * 20;
        \$browserWidth = \$browserWidth; // - \$gutterTotal;
        \$itemWidth = \$browserWidth / \$cols;
        \$itemWidth = Math.floor(\$itemWidth);

        \$(\".element\").each(function(index){
            \$(this).css({\"width\":\$itemWidth+\"px\"});
        });



        var \$optionSets = \$('#options .option-set'),
        \$optionLinks = \$optionSets.find('a');

        \$optionLinks.click(function(){
            var \$this = \$(this);
        // don't proceed if already selected
        if ( \$this.hasClass('selected') ) {
          return false;
      }
      var \$optionSet = \$this.parents('.option-set');
      \$optionSet.find('.selected').removeClass('selected');
      \$this.addClass('selected');

        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
        key = \$optionSet.attr('data-option-key'),
        value = \$this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( \$this, options )
      } else {
          // otherwise, apply new options
          \$container.isotope( options );
      }

      return false;
  });

    };

        // Initialize the gallery
        \$('.thumb').touchTouch();

    });
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => ($context["script"] ?? null)], "method");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "gallery.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 107
    public function block_content($context, array $blocks = [])
    {
        // line 108
        echo "    <div id=\"content\">
        <div class=\"row_6\">
            <div class=\"container\">
                <h2 class=\"pad_bot3\">";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</h2>
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <div id=\"options\" class=\"clearfix\">
                            <ul id=\"filters\" class=\"pagination option-set clearfix\" data-option-key=\"filter\">
                                <li><a href=\"#filter\" data-option-value=\"*\" class=\"selected\">";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "showall", []), "html", null, true);
        echo "</a></li>
                                ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "filters", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 118
            echo "                                    <li><a href=\"#filter\" data-option-value=\".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                            </ul>
                        </div>
                        <div class=\"containerExtra\">
                            <div id=\"container\" class=\"clearfix\">
                                ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "gallery", []));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 125
            echo "                                    <div class=\"element transition ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "filter", []), "html", null, true);
            echo "\" data-category=\"transition\">
                                        <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["element"], "image", []), [], "array"), "url", []), "html", null, true);
            echo "\" class=\"thumb\"><figure class=\"img-polaroid\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["element"], "image", []), [], "array"), "resize", [0 => 270, 1 => 190], "method"), "html", [], "method");
            echo "</figure></a><span class=\"description\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "description", []), "html", null, true);
            echo "</span>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                            </div>
                            ";
        // line 130
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 130,  210 => 129,  197 => 126,  192 => 125,  188 => 124,  182 => 120,  171 => 118,  167 => 117,  163 => 116,  155 => 111,  150 => 108,  147 => 107,  142 => 1,  140 => 105,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  29 => 1,);
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

{% do assets.addCss('theme://css/touchTouch.css') %}
{% do assets.addJs('theme://js/touchTouch.jquery.js') %}
{% do assets.addJs('theme://js/jquery.isotope.min.js') %}
{% set script %}
\$(window).load(function() {
    var \$container = \$('#container');
    //Run to initialise column sizes
    updateSize();

    //Load masonry when images all loaded
    \$container.imagesLoaded( function(){

        \$container.isotope({
            // options
            itemSelector : '.element',
            layoutMode : 'masonry',
            transformsEnabled: true,
            columnWidth: function( containerWidth ) {
                containerWidth = \$browserWidth;
                return Math.floor(containerWidth / \$cols);
            }
        });
    });

        // update columnWidth on window resize
        \$(window).smartresize(function(){
            updateSize();
            \$container.isotope( 'reLayout' );
        });

    //Set item size
    function updateSize() {
        \$browserWidth = \$container.width();
        \$cols = 4;

        if (\$browserWidth >= 1170) {
            \$cols = 4;
        }
        else if (\$browserWidth >= 800 && \$browserWidth < 1170) {
            \$cols = 3;
        }
        else if (\$browserWidth >= 480 && \$browserWidth < 800) {
            \$cols = 2;
        }
        else if (\$browserWidth >= 320 && \$browserWidth < 480) {
            \$cols = 1;
        }
        else if (\$browserWidth < 401) {
            \$cols = 1;
        }
        //console.log(\"Browser width is:\" + \$browserWidth);
        //console.log(\"Cols is:\" + \$cols);

        // \$gutterTotal = \$cols * 20;
        \$browserWidth = \$browserWidth; // - \$gutterTotal;
        \$itemWidth = \$browserWidth / \$cols;
        \$itemWidth = Math.floor(\$itemWidth);

        \$(\".element\").each(function(index){
            \$(this).css({\"width\":\$itemWidth+\"px\"});
        });



        var \$optionSets = \$('#options .option-set'),
        \$optionLinks = \$optionSets.find('a');

        \$optionLinks.click(function(){
            var \$this = \$(this);
        // don't proceed if already selected
        if ( \$this.hasClass('selected') ) {
          return false;
      }
      var \$optionSet = \$this.parents('.option-set');
      \$optionSet.find('.selected').removeClass('selected');
      \$this.addClass('selected');

        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
        key = \$optionSet.attr('data-option-key'),
        value = \$this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( \$this, options )
      } else {
          // otherwise, apply new options
          \$container.isotope( options );
      }

      return false;
  });

    };

        // Initialize the gallery
        \$('.thumb').touchTouch();

    });
{% endset %}
{% do assets.addInlineJs(script) %}

{% block content %}
    <div id=\"content\">
        <div class=\"row_6\">
            <div class=\"container\">
                <h2 class=\"pad_bot3\">{{ page.header.title }}</h2>
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <div id=\"options\" class=\"clearfix\">
                            <ul id=\"filters\" class=\"pagination option-set clearfix\" data-option-key=\"filter\">
                                <li><a href=\"#filter\" data-option-value=\"*\" class=\"selected\">{{ page.header.showall }}</a></li>
                                {% for item in page.header.filters %}
                                    <li><a href=\"#filter\" data-option-value=\".{{ item.name }}\">{{ item.name }}</a></li>
                                {% endfor %}
                            </ul>
                        </div>
                        <div class=\"containerExtra\">
                            <div id=\"container\" class=\"clearfix\">
                                {% for element in page.header.gallery  %}
                                    <div class=\"element transition {{ element.filter }}\" data-category=\"transition\">
                                        <a href=\"{{ page.media[element.image].url }}\" class=\"thumb\"><figure class=\"img-polaroid\">{{ page.media[element.image].resize(270, 190).html()|raw }}</figure></a><span class=\"description\">{{ element.description }}</span>
                                    </div>
                                {% endfor %}
                            </div>
                            {{ page.content|raw }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "gallery.html.twig", "D:\\Work\\git\\Brabusz_Grav\\user\\themes\\mytheme\\templates\\gallery.html.twig");
    }
}
