<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_e3cafddd4cf6cd9ec13f5a1dbac0255025891e7d31b80df217520fcbadf47d6a extends Twig_Template
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
        $__internal_138c3c936e00b21ede83dc130fce89d1ecb6ddc9f5fc8e6b2ed3816bddac8720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138c3c936e00b21ede83dc130fce89d1ecb6ddc9f5fc8e6b2ed3816bddac8720->enter($__internal_138c3c936e00b21ede83dc130fce89d1ecb6ddc9f5fc8e6b2ed3816bddac8720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_837c698b79f4ddac4ff40caac17f75ed724a2464e37cdee7ff94ecea2195ccc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837c698b79f4ddac4ff40caac17f75ed724a2464e37cdee7ff94ecea2195ccc6->enter($__internal_837c698b79f4ddac4ff40caac17f75ed724a2464e37cdee7ff94ecea2195ccc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_138c3c936e00b21ede83dc130fce89d1ecb6ddc9f5fc8e6b2ed3816bddac8720->leave($__internal_138c3c936e00b21ede83dc130fce89d1ecb6ddc9f5fc8e6b2ed3816bddac8720_prof);

        
        $__internal_837c698b79f4ddac4ff40caac17f75ed724a2464e37cdee7ff94ecea2195ccc6->leave($__internal_837c698b79f4ddac4ff40caac17f75ed724a2464e37cdee7ff94ecea2195ccc6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cfeae3e5cb5455f6bb130c00408a6bb8c78ba74b57c0fe7581e8841033450d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfeae3e5cb5455f6bb130c00408a6bb8c78ba74b57c0fe7581e8841033450d89->enter($__internal_cfeae3e5cb5455f6bb130c00408a6bb8c78ba74b57c0fe7581e8841033450d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_634871653051f408092e09414b7cecf842b338d4a6997b4d1fccc0d6bd793f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634871653051f408092e09414b7cecf842b338d4a6997b4d1fccc0d6bd793f24->enter($__internal_634871653051f408092e09414b7cecf842b338d4a6997b4d1fccc0d6bd793f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_634871653051f408092e09414b7cecf842b338d4a6997b4d1fccc0d6bd793f24->leave($__internal_634871653051f408092e09414b7cecf842b338d4a6997b4d1fccc0d6bd793f24_prof);

        
        $__internal_cfeae3e5cb5455f6bb130c00408a6bb8c78ba74b57c0fe7581e8841033450d89->leave($__internal_cfeae3e5cb5455f6bb130c00408a6bb8c78ba74b57c0fe7581e8841033450d89_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fd568d23164733c67950ebcf9d31402d0281a9c9c0e9dce785b8b7005202d2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd568d23164733c67950ebcf9d31402d0281a9c9c0e9dce785b8b7005202d2b3->enter($__internal_fd568d23164733c67950ebcf9d31402d0281a9c9c0e9dce785b8b7005202d2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_af18b22d2836abd632781289052819ba03cb7b39001c63fb2199a5e1abe5604e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af18b22d2836abd632781289052819ba03cb7b39001c63fb2199a5e1abe5604e->enter($__internal_af18b22d2836abd632781289052819ba03cb7b39001c63fb2199a5e1abe5604e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_af18b22d2836abd632781289052819ba03cb7b39001c63fb2199a5e1abe5604e->leave($__internal_af18b22d2836abd632781289052819ba03cb7b39001c63fb2199a5e1abe5604e_prof);

        
        $__internal_fd568d23164733c67950ebcf9d31402d0281a9c9c0e9dce785b8b7005202d2b3->leave($__internal_fd568d23164733c67950ebcf9d31402d0281a9c9c0e9dce785b8b7005202d2b3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_005eacdf39e8ef23f36e9835eb5693e2340ec9dea4f1d131106dbed1316a3429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005eacdf39e8ef23f36e9835eb5693e2340ec9dea4f1d131106dbed1316a3429->enter($__internal_005eacdf39e8ef23f36e9835eb5693e2340ec9dea4f1d131106dbed1316a3429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2b27bedab92f564cd1df2428938116e3025bde37fbaefd150df2db0e0f802071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b27bedab92f564cd1df2428938116e3025bde37fbaefd150df2db0e0f802071->enter($__internal_2b27bedab92f564cd1df2428938116e3025bde37fbaefd150df2db0e0f802071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2b27bedab92f564cd1df2428938116e3025bde37fbaefd150df2db0e0f802071->leave($__internal_2b27bedab92f564cd1df2428938116e3025bde37fbaefd150df2db0e0f802071_prof);

        
        $__internal_005eacdf39e8ef23f36e9835eb5693e2340ec9dea4f1d131106dbed1316a3429->leave($__internal_005eacdf39e8ef23f36e9835eb5693e2340ec9dea4f1d131106dbed1316a3429_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
