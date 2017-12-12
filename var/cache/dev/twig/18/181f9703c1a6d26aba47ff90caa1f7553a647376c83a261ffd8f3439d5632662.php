<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_78dd18531dc2dc05b2031110ac5028f7aaff9815e99f853800bb6982e35f944b extends Twig_Template
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
        $__internal_a82475e16f49bf6f0dc26ab2a499fcd9fdb76b0713f8489251f963f6c4855489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82475e16f49bf6f0dc26ab2a499fcd9fdb76b0713f8489251f963f6c4855489->enter($__internal_a82475e16f49bf6f0dc26ab2a499fcd9fdb76b0713f8489251f963f6c4855489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_ceeb4769261d98f5733bb8658410da568d0c6b3b9670203a62128966f79fa8f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceeb4769261d98f5733bb8658410da568d0c6b3b9670203a62128966f79fa8f8->enter($__internal_ceeb4769261d98f5733bb8658410da568d0c6b3b9670203a62128966f79fa8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_a82475e16f49bf6f0dc26ab2a499fcd9fdb76b0713f8489251f963f6c4855489->leave($__internal_a82475e16f49bf6f0dc26ab2a499fcd9fdb76b0713f8489251f963f6c4855489_prof);

        
        $__internal_ceeb4769261d98f5733bb8658410da568d0c6b3b9670203a62128966f79fa8f8->leave($__internal_ceeb4769261d98f5733bb8658410da568d0c6b3b9670203a62128966f79fa8f8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_null.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
