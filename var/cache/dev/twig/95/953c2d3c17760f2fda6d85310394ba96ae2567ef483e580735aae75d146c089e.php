<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_ca7de76a9ae7f7cdac2ef366d00ebd223ecfc9c6788b3154ff8aa8786fb67d5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24744fbfc0b0b2f7573b766059312613869b7d52e76bedc9cbbefbb53f46e0b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24744fbfc0b0b2f7573b766059312613869b7d52e76bedc9cbbefbb53f46e0b0->enter($__internal_24744fbfc0b0b2f7573b766059312613869b7d52e76bedc9cbbefbb53f46e0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d7c336e2dcea55c189bddc71038c8a725ff4b656c7b3e22dceb0faa9b0426f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c336e2dcea55c189bddc71038c8a725ff4b656c7b3e22dceb0faa9b0426f8b->enter($__internal_d7c336e2dcea55c189bddc71038c8a725ff4b656c7b3e22dceb0faa9b0426f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_24744fbfc0b0b2f7573b766059312613869b7d52e76bedc9cbbefbb53f46e0b0->leave($__internal_24744fbfc0b0b2f7573b766059312613869b7d52e76bedc9cbbefbb53f46e0b0_prof);

        
        $__internal_d7c336e2dcea55c189bddc71038c8a725ff4b656c7b3e22dceb0faa9b0426f8b->leave($__internal_d7c336e2dcea55c189bddc71038c8a725ff4b656c7b3e22dceb0faa9b0426f8b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_447cf82e63ea81d2778b0de21ee6f229122a440473ae9d5a245ac73b56253971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447cf82e63ea81d2778b0de21ee6f229122a440473ae9d5a245ac73b56253971->enter($__internal_447cf82e63ea81d2778b0de21ee6f229122a440473ae9d5a245ac73b56253971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6961cfd28ad5e6d7245cd8029a0dc72834fd5ebbd66bafadb26ddf59e2b00b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6961cfd28ad5e6d7245cd8029a0dc72834fd5ebbd66bafadb26ddf59e2b00b82->enter($__internal_6961cfd28ad5e6d7245cd8029a0dc72834fd5ebbd66bafadb26ddf59e2b00b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6961cfd28ad5e6d7245cd8029a0dc72834fd5ebbd66bafadb26ddf59e2b00b82->leave($__internal_6961cfd28ad5e6d7245cd8029a0dc72834fd5ebbd66bafadb26ddf59e2b00b82_prof);

        
        $__internal_447cf82e63ea81d2778b0de21ee6f229122a440473ae9d5a245ac73b56253971->leave($__internal_447cf82e63ea81d2778b0de21ee6f229122a440473ae9d5a245ac73b56253971_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a73cbdc210bc0f7595b59baed8b8618e49b898aa1a18688fd35513072d7d6a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a73cbdc210bc0f7595b59baed8b8618e49b898aa1a18688fd35513072d7d6a0->enter($__internal_0a73cbdc210bc0f7595b59baed8b8618e49b898aa1a18688fd35513072d7d6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f3d4ffbc21da7e17733c7aab10c1165a6aeb88e741a25576e82f066e32cde4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d4ffbc21da7e17733c7aab10c1165a6aeb88e741a25576e82f066e32cde4b9->enter($__internal_f3d4ffbc21da7e17733c7aab10c1165a6aeb88e741a25576e82f066e32cde4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f3d4ffbc21da7e17733c7aab10c1165a6aeb88e741a25576e82f066e32cde4b9->leave($__internal_f3d4ffbc21da7e17733c7aab10c1165a6aeb88e741a25576e82f066e32cde4b9_prof);

        
        $__internal_0a73cbdc210bc0f7595b59baed8b8618e49b898aa1a18688fd35513072d7d6a0->leave($__internal_0a73cbdc210bc0f7595b59baed8b8618e49b898aa1a18688fd35513072d7d6a0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa112d81d142d8c0e525232a7e0cc5e99d3135165125b4e919c557a38d1e3351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa112d81d142d8c0e525232a7e0cc5e99d3135165125b4e919c557a38d1e3351->enter($__internal_fa112d81d142d8c0e525232a7e0cc5e99d3135165125b4e919c557a38d1e3351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe37246b4a404ae871e709a181c7577f3206020795097b429649ed56f58e8359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe37246b4a404ae871e709a181c7577f3206020795097b429649ed56f58e8359->enter($__internal_fe37246b4a404ae871e709a181c7577f3206020795097b429649ed56f58e8359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fe37246b4a404ae871e709a181c7577f3206020795097b429649ed56f58e8359->leave($__internal_fe37246b4a404ae871e709a181c7577f3206020795097b429649ed56f58e8359_prof);

        
        $__internal_fa112d81d142d8c0e525232a7e0cc5e99d3135165125b4e919c557a38d1e3351->leave($__internal_fa112d81d142d8c0e525232a7e0cc5e99d3135165125b4e919c557a38d1e3351_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
