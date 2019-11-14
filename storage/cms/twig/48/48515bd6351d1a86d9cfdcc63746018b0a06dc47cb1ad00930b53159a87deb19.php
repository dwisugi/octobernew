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

/* /var/www/html/octobernew/themes/vojtasvoboda-newage/partials/sections/cta.htm */
class __TwigTemplate_0e07e7f9f44e540a09ded285a6b7b3467a8326d5531b087c1e555a35fa14b05a extends \Twig\Template
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
        echo "<section class=\"cta\">
    <div class=\"cta-content\">
        <div class=\"container\">
            <h2>";
        // line 4
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "cta_headline", [], "any", false, false, false, 4);
        echo "</h2>
            ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "cta_button_link", [], "any", false, false, false, 5)) {
            // line 6
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "cta_button_link", [], "any", false, false, false, 6), "html", null, true);
            echo "\" class=\"btn btn-outline btn-xl js-scroll-trigger\">
                ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "cta_button", [], "any", false, false, false, 7), "html", null, true);
            echo "
            </a>
            ";
        }
        // line 10
        echo "        </div>
    </div>
    <div class=\"overlay\"></div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobernew/themes/vojtasvoboda-newage/partials/sections/cta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  53 => 7,  48 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"cta\">
    <div class=\"cta-content\">
        <div class=\"container\">
            <h2>{{ this.theme.cta_headline | raw }}</h2>
            {% if this.theme.cta_button_link %}
            <a href=\"{{ this.theme.cta_button_link }}\" class=\"btn btn-outline btn-xl js-scroll-trigger\">
                {{ this.theme.cta_button }}
            </a>
            {% endif %}
        </div>
    </div>
    <div class=\"overlay\"></div>
</section>", "/var/www/html/octobernew/themes/vojtasvoboda-newage/partials/sections/cta.htm", "");
    }
}
