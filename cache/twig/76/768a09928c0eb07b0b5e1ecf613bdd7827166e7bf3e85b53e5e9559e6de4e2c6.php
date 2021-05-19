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
class __TwigTemplate_24d26a7db47a652645ff8afa95ab46d572a2fa030a892379bd5cc96188aff9af extends \Twig\Template
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
  <!--
<div class=\"owl-carousel owl-theme\" id=\"owl-29f23ad8ac\">
    
![](picture1.jpg?cropZoom=1500,500)
![](picture2.jpg?cropZoom=1500,500)

</div>


-->
<div class=\"owl-carousel owl-theme\" id=\"owl-28d3f5f7db\">
    
<div class=\"mycarousel\" style=\"background-image: url(";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture1.jpg", [], "array"), "url", []), "html", null, true);
        echo ");\">
  <div class=\"carousel-textbox\">
    <h2>This is panel 1</h2>
    <p>foo</p>
  </div>
</div>
<div class=\"mycarousel\" style=\"background: url(";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture2.jpg", [], "array"), "url", []), "html", null, true);
        echo ");\">
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
        return array (  54 => 20,  45 => 14,  30 => 1,);
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
  <!--
<div class=\"owl-carousel owl-theme\" id=\"owl-29f23ad8ac\">
    
![](picture1.jpg?cropZoom=1500,500)
![](picture2.jpg?cropZoom=1500,500)

</div>


-->
<div class=\"owl-carousel owl-theme\" id=\"owl-28d3f5f7db\">
    
<div class=\"mycarousel\" style=\"background-image: url({{ page.media['picture1.jpg'].url }});\">
  <div class=\"carousel-textbox\">
    <h2>This is panel 1</h2>
    <p>foo</p>
  </div>
</div>
<div class=\"mycarousel\" style=\"background: url({{ page.media['picture2.jpg'].url }});\">
  <h2>This is panel 2</h2>
  <p>foo</p>
</div>

</div>


", "@Page:D:/Work/git/Brabusz_Grav/user/pages/01.home/_slider", "");
    }
}
