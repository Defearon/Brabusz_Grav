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
class __TwigTemplate_1557d5d5e549dbc75e97a7936cb65081a44d0f5475f4df9d3b94233882af93df extends \Twig\Template
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
  <div class=\"owl-carousel owl-theme\" id=\"owl-7a8da69e8a\">
    
<div class=\"carousel-container\">
<p><img alt=\"\" src=\"/images/4/6/8/6/d/4686de23f1c736bdde7e78f1bda768bc5489d228-picture1.jpg\" /></p>
<div class=\"carousel-textblock\">
    <h4>Nature</h4>
    <p>What a beautiful sunrise</p>
  </div>
</div>
<div class=\"carousel-container\">
<p><img alt=\"\" src=\"/images/8/e/8/2/1/8e821c9e60d1af98150ca93cfe048ced7896640c-picture2.jpg\" /></p>
<div class=\"carousel-textblock\">
    <h4>Szöveg elhelyezhető</h4>
    <p>Beciegast nveriti vitaesaert asety kertya aset aplica boserde nerafae kertyuraue styasnemo faserani  iasera khatrsasas ptaiadeser daesraeds. Casrolern atur aut oditaut. onsequuntur magni dolqui ratione voluptatemsequi nesciunt orasario jauystase joasuaserya vytarsa numquam eius modi teincidunt, ut labore et dolore magnam liaseras.</p>
  </div>
</div>

</div>


<!--
<div class=\"owl-carousel owl-theme\" id=\"owl-28d3f5f7db\">
    
<div class=\"mycarousel\" style=\"background-image: url(";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture1.jpg", [], "array"), "url", []), "html", null, true);
        echo ");\">
  <div class=\"carousel-textbox\">
    <h2>This is panel 1</h2>
    <p>foo</p>
  </div>
</div>
<div class=\"mycarousel\" style=\"background: url(";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "picture2.jpg", [], "array"), "url", []), "html", null, true);
        echo ");\">
  <h2>This is panel 2</h2>
  <p>foo</p>
</div>

</div>


-->
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
        return array (  65 => 31,  56 => 25,  30 => 1,);
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
  <div class=\"owl-carousel owl-theme\" id=\"owl-7a8da69e8a\">
    
<div class=\"carousel-container\">
<p><img alt=\"\" src=\"/images/4/6/8/6/d/4686de23f1c736bdde7e78f1bda768bc5489d228-picture1.jpg\" /></p>
<div class=\"carousel-textblock\">
    <h4>Nature</h4>
    <p>What a beautiful sunrise</p>
  </div>
</div>
<div class=\"carousel-container\">
<p><img alt=\"\" src=\"/images/8/e/8/2/1/8e821c9e60d1af98150ca93cfe048ced7896640c-picture2.jpg\" /></p>
<div class=\"carousel-textblock\">
    <h4>Szöveg elhelyezhető</h4>
    <p>Beciegast nveriti vitaesaert asety kertya aset aplica boserde nerafae kertyuraue styasnemo faserani  iasera khatrsasas ptaiadeser daesraeds. Casrolern atur aut oditaut. onsequuntur magni dolqui ratione voluptatemsequi nesciunt orasario jauystase joasuaserya vytarsa numquam eius modi teincidunt, ut labore et dolore magnam liaseras.</p>
  </div>
</div>

</div>


<!--
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


-->
", "@Page:D:/Work/git/Brabusz_Grav/user/pages/01.home/_slider", "");
    }
}
