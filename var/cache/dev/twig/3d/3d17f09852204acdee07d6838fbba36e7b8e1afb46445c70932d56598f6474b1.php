<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1a763b80a4a9bb1a74d47d2f3e4b5be455666631e7b8f88405106ae6042be900 extends Twig_Template
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
        $__internal_82f2f5548301ebae2c9b5a3be989d104eebb8d4eef3c45331f20400af9f548aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f2f5548301ebae2c9b5a3be989d104eebb8d4eef3c45331f20400af9f548aa->enter($__internal_82f2f5548301ebae2c9b5a3be989d104eebb8d4eef3c45331f20400af9f548aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_327626868a3cb9c8be9eb718a999f6a2c728bb524e89d2b597fb0e786f4dc185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327626868a3cb9c8be9eb718a999f6a2c728bb524e89d2b597fb0e786f4dc185->enter($__internal_327626868a3cb9c8be9eb718a999f6a2c728bb524e89d2b597fb0e786f4dc185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_82f2f5548301ebae2c9b5a3be989d104eebb8d4eef3c45331f20400af9f548aa->leave($__internal_82f2f5548301ebae2c9b5a3be989d104eebb8d4eef3c45331f20400af9f548aa_prof);

        
        $__internal_327626868a3cb9c8be9eb718a999f6a2c728bb524e89d2b597fb0e786f4dc185->leave($__internal_327626868a3cb9c8be9eb718a999f6a2c728bb524e89d2b597fb0e786f4dc185_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
