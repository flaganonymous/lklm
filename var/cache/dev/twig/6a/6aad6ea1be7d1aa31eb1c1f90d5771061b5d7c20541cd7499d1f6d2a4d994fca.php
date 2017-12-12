<?php

/* EasyAdminBundle:default:field_image.html.twig */
class __TwigTemplate_40d8968303360f1c0bcd3908c282621ecf31af430ef330fd0638ec562f1f1cfd extends Twig_Template
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
        $__internal_1ab94fb53ec1897027e9d2ffaec7f3628db52efbe0f4ded709bd7b620f83a23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab94fb53ec1897027e9d2ffaec7f3628db52efbe0f4ded709bd7b620f83a23e->enter($__internal_1ab94fb53ec1897027e9d2ffaec7f3628db52efbe0f4ded709bd7b620f83a23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

        $__internal_17e90ffd19cde11c49db9bb64a48478ed97c23ed6e998cced935a8de2264ad0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e90ffd19cde11c49db9bb64a48478ed97c23ed6e998cced935a8de2264ad0e->enter($__internal_17e90ffd19cde11c49db9bb64a48478ed97c23ed6e998cced935a8de2264ad0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
        echo twig_escape_filter($this->env, (isset($context["uuid"]) || array_key_exists("uuid", $context) ? $context["uuid"] : (function () { throw new Twig_Error_Runtime('Variable "uuid" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })())), "html", null, true);
        echo "\">
</a>

<div id=\"easyadmin-lightbox-";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["uuid"]) || array_key_exists("uuid", $context) ? $context["uuid"] : (function () { throw new Twig_Error_Runtime('Variable "uuid" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"easyadmin-lightbox\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 6, $this->getSourceContext()); })())), "html", null, true);
        echo "\">
</div>
";
        
        $__internal_1ab94fb53ec1897027e9d2ffaec7f3628db52efbe0f4ded709bd7b620f83a23e->leave($__internal_1ab94fb53ec1897027e9d2ffaec7f3628db52efbe0f4ded709bd7b620f83a23e_prof);

        
        $__internal_17e90ffd19cde11c49db9bb64a48478ed97c23ed6e998cced935a8de2264ad0e->leave($__internal_17e90ffd19cde11c49db9bb64a48478ed97c23ed6e998cced935a8de2264ad0e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  36 => 5,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-{{ uuid }}\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"{{ asset(value) }}\">
</a>

<div id=\"easyadmin-lightbox-{{ uuid }}\" class=\"easyadmin-lightbox\">
    <img src=\"{{ asset(value) }}\">
</div>
", "EasyAdminBundle:default:field_image.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_image.html.twig");
    }
}
