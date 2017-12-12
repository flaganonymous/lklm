<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_fd40c251d2acfa90bee468b76d99f2c78bb999a8961832a3f13fe784f7fffece extends Twig_Template
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
        $__internal_8f37e2e0c9d39f59ee09582bffcf204b4aa6c8d1fd4fbc669d8b70232e27ad99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f37e2e0c9d39f59ee09582bffcf204b4aa6c8d1fd4fbc669d8b70232e27ad99->enter($__internal_8f37e2e0c9d39f59ee09582bffcf204b4aa6c8d1fd4fbc669d8b70232e27ad99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        $__internal_8633e3b4b09837c77a2a955b5de4d8be1aa8518934a2a36572d435ebbd9fb5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8633e3b4b09837c77a2a955b5de4d8be1aa8518934a2a36572d435ebbd9fb5e0->enter($__internal_8633e3b4b09837c77a2a955b5de4d8be1aa8518934a2a36572d435ebbd9fb5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })()) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_8f37e2e0c9d39f59ee09582bffcf204b4aa6c8d1fd4fbc669d8b70232e27ad99->leave($__internal_8f37e2e0c9d39f59ee09582bffcf204b4aa6c8d1fd4fbc669d8b70232e27ad99_prof);

        
        $__internal_8633e3b4b09837c77a2a955b5de4d8be1aa8518934a2a36572d435ebbd9fb5e0->leave($__internal_8633e3b4b09837c77a2a955b5de4d8be1aa8518934a2a36572d435ebbd9fb5e0_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if value == true %}
    <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
{% else %}
    <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
{% endif %}
", "EasyAdminBundle:default:field_boolean.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_boolean.html.twig");
    }
}
