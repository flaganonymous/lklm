<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_490ea3fa0908d3b516d368609c870ac421bccc60c159f3ff34e632da09f85611 extends Twig_Template
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
        $__internal_74c98e4d5502e2f3ae24444bf555464ed333baa7589dff4d03617c4810e87f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c98e4d5502e2f3ae24444bf555464ed333baa7589dff4d03617c4810e87f4b->enter($__internal_74c98e4d5502e2f3ae24444bf555464ed333baa7589dff4d03617c4810e87f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        $__internal_e426e02f50bdfbb06e5f7d636d79f0efa1a7874975b10c0c7d314cf39be6a5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e426e02f50bdfbb06e5f7d636d79f0efa1a7874975b10c0c7d314cf39be6a5d4->enter($__internal_e426e02f50bdfbb06e5f7d636d79f0efa1a7874975b10c0c7d314cf39be6a5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_74c98e4d5502e2f3ae24444bf555464ed333baa7589dff4d03617c4810e87f4b->leave($__internal_74c98e4d5502e2f3ae24444bf555464ed333baa7589dff4d03617c4810e87f4b_prof);

        
        $__internal_e426e02f50bdfbb06e5f7d636d79f0efa1a7874975b10c0c7d314cf39be6a5d4->leave($__internal_e426e02f50bdfbb06e5f7d636d79f0efa1a7874975b10c0c7d314cf39be6a5d4_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
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
", "EasyAdminBundle:default:field_datetimetz.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetimetz.html.twig");
    }
}
