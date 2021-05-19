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
class __TwigTemplate_1696a609d038f2ff11338d381f0cb0d3a117dcedee70e725cbb4868adad160ec extends \Twig\Template
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
  <div class=\"image-overlay\">
<div class=\"owl-carousel owl-theme\" id=\"owl-ee4d7cab9c\">
    <img alt=\"\" src=\"/images/4/6/8/6/d/4686de23f1c736bdde7e78f1bda768bc5489d228-picture1.jpg\" />
<img alt=\"\" src=\"/images/8/e/8/2/1/8e821c9e60d1af98150ca93cfe048ced7896640c-picture2.jpg\" />

</div>


</div>
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
  <div class=\"image-overlay\">
<div class=\"owl-carousel owl-theme\" id=\"owl-ee4d7cab9c\">
    <img alt=\"\" src=\"/images/4/6/8/6/d/4686de23f1c736bdde7e78f1bda768bc5489d228-picture1.jpg\" />
<img alt=\"\" src=\"/images/8/e/8/2/1/8e821c9e60d1af98150ca93cfe048ced7896640c-picture2.jpg\" />

</div>


</div>
", "@Page:D:/Work/git/Brabusz_Grav/user/pages/01.home/_slider", "");
    }
}
