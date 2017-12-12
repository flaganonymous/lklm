<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_7eb0e0b70f826f46287d7c4fec4b76d23a26d5d111063ab7debf793fc07f04cb extends Twig_Template
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
        $__internal_03cd2f6d379658579889e37ea15eac9864af347c2f880bbd94d1b13396d1def5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03cd2f6d379658579889e37ea15eac9864af347c2f880bbd94d1b13396d1def5->enter($__internal_03cd2f6d379658579889e37ea15eac9864af347c2f880bbd94d1b13396d1def5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        $__internal_dc4b9754f959df521fe9afc451dfd32d3f2c09d42791c9c9500ef1b25b1f83ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4b9754f959df521fe9afc451dfd32d3f2c09d42791c9c9500ef1b25b1f83ca->enter($__internal_dc4b9754f959df521fe9afc451dfd32d3f2c09d42791c9c9500ef1b25b1f83ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

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
        
        $__internal_03cd2f6d379658579889e37ea15eac9864af347c2f880bbd94d1b13396d1def5->leave($__internal_03cd2f6d379658579889e37ea15eac9864af347c2f880bbd94d1b13396d1def5_prof);

        
        $__internal_dc4b9754f959df521fe9afc451dfd32d3f2c09d42791c9c9500ef1b25b1f83ca->leave($__internal_dc4b9754f959df521fe9afc451dfd32d3f2c09d42791c9c9500ef1b25b1f83ca_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
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
", "EasyAdminBundle:default:field_bigint.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_bigint.html.twig");
    }
}
