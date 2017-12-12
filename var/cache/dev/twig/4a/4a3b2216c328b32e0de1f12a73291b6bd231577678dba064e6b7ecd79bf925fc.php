<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1fa1a256f4638285cfc45739162bddf7c9280bcefe52ba881ac596e8ea8aa797 extends Twig_Template
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
        $__internal_63bc5ae762d74d51c94a158f367aff91a8399b8e5885c065e3d68f5b4781b72d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63bc5ae762d74d51c94a158f367aff91a8399b8e5885c065e3d68f5b4781b72d->enter($__internal_63bc5ae762d74d51c94a158f367aff91a8399b8e5885c065e3d68f5b4781b72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_3d11bfaa24fa189835d82a00a4719efd444d2dce0f75e179f387452a27037640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d11bfaa24fa189835d82a00a4719efd444d2dce0f75e179f387452a27037640->enter($__internal_3d11bfaa24fa189835d82a00a4719efd444d2dce0f75e179f387452a27037640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_63bc5ae762d74d51c94a158f367aff91a8399b8e5885c065e3d68f5b4781b72d->leave($__internal_63bc5ae762d74d51c94a158f367aff91a8399b8e5885c065e3d68f5b4781b72d_prof);

        
        $__internal_3d11bfaa24fa189835d82a00a4719efd444d2dce0f75e179f387452a27037640->leave($__internal_3d11bfaa24fa189835d82a00a4719efd444d2dce0f75e179f387452a27037640_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
