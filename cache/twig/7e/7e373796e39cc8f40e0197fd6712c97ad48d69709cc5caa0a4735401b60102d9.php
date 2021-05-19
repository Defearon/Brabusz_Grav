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

/* @Page:D:/Work/git/Brabusz_Grav/user/pages/01.home/_slider */
class __TwigTemplate_cf0b777ff6bf277abdaa24a749348fad55347d51fbf7d38903ba28d2f3f9287e extends \Twig\Template
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
  <div class=\"owl-carousel owl-theme\" id=\"owl-12d226150e\">
    <img alt=\"\" src=\"/images/9/b/a/4/9/9ba49eb35a747f3ff3c193887d506c012fbe8b47-picture1.jpg\" />
<img alt=\"\" src=\"/images/5/f/a/5/6/5fa567063e4fe32233077f3c1299909ae888ea78-picture2.jpg\" />

</div>


<div class=\"owl-carousel owl-theme\" id=\"owl-6fdb88ba16\">
    
<div style=\"background: url(";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture1.jpg", [], "array"), "url", []), "html", null, true);
        echo ") 50% 50%;background-size: cover;\">
  <!-- setting div element height -->
  <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture1.jpg", [], "array"), "url", []), "html", null, true);
        echo "\" style=\"visibility: hidden;\" />
  <h2>This is panel 1</h2>
  <p>foo</p>
</div>
<div style=\"background: url(";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture2.jpg", [], "array"), "url", []), "html", null, true);
        echo ") 50% 50%;background-size: cover;\">
  <!-- setting div element height -->
  <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture2.jpg", [], "array"), "url", []), "html", null, true);
        echo "\" style=\"visibility: hidden;\" />
  <h2>This is panel 2</h2>
  <p>foo</p>
</div>
<div style=\"background: url(";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "image-3.jpg", [], "array"), "url", []), "html", null, true);
        echo ") 50% 50%;background-size: cover;color:#fff;\">
  <h2>This is panel 3</h2>
  <p>foo</p>
</div>

</div>


";
    }

    public function getTemplateName()
    {
        return "@Page:D:/Work/git/Brabusz_Grav/user/pages/01.home/_slider";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  59 => 19,  54 => 17,  47 => 13,  42 => 11,  30 => 1,);
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
  <div class=\"owl-carousel owl-theme\" id=\"owl-12d226150e\">
    <img alt=\"\" src=\"/images/9/b/a/4/9/9ba49eb35a747f3ff3c193887d506c012fbe8b47-picture1.jpg\" />
<img alt=\"\" src=\"/images/5/f/a/5/6/5fa567063e4fe32233077f3c1299909ae888ea78-picture2.jpg\" />

</div>


<div class=\"owl-carousel owl-theme\" id=\"owl-6fdb88ba16\">
    
<div style=\"background: url({{ page.media['picture1.jpg'].url }}) 50% 50%;background-size: cover;\">
  <!-- setting div element height -->
  <img src=\"{{ page.media['picture1.jpg'].url }}\" style=\"visibility: hidden;\" />
  <h2>This is panel 1</h2>
  <p>foo</p>
</div>
<div style=\"background: url({{ page.media['picture2.jpg'].url }}) 50% 50%;background-size: cover;\">
  <!-- setting div element height -->
  <img src=\"{{ page.media['picture2.jpg'].url }}\" style=\"visibility: hidden;\" />
  <h2>This is panel 2</h2>
  <p>foo</p>
</div>
<div style=\"background: url({{ page.media['image-3.jpg'].url }}) 50% 50%;background-size: cover;color:#fff;\">
  <h2>This is panel 3</h2>
  <p>foo</p>
</div>

</div>


", "@Page:D:/Work/git/Brabusz_Grav/user/pages/01.home/_slider", "");
    }
}
