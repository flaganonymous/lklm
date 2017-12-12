<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f5fa5f5ca39e7429407f7b4cb6631a23703ceccedf2bcaf3dc9863175552f10f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_e3a9690d8e2b1a42cdc47c0dc984d8d48288a500f9f04d30778679d4a91684b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a9690d8e2b1a42cdc47c0dc984d8d48288a500f9f04d30778679d4a91684b2->enter($__internal_e3a9690d8e2b1a42cdc47c0dc984d8d48288a500f9f04d30778679d4a91684b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_67cbda9654e7e4b61dbc8f117dc25f8211560f9cc93ea1fac009d5d8bd25e8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67cbda9654e7e4b61dbc8f117dc25f8211560f9cc93ea1fac009d5d8bd25e8fb->enter($__internal_67cbda9654e7e4b61dbc8f117dc25f8211560f9cc93ea1fac009d5d8bd25e8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3a9690d8e2b1a42cdc47c0dc984d8d48288a500f9f04d30778679d4a91684b2->leave($__internal_e3a9690d8e2b1a42cdc47c0dc984d8d48288a500f9f04d30778679d4a91684b2_prof);

        
        $__internal_67cbda9654e7e4b61dbc8f117dc25f8211560f9cc93ea1fac009d5d8bd25e8fb->leave($__internal_67cbda9654e7e4b61dbc8f117dc25f8211560f9cc93ea1fac009d5d8bd25e8fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca223182563cf82f706480c5404acde7bbe13e8abeed9b063d827a95073ce11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca223182563cf82f706480c5404acde7bbe13e8abeed9b063d827a95073ce11d->enter($__internal_ca223182563cf82f706480c5404acde7bbe13e8abeed9b063d827a95073ce11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_015732806a38a40752a4f5d783beca3c543512252b2d8ab571779cc161f32b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015732806a38a40752a4f5d783beca3c543512252b2d8ab571779cc161f32b5b->enter($__internal_015732806a38a40752a4f5d783beca3c543512252b2d8ab571779cc161f32b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_015732806a38a40752a4f5d783beca3c543512252b2d8ab571779cc161f32b5b->leave($__internal_015732806a38a40752a4f5d783beca3c543512252b2d8ab571779cc161f32b5b_prof);

        
        $__internal_ca223182563cf82f706480c5404acde7bbe13e8abeed9b063d827a95073ce11d->leave($__internal_ca223182563cf82f706480c5404acde7bbe13e8abeed9b063d827a95073ce11d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
