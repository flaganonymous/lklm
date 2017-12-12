<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_6301af2840818a0064b880d8d844d088dcd116c162472456adec2a29a859181b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d13418c2170e91537fd29d98772c9eede3b937390cfdd1959cd62d9de718d649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d13418c2170e91537fd29d98772c9eede3b937390cfdd1959cd62d9de718d649->enter($__internal_d13418c2170e91537fd29d98772c9eede3b937390cfdd1959cd62d9de718d649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_0a2ddf4f68188c55be1710c7ef040118b32a7789f9a5158c2a7c0ecd2efb208f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2ddf4f68188c55be1710c7ef040118b32a7789f9a5158c2a7c0ecd2efb208f->enter($__internal_0a2ddf4f68188c55be1710c7ef040118b32a7789f9a5158c2a7c0ecd2efb208f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d13418c2170e91537fd29d98772c9eede3b937390cfdd1959cd62d9de718d649->leave($__internal_d13418c2170e91537fd29d98772c9eede3b937390cfdd1959cd62d9de718d649_prof);

        
        $__internal_0a2ddf4f68188c55be1710c7ef040118b32a7789f9a5158c2a7c0ecd2efb208f->leave($__internal_0a2ddf4f68188c55be1710c7ef040118b32a7789f9a5158c2a7c0ecd2efb208f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3f3d8ffb59cad69eb30ac8af6312951df46014bb51affff1c6b567e7854fb70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f3d8ffb59cad69eb30ac8af6312951df46014bb51affff1c6b567e7854fb70->enter($__internal_f3f3d8ffb59cad69eb30ac8af6312951df46014bb51affff1c6b567e7854fb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40802d0ad25b0e2d261d9ae7559a9251bd6e7249c73d4731402b6ffd96f46992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40802d0ad25b0e2d261d9ae7559a9251bd6e7249c73d4731402b6ffd96f46992->enter($__internal_40802d0ad25b0e2d261d9ae7559a9251bd6e7249c73d4731402b6ffd96f46992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_40802d0ad25b0e2d261d9ae7559a9251bd6e7249c73d4731402b6ffd96f46992->leave($__internal_40802d0ad25b0e2d261d9ae7559a9251bd6e7249c73d4731402b6ffd96f46992_prof);

        
        $__internal_f3f3d8ffb59cad69eb30ac8af6312951df46014bb51affff1c6b567e7854fb70->leave($__internal_f3f3d8ffb59cad69eb30ac8af6312951df46014bb51affff1c6b567e7854fb70_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eeafd815042d47db51d7fcee7b529ccfc9417211294b5444b0e72b5a399aae1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeafd815042d47db51d7fcee7b529ccfc9417211294b5444b0e72b5a399aae1c->enter($__internal_eeafd815042d47db51d7fcee7b529ccfc9417211294b5444b0e72b5a399aae1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_22c7b712316ef75aed71b312e440768be89b6b850598cfa635ec5e9ff0cb7ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c7b712316ef75aed71b312e440768be89b6b850598cfa635ec5e9ff0cb7ce8->enter($__internal_22c7b712316ef75aed71b312e440768be89b6b850598cfa635ec5e9ff0cb7ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_22c7b712316ef75aed71b312e440768be89b6b850598cfa635ec5e9ff0cb7ce8->leave($__internal_22c7b712316ef75aed71b312e440768be89b6b850598cfa635ec5e9ff0cb7ce8_prof);

        
        $__internal_eeafd815042d47db51d7fcee7b529ccfc9417211294b5444b0e72b5a399aae1c->leave($__internal_eeafd815042d47db51d7fcee7b529ccfc9417211294b5444b0e72b5a399aae1c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
{% block fos_user_content %}{% endblock %}
{% endblock %}", "@FOSUser/layout.html.twig", "/Applications/MAMP/htdocs/pimms-web/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
