<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b32545747b4bb7d0422c8050172d1d70c6576a39bce249f56adbf458926aaeba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d338b505b3d2c72b87f9c9b2c410fa36a7360f196cb7b4d685de40dfde74d21e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d338b505b3d2c72b87f9c9b2c410fa36a7360f196cb7b4d685de40dfde74d21e->enter($__internal_d338b505b3d2c72b87f9c9b2c410fa36a7360f196cb7b4d685de40dfde74d21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_6c691a0b41ba91e1932e1763953cb68a4062100c7a40678fac25b206f6bfcbd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c691a0b41ba91e1932e1763953cb68a4062100c7a40678fac25b206f6bfcbd1->enter($__internal_6c691a0b41ba91e1932e1763953cb68a4062100c7a40678fac25b206f6bfcbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d338b505b3d2c72b87f9c9b2c410fa36a7360f196cb7b4d685de40dfde74d21e->leave($__internal_d338b505b3d2c72b87f9c9b2c410fa36a7360f196cb7b4d685de40dfde74d21e_prof);

        
        $__internal_6c691a0b41ba91e1932e1763953cb68a4062100c7a40678fac25b206f6bfcbd1->leave($__internal_6c691a0b41ba91e1932e1763953cb68a4062100c7a40678fac25b206f6bfcbd1_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4f45630932627b8596009ff9f2772891e3ad9875a1c564cc259c48b7e2444d1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f45630932627b8596009ff9f2772891e3ad9875a1c564cc259c48b7e2444d1c->enter($__internal_4f45630932627b8596009ff9f2772891e3ad9875a1c564cc259c48b7e2444d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_529ef69b99ef8c15c56c86af6dc9cd1d623a6612c1499ae613c43f6b9dae85f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529ef69b99ef8c15c56c86af6dc9cd1d623a6612c1499ae613c43f6b9dae85f2->enter($__internal_529ef69b99ef8c15c56c86af6dc9cd1d623a6612c1499ae613c43f6b9dae85f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_529ef69b99ef8c15c56c86af6dc9cd1d623a6612c1499ae613c43f6b9dae85f2->leave($__internal_529ef69b99ef8c15c56c86af6dc9cd1d623a6612c1499ae613c43f6b9dae85f2_prof);

        
        $__internal_4f45630932627b8596009ff9f2772891e3ad9875a1c564cc259c48b7e2444d1c->leave($__internal_4f45630932627b8596009ff9f2772891e3ad9875a1c564cc259c48b7e2444d1c_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2bdebade61d81d567f5d9952bd2ab021b08b7efa86a861f92abf14487f80c383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bdebade61d81d567f5d9952bd2ab021b08b7efa86a861f92abf14487f80c383->enter($__internal_2bdebade61d81d567f5d9952bd2ab021b08b7efa86a861f92abf14487f80c383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d985bfc28da946e268af15ac513e393d6dab1db9ea9c4afc500806be6706782c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d985bfc28da946e268af15ac513e393d6dab1db9ea9c4afc500806be6706782c->enter($__internal_d985bfc28da946e268af15ac513e393d6dab1db9ea9c4afc500806be6706782c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d985bfc28da946e268af15ac513e393d6dab1db9ea9c4afc500806be6706782c->leave($__internal_d985bfc28da946e268af15ac513e393d6dab1db9ea9c4afc500806be6706782c_prof);

        
        $__internal_2bdebade61d81d567f5d9952bd2ab021b08b7efa86a861f92abf14487f80c383->leave($__internal_2bdebade61d81d567f5d9952bd2ab021b08b7efa86a861f92abf14487f80c383_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
