<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_d87f2f4a14291c9ba8d4ee2364d023ac7752ea0fafc4a7d6ef23316c24608570 extends Twig_Template
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
        $__internal_cfbc5f92412e3fccd8388924aa35fe8180a5680354b9f62513c02c6d7636d9f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfbc5f92412e3fccd8388924aa35fe8180a5680354b9f62513c02c6d7636d9f0->enter($__internal_cfbc5f92412e3fccd8388924aa35fe8180a5680354b9f62513c02c6d7636d9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_529a7a77e184d57d07d666e3f6f3f76c9e0a69957bccb7c5c01927523aafe4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529a7a77e184d57d07d666e3f6f3f76c9e0a69957bccb7c5c01927523aafe4e7->enter($__internal_529a7a77e184d57d07d666e3f6f3f76c9e0a69957bccb7c5c01927523aafe4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_cfbc5f92412e3fccd8388924aa35fe8180a5680354b9f62513c02c6d7636d9f0->leave($__internal_cfbc5f92412e3fccd8388924aa35fe8180a5680354b9f62513c02c6d7636d9f0_prof);

        
        $__internal_529a7a77e184d57d07d666e3f6f3f76c9e0a69957bccb7c5c01927523aafe4e7->leave($__internal_529a7a77e184d57d07d666e3f6f3f76c9e0a69957bccb7c5c01927523aafe4e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
