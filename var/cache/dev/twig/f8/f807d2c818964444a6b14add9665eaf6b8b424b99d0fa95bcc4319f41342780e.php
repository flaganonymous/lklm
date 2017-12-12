<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7feabb4edb20a40403b9c12f550a0387337a21590243a9be566f6b0e0c9872b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de835842c14a81839cea648bb2eb43540c883005031fb4b1abde400295f97aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de835842c14a81839cea648bb2eb43540c883005031fb4b1abde400295f97aed->enter($__internal_de835842c14a81839cea648bb2eb43540c883005031fb4b1abde400295f97aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_c850546551be449a7c1ca8801d8e329193e4afe6afd128c8a5c2381b78f552ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c850546551be449a7c1ca8801d8e329193e4afe6afd128c8a5c2381b78f552ce->enter($__internal_c850546551be449a7c1ca8801d8e329193e4afe6afd128c8a5c2381b78f552ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de835842c14a81839cea648bb2eb43540c883005031fb4b1abde400295f97aed->leave($__internal_de835842c14a81839cea648bb2eb43540c883005031fb4b1abde400295f97aed_prof);

        
        $__internal_c850546551be449a7c1ca8801d8e329193e4afe6afd128c8a5c2381b78f552ce->leave($__internal_c850546551be449a7c1ca8801d8e329193e4afe6afd128c8a5c2381b78f552ce_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e0c3e12901b00c98f8f064965af5d31421816d556663fbc420fe4a63ffcc130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0c3e12901b00c98f8f064965af5d31421816d556663fbc420fe4a63ffcc130->enter($__internal_7e0c3e12901b00c98f8f064965af5d31421816d556663fbc420fe4a63ffcc130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60c1e560f0a59584ac647a2998d921d22e1a2c3388de295a0e3cc4f30a040026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c1e560f0a59584ac647a2998d921d22e1a2c3388de295a0e3cc4f30a040026->enter($__internal_60c1e560f0a59584ac647a2998d921d22e1a2c3388de295a0e3cc4f30a040026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "- Connexion";
        
        $__internal_60c1e560f0a59584ac647a2998d921d22e1a2c3388de295a0e3cc4f30a040026->leave($__internal_60c1e560f0a59584ac647a2998d921d22e1a2c3388de295a0e3cc4f30a040026_prof);

        
        $__internal_7e0c3e12901b00c98f8f064965af5d31421816d556663fbc420fe4a63ffcc130->leave($__internal_7e0c3e12901b00c98f8f064965af5d31421816d556663fbc420fe4a63ffcc130_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6d248e07a8f0009a109130271872b4ab4077123ce19d4b6a0baf8241c41081a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d248e07a8f0009a109130271872b4ab4077123ce19d4b6a0baf8241c41081a->enter($__internal_c6d248e07a8f0009a109130271872b4ab4077123ce19d4b6a0baf8241c41081a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a34e1d22b6d9e1121676644b67bfd28936396cfd66a981dd59299edcd486cf90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34e1d22b6d9e1121676644b67bfd28936396cfd66a981dd59299edcd486cf90->enter($__internal_a34e1d22b6d9e1121676644b67bfd28936396cfd66a981dd59299edcd486cf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a34e1d22b6d9e1121676644b67bfd28936396cfd66a981dd59299edcd486cf90->leave($__internal_a34e1d22b6d9e1121676644b67bfd28936396cfd66a981dd59299edcd486cf90_prof);

        
        $__internal_c6d248e07a8f0009a109130271872b4ab4077123ce19d4b6a0baf8241c41081a->leave($__internal_c6d248e07a8f0009a109130271872b4ab4077123ce19d4b6a0baf8241c41081a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}
{% block title %}- Connexion{% endblock %}
{% block fos_user_content %}
{{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/pimms-web/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
