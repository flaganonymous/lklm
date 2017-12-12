<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_0faca4960dee210a805771f534c4d364f584a92708bd6bfb091607d3e4008804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_900b218a3ead84a3e3324ec363fc8258abac5298c53630ec5938c24fde35b84d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900b218a3ead84a3e3324ec363fc8258abac5298c53630ec5938c24fde35b84d->enter($__internal_900b218a3ead84a3e3324ec363fc8258abac5298c53630ec5938c24fde35b84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_a697d01a7766af3100675ef7ef66e34a553b2ae8796df0bdaa752a5924d0c412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a697d01a7766af3100675ef7ef66e34a553b2ae8796df0bdaa752a5924d0c412->enter($__internal_a697d01a7766af3100675ef7ef66e34a553b2ae8796df0bdaa752a5924d0c412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_900b218a3ead84a3e3324ec363fc8258abac5298c53630ec5938c24fde35b84d->leave($__internal_900b218a3ead84a3e3324ec363fc8258abac5298c53630ec5938c24fde35b84d_prof);

        
        $__internal_a697d01a7766af3100675ef7ef66e34a553b2ae8796df0bdaa752a5924d0c412->leave($__internal_a697d01a7766af3100675ef7ef66e34a553b2ae8796df0bdaa752a5924d0c412_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_769542fbd70958c6c5ed191bdfb0776ce1705dd2bd15cdc5781952ad6447706e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769542fbd70958c6c5ed191bdfb0776ce1705dd2bd15cdc5781952ad6447706e->enter($__internal_769542fbd70958c6c5ed191bdfb0776ce1705dd2bd15cdc5781952ad6447706e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_91a55c4bc25a0a2b7530b89943694779d97fe1081eb9922536839e9c8c5eccf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a55c4bc25a0a2b7530b89943694779d97fe1081eb9922536839e9c8c5eccf7->enter($__internal_91a55c4bc25a0a2b7530b89943694779d97fe1081eb9922536839e9c8c5eccf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_91a55c4bc25a0a2b7530b89943694779d97fe1081eb9922536839e9c8c5eccf7->leave($__internal_91a55c4bc25a0a2b7530b89943694779d97fe1081eb9922536839e9c8c5eccf7_prof);

        
        $__internal_769542fbd70958c6c5ed191bdfb0776ce1705dd2bd15cdc5781952ad6447706e->leave($__internal_769542fbd70958c6c5ed191bdfb0776ce1705dd2bd15cdc5781952ad6447706e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
