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
class __TwigTemplate_e9808d87e2078231ab0d6d6a08f385e53e074b264aee8762e8387eb7a2b13d4a extends \Twig\Template
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
  <div class=\"owl-carousel owl-theme\" id=\"owl-adfdcd21f0\">
    <img alt=\"\" src=\"/images/b/a/a/d/c/baadce16ab8bcba154306cde31118086ddcee645-picture1.jpg\" />
<img alt=\"\" src=\"/images/d/6/b/0/b/d6b0b50299e1ba5c8a46c5b8daa74027718c655d-picture2.jpg\" />

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
  <div class=\"owl-carousel owl-theme\" id=\"owl-adfdcd21f0\">
    <img alt=\"\" src=\"/images/b/a/a/d/c/baadce16ab8bcba154306cde31118086ddcee645-picture1.jpg\" />
<img alt=\"\" src=\"/images/d/6/b/0/b/d6b0b50299e1ba5c8a46c5b8daa74027718c655d-picture2.jpg\" />

</div>


", "@Page:D:/Work/git/Brabusz_Grav/user/pages/01.home/_slider", "");
    }
}
