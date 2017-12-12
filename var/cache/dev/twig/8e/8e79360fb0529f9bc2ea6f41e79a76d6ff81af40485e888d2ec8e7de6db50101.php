<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_8f6bdd236b4eae19a056743bf21cd966266b0e7de0ea155f967cdebb15f87420 extends Twig_Template
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
        $__internal_f4b1fbcdd267585ba26cc8e64057a90dcf5d80ebd5a80a20cb135026d1d296f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b1fbcdd267585ba26cc8e64057a90dcf5d80ebd5a80a20cb135026d1d296f1->enter($__internal_f4b1fbcdd267585ba26cc8e64057a90dcf5d80ebd5a80a20cb135026d1d296f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_4b0434f15f4f979d4781b8fa7b0c488ffc8d7ed9c54c3ad478905866cc422204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0434f15f4f979d4781b8fa7b0c488ffc8d7ed9c54c3ad478905866cc422204->enter($__internal_4b0434f15f4f979d4781b8fa7b0c488ffc8d7ed9c54c3ad478905866cc422204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_f4b1fbcdd267585ba26cc8e64057a90dcf5d80ebd5a80a20cb135026d1d296f1->leave($__internal_f4b1fbcdd267585ba26cc8e64057a90dcf5d80ebd5a80a20cb135026d1d296f1_prof);

        
        $__internal_4b0434f15f4f979d4781b8fa7b0c488ffc8d7ed9c54c3ad478905866cc422204->leave($__internal_4b0434f15f4f979d4781b8fa7b0c488ffc8d7ed9c54c3ad478905866cc422204_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
