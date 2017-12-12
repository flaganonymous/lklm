<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_4287513fc1ef15e8bbc57df42a930582e6f5f4093cc3aaa3c9cec93cf182120d extends Twig_Template
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
        $__internal_a0572f34923ea8b2a241c24e873ed3766a5571fba407e8545eeb2998bc6f64f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0572f34923ea8b2a241c24e873ed3766a5571fba407e8545eeb2998bc6f64f3->enter($__internal_a0572f34923ea8b2a241c24e873ed3766a5571fba407e8545eeb2998bc6f64f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        $__internal_ec5b6e290c948ddb1e5d313f924beb0e3b896a0203d881268d44e0cd961eaa1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5b6e290c948ddb1e5d313f924beb0e3b896a0203d881268d44e0cd961eaa1f->enter($__internal_ec5b6e290c948ddb1e5d313f924beb0e3b896a0203d881268d44e0cd961eaa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "
";
        
        $__internal_a0572f34923ea8b2a241c24e873ed3766a5571fba407e8545eeb2998bc6f64f3->leave($__internal_a0572f34923ea8b2a241c24e873ed3766a5571fba407e8545eeb2998bc6f64f3_prof);

        
        $__internal_ec5b6e290c948ddb1e5d313f924beb0e3b896a0203d881268d44e0cd961eaa1f->leave($__internal_ec5b6e290c948ddb1e5d313f924beb0e3b896a0203d881268d44e0cd961eaa1f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "EasyAdminBundle:default:field_id.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
