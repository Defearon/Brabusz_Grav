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
class __TwigTemplate_79d59fd98f248eca8b69474992027060b7b33d79fcb24f5b884a42a25bb8f583 extends \Twig\Template
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
  <div class=\"owl-carousel owl-theme\" id=\"owl-4d03ec02ac\">
    <img alt=\"\" src=\"/images/b/c/c/6/d/bcc6d4c4205d502481c3b8f10a64bc8b82c4a53a-picture1.jpg\" />
<img alt=\"\" src=\"/images/3/0/6/2/3/3062389793e4855cd68825bef0631ca9e8dead6e-picture2.jpg\" />

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
  <div class=\"owl-carousel owl-theme\" id=\"owl-4d03ec02ac\">
    <img alt=\"\" src=\"/images/b/c/c/6/d/bcc6d4c4205d502481c3b8f10a64bc8b82c4a53a-picture1.jpg\" />
<img alt=\"\" src=\"/images/3/0/6/2/3/3062389793e4855cd68825bef0631ca9e8dead6e-picture2.jpg\" />

</div>


", "@Page:D:/Work/git/Brabusz_Grav/user/pages/01.home/_slider", "");
    }
}
