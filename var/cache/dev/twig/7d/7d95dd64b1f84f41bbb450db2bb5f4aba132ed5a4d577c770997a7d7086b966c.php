<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_ac7b4cd033aa8c84e72053ac6bc66df02c65c00ccf02e8c5b016e6bb872c40c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8cb6b580cfa872d3410140eba02db16facc1f5331077b3770fdc8e4dd919d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8cb6b580cfa872d3410140eba02db16facc1f5331077b3770fdc8e4dd919d61->enter($__internal_a8cb6b580cfa872d3410140eba02db16facc1f5331077b3770fdc8e4dd919d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_89fd5913e33b91608ca5a0cf5b9b8731caac26827705951ab1316388fe4ac0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fd5913e33b91608ca5a0cf5b9b8731caac26827705951ab1316388fe4ac0e7->enter($__internal_89fd5913e33b91608ca5a0cf5b9b8731caac26827705951ab1316388fe4ac0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8cb6b580cfa872d3410140eba02db16facc1f5331077b3770fdc8e4dd919d61->leave($__internal_a8cb6b580cfa872d3410140eba02db16facc1f5331077b3770fdc8e4dd919d61_prof);

        
        $__internal_89fd5913e33b91608ca5a0cf5b9b8731caac26827705951ab1316388fe4ac0e7->leave($__internal_89fd5913e33b91608ca5a0cf5b9b8731caac26827705951ab1316388fe4ac0e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f283ee790ecf2f2926254b117b31c8911e73daaee3dac8b5b84313eb19d9fe51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f283ee790ecf2f2926254b117b31c8911e73daaee3dac8b5b84313eb19d9fe51->enter($__internal_f283ee790ecf2f2926254b117b31c8911e73daaee3dac8b5b84313eb19d9fe51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b43d166f43e2dbed51abfafe82700d4f858730f23ba10b54cf275f65102667cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43d166f43e2dbed51abfafe82700d4f858730f23ba10b54cf275f65102667cf->enter($__internal_b43d166f43e2dbed51abfafe82700d4f858730f23ba10b54cf275f65102667cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b43d166f43e2dbed51abfafe82700d4f858730f23ba10b54cf275f65102667cf->leave($__internal_b43d166f43e2dbed51abfafe82700d4f858730f23ba10b54cf275f65102667cf_prof);

        
        $__internal_f283ee790ecf2f2926254b117b31c8911e73daaee3dac8b5b84313eb19d9fe51->leave($__internal_f283ee790ecf2f2926254b117b31c8911e73daaee3dac8b5b84313eb19d9fe51_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_044d409203f91279665bef424eb0850ca81cde83130df60c9c837b0f7983f240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044d409203f91279665bef424eb0850ca81cde83130df60c9c837b0f7983f240->enter($__internal_044d409203f91279665bef424eb0850ca81cde83130df60c9c837b0f7983f240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5a32b11dd88249dff8bd5b5904bb29996367db5e3b0fc0be916b36bdd37f9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a32b11dd88249dff8bd5b5904bb29996367db5e3b0fc0be916b36bdd37f9f0->enter($__internal_e5a32b11dd88249dff8bd5b5904bb29996367db5e3b0fc0be916b36bdd37f9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_e5a32b11dd88249dff8bd5b5904bb29996367db5e3b0fc0be916b36bdd37f9f0->leave($__internal_e5a32b11dd88249dff8bd5b5904bb29996367db5e3b0fc0be916b36bdd37f9f0_prof);

        
        $__internal_044d409203f91279665bef424eb0850ca81cde83130df60c9c837b0f7983f240->leave($__internal_044d409203f91279665bef424eb0850ca81cde83130df60c9c837b0f7983f240_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
