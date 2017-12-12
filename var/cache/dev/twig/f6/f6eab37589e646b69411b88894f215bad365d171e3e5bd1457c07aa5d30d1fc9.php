<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1c0b4b2adc8a04312426b975da4bfab9da024c5246c4b5bd30fc55b10ef4a3d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fb9e540fc4fea435b10a6ac89c093aae5579f37aa8289aefb909fbbc0c0b840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb9e540fc4fea435b10a6ac89c093aae5579f37aa8289aefb909fbbc0c0b840->enter($__internal_5fb9e540fc4fea435b10a6ac89c093aae5579f37aa8289aefb909fbbc0c0b840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_efc16697587211cf21eaf825c00d041a3bdd203d135187bbbf6396d4ac7f9a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc16697587211cf21eaf825c00d041a3bdd203d135187bbbf6396d4ac7f9a62->enter($__internal_efc16697587211cf21eaf825c00d041a3bdd203d135187bbbf6396d4ac7f9a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fb9e540fc4fea435b10a6ac89c093aae5579f37aa8289aefb909fbbc0c0b840->leave($__internal_5fb9e540fc4fea435b10a6ac89c093aae5579f37aa8289aefb909fbbc0c0b840_prof);

        
        $__internal_efc16697587211cf21eaf825c00d041a3bdd203d135187bbbf6396d4ac7f9a62->leave($__internal_efc16697587211cf21eaf825c00d041a3bdd203d135187bbbf6396d4ac7f9a62_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2fa621d76a843df4172fc3b86eb774c6748635acd12f8bafed474ac045e0d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2fa621d76a843df4172fc3b86eb774c6748635acd12f8bafed474ac045e0d00->enter($__internal_c2fa621d76a843df4172fc3b86eb774c6748635acd12f8bafed474ac045e0d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06490029a0bc7ae7a3b82527dc17c3bdc50a0152d0df5e6afed3090345fb6cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06490029a0bc7ae7a3b82527dc17c3bdc50a0152d0df5e6afed3090345fb6cd8->enter($__internal_06490029a0bc7ae7a3b82527dc17c3bdc50a0152d0df5e6afed3090345fb6cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_06490029a0bc7ae7a3b82527dc17c3bdc50a0152d0df5e6afed3090345fb6cd8->leave($__internal_06490029a0bc7ae7a3b82527dc17c3bdc50a0152d0df5e6afed3090345fb6cd8_prof);

        
        $__internal_c2fa621d76a843df4172fc3b86eb774c6748635acd12f8bafed474ac045e0d00->leave($__internal_c2fa621d76a843df4172fc3b86eb774c6748635acd12f8bafed474ac045e0d00_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4829fc0e4d130d4d625a80633e8aae08efb0db5d20b2afdf3e30755adc32f1e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4829fc0e4d130d4d625a80633e8aae08efb0db5d20b2afdf3e30755adc32f1e3->enter($__internal_4829fc0e4d130d4d625a80633e8aae08efb0db5d20b2afdf3e30755adc32f1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81e4bdcd2c8e38dcc659a3cb80ee2b91473cf25cbc882cbfbe7dc28dc873f755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e4bdcd2c8e38dcc659a3cb80ee2b91473cf25cbc882cbfbe7dc28dc873f755->enter($__internal_81e4bdcd2c8e38dcc659a3cb80ee2b91473cf25cbc882cbfbe7dc28dc873f755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_81e4bdcd2c8e38dcc659a3cb80ee2b91473cf25cbc882cbfbe7dc28dc873f755->leave($__internal_81e4bdcd2c8e38dcc659a3cb80ee2b91473cf25cbc882cbfbe7dc28dc873f755_prof);

        
        $__internal_4829fc0e4d130d4d625a80633e8aae08efb0db5d20b2afdf3e30755adc32f1e3->leave($__internal_4829fc0e4d130d4d625a80633e8aae08efb0db5d20b2afdf3e30755adc32f1e3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
