<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_04112adc511c56c8cfc31438ecc016f1a62b47fc74c843ef5fd76282aba32806 extends Twig_Template
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
        $__internal_1b32418b1a6a00ecc0fd9553693e7f7b1c5da75f0f81ec27dcde75f70f7e70db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b32418b1a6a00ecc0fd9553693e7f7b1c5da75f0f81ec27dcde75f70f7e70db->enter($__internal_1b32418b1a6a00ecc0fd9553693e7f7b1c5da75f0f81ec27dcde75f70f7e70db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_49db2b2f3bc753efc724b799757be0a81730dd03be984f94382d7861ecf9915c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49db2b2f3bc753efc724b799757be0a81730dd03be984f94382d7861ecf9915c->enter($__internal_49db2b2f3bc753efc724b799757be0a81730dd03be984f94382d7861ecf9915c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1b32418b1a6a00ecc0fd9553693e7f7b1c5da75f0f81ec27dcde75f70f7e70db->leave($__internal_1b32418b1a6a00ecc0fd9553693e7f7b1c5da75f0f81ec27dcde75f70f7e70db_prof);

        
        $__internal_49db2b2f3bc753efc724b799757be0a81730dd03be984f94382d7861ecf9915c->leave($__internal_49db2b2f3bc753efc724b799757be0a81730dd03be984f94382d7861ecf9915c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
