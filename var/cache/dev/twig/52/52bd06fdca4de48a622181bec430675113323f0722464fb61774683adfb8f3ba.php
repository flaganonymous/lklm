<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cf9edad06ceaadc9728ede13e0df8accd24e4afd606ee856143d2285f0a9b902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48461f5ba92e6250cf142bb092aceaf012f1852904f38f6fb4bd460462f8e1df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48461f5ba92e6250cf142bb092aceaf012f1852904f38f6fb4bd460462f8e1df->enter($__internal_48461f5ba92e6250cf142bb092aceaf012f1852904f38f6fb4bd460462f8e1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_98e517d209015ca8654b9456d36e744954727eaf80a490e993484059fb8f0e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e517d209015ca8654b9456d36e744954727eaf80a490e993484059fb8f0e64->enter($__internal_98e517d209015ca8654b9456d36e744954727eaf80a490e993484059fb8f0e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_48461f5ba92e6250cf142bb092aceaf012f1852904f38f6fb4bd460462f8e1df->leave($__internal_48461f5ba92e6250cf142bb092aceaf012f1852904f38f6fb4bd460462f8e1df_prof);

        
        $__internal_98e517d209015ca8654b9456d36e744954727eaf80a490e993484059fb8f0e64->leave($__internal_98e517d209015ca8654b9456d36e744954727eaf80a490e993484059fb8f0e64_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a2aef3827aab28dc245726dc58486d1a18d45757d0fa37a5765870321314ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2aef3827aab28dc245726dc58486d1a18d45757d0fa37a5765870321314ff1->enter($__internal_3a2aef3827aab28dc245726dc58486d1a18d45757d0fa37a5765870321314ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c915613bbe19206740f3fe7ef6507bf2f5594c3e999bd59fbf11f7df5b4c7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c915613bbe19206740f3fe7ef6507bf2f5594c3e999bd59fbf11f7df5b4c7c5->enter($__internal_4c915613bbe19206740f3fe7ef6507bf2f5594c3e999bd59fbf11f7df5b4c7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4c915613bbe19206740f3fe7ef6507bf2f5594c3e999bd59fbf11f7df5b4c7c5->leave($__internal_4c915613bbe19206740f3fe7ef6507bf2f5594c3e999bd59fbf11f7df5b4c7c5_prof);

        
        $__internal_3a2aef3827aab28dc245726dc58486d1a18d45757d0fa37a5765870321314ff1->leave($__internal_3a2aef3827aab28dc245726dc58486d1a18d45757d0fa37a5765870321314ff1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
