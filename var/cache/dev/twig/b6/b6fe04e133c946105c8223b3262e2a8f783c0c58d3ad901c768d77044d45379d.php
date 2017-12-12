<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0c43dfa292442238e4a83ab08beefcac6f435e7f6efe880e56ad66e86c49e18e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be43da80e8c49009aa73254d5f3193133e4b3eccc38cbf87e53d2f03bab108ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be43da80e8c49009aa73254d5f3193133e4b3eccc38cbf87e53d2f03bab108ce->enter($__internal_be43da80e8c49009aa73254d5f3193133e4b3eccc38cbf87e53d2f03bab108ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_cdc05cc2cd6bdee9243691236b248092463522f9b594f9638102f8e4bccbf5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc05cc2cd6bdee9243691236b248092463522f9b594f9638102f8e4bccbf5bb->enter($__internal_cdc05cc2cd6bdee9243691236b248092463522f9b594f9638102f8e4bccbf5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be43da80e8c49009aa73254d5f3193133e4b3eccc38cbf87e53d2f03bab108ce->leave($__internal_be43da80e8c49009aa73254d5f3193133e4b3eccc38cbf87e53d2f03bab108ce_prof);

        
        $__internal_cdc05cc2cd6bdee9243691236b248092463522f9b594f9638102f8e4bccbf5bb->leave($__internal_cdc05cc2cd6bdee9243691236b248092463522f9b594f9638102f8e4bccbf5bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff3ec53e4d8f41657e09f32e9e7e86e78122af33ee916705b32b8be81d71da42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff3ec53e4d8f41657e09f32e9e7e86e78122af33ee916705b32b8be81d71da42->enter($__internal_ff3ec53e4d8f41657e09f32e9e7e86e78122af33ee916705b32b8be81d71da42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d3e18c75a8df47edd390953a02934fec9c0d2a7348a484716f66eb37b1252ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e18c75a8df47edd390953a02934fec9c0d2a7348a484716f66eb37b1252ab2->enter($__internal_d3e18c75a8df47edd390953a02934fec9c0d2a7348a484716f66eb37b1252ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d3e18c75a8df47edd390953a02934fec9c0d2a7348a484716f66eb37b1252ab2->leave($__internal_d3e18c75a8df47edd390953a02934fec9c0d2a7348a484716f66eb37b1252ab2_prof);

        
        $__internal_ff3ec53e4d8f41657e09f32e9e7e86e78122af33ee916705b32b8be81d71da42->leave($__internal_ff3ec53e4d8f41657e09f32e9e7e86e78122af33ee916705b32b8be81d71da42_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
