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
class __TwigTemplate_d5462b2dcf61e4cb7c7071ee828a912e9c85095a32a454ca6d0c12c8c8fb4c8c extends \Twig\Template
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
  <div class=\"owl-carousel owl-theme\" id=\"owl-1c34bf0925\">
    <img alt=\"\" src=\"/images/4/6/8/6/d/4686de23f1c736bdde7e78f1bda768bc5489d228-picture1.jpg\" />
<img alt=\"\" src=\"/images/8/e/8/2/1/8e821c9e60d1af98150ca93cfe048ced7896640c-picture2.jpg\" />

</div>


<div class=\"owl-carousel owl-theme\" id=\"owl-e5934a7696\">
    
<div class=\"mycarousel\" style=\"background: url(";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture1.jpg", [], "array"), "url", []), "html", null, true);
        echo ");\">
  <h2>This is panel 1</h2>
  <p>foo</p>

</div>
<div class=\"mycarousel\" style=\"background: url(";
        // line 16
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
        return array (  50 => 16,  42 => 11,  30 => 1,);
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
  <div class=\"owl-carousel owl-theme\" id=\"owl-1c34bf0925\">
    <img alt=\"\" src=\"/images/4/6/8/6/d/4686de23f1c736bdde7e78f1bda768bc5489d228-picture1.jpg\" />
<img alt=\"\" src=\"/images/8/e/8/2/1/8e821c9e60d1af98150ca93cfe048ced7896640c-picture2.jpg\" />

</div>


<div class=\"owl-carousel owl-theme\" id=\"owl-e5934a7696\">
    
<div class=\"mycarousel\" style=\"background: url({{ page.media['picture1.jpg'].url }});\">
  <h2>This is panel 1</h2>
  <p>foo</p>

</div>
<div class=\"mycarousel\" style=\"background: url({{ page.media['picture2.jpg'].url }});\">
  <h2>This is panel 2</h2>
  <p>foo</p>
</div>

</div>


", "@Page:D:/Work/git/Brabusz_Grav/user/pages/01.home/_slider", "");
    }
}
