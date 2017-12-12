<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f63964f2f28fb740683aa0b7fbf4517af7863e2d0d59311a3e81b5941f854045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_1a48cd80f7ef85d527a6d9a7e04a007285a04a493090e27fb250d255f32bb3a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a48cd80f7ef85d527a6d9a7e04a007285a04a493090e27fb250d255f32bb3a1->enter($__internal_1a48cd80f7ef85d527a6d9a7e04a007285a04a493090e27fb250d255f32bb3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_0777c9b38d9789e523e80760110f7b88daab08f9cfe425b39396f6245923c8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0777c9b38d9789e523e80760110f7b88daab08f9cfe425b39396f6245923c8ee->enter($__internal_0777c9b38d9789e523e80760110f7b88daab08f9cfe425b39396f6245923c8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a48cd80f7ef85d527a6d9a7e04a007285a04a493090e27fb250d255f32bb3a1->leave($__internal_1a48cd80f7ef85d527a6d9a7e04a007285a04a493090e27fb250d255f32bb3a1_prof);

        
        $__internal_0777c9b38d9789e523e80760110f7b88daab08f9cfe425b39396f6245923c8ee->leave($__internal_0777c9b38d9789e523e80760110f7b88daab08f9cfe425b39396f6245923c8ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd1e2ac8264c682b827de51fad12c3ba0e6ef570c39f0ab9ebb3fc59667dd598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1e2ac8264c682b827de51fad12c3ba0e6ef570c39f0ab9ebb3fc59667dd598->enter($__internal_cd1e2ac8264c682b827de51fad12c3ba0e6ef570c39f0ab9ebb3fc59667dd598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f970ffa8f75f191909dfbc112e37ae63cd82fee32c89c66cf864b4fde7e2525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f970ffa8f75f191909dfbc112e37ae63cd82fee32c89c66cf864b4fde7e2525->enter($__internal_1f970ffa8f75f191909dfbc112e37ae63cd82fee32c89c66cf864b4fde7e2525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_1f970ffa8f75f191909dfbc112e37ae63cd82fee32c89c66cf864b4fde7e2525->leave($__internal_1f970ffa8f75f191909dfbc112e37ae63cd82fee32c89c66cf864b4fde7e2525_prof);

        
        $__internal_cd1e2ac8264c682b827de51fad12c3ba0e6ef570c39f0ab9ebb3fc59667dd598->leave($__internal_cd1e2ac8264c682b827de51fad12c3ba0e6ef570c39f0ab9ebb3fc59667dd598_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
