<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_a9868de764d6948b181b280f0de012ae157c069dfdef6e6c0eebf274ceafd8da extends Twig_Template
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
        $__internal_f48d5e43ee8c12d8b0a91b4d12a8bbe91aa405ef517d76a2691a0bf746a81ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48d5e43ee8c12d8b0a91b4d12a8bbe91aa405ef517d76a2691a0bf746a81ab3->enter($__internal_f48d5e43ee8c12d8b0a91b4d12a8bbe91aa405ef517d76a2691a0bf746a81ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

        $__internal_40976b481abfeeb4a2ad2b967464aabcda43c211366c5540c7ccf5f8ffd03189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40976b481abfeeb4a2ad2b967464aabcda43c211366c5540c7ccf5f8ffd03189->enter($__internal_40976b481abfeeb4a2ad2b967464aabcda43c211366c5540c7ccf5f8ffd03189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
        
        $__internal_f48d5e43ee8c12d8b0a91b4d12a8bbe91aa405ef517d76a2691a0bf746a81ab3->leave($__internal_f48d5e43ee8c12d8b0a91b4d12a8bbe91aa405ef517d76a2691a0bf746a81ab3_prof);

        
        $__internal_40976b481abfeeb4a2ad2b967464aabcda43c211366c5540c7ccf5f8ffd03189->leave($__internal_40976b481abfeeb4a2ad2b967464aabcda43c211366c5540c7ccf5f8ffd03189_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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
", "EasyAdminBundle:default:field_float.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_float.html.twig");
    }
}
