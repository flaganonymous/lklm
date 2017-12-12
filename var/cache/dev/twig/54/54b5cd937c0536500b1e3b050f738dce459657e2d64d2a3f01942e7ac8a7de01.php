<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_9d1064d6e99672457ba8c1259006d3c41e9d0f5ded19ee74068fd4d291594412 extends Twig_Template
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
        $__internal_240e49e591bdc85afef059c7673fdbcf1bd2ee277a7663bf878ed0817ba86b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240e49e591bdc85afef059c7673fdbcf1bd2ee277a7663bf878ed0817ba86b8d->enter($__internal_240e49e591bdc85afef059c7673fdbcf1bd2ee277a7663bf878ed0817ba86b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_8d3b80f4f6d80b380657b0147209c4d1a78d04e282af468a8cb496d37ddbcdfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3b80f4f6d80b380657b0147209c4d1a78d04e282af468a8cb496d37ddbcdfc->enter($__internal_8d3b80f4f6d80b380657b0147209c4d1a78d04e282af468a8cb496d37ddbcdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_240e49e591bdc85afef059c7673fdbcf1bd2ee277a7663bf878ed0817ba86b8d->leave($__internal_240e49e591bdc85afef059c7673fdbcf1bd2ee277a7663bf878ed0817ba86b8d_prof);

        
        $__internal_8d3b80f4f6d80b380657b0147209c4d1a78d04e282af468a8cb496d37ddbcdfc->leave($__internal_8d3b80f4f6d80b380657b0147209c4d1a78d04e282af468a8cb496d37ddbcdfc_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_empty.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_empty.html.twig");
    }
}
