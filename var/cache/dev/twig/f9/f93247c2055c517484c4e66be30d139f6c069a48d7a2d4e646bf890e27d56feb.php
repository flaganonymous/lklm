<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_50938da71dbc75272f45efaa3381fc64f115805390f77b68e0cd53310bc3e400 extends Twig_Template
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
        $__internal_203fc36d2313761d535bf90b91ac90812a1ce02c5e266ebcea254d0fe19aadf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_203fc36d2313761d535bf90b91ac90812a1ce02c5e266ebcea254d0fe19aadf4->enter($__internal_203fc36d2313761d535bf90b91ac90812a1ce02c5e266ebcea254d0fe19aadf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_73e6391163219c32b50ea2c4062595fe8316cda7d04d0e89ffc25c16bb18744d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e6391163219c32b50ea2c4062595fe8316cda7d04d0e89ffc25c16bb18744d->enter($__internal_73e6391163219c32b50ea2c4062595fe8316cda7d04d0e89ffc25c16bb18744d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_203fc36d2313761d535bf90b91ac90812a1ce02c5e266ebcea254d0fe19aadf4->leave($__internal_203fc36d2313761d535bf90b91ac90812a1ce02c5e266ebcea254d0fe19aadf4_prof);

        
        $__internal_73e6391163219c32b50ea2c4062595fe8316cda7d04d0e89ffc25c16bb18744d->leave($__internal_73e6391163219c32b50ea2c4062595fe8316cda7d04d0e89ffc25c16bb18744d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
