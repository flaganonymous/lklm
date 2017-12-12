<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b0ce196b7ecd38abf5021310c913436000212c12b33656b6e684501d213f3889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_802946215c5b5d68d7b5a7e98da0e590c2393ca6b09eeaca8505455ced21c846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802946215c5b5d68d7b5a7e98da0e590c2393ca6b09eeaca8505455ced21c846->enter($__internal_802946215c5b5d68d7b5a7e98da0e590c2393ca6b09eeaca8505455ced21c846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_820ce65a0e3cd2a531657dce319a79608528596abb05f3501cdeb7f83b37a4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820ce65a0e3cd2a531657dce319a79608528596abb05f3501cdeb7f83b37a4a0->enter($__internal_820ce65a0e3cd2a531657dce319a79608528596abb05f3501cdeb7f83b37a4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_802946215c5b5d68d7b5a7e98da0e590c2393ca6b09eeaca8505455ced21c846->leave($__internal_802946215c5b5d68d7b5a7e98da0e590c2393ca6b09eeaca8505455ced21c846_prof);

        
        $__internal_820ce65a0e3cd2a531657dce319a79608528596abb05f3501cdeb7f83b37a4a0->leave($__internal_820ce65a0e3cd2a531657dce319a79608528596abb05f3501cdeb7f83b37a4a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c5810143756ba97ff3586dca88af1b96af0ee9a45feb23f8530910cbea040c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5810143756ba97ff3586dca88af1b96af0ee9a45feb23f8530910cbea040c7->enter($__internal_7c5810143756ba97ff3586dca88af1b96af0ee9a45feb23f8530910cbea040c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b9c55ac6a4672675348de91d6bc35737310cddfcfa86a0d83b0c8db2fc06374a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c55ac6a4672675348de91d6bc35737310cddfcfa86a0d83b0c8db2fc06374a->enter($__internal_b9c55ac6a4672675348de91d6bc35737310cddfcfa86a0d83b0c8db2fc06374a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b9c55ac6a4672675348de91d6bc35737310cddfcfa86a0d83b0c8db2fc06374a->leave($__internal_b9c55ac6a4672675348de91d6bc35737310cddfcfa86a0d83b0c8db2fc06374a_prof);

        
        $__internal_7c5810143756ba97ff3586dca88af1b96af0ee9a45feb23f8530910cbea040c7->leave($__internal_7c5810143756ba97ff3586dca88af1b96af0ee9a45feb23f8530910cbea040c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
