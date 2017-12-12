<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_288692665e84475d28cc62b173efe0274eac60c36730d0832667d4167579610d extends Twig_Template
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
        $__internal_7c8df4fd385c65625991daaaace5e77e997dd943334f3e065dbf7e33f75b4bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c8df4fd385c65625991daaaace5e77e997dd943334f3e065dbf7e33f75b4bdc->enter($__internal_7c8df4fd385c65625991daaaace5e77e997dd943334f3e065dbf7e33f75b4bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f312b892c4626dd0e34055c4554c7f955a1c0560c89e33d715415d622b8ee0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f312b892c4626dd0e34055c4554c7f955a1c0560c89e33d715415d622b8ee0ec->enter($__internal_f312b892c4626dd0e34055c4554c7f955a1c0560c89e33d715415d622b8ee0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_7c8df4fd385c65625991daaaace5e77e997dd943334f3e065dbf7e33f75b4bdc->leave($__internal_7c8df4fd385c65625991daaaace5e77e997dd943334f3e065dbf7e33f75b4bdc_prof);

        
        $__internal_f312b892c4626dd0e34055c4554c7f955a1c0560c89e33d715415d622b8ee0ec->leave($__internal_f312b892c4626dd0e34055c4554c7f955a1c0560c89e33d715415d622b8ee0ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
