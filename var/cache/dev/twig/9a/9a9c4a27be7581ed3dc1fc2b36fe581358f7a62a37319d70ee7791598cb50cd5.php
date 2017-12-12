<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_974125daa28ea2dc9d3872b27e3f86be7bae74610575c757d8864e6403bbbe74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ed3dea92d3b7b9dbcad28fe262a03f6634ef2b0cd1d75844a20b801f9e6ac02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed3dea92d3b7b9dbcad28fe262a03f6634ef2b0cd1d75844a20b801f9e6ac02->enter($__internal_0ed3dea92d3b7b9dbcad28fe262a03f6634ef2b0cd1d75844a20b801f9e6ac02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_6685b9e70c2e592bd85a36d5281ef2d44444f84adc5b85ef5e01492078b1baa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6685b9e70c2e592bd85a36d5281ef2d44444f84adc5b85ef5e01492078b1baa2->enter($__internal_6685b9e70c2e592bd85a36d5281ef2d44444f84adc5b85ef5e01492078b1baa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0ed3dea92d3b7b9dbcad28fe262a03f6634ef2b0cd1d75844a20b801f9e6ac02->leave($__internal_0ed3dea92d3b7b9dbcad28fe262a03f6634ef2b0cd1d75844a20b801f9e6ac02_prof);

        
        $__internal_6685b9e70c2e592bd85a36d5281ef2d44444f84adc5b85ef5e01492078b1baa2->leave($__internal_6685b9e70c2e592bd85a36d5281ef2d44444f84adc5b85ef5e01492078b1baa2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_110bdd81241fe25dae701ad727263135f1ac767ee3bf7d3ea1c1470038b73c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110bdd81241fe25dae701ad727263135f1ac767ee3bf7d3ea1c1470038b73c39->enter($__internal_110bdd81241fe25dae701ad727263135f1ac767ee3bf7d3ea1c1470038b73c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d2aa033d3a8cbfeb45d9f0816fca2ce1bca06760f1d9109194ffea8c21c0d9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2aa033d3a8cbfeb45d9f0816fca2ce1bca06760f1d9109194ffea8c21c0d9eb->enter($__internal_d2aa033d3a8cbfeb45d9f0816fca2ce1bca06760f1d9109194ffea8c21c0d9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_d2aa033d3a8cbfeb45d9f0816fca2ce1bca06760f1d9109194ffea8c21c0d9eb->leave($__internal_d2aa033d3a8cbfeb45d9f0816fca2ce1bca06760f1d9109194ffea8c21c0d9eb_prof);

        
        $__internal_110bdd81241fe25dae701ad727263135f1ac767ee3bf7d3ea1c1470038b73c39->leave($__internal_110bdd81241fe25dae701ad727263135f1ac767ee3bf7d3ea1c1470038b73c39_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e9fef24e5755cc8a19fd852fda1ec6fc7236a931df18d105781f34b35b5306fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9fef24e5755cc8a19fd852fda1ec6fc7236a931df18d105781f34b35b5306fe->enter($__internal_e9fef24e5755cc8a19fd852fda1ec6fc7236a931df18d105781f34b35b5306fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2ad76fa8d1190bf535a7f12cc87262e64bf9d1e42809e3b61e50c38e061dc898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad76fa8d1190bf535a7f12cc87262e64bf9d1e42809e3b61e50c38e061dc898->enter($__internal_2ad76fa8d1190bf535a7f12cc87262e64bf9d1e42809e3b61e50c38e061dc898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_2ad76fa8d1190bf535a7f12cc87262e64bf9d1e42809e3b61e50c38e061dc898->leave($__internal_2ad76fa8d1190bf535a7f12cc87262e64bf9d1e42809e3b61e50c38e061dc898_prof);

        
        $__internal_e9fef24e5755cc8a19fd852fda1ec6fc7236a931df18d105781f34b35b5306fe->leave($__internal_e9fef24e5755cc8a19fd852fda1ec6fc7236a931df18d105781f34b35b5306fe_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1947436272bf3f0d4d07ea1f7d60bebecb704f9cad0548738ee666f63f65a910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1947436272bf3f0d4d07ea1f7d60bebecb704f9cad0548738ee666f63f65a910->enter($__internal_1947436272bf3f0d4d07ea1f7d60bebecb704f9cad0548738ee666f63f65a910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_7d2a57660fa4b41d562da7ac494f559beba69a93804dd01666bb3e8b43f3fd67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2a57660fa4b41d562da7ac494f559beba69a93804dd01666bb3e8b43f3fd67->enter($__internal_7d2a57660fa4b41d562da7ac494f559beba69a93804dd01666bb3e8b43f3fd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7d2a57660fa4b41d562da7ac494f559beba69a93804dd01666bb3e8b43f3fd67->leave($__internal_7d2a57660fa4b41d562da7ac494f559beba69a93804dd01666bb3e8b43f3fd67_prof);

        
        $__internal_1947436272bf3f0d4d07ea1f7d60bebecb704f9cad0548738ee666f63f65a910->leave($__internal_1947436272bf3f0d4d07ea1f7d60bebecb704f9cad0548738ee666f63f65a910_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
