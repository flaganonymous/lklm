<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_4c7528bb64b4856e43e58201e33786708412a6fcb29d61b08059927fd6c8cf3c extends Twig_Template
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
        $__internal_9147202b3fab4809fb286a1c6669f37b31fc1f62d2c475cc233f9fb0caf45953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9147202b3fab4809fb286a1c6669f37b31fc1f62d2c475cc233f9fb0caf45953->enter($__internal_9147202b3fab4809fb286a1c6669f37b31fc1f62d2c475cc233f9fb0caf45953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_e63fec2eed3334d28d8bff0a7d17c98e39089cedd34018b148bde873c489b26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63fec2eed3334d28d8bff0a7d17c98e39089cedd34018b148bde873c489b26f->enter($__internal_e63fec2eed3334d28d8bff0a7d17c98e39089cedd34018b148bde873c489b26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_9147202b3fab4809fb286a1c6669f37b31fc1f62d2c475cc233f9fb0caf45953->leave($__internal_9147202b3fab4809fb286a1c6669f37b31fc1f62d2c475cc233f9fb0caf45953_prof);

        
        $__internal_e63fec2eed3334d28d8bff0a7d17c98e39089cedd34018b148bde873c489b26f->leave($__internal_e63fec2eed3334d28d8bff0a7d17c98e39089cedd34018b148bde873c489b26f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
