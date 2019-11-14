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

/* /var/www/html/octobernew/themes/vojtasvoboda-newage/partials/sections/features.htm */
class __TwigTemplate_3eea33dac1a356c41ab4eed01f4443401c6ac85985cff61be10e4805f4f19e0e extends \Twig\Template
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
        echo "<section id=\"features\" class=\"features\">
    <div class=\"container\">
        <div class=\"section-heading text-center\">
            <h2>";
        // line 4
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "features_headline", [], "any", false, false, false, 4);
        echo "</h2>
            <p class=\"text-muted\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "features_subheadline", [], "any", false, false, false, 5), "html", null, true);
        echo "</p>
            <hr>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 my-auto\">
                <div class=\"device-container\">
                    <div class=\"device-mockup iphone6_plus portrait white\">
                        <div class=\"device\">
                            <div class=\"screen\">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 15), "features_img", [], "any", false, false, false, 15)) {
            // line 16
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 16), "features_img", [], "any", false, false, false, 16), "getThumb", [0 => 621, 1 => 1104, 2 => "crop"], "method", false, false, false, 16), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 16), "site_title", [], "any", false, false, false, 16), "html", null, true);
            echo " features\" />
                                ";
        } else {
            // line 18
            echo "                                <img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/demo-screen-1.jpg");
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 18), "site_title", [], "any", false, false, false, 18), "html", null, true);
            echo " features\" />
                                ";
        }
        // line 20
        echo "                            </div>
                            <!-- // You can hook the \"home button\" to some JavaScript events or just remove it
                            <div class=\"button\"></div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-8 my-auto\">
                <div class=\"container-fluid\">
                    ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 30), "features_list", [], "any", false, false, false, 30)) {
            // line 31
            echo "                        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("features/items"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 32
            echo "                    ";
        } else {
            // line 33
            echo "                        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("features/dummy"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 34
            echo "                    ";
        }
        // line 35
        echo "                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobernew/themes/vojtasvoboda-newage/partials/sections/features.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 35,  104 => 34,  99 => 33,  96 => 32,  91 => 31,  89 => 30,  77 => 20,  69 => 18,  61 => 16,  59 => 15,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"features\" class=\"features\">
    <div class=\"container\">
        <div class=\"section-heading text-center\">
            <h2>{{ this.theme.features_headline | raw }}</h2>
            <p class=\"text-muted\">{{ this.theme.features_subheadline }}</p>
            <hr>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 my-auto\">
                <div class=\"device-container\">
                    <div class=\"device-mockup iphone6_plus portrait white\">
                        <div class=\"device\">
                            <div class=\"screen\">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                {% if this.theme.features_img %}
                                <img src=\"{{ this.theme.features_img.getThumb(621, 1104, 'crop') }}\" class=\"img-fluid\" alt=\"{{ this.theme.site_title }} features\" />
                                {% else %}
                                <img src=\"{{ 'assets/img/demo-screen-1.jpg' | theme }}\" class=\"img-fluid\" alt=\"{{ this.theme.site_title }} features\" />
                                {% endif %}
                            </div>
                            <!-- // You can hook the \"home button\" to some JavaScript events or just remove it
                            <div class=\"button\"></div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-8 my-auto\">
                <div class=\"container-fluid\">
                    {% if this.theme.features_list %}
                        {% partial 'features/items' %}
                    {% else %}
                        {% partial 'features/dummy' %}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</section>", "/var/www/html/octobernew/themes/vojtasvoboda-newage/partials/sections/features.htm", "");
    }
}
