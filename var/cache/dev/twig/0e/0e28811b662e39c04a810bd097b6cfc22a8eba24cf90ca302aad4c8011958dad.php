<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e1a1d4817c8e4683f11cbab69c7d217a81600e2c674c2f03f00844217f4dfdc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_2ff437fe6383da8b86a6af5b248d06da1860e518a83c982d2d3306371ef17e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff437fe6383da8b86a6af5b248d06da1860e518a83c982d2d3306371ef17e7e->enter($__internal_2ff437fe6383da8b86a6af5b248d06da1860e518a83c982d2d3306371ef17e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_80438c371732e8604ed6cac9c4de5d5e3407ff1bc7e15a8013a8631e261184c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80438c371732e8604ed6cac9c4de5d5e3407ff1bc7e15a8013a8631e261184c8->enter($__internal_80438c371732e8604ed6cac9c4de5d5e3407ff1bc7e15a8013a8631e261184c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ff437fe6383da8b86a6af5b248d06da1860e518a83c982d2d3306371ef17e7e->leave($__internal_2ff437fe6383da8b86a6af5b248d06da1860e518a83c982d2d3306371ef17e7e_prof);

        
        $__internal_80438c371732e8604ed6cac9c4de5d5e3407ff1bc7e15a8013a8631e261184c8->leave($__internal_80438c371732e8604ed6cac9c4de5d5e3407ff1bc7e15a8013a8631e261184c8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b27305b475ee139e752c784e350dce1b1f879a3e5aabf724ac8bc822d3d5a832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27305b475ee139e752c784e350dce1b1f879a3e5aabf724ac8bc822d3d5a832->enter($__internal_b27305b475ee139e752c784e350dce1b1f879a3e5aabf724ac8bc822d3d5a832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_878a3358463f68727779f0b6da3bd8deb379acf99c1b7e083bb734ec877f1ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878a3358463f68727779f0b6da3bd8deb379acf99c1b7e083bb734ec877f1ce6->enter($__internal_878a3358463f68727779f0b6da3bd8deb379acf99c1b7e083bb734ec877f1ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_878a3358463f68727779f0b6da3bd8deb379acf99c1b7e083bb734ec877f1ce6->leave($__internal_878a3358463f68727779f0b6da3bd8deb379acf99c1b7e083bb734ec877f1ce6_prof);

        
        $__internal_b27305b475ee139e752c784e350dce1b1f879a3e5aabf724ac8bc822d3d5a832->leave($__internal_b27305b475ee139e752c784e350dce1b1f879a3e5aabf724ac8bc822d3d5a832_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
