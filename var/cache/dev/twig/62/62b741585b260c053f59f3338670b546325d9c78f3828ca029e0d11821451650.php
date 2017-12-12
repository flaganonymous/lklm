<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2215421360b1d141db7ec99528401948ce42cedf241d483ef2d431e6f43b5cc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_19ac1b1ea1bdaa730ec564e096cc4cd29f5b53fb8f18867939bd0182257ae54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ac1b1ea1bdaa730ec564e096cc4cd29f5b53fb8f18867939bd0182257ae54a->enter($__internal_19ac1b1ea1bdaa730ec564e096cc4cd29f5b53fb8f18867939bd0182257ae54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_fce4c0aa4d18fbddf3bd5f46d554b9760ab68e34a48d66004050ecba5f94fb47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce4c0aa4d18fbddf3bd5f46d554b9760ab68e34a48d66004050ecba5f94fb47->enter($__internal_fce4c0aa4d18fbddf3bd5f46d554b9760ab68e34a48d66004050ecba5f94fb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19ac1b1ea1bdaa730ec564e096cc4cd29f5b53fb8f18867939bd0182257ae54a->leave($__internal_19ac1b1ea1bdaa730ec564e096cc4cd29f5b53fb8f18867939bd0182257ae54a_prof);

        
        $__internal_fce4c0aa4d18fbddf3bd5f46d554b9760ab68e34a48d66004050ecba5f94fb47->leave($__internal_fce4c0aa4d18fbddf3bd5f46d554b9760ab68e34a48d66004050ecba5f94fb47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5efdb34d7901b6631b6059ca1305e6994c2b0029db064cba170f169e1cac9b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5efdb34d7901b6631b6059ca1305e6994c2b0029db064cba170f169e1cac9b4c->enter($__internal_5efdb34d7901b6631b6059ca1305e6994c2b0029db064cba170f169e1cac9b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2775c869ddc791fdb87a0f2a69d412ecf3724ce350edb4d9fbc269c881374406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2775c869ddc791fdb87a0f2a69d412ecf3724ce350edb4d9fbc269c881374406->enter($__internal_2775c869ddc791fdb87a0f2a69d412ecf3724ce350edb4d9fbc269c881374406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2775c869ddc791fdb87a0f2a69d412ecf3724ce350edb4d9fbc269c881374406->leave($__internal_2775c869ddc791fdb87a0f2a69d412ecf3724ce350edb4d9fbc269c881374406_prof);

        
        $__internal_5efdb34d7901b6631b6059ca1305e6994c2b0029db064cba170f169e1cac9b4c->leave($__internal_5efdb34d7901b6631b6059ca1305e6994c2b0029db064cba170f169e1cac9b4c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
