<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6343c4b89ac62bd4f14a75e006ba4ac7ae99f262494fbe28203df6c1c4c5cdfa extends Twig_Template
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
        $__internal_db6cf60bca9e84e00eb3bef4d05fd08aaf6cd5a009f6e589d00d88bf5eef3763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db6cf60bca9e84e00eb3bef4d05fd08aaf6cd5a009f6e589d00d88bf5eef3763->enter($__internal_db6cf60bca9e84e00eb3bef4d05fd08aaf6cd5a009f6e589d00d88bf5eef3763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_9cabe26265081ee088f938409b1ce2fee25d537b42bafd6174c085797ba8d0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cabe26265081ee088f938409b1ce2fee25d537b42bafd6174c085797ba8d0c5->enter($__internal_9cabe26265081ee088f938409b1ce2fee25d537b42bafd6174c085797ba8d0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_db6cf60bca9e84e00eb3bef4d05fd08aaf6cd5a009f6e589d00d88bf5eef3763->leave($__internal_db6cf60bca9e84e00eb3bef4d05fd08aaf6cd5a009f6e589d00d88bf5eef3763_prof);

        
        $__internal_9cabe26265081ee088f938409b1ce2fee25d537b42bafd6174c085797ba8d0c5->leave($__internal_9cabe26265081ee088f938409b1ce2fee25d537b42bafd6174c085797ba8d0c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
