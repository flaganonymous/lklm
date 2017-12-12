<?php

/* EasyAdminBundle:default:field_file.html.twig */
class __TwigTemplate_66298a2e76d45fb73606f558aa737b1d04bd21e6ce18e905ce71f1307ee14182 extends Twig_Template
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
        $__internal_d0017a15127d5e6e246c7e12224e1f26a7d821b3697c3f29bf6b94c69c0ff544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0017a15127d5e6e246c7e12224e1f26a7d821b3697c3f29bf6b94c69c0ff544->enter($__internal_d0017a15127d5e6e246c7e12224e1f26a7d821b3697c3f29bf6b94c69c0ff544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        $__internal_8c918f86d4e9940f0d40fcd399f8f1519d06b835bb11af336ed64e0ec7cd7200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c918f86d4e9940f0d40fcd399f8f1519d06b835bb11af336ed64e0ec7cd7200->enter($__internal_8c918f86d4e9940f0d40fcd399f8f1519d06b835bb11af336ed64e0ec7cd7200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })())), "html", null, true);
        echo "\" target=\"_blank\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 2, $this->getSourceContext()); })())), "html", null, true);
        echo "
</a>
";
        
        $__internal_d0017a15127d5e6e246c7e12224e1f26a7d821b3697c3f29bf6b94c69c0ff544->leave($__internal_d0017a15127d5e6e246c7e12224e1f26a7d821b3697c3f29bf6b94c69c0ff544_prof);

        
        $__internal_8c918f86d4e9940f0d40fcd399f8f1519d06b835bb11af336ed64e0ec7cd7200->leave($__internal_8c918f86d4e9940f0d40fcd399f8f1519d06b835bb11af336ed64e0ec7cd7200_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ asset(value) }}\" target=\"_blank\">
    {{ filename|easyadmin_truncate }}
</a>
", "EasyAdminBundle:default:field_file.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_file.html.twig");
    }
}
