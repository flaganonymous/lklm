<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_28cb208c65e1b80ab8df82097d52a522634a53c0a0a680c2206d5e3c9a5e239c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_02dc5e17431aa4250d68d38f9c80d64813b2607668231077815c58db77de8345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02dc5e17431aa4250d68d38f9c80d64813b2607668231077815c58db77de8345->enter($__internal_02dc5e17431aa4250d68d38f9c80d64813b2607668231077815c58db77de8345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_71161dfe19c4bb2dcdcb7b01452e97116f953d256d3f78bad3bbca0118fcdb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71161dfe19c4bb2dcdcb7b01452e97116f953d256d3f78bad3bbca0118fcdb3e->enter($__internal_71161dfe19c4bb2dcdcb7b01452e97116f953d256d3f78bad3bbca0118fcdb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02dc5e17431aa4250d68d38f9c80d64813b2607668231077815c58db77de8345->leave($__internal_02dc5e17431aa4250d68d38f9c80d64813b2607668231077815c58db77de8345_prof);

        
        $__internal_71161dfe19c4bb2dcdcb7b01452e97116f953d256d3f78bad3bbca0118fcdb3e->leave($__internal_71161dfe19c4bb2dcdcb7b01452e97116f953d256d3f78bad3bbca0118fcdb3e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1424163828338594168a921e193c6336579147b872f4007f5cff7a808b18e1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1424163828338594168a921e193c6336579147b872f4007f5cff7a808b18e1e4->enter($__internal_1424163828338594168a921e193c6336579147b872f4007f5cff7a808b18e1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_305e131df9c586e1730b72b15cee2e014698a6e678ab7e2b47ef509a2e539505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305e131df9c586e1730b72b15cee2e014698a6e678ab7e2b47ef509a2e539505->enter($__internal_305e131df9c586e1730b72b15cee2e014698a6e678ab7e2b47ef509a2e539505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_305e131df9c586e1730b72b15cee2e014698a6e678ab7e2b47ef509a2e539505->leave($__internal_305e131df9c586e1730b72b15cee2e014698a6e678ab7e2b47ef509a2e539505_prof);

        
        $__internal_1424163828338594168a921e193c6336579147b872f4007f5cff7a808b18e1e4->leave($__internal_1424163828338594168a921e193c6336579147b872f4007f5cff7a808b18e1e4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
