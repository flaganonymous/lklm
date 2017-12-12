<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_8050de326ff0079c6de3af7ffe1ea7d47967e107850faebf7093ce3f65891ae1 extends Twig_Template
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
        $__internal_3ea0c9608343ebba18279529e71356fadcbeee3c12b75ff9cf4708f337904c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea0c9608343ebba18279529e71356fadcbeee3c12b75ff9cf4708f337904c7c->enter($__internal_3ea0c9608343ebba18279529e71356fadcbeee3c12b75ff9cf4708f337904c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_ecc9408ff6317c1ef43ef7aa58813554bd30b70608ee70a216d8d73b4aa32775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc9408ff6317c1ef43ef7aa58813554bd30b70608ee70a216d8d73b4aa32775->enter($__internal_ecc9408ff6317c1ef43ef7aa58813554bd30b70608ee70a216d8d73b4aa32775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_3ea0c9608343ebba18279529e71356fadcbeee3c12b75ff9cf4708f337904c7c->leave($__internal_3ea0c9608343ebba18279529e71356fadcbeee3c12b75ff9cf4708f337904c7c_prof);

        
        $__internal_ecc9408ff6317c1ef43ef7aa58813554bd30b70608ee70a216d8d73b4aa32775->leave($__internal_ecc9408ff6317c1ef43ef7aa58813554bd30b70608ee70a216d8d73b4aa32775_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
