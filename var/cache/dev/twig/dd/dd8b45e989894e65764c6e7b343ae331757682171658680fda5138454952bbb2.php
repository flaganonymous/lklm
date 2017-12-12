<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_d0ce79b39d22436988cd1a7df8ca9be5c192100fb446edb400026eb70869ce68 extends Twig_Template
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
        $__internal_58585304c266feeee0b6040c15cef595f79db26ba89eafd47a9491b883e2c8bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58585304c266feeee0b6040c15cef595f79db26ba89eafd47a9491b883e2c8bb->enter($__internal_58585304c266feeee0b6040c15cef595f79db26ba89eafd47a9491b883e2c8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        $__internal_a1f5d97d33e2f74f9efeb58083bf60ba33830b07c2b7a516ec22be93b847a229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f5d97d33e2f74f9efeb58083bf60ba33830b07c2b7a516ec22be93b847a229->enter($__internal_a1f5d97d33e2f74f9efeb58083bf60ba33830b07c2b7a516ec22be93b847a229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_58585304c266feeee0b6040c15cef595f79db26ba89eafd47a9491b883e2c8bb->leave($__internal_58585304c266feeee0b6040c15cef595f79db26ba89eafd47a9491b883e2c8bb_prof);

        
        $__internal_a1f5d97d33e2f74f9efeb58083bf60ba33830b07c2b7a516ec22be93b847a229->leave($__internal_a1f5d97d33e2f74f9efeb58083bf60ba33830b07c2b7a516ec22be93b847a229_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
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
", "EasyAdminBundle:default:field_time.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_time.html.twig");
    }
}
