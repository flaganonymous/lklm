<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_ec9a609b9c1e15df71a513937859ec7e00726bed90232eb81806569985d2e19d extends Twig_Template
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
        $__internal_543445247eea0e910e0466f386f038bb5f69403ef008c0110feb5d068f76b408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_543445247eea0e910e0466f386f038bb5f69403ef008c0110feb5d068f76b408->enter($__internal_543445247eea0e910e0466f386f038bb5f69403ef008c0110feb5d068f76b408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_8689f49a7554b5c6badc2c1b54a43e3f3df7c01e7a41abdd8b4255e6013f1fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8689f49a7554b5c6badc2c1b54a43e3f3df7c01e7a41abdd8b4255e6013f1fc0->enter($__internal_8689f49a7554b5c6badc2c1b54a43e3f3df7c01e7a41abdd8b4255e6013f1fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_543445247eea0e910e0466f386f038bb5f69403ef008c0110feb5d068f76b408->leave($__internal_543445247eea0e910e0466f386f038bb5f69403ef008c0110feb5d068f76b408_prof);

        
        $__internal_8689f49a7554b5c6badc2c1b54a43e3f3df7c01e7a41abdd8b4255e6013f1fc0->leave($__internal_8689f49a7554b5c6badc2c1b54a43e3f3df7c01e7a41abdd8b4255e6013f1fc0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
