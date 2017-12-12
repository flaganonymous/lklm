<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_e389c9f5601f998b5e3f66ae1b10b007874d7319214a952f83d51095d8845a20 extends Twig_Template
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
        $__internal_8ec3096c67cec12977d67ff2f8711fdfe531c5b539cf1a619dbd5d3d28dcbabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ec3096c67cec12977d67ff2f8711fdfe531c5b539cf1a619dbd5d3d28dcbabc->enter($__internal_8ec3096c67cec12977d67ff2f8711fdfe531c5b539cf1a619dbd5d3d28dcbabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_d0ca0b0aaab232c16ef47b9f1e81f63ae6b778f3c99f8a217c6eed75e5b1a794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ca0b0aaab232c16ef47b9f1e81f63ae6b778f3c99f8a217c6eed75e5b1a794->enter($__internal_d0ca0b0aaab232c16ef47b9f1e81f63ae6b778f3c99f8a217c6eed75e5b1a794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>
";
        
        $__internal_8ec3096c67cec12977d67ff2f8711fdfe531c5b539cf1a619dbd5d3d28dcbabc->leave($__internal_8ec3096c67cec12977d67ff2f8711fdfe531c5b539cf1a619dbd5d3d28dcbabc_prof);

        
        $__internal_d0ca0b0aaab232c16ef47b9f1e81f63ae6b778f3c99f8a217c6eed75e5b1a794->leave($__internal_d0ca0b0aaab232c16ef47b9f1e81f63ae6b778f3c99f8a217c6eed75e5b1a794_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"tel:{{ value }}\">{{ value }}</a>
", "EasyAdminBundle:default:field_tel.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_tel.html.twig");
    }
}
