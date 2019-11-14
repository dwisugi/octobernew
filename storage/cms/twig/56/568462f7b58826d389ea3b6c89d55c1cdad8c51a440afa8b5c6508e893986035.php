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

/* /var/www/html/octobernew/themes/vojtasvoboda-newage/pages/home.htm */
class __TwigTemplate_1982195b10a53c31a8495cacbddcb4e3dfdee69f5bf83867918b9eeaf7894eb4 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 1), "intro_enabled", [], "any", false, false, false, 1)) {
            // line 2
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/intro"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 4
        echo "
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "download_enabled", [], "any", false, false, false, 5)) {
            // line 6
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/download"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 8
        echo "
";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 9), "features_enabled", [], "any", false, false, false, 9)) {
            // line 10
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/features"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 12
        echo "
";
        // line 13
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 13), "cta_enabled", [], "any", false, false, false, 13)) {
            // line 14
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/cta"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 16
        echo "
";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 17), "contact_enabled", [], "any", false, false, false, 17)) {
            // line 18
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/contact"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobernew/themes/vojtasvoboda-newage/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  81 => 17,  78 => 16,  72 => 14,  70 => 13,  67 => 12,  61 => 10,  59 => 9,  56 => 8,  50 => 6,  48 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if this.theme.intro_enabled %}
    {% partial 'sections/intro' %}
{% endif %}

{% if this.theme.download_enabled %}
    {% partial 'sections/download' %}
{% endif %}

{% if this.theme.features_enabled %}
    {% partial 'sections/features' %}
{% endif %}

{% if this.theme.cta_enabled %}
    {% partial 'sections/cta' %}
{% endif %}

{% if this.theme.contact_enabled %}
    {% partial 'sections/contact' %}
{% endif %}", "/var/www/html/octobernew/themes/vojtasvoboda-newage/pages/home.htm", "");
    }
}
