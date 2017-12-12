<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_33b1db3f000211d9ce89910fcba61fb5277bbd5c2bb0fd27173fddb0edf375a2 extends Twig_Template
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
        $__internal_02536bb81f4fc6d109fb0c8077a9eafa6f507bd541b0b5d5f64dd56566ec3fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02536bb81f4fc6d109fb0c8077a9eafa6f507bd541b0b5d5f64dd56566ec3fb8->enter($__internal_02536bb81f4fc6d109fb0c8077a9eafa6f507bd541b0b5d5f64dd56566ec3fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        $__internal_c7a4dafdd470cf1b155def459c9a1d4b6300425b30c7e7928aff454a24f1e7d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a4dafdd470cf1b155def459c9a1d4b6300425b30c7e7928aff454a24f1e7d2->enter($__internal_c7a4dafdd470cf1b155def459c9a1d4b6300425b30c7e7928aff454a24f1e7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_02536bb81f4fc6d109fb0c8077a9eafa6f507bd541b0b5d5f64dd56566ec3fb8->leave($__internal_02536bb81f4fc6d109fb0c8077a9eafa6f507bd541b0b5d5f64dd56566ec3fb8_prof);

        
        $__internal_c7a4dafdd470cf1b155def459c9a1d4b6300425b30c7e7928aff454a24f1e7d2->leave($__internal_c7a4dafdd470cf1b155def459c9a1d4b6300425b30c7e7928aff454a24f1e7d2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "EasyAdminBundle:default:label_inaccessible.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_inaccessible.html.twig");
    }
}
