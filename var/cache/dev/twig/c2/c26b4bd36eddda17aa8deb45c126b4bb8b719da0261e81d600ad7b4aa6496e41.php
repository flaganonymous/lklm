<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_05e83447f0a04c97b1b28cd46f614c7b49cf9a81802e39702a7449c7be9d5420 extends Twig_Template
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
        $__internal_5c0864e53abd5318742d22de1a699dde5abb8e20201e0f81f1f19369698700c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0864e53abd5318742d22de1a699dde5abb8e20201e0f81f1f19369698700c9->enter($__internal_5c0864e53abd5318742d22de1a699dde5abb8e20201e0f81f1f19369698700c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        $__internal_37d2d555f9d4b66244cde623b9f68aaf0df827985678c6f28b4a1fe01fd61f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d2d555f9d4b66244cde623b9f68aaf0df827985678c6f28b4a1fe01fd61f87->enter($__internal_37d2d555f9d4b66244cde623b9f68aaf0df827985678c6f28b4a1fe01fd61f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_5c0864e53abd5318742d22de1a699dde5abb8e20201e0f81f1f19369698700c9->leave($__internal_5c0864e53abd5318742d22de1a699dde5abb8e20201e0f81f1f19369698700c9_prof);

        
        $__internal_37d2d555f9d4b66244cde623b9f68aaf0df827985678c6f28b4a1fe01fd61f87->leave($__internal_37d2d555f9d4b66244cde623b9f68aaf0df827985678c6f28b4a1fe01fd61f87_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_datetime.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}
