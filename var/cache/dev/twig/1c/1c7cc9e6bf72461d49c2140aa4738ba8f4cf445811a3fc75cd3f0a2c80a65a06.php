<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_05ce849a05d2386758e911c36ff7b163688f030140b9d2330d0757af4c0b8cbc extends Twig_Template
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
        $__internal_c4cf6ed099ce45fd6df0074ea07392fa5886be994498690dbb3f965b89e62db6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4cf6ed099ce45fd6df0074ea07392fa5886be994498690dbb3f965b89e62db6->enter($__internal_c4cf6ed099ce45fd6df0074ea07392fa5886be994498690dbb3f965b89e62db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_20de30d25ffc689f0d43848e7f65f6c2909b2407a4133dfdd862265bebf6cf6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20de30d25ffc689f0d43848e7f65f6c2909b2407a4133dfdd862265bebf6cf6a->enter($__internal_20de30d25ffc689f0d43848e7f65f6c2909b2407a4133dfdd862265bebf6cf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c4cf6ed099ce45fd6df0074ea07392fa5886be994498690dbb3f965b89e62db6->leave($__internal_c4cf6ed099ce45fd6df0074ea07392fa5886be994498690dbb3f965b89e62db6_prof);

        
        $__internal_20de30d25ffc689f0d43848e7f65f6c2909b2407a4133dfdd862265bebf6cf6a->leave($__internal_20de30d25ffc689f0d43848e7f65f6c2909b2407a4133dfdd862265bebf6cf6a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
