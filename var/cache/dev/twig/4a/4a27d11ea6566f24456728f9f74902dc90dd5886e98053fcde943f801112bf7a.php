<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_d0a9bf63fc1f332ef9905f40ab0c4578635dcdb39aa871d6759428eca55e223a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_af8211c18566974818448428ab2f7c581674e9e0e140b3db08b5c3831e8e0930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8211c18566974818448428ab2f7c581674e9e0e140b3db08b5c3831e8e0930->enter($__internal_af8211c18566974818448428ab2f7c581674e9e0e140b3db08b5c3831e8e0930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_d242c5e3e39323ebb6af5a229a79f1c97691ca8a74aacc9db1e2489de489e861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d242c5e3e39323ebb6af5a229a79f1c97691ca8a74aacc9db1e2489de489e861->enter($__internal_d242c5e3e39323ebb6af5a229a79f1c97691ca8a74aacc9db1e2489de489e861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af8211c18566974818448428ab2f7c581674e9e0e140b3db08b5c3831e8e0930->leave($__internal_af8211c18566974818448428ab2f7c581674e9e0e140b3db08b5c3831e8e0930_prof);

        
        $__internal_d242c5e3e39323ebb6af5a229a79f1c97691ca8a74aacc9db1e2489de489e861->leave($__internal_d242c5e3e39323ebb6af5a229a79f1c97691ca8a74aacc9db1e2489de489e861_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afb4826bb8d9e6ca27422bcc8e644a0dedff75ed86d2cd0383d3cd423f274918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb4826bb8d9e6ca27422bcc8e644a0dedff75ed86d2cd0383d3cd423f274918->enter($__internal_afb4826bb8d9e6ca27422bcc8e644a0dedff75ed86d2cd0383d3cd423f274918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2aa4de33d3ec3aa2c1104b1023e9710e9ca76349dae94dd4f3f278f17534ad57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa4de33d3ec3aa2c1104b1023e9710e9ca76349dae94dd4f3f278f17534ad57->enter($__internal_2aa4de33d3ec3aa2c1104b1023e9710e9ca76349dae94dd4f3f278f17534ad57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_2aa4de33d3ec3aa2c1104b1023e9710e9ca76349dae94dd4f3f278f17534ad57->leave($__internal_2aa4de33d3ec3aa2c1104b1023e9710e9ca76349dae94dd4f3f278f17534ad57_prof);

        
        $__internal_afb4826bb8d9e6ca27422bcc8e644a0dedff75ed86d2cd0383d3cd423f274918->leave($__internal_afb4826bb8d9e6ca27422bcc8e644a0dedff75ed86d2cd0383d3cd423f274918_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
