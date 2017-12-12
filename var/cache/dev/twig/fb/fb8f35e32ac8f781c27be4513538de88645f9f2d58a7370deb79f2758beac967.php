<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_0fa55ae05c98ad1db1b9aeeead63a4f1a44c1a6b449ffe16e3606ea7eb75b1ad extends Twig_Template
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
        $__internal_2becc79e2935495b3f96664f79ed2453a73c8b9f6803de8c2c64df9978945b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2becc79e2935495b3f96664f79ed2453a73c8b9f6803de8c2c64df9978945b52->enter($__internal_2becc79e2935495b3f96664f79ed2453a73c8b9f6803de8c2c64df9978945b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_7528f99e2e26bd130737b5fb15b4d8868bc8176da7ba240c650266f61fc19e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7528f99e2e26bd130737b5fb15b4d8868bc8176da7ba240c650266f61fc19e99->enter($__internal_7528f99e2e26bd130737b5fb15b4d8868bc8176da7ba240c650266f61fc19e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2becc79e2935495b3f96664f79ed2453a73c8b9f6803de8c2c64df9978945b52->leave($__internal_2becc79e2935495b3f96664f79ed2453a73c8b9f6803de8c2c64df9978945b52_prof);

        
        $__internal_7528f99e2e26bd130737b5fb15b4d8868bc8176da7ba240c650266f61fc19e99->leave($__internal_7528f99e2e26bd130737b5fb15b4d8868bc8176da7ba240c650266f61fc19e99_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
