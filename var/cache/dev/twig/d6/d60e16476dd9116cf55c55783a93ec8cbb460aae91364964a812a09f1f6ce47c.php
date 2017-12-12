<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_0eaea4f2e933f3c7bf37a61079e809a1c46affe108a207c93a8265aedb9730d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_136631618e34b3e12fef91cffd45eede5cae3e6c54ac1042a8cb7ba8aca01178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_136631618e34b3e12fef91cffd45eede5cae3e6c54ac1042a8cb7ba8aca01178->enter($__internal_136631618e34b3e12fef91cffd45eede5cae3e6c54ac1042a8cb7ba8aca01178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_8a233854719a9eb75816ff8edc4952f9ec990c75e52be2f10d0cc5df5a5e74c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a233854719a9eb75816ff8edc4952f9ec990c75e52be2f10d0cc5df5a5e74c0->enter($__internal_8a233854719a9eb75816ff8edc4952f9ec990c75e52be2f10d0cc5df5a5e74c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_136631618e34b3e12fef91cffd45eede5cae3e6c54ac1042a8cb7ba8aca01178->leave($__internal_136631618e34b3e12fef91cffd45eede5cae3e6c54ac1042a8cb7ba8aca01178_prof);

        
        $__internal_8a233854719a9eb75816ff8edc4952f9ec990c75e52be2f10d0cc5df5a5e74c0->leave($__internal_8a233854719a9eb75816ff8edc4952f9ec990c75e52be2f10d0cc5df5a5e74c0_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_8e7a7465f74371cb86fba1e05b4a50bfb437f762a0e61ddce55ad30eb638e887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7a7465f74371cb86fba1e05b4a50bfb437f762a0e61ddce55ad30eb638e887->enter($__internal_8e7a7465f74371cb86fba1e05b4a50bfb437f762a0e61ddce55ad30eb638e887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_8abb7a38401260c5f8c11f2a0545e677fceb43c5307906a182b32b9b3001c116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abb7a38401260c5f8c11f2a0545e677fceb43c5307906a182b32b9b3001c116->enter($__internal_8abb7a38401260c5f8c11f2a0545e677fceb43c5307906a182b32b9b3001c116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_8abb7a38401260c5f8c11f2a0545e677fceb43c5307906a182b32b9b3001c116->leave($__internal_8abb7a38401260c5f8c11f2a0545e677fceb43c5307906a182b32b9b3001c116_prof);

        
        $__internal_8e7a7465f74371cb86fba1e05b4a50bfb437f762a0e61ddce55ad30eb638e887->leave($__internal_8e7a7465f74371cb86fba1e05b4a50bfb437f762a0e61ddce55ad30eb638e887_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_908caee665abe13d799ba6cf176e7122d2de6ed34abf123f9e656c3ddb93b37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_908caee665abe13d799ba6cf176e7122d2de6ed34abf123f9e656c3ddb93b37a->enter($__internal_908caee665abe13d799ba6cf176e7122d2de6ed34abf123f9e656c3ddb93b37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_888f511bd095b610d35fdec76eaa0929fb59f3319f6cbab5fa1dbd3ee6c83c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888f511bd095b610d35fdec76eaa0929fb59f3319f6cbab5fa1dbd3ee6c83c45->enter($__internal_888f511bd095b610d35fdec76eaa0929fb59f3319f6cbab5fa1dbd3ee6c83c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_888f511bd095b610d35fdec76eaa0929fb59f3319f6cbab5fa1dbd3ee6c83c45->leave($__internal_888f511bd095b610d35fdec76eaa0929fb59f3319f6cbab5fa1dbd3ee6c83c45_prof);

        
        $__internal_908caee665abe13d799ba6cf176e7122d2de6ed34abf123f9e656c3ddb93b37a->leave($__internal_908caee665abe13d799ba6cf176e7122d2de6ed34abf123f9e656c3ddb93b37a_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a9763a0d5c0847fd95a077353b74c9f341a0775c7c69b37ea39d1db9cc12fc35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9763a0d5c0847fd95a077353b74c9f341a0775c7c69b37ea39d1db9cc12fc35->enter($__internal_a9763a0d5c0847fd95a077353b74c9f341a0775c7c69b37ea39d1db9cc12fc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_287df8ff9954714f0553f75f1933f78b89838c24aa749830d4b5ca94f6d44be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_287df8ff9954714f0553f75f1933f78b89838c24aa749830d4b5ca94f6d44be2->enter($__internal_287df8ff9954714f0553f75f1933f78b89838c24aa749830d4b5ca94f6d44be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 14
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 17, $this->getSourceContext()); })()), "publicMessage", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 17, $this->getSourceContext()); })()), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_287df8ff9954714f0553f75f1933f78b89838c24aa749830d4b5ca94f6d44be2->leave($__internal_287df8ff9954714f0553f75f1933f78b89838c24aa749830d4b5ca94f6d44be2_prof);

        
        $__internal_a9763a0d5c0847fd95a077353b74c9f341a0775c7c69b37ea39d1db9cc12fc35->leave($__internal_a9763a0d5c0847fd95a077353b74c9f341a0775c7c69b37ea39d1db9cc12fc35_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  93 => 14,  89 => 12,  80 => 11,  62 => 9,  44 => 8,  34 => 3,  32 => 1,  20 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = app.request.query.get('entity') ? easyadmin_entity(app.request.query.get('entity')) %}
{% extends [
    _entity_config.templates.layout|default(''),
    easyadmin_config('design.templates.layout'),
    '@EasyAdmin/default/layout.html.twig'
] %}

{% block body_class 'error' %}
{% block page_title %}{{ 'errors'|transchoice(1, {}, 'EasyAdminBundle') }}{% endblock %}

{% block content %}
    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> {{ block('page_title') }}</h1>

            <div class=\"error-message\">
                {{ exception.publicMessage|trans(exception.translationParameters, 'EasyAdminBundle') }}
            </div>
        </div>
    </section>
{% endblock %}
", "EasyAdminBundle:default:exception.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/exception.html.twig");
    }
}
