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

/* /var/www/html/octobernew/themes/vojtasvoboda-newage/partials/sections/intro.htm */
class __TwigTemplate_b85c0667495c2ed83a59b24393e453af63ae4c57ac9f490803bfbdfa40bab341 extends \Twig\Template
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
        echo "<header class=\"masthead\">
    <div class=\"container h-100\">
        <div class=\"row h-100\">
            <div class=\"col-lg-7 my-auto\">
                <div class=\"header-content mx-auto\">
                    <h1 class=\"mb-5\">";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "intro_headline", [], "any", false, false, false, 6);
        echo "</h1>
                    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "intro_button_link", [], "any", false, false, false, 7)) {
            // line 8
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "intro_button_link", [], "any", false, false, false, 8), "html", null, true);
            echo "\" class=\"btn btn-outline btn-xl js-scroll-trigger\">
                        ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 9), "intro_button", [], "any", false, false, false, 9), "html", null, true);
            echo "
                    </a>
                    ";
        }
        // line 12
        echo "                </div>
            </div>
            <div class=\"col-lg-5 my-auto\">
                <div class=\"device-container\">
                    <div class=\"device-mockup iphone6_plus portrait white\">
                        <div class=\"device\">
                            <div class=\"screen\">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 20), "intro_img", [], "any", false, false, false, 20)) {
            // line 21
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 21), "intro_img", [], "any", false, false, false, 21), "getThumb", [0 => 621, 1 => 1104, 2 => "crop"], "method", false, false, false, 21), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 21), "site_title", [], "any", false, false, false, 21), "html", null, true);
            echo "\" />
                                ";
        } else {
            // line 23
            echo "                                <img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/demo-screen-1.jpg");
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 23), "site_title", [], "any", false, false, false, 23), "html", null, true);
            echo "\" />
                                ";
        }
        // line 25
        echo "                            </div>
                            <!-- // You can hook the \"home button\" to some JavaScript events or just remove it
                            <div class=\"button\"></div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobernew/themes/vojtasvoboda-newage/partials/sections/intro.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  81 => 23,  73 => 21,  71 => 20,  61 => 12,  55 => 9,  50 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"masthead\">
    <div class=\"container h-100\">
        <div class=\"row h-100\">
            <div class=\"col-lg-7 my-auto\">
                <div class=\"header-content mx-auto\">
                    <h1 class=\"mb-5\">{{ this.theme.intro_headline | raw }}</h1>
                    {% if this.theme.intro_button_link %}
                    <a href=\"{{ this.theme.intro_button_link }}\" class=\"btn btn-outline btn-xl js-scroll-trigger\">
                        {{ this.theme.intro_button }}
                    </a>
                    {% endif %}
                </div>
            </div>
            <div class=\"col-lg-5 my-auto\">
                <div class=\"device-container\">
                    <div class=\"device-mockup iphone6_plus portrait white\">
                        <div class=\"device\">
                            <div class=\"screen\">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                {% if this.theme.intro_img %}
                                <img src=\"{{ this.theme.intro_img.getThumb(621, 1104, 'crop') }}\" class=\"img-fluid\" alt=\"{{ this.theme.site_title }}\" />
                                {% else %}
                                <img src=\"{{ 'assets/img/demo-screen-1.jpg' | theme }}\" class=\"img-fluid\" alt=\"{{ this.theme.site_title }}\" />
                                {% endif %}
                            </div>
                            <!-- // You can hook the \"home button\" to some JavaScript events or just remove it
                            <div class=\"button\"></div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>", "/var/www/html/octobernew/themes/vojtasvoboda-newage/partials/sections/intro.htm", "");
    }
}
