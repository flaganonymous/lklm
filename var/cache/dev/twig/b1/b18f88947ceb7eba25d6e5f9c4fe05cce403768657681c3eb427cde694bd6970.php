<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f1c3b6433deff51d76394e7b671f4fb6fb442a60efacff12289bb1691a8f1616 extends Twig_Template
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
        $__internal_74fb6efcfb72b82731defe8b461b5202cc9aaff68fddb54f305fa307bf42040c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74fb6efcfb72b82731defe8b461b5202cc9aaff68fddb54f305fa307bf42040c->enter($__internal_74fb6efcfb72b82731defe8b461b5202cc9aaff68fddb54f305fa307bf42040c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_e8f3339d5414651bfc68b0acd186d1096c4d5045f2f230e36282c9c75ef0f27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f3339d5414651bfc68b0acd186d1096c4d5045f2f230e36282c9c75ef0f27f->enter($__internal_e8f3339d5414651bfc68b0acd186d1096c4d5045f2f230e36282c9c75ef0f27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_74fb6efcfb72b82731defe8b461b5202cc9aaff68fddb54f305fa307bf42040c->leave($__internal_74fb6efcfb72b82731defe8b461b5202cc9aaff68fddb54f305fa307bf42040c_prof);

        
        $__internal_e8f3339d5414651bfc68b0acd186d1096c4d5045f2f230e36282c9c75ef0f27f->leave($__internal_e8f3339d5414651bfc68b0acd186d1096c4d5045f2f230e36282c9c75ef0f27f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
