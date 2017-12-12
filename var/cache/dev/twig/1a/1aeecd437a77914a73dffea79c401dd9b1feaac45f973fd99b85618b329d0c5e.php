<?php

/* base.html.twig */
class __TwigTemplate_cf27e514d2d21367e3a90205ba2100e8b813a98222178f2cf8cfadc68bf9792c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c12d049b88c21630752fe8aea0b0f0e2e8c570ab6104c405a46c7fa288457970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12d049b88c21630752fe8aea0b0f0e2e8c570ab6104c405a46c7fa288457970->enter($__internal_c12d049b88c21630752fe8aea0b0f0e2e8c570ab6104c405a46c7fa288457970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_70df0d8093bd0ae08189ef750b2b726676da542b2f788bcede1eae597aed9aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70df0d8093bd0ae08189ef750b2b726676da542b2f788bcede1eae597aed9aee->enter($__internal_70df0d8093bd0ae08189ef750b2b726676da542b2f788bcede1eae597aed9aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header></header>
        <div class=\"row align-center\">
            ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        </div>
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
    
</html>
";
        
        $__internal_c12d049b88c21630752fe8aea0b0f0e2e8c570ab6104c405a46c7fa288457970->leave($__internal_c12d049b88c21630752fe8aea0b0f0e2e8c570ab6104c405a46c7fa288457970_prof);

        
        $__internal_70df0d8093bd0ae08189ef750b2b726676da542b2f788bcede1eae597aed9aee->leave($__internal_70df0d8093bd0ae08189ef750b2b726676da542b2f788bcede1eae597aed9aee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5783b06691f2481eeab3d79329d5afc36f387c68d30ffef0452e08f96f358cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5783b06691f2481eeab3d79329d5afc36f387c68d30ffef0452e08f96f358cb5->enter($__internal_5783b06691f2481eeab3d79329d5afc36f387c68d30ffef0452e08f96f358cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3886f9fb7221f347db5d4bc51fa8f2409c378faedea6a50a9d25262fdb7873a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3886f9fb7221f347db5d4bc51fa8f2409c378faedea6a50a9d25262fdb7873a0->enter($__internal_3886f9fb7221f347db5d4bc51fa8f2409c378faedea6a50a9d25262fdb7873a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3886f9fb7221f347db5d4bc51fa8f2409c378faedea6a50a9d25262fdb7873a0->leave($__internal_3886f9fb7221f347db5d4bc51fa8f2409c378faedea6a50a9d25262fdb7873a0_prof);

        
        $__internal_5783b06691f2481eeab3d79329d5afc36f387c68d30ffef0452e08f96f358cb5->leave($__internal_5783b06691f2481eeab3d79329d5afc36f387c68d30ffef0452e08f96f358cb5_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e46054784812ddd8a40b760356a72370cc8fc4edd94d2af9b0f5c98c910175cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46054784812ddd8a40b760356a72370cc8fc4edd94d2af9b0f5c98c910175cc->enter($__internal_e46054784812ddd8a40b760356a72370cc8fc4edd94d2af9b0f5c98c910175cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4644dce67c0db289e633919b59c019cfda125d39b24d54870eab07b3a6a4acea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4644dce67c0db289e633919b59c019cfda125d39b24d54870eab07b3a6a4acea->enter($__internal_4644dce67c0db289e633919b59c019cfda125d39b24d54870eab07b3a6a4acea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "            ";
        
        $__internal_4644dce67c0db289e633919b59c019cfda125d39b24d54870eab07b3a6a4acea->leave($__internal_4644dce67c0db289e633919b59c019cfda125d39b24d54870eab07b3a6a4acea_prof);

        
        $__internal_e46054784812ddd8a40b760356a72370cc8fc4edd94d2af9b0f5c98c910175cc->leave($__internal_e46054784812ddd8a40b760356a72370cc8fc4edd94d2af9b0f5c98c910175cc_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ddd510402d4d23425a6da7090eee544cd6c791e8514297417eebca785260702b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd510402d4d23425a6da7090eee544cd6c791e8514297417eebca785260702b->enter($__internal_ddd510402d4d23425a6da7090eee544cd6c791e8514297417eebca785260702b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7ff5e15081bfb6c261ad78f06879c1d4c594c325ace12bf0a38b2460fa029952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff5e15081bfb6c261ad78f06879c1d4c594c325ace12bf0a38b2460fa029952->enter($__internal_7ff5e15081bfb6c261ad78f06879c1d4c594c325ace12bf0a38b2460fa029952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/manifest.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/vendor.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_7ff5e15081bfb6c261ad78f06879c1d4c594c325ace12bf0a38b2460fa029952->leave($__internal_7ff5e15081bfb6c261ad78f06879c1d4c594c325ace12bf0a38b2460fa029952_prof);

        
        $__internal_ddd510402d4d23425a6da7090eee544cd6c791e8514297417eebca785260702b->leave($__internal_ddd510402d4d23425a6da7090eee544cd6c791e8514297417eebca785260702b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 18,  120 => 17,  115 => 16,  106 => 15,  96 => 13,  87 => 12,  70 => 5,  57 => 20,  55 => 15,  52 => 14,  50 => 12,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.css') }}\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <header></header>
        <div class=\"row align-center\">
            {% block body %}
            {% endblock %}
        </div>
        {% block javascripts %}
        <script src=\"{{ asset('assets/manifest.js') }}\"></script>
        <script src=\"{{ asset('assets/js/vendor.js') }}\"></script>
        <script src=\"{{ asset('assets/js/main.js') }}\"></script>
        {% endblock %}
    </body>
    
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/pimms-web/app/Resources/views/base.html.twig");
    }
}
