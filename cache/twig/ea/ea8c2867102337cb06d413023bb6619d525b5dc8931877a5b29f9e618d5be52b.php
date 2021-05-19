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
class __TwigTemplate_e4c6ec9057032260d1942e630ee91c95ba9ebe2974697bddf46f66158c619cc7 extends \Twig\Template
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
  <div class=\"owl-carousel owl-theme\" id=\"owl-a4668bf464\">
    
<div style=\"background: url(";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture1.jpg", [], "array"), "url", []), "html", null, true);
        echo ") 50% 50%;background-size: cover; color:white;text-align:center;\">
  <!-- setting div element height -->
  <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture1.jpg", [], "array"), "url", []), "html", null, true);
        echo "\" style=\"visibility: hidden;\" />
  <h2>This is panel 1</h2>
  <p>foo</p>
</div>
<div style=\"background: url(";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture2.jpg", [], "array"), "url", []), "html", null, true);
        echo ") 50% 50%;background-size: cover;\">
  <!-- setting div element height -->
  <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture2.jpg", [], "array"), "url", []), "html", null, true);
        echo "\" style=\"visibility: hidden;\" />
  <h2 style=\"color:white;\">This is panel 2</h2>
  <p>foo</p>
</div>
<div style=\"background: url(";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "image-3.jpg", [], "array"), "url", []), "html", null, true);
        echo ") 50% 50%;background-size: cover;color:white;text-align:center;\">
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
        return array (  59 => 16,  52 => 12,  47 => 10,  40 => 6,  35 => 4,  30 => 1,);
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
  <div class=\"owl-carousel owl-theme\" id=\"owl-a4668bf464\">
    
<div style=\"background: url({{ page.media['picture1.jpg'].url }}) 50% 50%;background-size: cover; color:white;text-align:center;\">
  <!-- setting div element height -->
  <img src=\"{{ page.media['picture1.jpg'].url }}\" style=\"visibility: hidden;\" />
  <h2>This is panel 1</h2>
  <p>foo</p>
</div>
<div style=\"background: url({{ page.media['picture2.jpg'].url }}) 50% 50%;background-size: cover;\">
  <!-- setting div element height -->
  <img src=\"{{ page.media['picture2.jpg'].url }}\" style=\"visibility: hidden;\" />
  <h2 style=\"color:white;\">This is panel 2</h2>
  <p>foo</p>
</div>
<div style=\"background: url({{ page.media['image-3.jpg'].url }}) 50% 50%;background-size: cover;color:white;text-align:center;\">
  <h2>This is panel 3</h2>
  <p>foo</p>
</div>

</div>


", "@Page:D:/Work/git/Brabusz_Grav/user/pages/01.home/_slider", "");
    }
}
