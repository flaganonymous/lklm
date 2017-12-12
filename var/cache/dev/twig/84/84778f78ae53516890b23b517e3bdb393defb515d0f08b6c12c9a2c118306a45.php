<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_184b93a1d598af2c827579c083a2ed6acb0c724a09b2fc5042734960daddf8bd extends Twig_Template
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
        $__internal_a04565a4f32bd0ffefd9db657804b779f4abe64b9af64a579d599566c664b160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04565a4f32bd0ffefd9db657804b779f4abe64b9af64a579d599566c664b160->enter($__internal_a04565a4f32bd0ffefd9db657804b779f4abe64b9af64a579d599566c664b160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        $__internal_86f3ec6176c8096fe757eddb8925449974918bff7c4d8a008f1f8b5c4986ead1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f3ec6176c8096fe757eddb8925449974918bff7c4d8a008f1f8b5c4986ead1->enter($__internal_86f3ec6176c8096fe757eddb8925449974918bff7c4d8a008f1f8b5c4986ead1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 2, $this->getSourceContext()); })()), "format", array()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        }
        
        $__internal_a04565a4f32bd0ffefd9db657804b779f4abe64b9af64a579d599566c664b160->leave($__internal_a04565a4f32bd0ffefd9db657804b779f4abe64b9af64a579d599566c664b160_prof);

        
        $__internal_86f3ec6176c8096fe757eddb8925449974918bff7c4d8a008f1f8b5c4986ead1->leave($__internal_86f3ec6176c8096fe757eddb8925449974918bff7c4d8a008f1f8b5c4986ead1_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
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
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_integer.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_integer.html.twig");
    }
}
