<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e80ca85b4ce6db35473cff2c1f87b8a1066b29fab5207831789a97189d8b8ebd extends Twig_Template
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
        $__internal_01faefbcf06f62f98b0c07be17ec283dab722114846d034558a34b363d9ac4c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01faefbcf06f62f98b0c07be17ec283dab722114846d034558a34b363d9ac4c4->enter($__internal_01faefbcf06f62f98b0c07be17ec283dab722114846d034558a34b363d9ac4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_ef5b6cee6bd1caae209c97ebae4a52fe76016c6acd43e0e42e4b0e2986483c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5b6cee6bd1caae209c97ebae4a52fe76016c6acd43e0e42e4b0e2986483c01->enter($__internal_ef5b6cee6bd1caae209c97ebae4a52fe76016c6acd43e0e42e4b0e2986483c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_01faefbcf06f62f98b0c07be17ec283dab722114846d034558a34b363d9ac4c4->leave($__internal_01faefbcf06f62f98b0c07be17ec283dab722114846d034558a34b363d9ac4c4_prof);

        
        $__internal_ef5b6cee6bd1caae209c97ebae4a52fe76016c6acd43e0e42e4b0e2986483c01->leave($__internal_ef5b6cee6bd1caae209c97ebae4a52fe76016c6acd43e0e42e4b0e2986483c01_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
