<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_84dadbb2a724100d904894c08d215c1d999cefea465f1272bd1314332e42c294 extends Twig_Template
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
        $__internal_7bce41b7f092532130d44f7b924f4a9d2275889b00ddcfcc9a0d641433bfe633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bce41b7f092532130d44f7b924f4a9d2275889b00ddcfcc9a0d641433bfe633->enter($__internal_7bce41b7f092532130d44f7b924f4a9d2275889b00ddcfcc9a0d641433bfe633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_a6726228d102dd23a9219e000523781df2e84820384353aff04b1fdfde700051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6726228d102dd23a9219e000523781df2e84820384353aff04b1fdfde700051->enter($__internal_a6726228d102dd23a9219e000523781df2e84820384353aff04b1fdfde700051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_7bce41b7f092532130d44f7b924f4a9d2275889b00ddcfcc9a0d641433bfe633->leave($__internal_7bce41b7f092532130d44f7b924f4a9d2275889b00ddcfcc9a0d641433bfe633_prof);

        
        $__internal_a6726228d102dd23a9219e000523781df2e84820384353aff04b1fdfde700051->leave($__internal_a6726228d102dd23a9219e000523781df2e84820384353aff04b1fdfde700051_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
