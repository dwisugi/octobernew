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

/* /var/www/html/octobernew/themes/vojtasvoboda-newage/partials/sections/download.htm */
class __TwigTemplate_a84e3b68fc17c520bf4d03f5263ca544f7cbe729ed45827d0690fb478bb80144 extends \Twig\Template
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
        echo "<section class=\"download bg-primary text-center\" id=\"download\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 mx-auto\">
                <h2 class=\"section-heading\">
                    ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "download_headline", [], "any", false, false, false, 6);
        echo "
                </h2>
                ";
        // line 8
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "download_content", [], "any", false, false, false, 8);
        echo "
                <div class=\"badges\">
                    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "download_google_link", [], "any", false, false, false, 10)) {
            // line 11
            echo "                    <a class=\"badge-link\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 11), "download_google_link", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 12
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/google-play-badge.svg");
            echo "\" alt=\"Google Play link\">
                    </a>
                    ";
        }
        // line 15
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 15), "download_appstore_link", [], "any", false, false, false, 15)) {
            // line 16
            echo "                    <a class=\"badge-link\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 16), "download_appstore_link", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 17
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/app-store-badge.svg");
            echo "\" alt=\"App Store link\">
                    </a>
                    ";
        }
        // line 20
        echo "                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobernew/themes/vojtasvoboda-newage/partials/sections/download.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  75 => 17,  70 => 16,  67 => 15,  61 => 12,  56 => 11,  54 => 10,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"download bg-primary text-center\" id=\"download\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 mx-auto\">
                <h2 class=\"section-heading\">
                    {{ this.theme.download_headline | raw }}
                </h2>
                {{ this.theme.download_content | raw }}
                <div class=\"badges\">
                    {% if this.theme.download_google_link %}
                    <a class=\"badge-link\" href=\"{{ this.theme.download_google_link }}\">
                        <img src=\"{{ 'assets/img/google-play-badge.svg' | theme }}\" alt=\"Google Play link\">
                    </a>
                    {% endif %}
                    {% if this.theme.download_appstore_link %}
                    <a class=\"badge-link\" href=\"{{ this.theme.download_appstore_link }}\">
                        <img src=\"{{ 'assets/img/app-store-badge.svg' | theme }}\" alt=\"App Store link\">
                    </a>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</section>", "/var/www/html/octobernew/themes/vojtasvoboda-newage/partials/sections/download.htm", "");
    }
}
