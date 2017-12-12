<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_c6110ba1f1d1b7e3d232d8c189c7d5da7665af90c2ac065800541a5091a7bb44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_098c60c8e72f22d3c2c2cbbeeeafb60d71f25178fc0a44015ce26c70f6a89d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098c60c8e72f22d3c2c2cbbeeeafb60d71f25178fc0a44015ce26c70f6a89d29->enter($__internal_098c60c8e72f22d3c2c2cbbeeeafb60d71f25178fc0a44015ce26c70f6a89d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_bb7faaae78770f4f3fd25479d315c4e857e3659b40c4638557ed2b5f63edc445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7faaae78770f4f3fd25479d315c4e857e3659b40c4638557ed2b5f63edc445->enter($__internal_bb7faaae78770f4f3fd25479d315c4e857e3659b40c4638557ed2b5f63edc445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_098c60c8e72f22d3c2c2cbbeeeafb60d71f25178fc0a44015ce26c70f6a89d29->leave($__internal_098c60c8e72f22d3c2c2cbbeeeafb60d71f25178fc0a44015ce26c70f6a89d29_prof);

        
        $__internal_bb7faaae78770f4f3fd25479d315c4e857e3659b40c4638557ed2b5f63edc445->leave($__internal_bb7faaae78770f4f3fd25479d315c4e857e3659b40c4638557ed2b5f63edc445_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9814fb04facc8d58ad3ba7f4b38e4c2ff0c490071446d9c11678044f29a5aeae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9814fb04facc8d58ad3ba7f4b38e4c2ff0c490071446d9c11678044f29a5aeae->enter($__internal_9814fb04facc8d58ad3ba7f4b38e4c2ff0c490071446d9c11678044f29a5aeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4c4aa948bd9aa3b729863c93ec19b266b738344450069c480c01f12594990177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4aa948bd9aa3b729863c93ec19b266b738344450069c480c01f12594990177->enter($__internal_4c4aa948bd9aa3b729863c93ec19b266b738344450069c480c01f12594990177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4c4aa948bd9aa3b729863c93ec19b266b738344450069c480c01f12594990177->leave($__internal_4c4aa948bd9aa3b729863c93ec19b266b738344450069c480c01f12594990177_prof);

        
        $__internal_9814fb04facc8d58ad3ba7f4b38e4c2ff0c490071446d9c11678044f29a5aeae->leave($__internal_9814fb04facc8d58ad3ba7f4b38e4c2ff0c490071446d9c11678044f29a5aeae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
