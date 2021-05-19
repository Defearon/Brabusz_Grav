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
class __TwigTemplate_db2228fca59c3ea0cb15d071c1deb95dff1b5944000d02bfeff226ff074ae233 extends \Twig\Template
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
<div class=\"owl-carousel owl-theme\" id=\"owl-bf1105c45a\">
    
![](picture1.jpg?cropZoom=1500,500)
![](picture2.jpg?cropZoom=1500,500)

</div>


-->
<div id=\"owl-slider\" class=\"owl-carousel\">
<div> <div class=\"textoverlay\"><h1>Text 1</h1><p>Some text bla bla bla</p></div><img src=\"http://owlgraphic.com/owlcarousel/demos/assets/owl1.jpg\"></div>
            <div> <h2>Text 2</h2><img src=\"http://owlgraphic.com/owlcarousel/demos/assets/owl6.jpg\"> </div>
            <div><h2>Text 3</h2> <img src=\"http://owlgraphic.com/owlcarousel/demos/assets/owl8.jpg\"> </div>
            <div> <h2>Text 4</h2><img src=\"http://owlgraphic.com/owlcarousel/demos/assets/owl3.jpg\"> </div></div>
";
    }

    public function getTemplateName()
    {
        return "@Page:D:/Work/git/Brabusz_Grav/user/pages/01.home/_slider";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
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
<div class=\"owl-carousel owl-theme\" id=\"owl-bf1105c45a\">
    
![](picture1.jpg?cropZoom=1500,500)
![](picture2.jpg?cropZoom=1500,500)

</div>


-->
<div id=\"owl-slider\" class=\"owl-carousel\">
<div> <div class=\"textoverlay\"><h1>Text 1</h1><p>Some text bla bla bla</p></div><img src=\"http://owlgraphic.com/owlcarousel/demos/assets/owl1.jpg\"></div>
            <div> <h2>Text 2</h2><img src=\"http://owlgraphic.com/owlcarousel/demos/assets/owl6.jpg\"> </div>
            <div><h2>Text 3</h2> <img src=\"http://owlgraphic.com/owlcarousel/demos/assets/owl8.jpg\"> </div>
            <div> <h2>Text 4</h2><img src=\"http://owlgraphic.com/owlcarousel/demos/assets/owl3.jpg\"> </div></div>
", "@Page:D:/Work/git/Brabusz_Grav/user/pages/01.home/_slider", "");
    }
}
