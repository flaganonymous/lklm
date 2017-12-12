<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_909f3e9657664f73ce74428d47c1d2839bd75f7f7ba7ea06e6ff6f01b5f8f05c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_65b0902936051d20294609a2cb0be4415cc4704ea2096d27ef9a0ea49e7892e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b0902936051d20294609a2cb0be4415cc4704ea2096d27ef9a0ea49e7892e6->enter($__internal_65b0902936051d20294609a2cb0be4415cc4704ea2096d27ef9a0ea49e7892e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_5ca98361dbe4b3a1fc2b6b07f63bbeafdb0d462d75905b71188786446fe5df90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca98361dbe4b3a1fc2b6b07f63bbeafdb0d462d75905b71188786446fe5df90->enter($__internal_5ca98361dbe4b3a1fc2b6b07f63bbeafdb0d462d75905b71188786446fe5df90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65b0902936051d20294609a2cb0be4415cc4704ea2096d27ef9a0ea49e7892e6->leave($__internal_65b0902936051d20294609a2cb0be4415cc4704ea2096d27ef9a0ea49e7892e6_prof);

        
        $__internal_5ca98361dbe4b3a1fc2b6b07f63bbeafdb0d462d75905b71188786446fe5df90->leave($__internal_5ca98361dbe4b3a1fc2b6b07f63bbeafdb0d462d75905b71188786446fe5df90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_78851d6dd470db5d7b966c3f9bd3c98d1eaddfa9d2711f9fa5c1cfc383efa1b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78851d6dd470db5d7b966c3f9bd3c98d1eaddfa9d2711f9fa5c1cfc383efa1b6->enter($__internal_78851d6dd470db5d7b966c3f9bd3c98d1eaddfa9d2711f9fa5c1cfc383efa1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_94761c71fcfbd7320831c9aad35e766cf2f627476253741703fe67dcabe5c421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94761c71fcfbd7320831c9aad35e766cf2f627476253741703fe67dcabe5c421->enter($__internal_94761c71fcfbd7320831c9aad35e766cf2f627476253741703fe67dcabe5c421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_94761c71fcfbd7320831c9aad35e766cf2f627476253741703fe67dcabe5c421->leave($__internal_94761c71fcfbd7320831c9aad35e766cf2f627476253741703fe67dcabe5c421_prof);

        
        $__internal_78851d6dd470db5d7b966c3f9bd3c98d1eaddfa9d2711f9fa5c1cfc383efa1b6->leave($__internal_78851d6dd470db5d7b966c3f9bd3c98d1eaddfa9d2711f9fa5c1cfc383efa1b6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
