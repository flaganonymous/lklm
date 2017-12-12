<?php

/* :easy_admin/Event:list.html.twig */
class __TwigTemplate_033ec75cfdee634738f819f0b71eaa63b932c1acc4e1ca4bbd2735f8edd803e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EasyAdmin/default/list.html.twig", ":easy_admin/Event:list.html.twig", 1);
        $this->blocks = array(
            'global_actions' => array($this, 'block_global_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_199d4d1d0ffa74dd8dc1c62292634eba67a1ca83eaca1c7a908b4264ba625389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199d4d1d0ffa74dd8dc1c62292634eba67a1ca83eaca1c7a908b4264ba625389->enter($__internal_199d4d1d0ffa74dd8dc1c62292634eba67a1ca83eaca1c7a908b4264ba625389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":easy_admin/Event:list.html.twig"));

        $__internal_b6b73f57b353a55fa256390da674f8aae29ff8f090c8380bf880844070924ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b73f57b353a55fa256390da674f8aae29ff8f090c8380bf880844070924ffb->enter($__internal_b6b73f57b353a55fa256390da674f8aae29ff8f090c8380bf880844070924ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":easy_admin/Event:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_199d4d1d0ffa74dd8dc1c62292634eba67a1ca83eaca1c7a908b4264ba625389->leave($__internal_199d4d1d0ffa74dd8dc1c62292634eba67a1ca83eaca1c7a908b4264ba625389_prof);

        
        $__internal_b6b73f57b353a55fa256390da674f8aae29ff8f090c8380bf880844070924ffb->leave($__internal_b6b73f57b353a55fa256390da674f8aae29ff8f090c8380bf880844070924ffb_prof);

    }

    // line 3
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_6262b87f4293ea8777f7446a5437c44d4bcd76b3b19ef83e175d97e81c1f279c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6262b87f4293ea8777f7446a5437c44d4bcd76b3b19ef83e175d97e81c1f279c->enter($__internal_6262b87f4293ea8777f7446a5437c44d4bcd76b3b19ef83e175d97e81c1f279c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_b563bfb9ae3e6ceb9db5b58387a4f4bf4f453d64b00424efddbf29f54ef5c8a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b563bfb9ae3e6ceb9db5b58387a4f4bf4f453d64b00424efddbf29f54ef5c8a8->enter($__internal_b563bfb9ae3e6ceb9db5b58387a4f4bf4f453d64b00424efddbf29f54ef5c8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        // line 4
        echo "  ";
        $this->displayParentBlock("global_actions", $context, $blocks);
        echo "
    <div class=\"btn-group pull-right\">
        <a class=\"btn btn-primary\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "request", array()), "query", array()), array("action" => "export"))), "html", null, true);
        echo "\" target=\"_blank\">
            <i class=\"fa fa-file-excel-o\"></i>
            Exporter <small>(xls)</small>
        </a>
    </div>

";
        
        $__internal_b563bfb9ae3e6ceb9db5b58387a4f4bf4f453d64b00424efddbf29f54ef5c8a8->leave($__internal_b563bfb9ae3e6ceb9db5b58387a4f4bf4f453d64b00424efddbf29f54ef5c8a8_prof);

        
        $__internal_6262b87f4293ea8777f7446a5437c44d4bcd76b3b19ef83e175d97e81c1f279c->leave($__internal_6262b87f4293ea8777f7446a5437c44d4bcd76b3b19ef83e175d97e81c1f279c_prof);

    }

    public function getTemplateName()
    {
        return ":easy_admin/Event:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@EasyAdmin/default/list.html.twig' %}

{% block global_actions %}
  {{ parent() }}
    <div class=\"btn-group pull-right\">
        <a class=\"btn btn-primary\" href=\"{{ path('easyadmin', app.request.query|merge({ action: \"export\" })) }}\" target=\"_blank\">
            <i class=\"fa fa-file-excel-o\"></i>
            Exporter <small>(xls)</small>
        </a>
    </div>

{% endblock %}", ":easy_admin/Event:list.html.twig", "/Applications/MAMP/htdocs/pimms-web/app/Resources/views/easy_admin/Event/list.html.twig");
    }
}
