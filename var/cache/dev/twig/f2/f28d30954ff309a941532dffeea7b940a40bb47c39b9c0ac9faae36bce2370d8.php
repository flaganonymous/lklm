<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_53e844896f3e468776a6126817f33b72ce687e1ac61e4288e3ae4b13263c1c3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf280fc820cf3a482aa4162fc08eef330fd72d72b57c3f0e5dc705205d7d2963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf280fc820cf3a482aa4162fc08eef330fd72d72b57c3f0e5dc705205d7d2963->enter($__internal_cf280fc820cf3a482aa4162fc08eef330fd72d72b57c3f0e5dc705205d7d2963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_08b16efa6582fbbaaf5ecc0c7cbe7a93e224ab685f7d19cd9fc5719ebfb542f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b16efa6582fbbaaf5ecc0c7cbe7a93e224ab685f7d19cd9fc5719ebfb542f1->enter($__internal_08b16efa6582fbbaaf5ecc0c7cbe7a93e224ab685f7d19cd9fc5719ebfb542f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf280fc820cf3a482aa4162fc08eef330fd72d72b57c3f0e5dc705205d7d2963->leave($__internal_cf280fc820cf3a482aa4162fc08eef330fd72d72b57c3f0e5dc705205d7d2963_prof);

        
        $__internal_08b16efa6582fbbaaf5ecc0c7cbe7a93e224ab685f7d19cd9fc5719ebfb542f1->leave($__internal_08b16efa6582fbbaaf5ecc0c7cbe7a93e224ab685f7d19cd9fc5719ebfb542f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c1ca0e93d3077c98f4036644ad102d20705dd18cdcf2865720adce9aec291f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ca0e93d3077c98f4036644ad102d20705dd18cdcf2865720adce9aec291f90->enter($__internal_c1ca0e93d3077c98f4036644ad102d20705dd18cdcf2865720adce9aec291f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2525f1d78968fd7a58ff152ae6af380224e5323602e52fd03685d4a511daa93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2525f1d78968fd7a58ff152ae6af380224e5323602e52fd03685d4a511daa93b->enter($__internal_2525f1d78968fd7a58ff152ae6af380224e5323602e52fd03685d4a511daa93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2525f1d78968fd7a58ff152ae6af380224e5323602e52fd03685d4a511daa93b->leave($__internal_2525f1d78968fd7a58ff152ae6af380224e5323602e52fd03685d4a511daa93b_prof);

        
        $__internal_c1ca0e93d3077c98f4036644ad102d20705dd18cdcf2865720adce9aec291f90->leave($__internal_c1ca0e93d3077c98f4036644ad102d20705dd18cdcf2865720adce9aec291f90_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f709e532f3091c24287e80c4b323db2b433ce22ae61a3031975c374375df19c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f709e532f3091c24287e80c4b323db2b433ce22ae61a3031975c374375df19c->enter($__internal_2f709e532f3091c24287e80c4b323db2b433ce22ae61a3031975c374375df19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_51f5433175d251914883e4b06fc97f64866097980456aec3ea68da71beffddcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f5433175d251914883e4b06fc97f64866097980456aec3ea68da71beffddcb->enter($__internal_51f5433175d251914883e4b06fc97f64866097980456aec3ea68da71beffddcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_51f5433175d251914883e4b06fc97f64866097980456aec3ea68da71beffddcb->leave($__internal_51f5433175d251914883e4b06fc97f64866097980456aec3ea68da71beffddcb_prof);

        
        $__internal_2f709e532f3091c24287e80c4b323db2b433ce22ae61a3031975c374375df19c->leave($__internal_2f709e532f3091c24287e80c4b323db2b433ce22ae61a3031975c374375df19c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f7c4cf30dd6e3bce11729bf2885ef88da071110854fe2b0bafc43034e96a21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f7c4cf30dd6e3bce11729bf2885ef88da071110854fe2b0bafc43034e96a21f->enter($__internal_8f7c4cf30dd6e3bce11729bf2885ef88da071110854fe2b0bafc43034e96a21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2858b221b968f50db01ccebee1ea6a7204787339903d76947c9a46f07dd77c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2858b221b968f50db01ccebee1ea6a7204787339903d76947c9a46f07dd77c8->enter($__internal_d2858b221b968f50db01ccebee1ea6a7204787339903d76947c9a46f07dd77c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d2858b221b968f50db01ccebee1ea6a7204787339903d76947c9a46f07dd77c8->leave($__internal_d2858b221b968f50db01ccebee1ea6a7204787339903d76947c9a46f07dd77c8_prof);

        
        $__internal_8f7c4cf30dd6e3bce11729bf2885ef88da071110854fe2b0bafc43034e96a21f->leave($__internal_8f7c4cf30dd6e3bce11729bf2885ef88da071110854fe2b0bafc43034e96a21f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
