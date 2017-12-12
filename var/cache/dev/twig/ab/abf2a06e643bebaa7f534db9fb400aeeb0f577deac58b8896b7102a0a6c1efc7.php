<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_3c1773cc30281f2041c1f439cccdcb9cbc993a91b8a7b026123816c8f1b1aaa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c98e5d9f7b765aefbcd502cafbd7692f258e3ab05f758a79fef5c52786377529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c98e5d9f7b765aefbcd502cafbd7692f258e3ab05f758a79fef5c52786377529->enter($__internal_c98e5d9f7b765aefbcd502cafbd7692f258e3ab05f758a79fef5c52786377529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_22efb06d6337f36e60e6c0821344051d46e7702f21ed409c8dd9e7d2d8b2b047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22efb06d6337f36e60e6c0821344051d46e7702f21ed409c8dd9e7d2d8b2b047->enter($__internal_22efb06d6337f36e60e6c0821344051d46e7702f21ed409c8dd9e7d2d8b2b047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c98e5d9f7b765aefbcd502cafbd7692f258e3ab05f758a79fef5c52786377529->leave($__internal_c98e5d9f7b765aefbcd502cafbd7692f258e3ab05f758a79fef5c52786377529_prof);

        
        $__internal_22efb06d6337f36e60e6c0821344051d46e7702f21ed409c8dd9e7d2d8b2b047->leave($__internal_22efb06d6337f36e60e6c0821344051d46e7702f21ed409c8dd9e7d2d8b2b047_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_45955ea8f5e95219e69c67c5883d8363302a384bd15292f35c32d5db477335aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45955ea8f5e95219e69c67c5883d8363302a384bd15292f35c32d5db477335aa->enter($__internal_45955ea8f5e95219e69c67c5883d8363302a384bd15292f35c32d5db477335aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_225bf4e317a1eccffad325ba10f623aaae241db045b6d1da7593d5e41b8d242a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225bf4e317a1eccffad325ba10f623aaae241db045b6d1da7593d5e41b8d242a->enter($__internal_225bf4e317a1eccffad325ba10f623aaae241db045b6d1da7593d5e41b8d242a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_225bf4e317a1eccffad325ba10f623aaae241db045b6d1da7593d5e41b8d242a->leave($__internal_225bf4e317a1eccffad325ba10f623aaae241db045b6d1da7593d5e41b8d242a_prof);

        
        $__internal_45955ea8f5e95219e69c67c5883d8363302a384bd15292f35c32d5db477335aa->leave($__internal_45955ea8f5e95219e69c67c5883d8363302a384bd15292f35c32d5db477335aa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
