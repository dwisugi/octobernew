<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/html/octobernew/themes/vojtasvoboda-newage/partials/features/dummy.htm */
class __TwigTemplate_ef486a9c0605d75c1cc0eb0632cafb61234882197bf336265c7668c889f17f98 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"row\">
    <div class=\"col-lg-6\">
        <div class=\"feature-item\">
            <i class=\"icon-screen-smartphone text-primary\"></i>
            <h3>Device Mockups</h3>
            <p class=\"text-muted\">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
        </div>
    </div>
    <div class=\"col-lg-6\">
        <div class=\"feature-item\">
            <i class=\"icon-camera text-primary\"></i>
            <h3>Flexible Use</h3>
            <p class=\"text-muted\">Put an image, video, animation, or anything else in the screen!</p>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-6\">
        <div class=\"feature-item\">
            <i class=\"icon-present text-primary\"></i>
            <h3>Free to Use</h3>
            <p class=\"text-muted\">As always, this theme is free to download and use for any purpose!</p>
        </div>
    </div>
    <div class=\"col-lg-6\">
        <div class=\"feature-item\">
            <i class=\"icon-lock-open text-primary\"></i>
            <h3>Open Source</h3>
            <p class=\"text-muted\">Since this theme is MIT licensed, you can use it commercially!</p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobernew/themes/vojtasvoboda-newage/partials/features/dummy.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-lg-6\">
        <div class=\"feature-item\">
            <i class=\"icon-screen-smartphone text-primary\"></i>
            <h3>Device Mockups</h3>
            <p class=\"text-muted\">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
        </div>
    </div>
    <div class=\"col-lg-6\">
        <div class=\"feature-item\">
            <i class=\"icon-camera text-primary\"></i>
            <h3>Flexible Use</h3>
            <p class=\"text-muted\">Put an image, video, animation, or anything else in the screen!</p>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-6\">
        <div class=\"feature-item\">
            <i class=\"icon-present text-primary\"></i>
            <h3>Free to Use</h3>
            <p class=\"text-muted\">As always, this theme is free to download and use for any purpose!</p>
        </div>
    </div>
    <div class=\"col-lg-6\">
        <div class=\"feature-item\">
            <i class=\"icon-lock-open text-primary\"></i>
            <h3>Open Source</h3>
            <p class=\"text-muted\">Since this theme is MIT licensed, you can use it commercially!</p>
        </div>
    </div>
</div>", "/var/www/html/octobernew/themes/vojtasvoboda-newage/partials/features/dummy.htm", "");
    }
}
