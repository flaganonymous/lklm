<?php

/* :default:index.html.twig */
class __TwigTemplate_f84a45be41c3431f092720f627a01738e7ca19bf01d33e24035221d9418d1da7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcb63b2bf08fa094cccbb418ef81d213ff0dd96a14ba2a50a08f1dcc199d5a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb63b2bf08fa094cccbb418ef81d213ff0dd96a14ba2a50a08f1dcc199d5a63->enter($__internal_fcb63b2bf08fa094cccbb418ef81d213ff0dd96a14ba2a50a08f1dcc199d5a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_87084ee09bdd9d792100abf252cc7b217f75e84b083fb80236daa57a62038a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87084ee09bdd9d792100abf252cc7b217f75e84b083fb80236daa57a62038a21->enter($__internal_87084ee09bdd9d792100abf252cc7b217f75e84b083fb80236daa57a62038a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcb63b2bf08fa094cccbb418ef81d213ff0dd96a14ba2a50a08f1dcc199d5a63->leave($__internal_fcb63b2bf08fa094cccbb418ef81d213ff0dd96a14ba2a50a08f1dcc199d5a63_prof);

        
        $__internal_87084ee09bdd9d792100abf252cc7b217f75e84b083fb80236daa57a62038a21->leave($__internal_87084ee09bdd9d792100abf252cc7b217f75e84b083fb80236daa57a62038a21_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e00afce7458f615e46965c8484442caccc70cfb2b5ece91b865260e1c3544a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e00afce7458f615e46965c8484442caccc70cfb2b5ece91b865260e1c3544a9->enter($__internal_3e00afce7458f615e46965c8484442caccc70cfb2b5ece91b865260e1c3544a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b61f1de1fd7d6908e7fc25ae7a40ba127d63aaf6a1adf3150cf65afb4ca34e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b61f1de1fd7d6908e7fc25ae7a40ba127d63aaf6a1adf3150cf65afb4ca34e9->enter($__internal_1b61f1de1fd7d6908e7fc25ae7a40ba127d63aaf6a1adf3150cf65afb4ca34e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ONYXP";
        
        $__internal_1b61f1de1fd7d6908e7fc25ae7a40ba127d63aaf6a1adf3150cf65afb4ca34e9->leave($__internal_1b61f1de1fd7d6908e7fc25ae7a40ba127d63aaf6a1adf3150cf65afb4ca34e9_prof);

        
        $__internal_3e00afce7458f615e46965c8484442caccc70cfb2b5ece91b865260e1c3544a9->leave($__internal_3e00afce7458f615e46965c8484442caccc70cfb2b5ece91b865260e1c3544a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_41624c4ced91d9eb905149d6d8e24350690627c2de11a37c2a52e9802ba8b57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41624c4ced91d9eb905149d6d8e24350690627c2de11a37c2a52e9802ba8b57c->enter($__internal_41624c4ced91d9eb905149d6d8e24350690627c2de11a37c2a52e9802ba8b57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bcb70741c70cc67c8b92492adb6b65a547eeaf9c1a7060613f4cdaed15b8e7f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb70741c70cc67c8b92492adb6b65a547eeaf9c1a7060613f4cdaed15b8e7f4->enter($__internal_bcb70741c70cc67c8b92492adb6b65a547eeaf9c1a7060613f4cdaed15b8e7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"columns small-12 medium-6\">
    <h1>Administration</h1>
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "user", array())) {
            // line 7
            echo "        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 8
                echo "            <a class=\"button expanded\" href=\"/admin\" title=\"Accéder au panneau d'administration\">Panneau d'administration</a>
        ";
            }
            // line 10
            echo "        <!--";
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_KEOLIS") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                // line 11
                echo "            <a class=\"button expanded\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("keolis");
                echo "\" title=\"Accéder au tableau de bord\">Tableau de bord";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    echo " KEOLIS";
                }
                echo "</a>
        ";
            }
            // line 13
            echo "        ";
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SNCF") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                // line 14
                echo "            <a class=\"button expanded\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sncf");
                echo "\" title=\"Accéder au tableau de bord\">Tableau de bord";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    echo " SNCF";
                }
                echo "</a>
        ";
            }
            // line 15
            echo "-->
    ";
        } else {
            // line 17
            echo "        <a class=\"button expanded\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" title=\"Connexion\">Connexion</a>
    ";
        }
        // line 19
        echo "</div>
";
        
        $__internal_bcb70741c70cc67c8b92492adb6b65a547eeaf9c1a7060613f4cdaed15b8e7f4->leave($__internal_bcb70741c70cc67c8b92492adb6b65a547eeaf9c1a7060613f4cdaed15b8e7f4_prof);

        
        $__internal_41624c4ced91d9eb905149d6d8e24350690627c2de11a37c2a52e9802ba8b57c->leave($__internal_41624c4ced91d9eb905149d6d8e24350690627c2de11a37c2a52e9802ba8b57c_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 19,  111 => 17,  107 => 15,  97 => 14,  94 => 13,  84 => 11,  81 => 10,  77 => 8,  74 => 7,  72 => 6,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}ONYXP{% endblock %}
{% block body %}
<div class=\"columns small-12 medium-6\">
    <h1>Administration</h1>
    {% if app.user %}
        {% if is_granted('ROLE_ADMIN') %}
            <a class=\"button expanded\" href=\"/admin\" title=\"Accéder au panneau d'administration\">Panneau d'administration</a>
        {% endif %}
        <!--{% if is_granted('ROLE_KEOLIS') or is_granted('ROLE_ADMIN') %}
            <a class=\"button expanded\" href=\"{{ path('keolis') }}\" title=\"Accéder au tableau de bord\">Tableau de bord{% if is_granted('ROLE_ADMIN') %} KEOLIS{% endif %}</a>
        {% endif %}
        {% if is_granted('ROLE_SNCF') or is_granted('ROLE_ADMIN') %}
            <a class=\"button expanded\" href=\"{{ path('sncf') }}\" title=\"Accéder au tableau de bord\">Tableau de bord{% if is_granted('ROLE_ADMIN') %} SNCF{% endif %}</a>
        {% endif %}-->
    {% else %}
        <a class=\"button expanded\" href=\"{{ path('fos_user_security_login') }}\" title=\"Connexion\">Connexion</a>
    {% endif %}
</div>
{% endblock %}
", ":default:index.html.twig", "/Applications/MAMP/htdocs/pimms-web/app/Resources/views/default/index.html.twig");
    }
}
