<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_aba0671441c7f05e7bf2085c707774aafa621827639bc888e9c7957561db5343 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ef12d841fdc0d1b9cd9358629c684df032e26dc14372833cb72993f40592c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef12d841fdc0d1b9cd9358629c684df032e26dc14372833cb72993f40592c5e->enter($__internal_3ef12d841fdc0d1b9cd9358629c684df032e26dc14372833cb72993f40592c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        $__internal_c32fdd1703cd797ebc31d48c2cac0b4af0146363c51adda1a77c42fa61c3dbb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32fdd1703cd797ebc31d48c2cac0b4af0146363c51adda1a77c42fa61c3dbb8->enter($__internal_c32fdd1703cd797ebc31d48c2cac0b4af0146363c51adda1a77c42fa61c3dbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_3ef12d841fdc0d1b9cd9358629c684df032e26dc14372833cb72993f40592c5e->leave($__internal_3ef12d841fdc0d1b9cd9358629c684df032e26dc14372833cb72993f40592c5e_prof);

        
        $__internal_c32fdd1703cd797ebc31d48c2cac0b4af0146363c51adda1a77c42fa61c3dbb8->leave($__internal_c32fdd1703cd797ebc31d48c2cac0b4af0146363c51adda1a77c42fa61c3dbb8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value }}
{% else %}
    {{ value|easyadmin_truncate(7) }}
{% endif %}
", "EasyAdminBundle:default:field_guid.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_guid.html.twig");
    }
}
