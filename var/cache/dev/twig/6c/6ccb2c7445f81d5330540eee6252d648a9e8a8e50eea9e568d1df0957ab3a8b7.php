<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_26b6efbfa960004512bff53e4fca9f32008a854818513e9d54b23f6e70f0f97d extends Twig_Template
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
        $__internal_a09945a1e1d12428a7a11613c7ecea7507a57b1dce8cbc5ea00ed2ef7ace3158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a09945a1e1d12428a7a11613c7ecea7507a57b1dce8cbc5ea00ed2ef7ace3158->enter($__internal_a09945a1e1d12428a7a11613c7ecea7507a57b1dce8cbc5ea00ed2ef7ace3158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_c627d837c2eda2a3746ea230a33025dafc19065009929ab28022314cfa8a310f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c627d837c2eda2a3746ea230a33025dafc19065009929ab28022314cfa8a310f->enter($__internal_c627d837c2eda2a3746ea230a33025dafc19065009929ab28022314cfa8a310f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_a09945a1e1d12428a7a11613c7ecea7507a57b1dce8cbc5ea00ed2ef7ace3158->leave($__internal_a09945a1e1d12428a7a11613c7ecea7507a57b1dce8cbc5ea00ed2ef7ace3158_prof);

        
        $__internal_c627d837c2eda2a3746ea230a33025dafc19065009929ab28022314cfa8a310f->leave($__internal_c627d837c2eda2a3746ea230a33025dafc19065009929ab28022314cfa8a310f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
", "EasyAdminBundle:default:field_date.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}
