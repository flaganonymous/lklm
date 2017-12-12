<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_0ca76a36709da4c11945e1f29484f0924845347cdd00514036c351692a1ed9c1 extends Twig_Template
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
        $__internal_3a7caf4c311ff45f905b2de5e6c7fc88986910aa8168c1bb42b4c108eb4e4576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a7caf4c311ff45f905b2de5e6c7fc88986910aa8168c1bb42b4c108eb4e4576->enter($__internal_3a7caf4c311ff45f905b2de5e6c7fc88986910aa8168c1bb42b4c108eb4e4576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        $__internal_10c075ec66c68d2918ab537d653fa792b88a35a65b752e67eee404cb1bd2f2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c075ec66c68d2918ab537d653fa792b88a35a65b752e67eee404cb1bd2f2d2->enter($__internal_10c075ec66c68d2918ab537d653fa792b88a35a65b752e67eee404cb1bd2f2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_3a7caf4c311ff45f905b2de5e6c7fc88986910aa8168c1bb42b4c108eb4e4576->leave($__internal_3a7caf4c311ff45f905b2de5e6c7fc88986910aa8168c1bb42b4c108eb4e4576_prof);

        
        $__internal_10c075ec66c68d2918ab537d653fa792b88a35a65b752e67eee404cb1bd2f2d2->leave($__internal_10c075ec66c68d2918ab537d653fa792b88a35a65b752e67eee404cb1bd2f2d2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    <a href=\"mailto:{{ value }}\">{{ value }}</a>
{% else %}
    <a href=\"mailto:{{ value }}\">{{ value|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_email.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_email.html.twig");
    }
}
