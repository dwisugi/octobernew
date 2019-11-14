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

/* /var/www/html/octobernew/themes/vojtasvoboda-newage/partials/sections/contact.htm */
class __TwigTemplate_c6bd837f18b0e5d37445abe4c53ef06ee5b0d4ff32a5f9ffcc787f2bb71f42cf extends \Twig\Template
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
        echo "<section id=\"contact\" class=\"contact bg-primary\">
    <div class=\"container\">
        <h2>";
        // line 3
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "contact_headline", [], "any", false, false, false, 3);
        echo "</h2>
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "contact_content", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <p>
            ";
            // line 6
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "contact_content", [], "any", false, false, false, 6);
            echo "
        </p>
        ";
        }
        // line 9
        echo "        <ul class=\"list-inline list-social\">
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "contact_twitter", [], "any", false, false, false, 10)) {
            // line 11
            echo "            <li class=\"list-inline-item social-twitter\">
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 12), "contact_twitter", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
                    <i class=\"fab fa-twitter\"></i>
                </a>
            </li>
            ";
        }
        // line 17
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 17), "contact_facebook", [], "any", false, false, false, 17)) {
            // line 18
            echo "            <li class=\"list-inline-item social-facebook\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 19), "contact_facebook", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
                    <i class=\"fab fa-facebook-f\"></i>
                </a>
            </li>
            ";
        }
        // line 24
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 24), "contact_google", [], "any", false, false, false, 24)) {
            // line 25
            echo "            <li class=\"list-inline-item social-google-plus\">
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 26), "contact_google", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                    <i class=\"fab fa-google-plus-g\"></i>
                </a>
            </li>
            ";
        }
        // line 31
        echo "        </ul>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobernew/themes/vojtasvoboda-newage/partials/sections/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  92 => 26,  89 => 25,  86 => 24,  78 => 19,  75 => 18,  72 => 17,  64 => 12,  61 => 11,  59 => 10,  56 => 9,  50 => 6,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"contact\" class=\"contact bg-primary\">
    <div class=\"container\">
        <h2>{{ this.theme.contact_headline | raw }}</h2>
        {% if this.theme.contact_content %}
        <p>
            {{ this.theme.contact_content | raw }}
        </p>
        {% endif %}
        <ul class=\"list-inline list-social\">
            {% if this.theme.contact_twitter %}
            <li class=\"list-inline-item social-twitter\">
                <a href=\"{{ this.theme.contact_twitter }}\">
                    <i class=\"fab fa-twitter\"></i>
                </a>
            </li>
            {% endif %}
            {% if this.theme.contact_facebook %}
            <li class=\"list-inline-item social-facebook\">
                <a href=\"{{ this.theme.contact_facebook }}\">
                    <i class=\"fab fa-facebook-f\"></i>
                </a>
            </li>
            {% endif %}
            {% if this.theme.contact_google %}
            <li class=\"list-inline-item social-google-plus\">
                <a href=\"{{ this.theme.contact_google }}\">
                    <i class=\"fab fa-google-plus-g\"></i>
                </a>
            </li>
            {% endif %}
        </ul>
    </div>
</section>", "/var/www/html/octobernew/themes/vojtasvoboda-newage/partials/sections/contact.htm", "");
    }
}
