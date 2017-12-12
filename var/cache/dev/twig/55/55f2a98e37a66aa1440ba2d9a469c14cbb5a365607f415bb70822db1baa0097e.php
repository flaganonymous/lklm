<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_09f978a7948f5f6d8a86793c3e536bd43e0987bb43f7e4893a1d14be4d112181 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b6ae2a7256dbf282b89dbec98a60aaf86ad4c8c60388c44c8335b78153821a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6ae2a7256dbf282b89dbec98a60aaf86ad4c8c60388c44c8335b78153821a3->enter($__internal_7b6ae2a7256dbf282b89dbec98a60aaf86ad4c8c60388c44c8335b78153821a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_274d12141c524c0cca39f444264633ab54cd2737adcefc75b413ec4c48a10257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274d12141c524c0cca39f444264633ab54cd2737adcefc75b413ec4c48a10257->enter($__internal_274d12141c524c0cca39f444264633ab54cd2737adcefc75b413ec4c48a10257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b6ae2a7256dbf282b89dbec98a60aaf86ad4c8c60388c44c8335b78153821a3->leave($__internal_7b6ae2a7256dbf282b89dbec98a60aaf86ad4c8c60388c44c8335b78153821a3_prof);

        
        $__internal_274d12141c524c0cca39f444264633ab54cd2737adcefc75b413ec4c48a10257->leave($__internal_274d12141c524c0cca39f444264633ab54cd2737adcefc75b413ec4c48a10257_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b118f0a92bc5b14134a2eeddc5a52adafa02f126bf4e4451b757948d589c2527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b118f0a92bc5b14134a2eeddc5a52adafa02f126bf4e4451b757948d589c2527->enter($__internal_b118f0a92bc5b14134a2eeddc5a52adafa02f126bf4e4451b757948d589c2527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c073759fde94951cd23e6256bb0f54455a863518f89a9be6513f0b2b8a55c43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c073759fde94951cd23e6256bb0f54455a863518f89a9be6513f0b2b8a55c43c->enter($__internal_c073759fde94951cd23e6256bb0f54455a863518f89a9be6513f0b2b8a55c43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_c073759fde94951cd23e6256bb0f54455a863518f89a9be6513f0b2b8a55c43c->leave($__internal_c073759fde94951cd23e6256bb0f54455a863518f89a9be6513f0b2b8a55c43c_prof);

        
        $__internal_b118f0a92bc5b14134a2eeddc5a52adafa02f126bf4e4451b757948d589c2527->leave($__internal_b118f0a92bc5b14134a2eeddc5a52adafa02f126bf4e4451b757948d589c2527_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
