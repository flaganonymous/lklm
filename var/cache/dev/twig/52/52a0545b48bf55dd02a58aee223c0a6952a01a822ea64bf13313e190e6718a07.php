<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_22f342ec59ace27bef280f117cfa90f0ab61bf2c2b5f5f40acffbdfa4a46802e extends Twig_Template
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
        $__internal_f61dbbe3e6d3c83e2a30286dda867fba088d8d2cba546d4891e8275cf93a6e9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f61dbbe3e6d3c83e2a30286dda867fba088d8d2cba546d4891e8275cf93a6e9b->enter($__internal_f61dbbe3e6d3c83e2a30286dda867fba088d8d2cba546d4891e8275cf93a6e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        $__internal_497fb56ce087760c37df3dec2332c6f9437af518519ad8215be8b0b762b26528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497fb56ce087760c37df3dec2332c6f9437af518519ad8215be8b0b762b26528->enter($__internal_497fb56ce087760c37df3dec2332c6f9437af518519ad8215be8b0b762b26528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_f61dbbe3e6d3c83e2a30286dda867fba088d8d2cba546d4891e8275cf93a6e9b->leave($__internal_f61dbbe3e6d3c83e2a30286dda867fba088d8d2cba546d4891e8275cf93a6e9b_prof);

        
        $__internal_497fb56ce087760c37df3dec2332c6f9437af518519ad8215be8b0b762b26528->leave($__internal_497fb56ce087760c37df3dec2332c6f9437af518519ad8215be8b0b762b26528_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label\">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:field_object.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_object.html.twig");
    }
}
