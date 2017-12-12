<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e88d537b281cd402d17de8fe9fa603fda3486ebd40975c871547a2fa7a117ca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_eeebb66ad951e3a881d9cc5c210e2f57eb993489391d509a4d27475b013f935d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeebb66ad951e3a881d9cc5c210e2f57eb993489391d509a4d27475b013f935d->enter($__internal_eeebb66ad951e3a881d9cc5c210e2f57eb993489391d509a4d27475b013f935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_75e6ddc03eb4f8f0b8990522ea933815809f69d3e8af389d635803383bdd623d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e6ddc03eb4f8f0b8990522ea933815809f69d3e8af389d635803383bdd623d->enter($__internal_75e6ddc03eb4f8f0b8990522ea933815809f69d3e8af389d635803383bdd623d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeebb66ad951e3a881d9cc5c210e2f57eb993489391d509a4d27475b013f935d->leave($__internal_eeebb66ad951e3a881d9cc5c210e2f57eb993489391d509a4d27475b013f935d_prof);

        
        $__internal_75e6ddc03eb4f8f0b8990522ea933815809f69d3e8af389d635803383bdd623d->leave($__internal_75e6ddc03eb4f8f0b8990522ea933815809f69d3e8af389d635803383bdd623d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_008bf47539f82e3622a733643cf525d68abea9440ac27b0179e05fca739d2894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008bf47539f82e3622a733643cf525d68abea9440ac27b0179e05fca739d2894->enter($__internal_008bf47539f82e3622a733643cf525d68abea9440ac27b0179e05fca739d2894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2ccb4659be22d2f2d34e880806100a145cb6dad3a7c594b9f306c7a789743133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ccb4659be22d2f2d34e880806100a145cb6dad3a7c594b9f306c7a789743133->enter($__internal_2ccb4659be22d2f2d34e880806100a145cb6dad3a7c594b9f306c7a789743133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_2ccb4659be22d2f2d34e880806100a145cb6dad3a7c594b9f306c7a789743133->leave($__internal_2ccb4659be22d2f2d34e880806100a145cb6dad3a7c594b9f306c7a789743133_prof);

        
        $__internal_008bf47539f82e3622a733643cf525d68abea9440ac27b0179e05fca739d2894->leave($__internal_008bf47539f82e3622a733643cf525d68abea9440ac27b0179e05fca739d2894_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
