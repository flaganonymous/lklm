<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_1940ab4a3a9a064c611ccdfa29908e592ed03a4bb38c99428884976d631cfae6 extends Twig_Template
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
        $__internal_4330458c7873f08d703e7546125e06b7dfd78b578065f20a85501f3ce94e64bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4330458c7873f08d703e7546125e06b7dfd78b578065f20a85501f3ce94e64bb->enter($__internal_4330458c7873f08d703e7546125e06b7dfd78b578065f20a85501f3ce94e64bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        $__internal_7c43228cc1732b69ef9fd057f3c5798e2eaa12bf67d718b7904c560216e79dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c43228cc1732b69ef9fd057f3c5798e2eaa12bf67d718b7904c560216e79dc4->enter($__internal_7c43228cc1732b69ef9fd057f3c5798e2eaa12bf67d718b7904c560216e79dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        }
        
        $__internal_4330458c7873f08d703e7546125e06b7dfd78b578065f20a85501f3ce94e64bb->leave($__internal_4330458c7873f08d703e7546125e06b7dfd78b578065f20a85501f3ce94e64bb_prof);

        
        $__internal_7c43228cc1732b69ef9fd057f3c5798e2eaa12bf67d718b7904c560216e79dc4->leave($__internal_7c43228cc1732b69ef9fd057f3c5798e2eaa12bf67d718b7904c560216e79dc4_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
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
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_text.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_text.html.twig");
    }
}
