<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_f3f79853248a6f0be6aa151b0878042b78e64ccbe802e236fc2fe931938bfc08 extends Twig_Template
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
        $__internal_54aed10a393667a510f98f2ae53abebbf0dca05c381759ad51af7f1f068b9455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54aed10a393667a510f98f2ae53abebbf0dca05c381759ad51af7f1f068b9455->enter($__internal_54aed10a393667a510f98f2ae53abebbf0dca05c381759ad51af7f1f068b9455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        $__internal_6ad10434e890e7d67f01d13e63448f888e39df1629fb128337756b96bc9bf1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad10434e890e7d67f01d13e63448f888e39df1629fb128337756b96bc9bf1a7->enter($__internal_6ad10434e890e7d67f01d13e63448f888e39df1629fb128337756b96bc9bf1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_54aed10a393667a510f98f2ae53abebbf0dca05c381759ad51af7f1f068b9455->leave($__internal_54aed10a393667a510f98f2ae53abebbf0dca05c381759ad51af7f1f068b9455_prof);

        
        $__internal_6ad10434e890e7d67f01d13e63448f888e39df1629fb128337756b96bc9bf1a7->leave($__internal_6ad10434e890e7d67f01d13e63448f888e39df1629fb128337756b96bc9bf1a7_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
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
    {{ value|number_format(2) }}
{% endif %}
", "EasyAdminBundle:default:field_decimal.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_decimal.html.twig");
    }
}
