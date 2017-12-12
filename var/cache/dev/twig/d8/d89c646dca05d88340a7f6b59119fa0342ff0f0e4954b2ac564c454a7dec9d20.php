<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_edd05a475b3a048f6f9bcf28003d588015755a0157c8358bce2da8a6a81ecb43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_105c7b2cf6aa4d1afbd1bd15c81ac487880046f34871957bb6736024d8e2b547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_105c7b2cf6aa4d1afbd1bd15c81ac487880046f34871957bb6736024d8e2b547->enter($__internal_105c7b2cf6aa4d1afbd1bd15c81ac487880046f34871957bb6736024d8e2b547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_7c3ba35c15c57f85bb206bdc1102d4c3cb000bb6fbc671298032c1c9bec86092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3ba35c15c57f85bb206bdc1102d4c3cb000bb6fbc671298032c1c9bec86092->enter($__internal_7c3ba35c15c57f85bb206bdc1102d4c3cb000bb6fbc671298032c1c9bec86092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_105c7b2cf6aa4d1afbd1bd15c81ac487880046f34871957bb6736024d8e2b547->leave($__internal_105c7b2cf6aa4d1afbd1bd15c81ac487880046f34871957bb6736024d8e2b547_prof);

        
        $__internal_7c3ba35c15c57f85bb206bdc1102d4c3cb000bb6fbc671298032c1c9bec86092->leave($__internal_7c3ba35c15c57f85bb206bdc1102d4c3cb000bb6fbc671298032c1c9bec86092_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b36ca5cb0f799bf11078fdcaa9fd740f762dde465d76e57a3858d4668cbc29a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36ca5cb0f799bf11078fdcaa9fd740f762dde465d76e57a3858d4668cbc29a7->enter($__internal_b36ca5cb0f799bf11078fdcaa9fd740f762dde465d76e57a3858d4668cbc29a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_154ad68a600a1e93c5f229a99f49d267ef62006f15643e7b947800fb9def14a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154ad68a600a1e93c5f229a99f49d267ef62006f15643e7b947800fb9def14a0->enter($__internal_154ad68a600a1e93c5f229a99f49d267ef62006f15643e7b947800fb9def14a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_154ad68a600a1e93c5f229a99f49d267ef62006f15643e7b947800fb9def14a0->leave($__internal_154ad68a600a1e93c5f229a99f49d267ef62006f15643e7b947800fb9def14a0_prof);

        
        $__internal_b36ca5cb0f799bf11078fdcaa9fd740f762dde465d76e57a3858d4668cbc29a7->leave($__internal_b36ca5cb0f799bf11078fdcaa9fd740f762dde465d76e57a3858d4668cbc29a7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1835c70bed680e84b592c1b8fe2eb847ec49e4b10514996403af766f5353327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1835c70bed680e84b592c1b8fe2eb847ec49e4b10514996403af766f5353327->enter($__internal_f1835c70bed680e84b592c1b8fe2eb847ec49e4b10514996403af766f5353327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_666444d4a4bc93f30eaae29e1ae11ab952be75407a0f059a929a2649ef6e3159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666444d4a4bc93f30eaae29e1ae11ab952be75407a0f059a929a2649ef6e3159->enter($__internal_666444d4a4bc93f30eaae29e1ae11ab952be75407a0f059a929a2649ef6e3159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_666444d4a4bc93f30eaae29e1ae11ab952be75407a0f059a929a2649ef6e3159->leave($__internal_666444d4a4bc93f30eaae29e1ae11ab952be75407a0f059a929a2649ef6e3159_prof);

        
        $__internal_f1835c70bed680e84b592c1b8fe2eb847ec49e4b10514996403af766f5353327->leave($__internal_f1835c70bed680e84b592c1b8fe2eb847ec49e4b10514996403af766f5353327_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_52901db27dc0b828f0bea69e17b6c1ba7f82ccf8ec711938b84ee985b570b6a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52901db27dc0b828f0bea69e17b6c1ba7f82ccf8ec711938b84ee985b570b6a2->enter($__internal_52901db27dc0b828f0bea69e17b6c1ba7f82ccf8ec711938b84ee985b570b6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1717a20fd12242322e752fec1a57c3ae72f7c02348b5d93b4a3f191967f09c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1717a20fd12242322e752fec1a57c3ae72f7c02348b5d93b4a3f191967f09c80->enter($__internal_1717a20fd12242322e752fec1a57c3ae72f7c02348b5d93b4a3f191967f09c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_1717a20fd12242322e752fec1a57c3ae72f7c02348b5d93b4a3f191967f09c80->leave($__internal_1717a20fd12242322e752fec1a57c3ae72f7c02348b5d93b4a3f191967f09c80_prof);

        
        $__internal_52901db27dc0b828f0bea69e17b6c1ba7f82ccf8ec711938b84ee985b570b6a2->leave($__internal_52901db27dc0b828f0bea69e17b6c1ba7f82ccf8ec711938b84ee985b570b6a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
