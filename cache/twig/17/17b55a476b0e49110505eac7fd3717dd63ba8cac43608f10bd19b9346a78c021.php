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
class __TwigTemplate_e3f4518cfab698b213f4d247c1feb2a4a7cac7811054b7bbe69cf00f66f9d2c6 extends \Twig\Template
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
  <div class=\"owl-carousel owl-theme\" id=\"owl-e4d341dc3a\">
    
<div style=\"background: url(";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture1.jpg", [], "array"), "url", []), "html", null, true);
        echo ")\">
  <h2>This is panel 1</h2>
  <p>foo</p>
</div>
<div style=\"background: url(";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture2.jpg", [], "array"), "url", []), "html", null, true);
        echo ") \">
  <h2>This is panel 2</h2>
  <p>foo</p>
</div>
<div style=\"background: url(";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture2.jpg", [], "array"), "url", []), "html", null, true);
        echo ") \">
  <h2>This is panel 2</h2>
  <p>foo</p>
</div>
<div style=\"background: url(";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture2.jpg", [], "array"), "url", []), "html", null, true);
        echo ") \">
  <h2>This is panel 2</h2>
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
        return array (  56 => 16,  49 => 12,  42 => 8,  35 => 4,  30 => 1,);
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
  <div class=\"owl-carousel owl-theme\" id=\"owl-e4d341dc3a\">
    
<div style=\"background: url({{ page.media['picture1.jpg'].url }})\">
  <h2>This is panel 1</h2>
  <p>foo</p>
</div>
<div style=\"background: url({{ page.media['picture2.jpg'].url }}) \">
  <h2>This is panel 2</h2>
  <p>foo</p>
</div>
<div style=\"background: url({{ page.media['picture2.jpg'].url }}) \">
  <h2>This is panel 2</h2>
  <p>foo</p>
</div>
<div style=\"background: url({{ page.media['picture2.jpg'].url }}) \">
  <h2>This is panel 2</h2>
  <p>foo</p>
</div>

</div>


", "@Page:D:/Work/git/Brabusz_Grav/user/pages/01.home/_slider", "");
    }
}
