<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_29a496132f14236c53db34409ad0cdf1cd27d722e0be637f1c2bbfcd73a4b519 extends Twig_Template
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
        $__internal_6d085caaa73225186986051e9a52d538e34d1804157ed1971267e7178e3e204c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d085caaa73225186986051e9a52d538e34d1804157ed1971267e7178e3e204c->enter($__internal_6d085caaa73225186986051e9a52d538e34d1804157ed1971267e7178e3e204c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_c0fb495a7cb72f53921aa6e81d62fe7ba8c7ecf4314d3bbf0dccb5cdfb21b5b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0fb495a7cb72f53921aa6e81d62fe7ba8c7ecf4314d3bbf0dccb5cdfb21b5b0->enter($__internal_c0fb495a7cb72f53921aa6e81d62fe7ba8c7ecf4314d3bbf0dccb5cdfb21b5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_6d085caaa73225186986051e9a52d538e34d1804157ed1971267e7178e3e204c->leave($__internal_6d085caaa73225186986051e9a52d538e34d1804157ed1971267e7178e3e204c_prof);

        
        $__internal_c0fb495a7cb72f53921aa6e81d62fe7ba8c7ecf4314d3bbf0dccb5cdfb21b5b0->leave($__internal_c0fb495a7cb72f53921aa6e81d62fe7ba8c7ecf4314d3bbf0dccb5cdfb21b5b0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
