<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_57cb1887f914651b45880e1dfabc4b92ebb999fb7ffdce2bcaf43901dc9599f4 extends Twig_Template
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
        $__internal_c6c4f405ae0f304ab81e1a382ffaa6b82d3d24f932c3d16c714524ea036b63d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c4f405ae0f304ab81e1a382ffaa6b82d3d24f932c3d16c714524ea036b63d2->enter($__internal_c6c4f405ae0f304ab81e1a382ffaa6b82d3d24f932c3d16c714524ea036b63d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8b9e9356a36750ebbb561af9244f59f22c2f383c3a6c31d465294309c8cff450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9e9356a36750ebbb561af9244f59f22c2f383c3a6c31d465294309c8cff450->enter($__internal_8b9e9356a36750ebbb561af9244f59f22c2f383c3a6c31d465294309c8cff450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c6c4f405ae0f304ab81e1a382ffaa6b82d3d24f932c3d16c714524ea036b63d2->leave($__internal_c6c4f405ae0f304ab81e1a382ffaa6b82d3d24f932c3d16c714524ea036b63d2_prof);

        
        $__internal_8b9e9356a36750ebbb561af9244f59f22c2f383c3a6c31d465294309c8cff450->leave($__internal_8b9e9356a36750ebbb561af9244f59f22c2f383c3a6c31d465294309c8cff450_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
