<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_73b3159b49164bf31d7fe1da6ce53176b84bbe0b029353242dfdadb16bb184c0 extends Twig_Template
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
        $__internal_9f47a10d135a0b80afb637d2c47f67af22951ac0e87e5df6eed651c5bcb406bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f47a10d135a0b80afb637d2c47f67af22951ac0e87e5df6eed651c5bcb406bf->enter($__internal_9f47a10d135a0b80afb637d2c47f67af22951ac0e87e5df6eed651c5bcb406bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        $__internal_10984d35d8c5c5ded75596e3598681c0e845accaa1e2dbdb16a3425ee2ad3aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10984d35d8c5c5ded75596e3598681c0e845accaa1e2dbdb16a3425ee2ad3aeb->enter($__internal_10984d35d8c5c5ded75596e3598681c0e845accaa1e2dbdb16a3425ee2ad3aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        }
        
        $__internal_9f47a10d135a0b80afb637d2c47f67af22951ac0e87e5df6eed651c5bcb406bf->leave($__internal_9f47a10d135a0b80afb637d2c47f67af22951ac0e87e5df6eed651c5bcb406bf_prof);

        
        $__internal_10984d35d8c5c5ded75596e3598681c0e845accaa1e2dbdb16a3425ee2ad3aeb->leave($__internal_10984d35d8c5c5ded75596e3598681c0e845accaa1e2dbdb16a3425ee2ad3aeb_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_string.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
