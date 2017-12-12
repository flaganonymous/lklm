<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_9ac01061b3094a07338c9883d186e886a672b612266afe56cf6cc79ea33dd9f3 extends Twig_Template
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
        $__internal_3b150990c40d2910fff13a006e4e65400596c57d345504ec4ccd73b82d31e295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b150990c40d2910fff13a006e4e65400596c57d345504ec4ccd73b82d31e295->enter($__internal_3b150990c40d2910fff13a006e4e65400596c57d345504ec4ccd73b82d31e295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        $__internal_9b3e724da9eeeb0bb12090818b0683a0fa508ad71ac0c7c1d83d6d436291be40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3e724da9eeeb0bb12090818b0683a0fa508ad71ac0c7c1d83d6d436291be40->enter($__internal_9b3e724da9eeeb0bb12090818b0683a0fa508ad71ac0c7c1d83d6d436291be40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
        
        $__internal_3b150990c40d2910fff13a006e4e65400596c57d345504ec4ccd73b82d31e295->leave($__internal_3b150990c40d2910fff13a006e4e65400596c57d345504ec4ccd73b82d31e295_prof);

        
        $__internal_9b3e724da9eeeb0bb12090818b0683a0fa508ad71ac0c7c1d83d6d436291be40->leave($__internal_9b3e724da9eeeb0bb12090818b0683a0fa508ad71ac0c7c1d83d6d436291be40_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
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
", "EasyAdminBundle:default:field_smallint.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_smallint.html.twig");
    }
}
