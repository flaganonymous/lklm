<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c911053d90af4f97a32d73c744167acb86eb2509a824ee251f3d62281b465a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e00e32dc2957d60a63497abfe1255d11703fb5e01fa2d3323a2a264c7e456b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00e32dc2957d60a63497abfe1255d11703fb5e01fa2d3323a2a264c7e456b43->enter($__internal_e00e32dc2957d60a63497abfe1255d11703fb5e01fa2d3323a2a264c7e456b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_f3b7092001b0f5af1be5e592284bb4317e0fe7b4cfb58ae10a1267f6b5dc270d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b7092001b0f5af1be5e592284bb4317e0fe7b4cfb58ae10a1267f6b5dc270d->enter($__internal_f3b7092001b0f5af1be5e592284bb4317e0fe7b4cfb58ae10a1267f6b5dc270d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e00e32dc2957d60a63497abfe1255d11703fb5e01fa2d3323a2a264c7e456b43->leave($__internal_e00e32dc2957d60a63497abfe1255d11703fb5e01fa2d3323a2a264c7e456b43_prof);

        
        $__internal_f3b7092001b0f5af1be5e592284bb4317e0fe7b4cfb58ae10a1267f6b5dc270d->leave($__internal_f3b7092001b0f5af1be5e592284bb4317e0fe7b4cfb58ae10a1267f6b5dc270d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4706d9171abe3b243f74428383400e3280634cac63869891a167dcc5c04186f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4706d9171abe3b243f74428383400e3280634cac63869891a167dcc5c04186f8->enter($__internal_4706d9171abe3b243f74428383400e3280634cac63869891a167dcc5c04186f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f986cb30a57c6ff29c993487207ca64adbfe764dafedcd21a0838ef52faabce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f986cb30a57c6ff29c993487207ca64adbfe764dafedcd21a0838ef52faabce1->enter($__internal_f986cb30a57c6ff29c993487207ca64adbfe764dafedcd21a0838ef52faabce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f986cb30a57c6ff29c993487207ca64adbfe764dafedcd21a0838ef52faabce1->leave($__internal_f986cb30a57c6ff29c993487207ca64adbfe764dafedcd21a0838ef52faabce1_prof);

        
        $__internal_4706d9171abe3b243f74428383400e3280634cac63869891a167dcc5c04186f8->leave($__internal_4706d9171abe3b243f74428383400e3280634cac63869891a167dcc5c04186f8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2377c5f6171b7de3bed98e3e4053501666434fa671593976f36a01ebdf67ef71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2377c5f6171b7de3bed98e3e4053501666434fa671593976f36a01ebdf67ef71->enter($__internal_2377c5f6171b7de3bed98e3e4053501666434fa671593976f36a01ebdf67ef71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4788ce77900325b36fd6fe71794edcbee06a9e1dbb5e397ea83be6928ed9b296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4788ce77900325b36fd6fe71794edcbee06a9e1dbb5e397ea83be6928ed9b296->enter($__internal_4788ce77900325b36fd6fe71794edcbee06a9e1dbb5e397ea83be6928ed9b296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4788ce77900325b36fd6fe71794edcbee06a9e1dbb5e397ea83be6928ed9b296->leave($__internal_4788ce77900325b36fd6fe71794edcbee06a9e1dbb5e397ea83be6928ed9b296_prof);

        
        $__internal_2377c5f6171b7de3bed98e3e4053501666434fa671593976f36a01ebdf67ef71->leave($__internal_2377c5f6171b7de3bed98e3e4053501666434fa671593976f36a01ebdf67ef71_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7bf76805ab485a323d3ade908ddb7983bcf55c82ed7bb1acb0b2ed002b554b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf76805ab485a323d3ade908ddb7983bcf55c82ed7bb1acb0b2ed002b554b90->enter($__internal_7bf76805ab485a323d3ade908ddb7983bcf55c82ed7bb1acb0b2ed002b554b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0d944172652a2cf35502c7fda7e041e398930a53286972b4dea50c412a7b239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d944172652a2cf35502c7fda7e041e398930a53286972b4dea50c412a7b239->enter($__internal_d0d944172652a2cf35502c7fda7e041e398930a53286972b4dea50c412a7b239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_d0d944172652a2cf35502c7fda7e041e398930a53286972b4dea50c412a7b239->leave($__internal_d0d944172652a2cf35502c7fda7e041e398930a53286972b4dea50c412a7b239_prof);

        
        $__internal_7bf76805ab485a323d3ade908ddb7983bcf55c82ed7bb1acb0b2ed002b554b90->leave($__internal_7bf76805ab485a323d3ade908ddb7983bcf55c82ed7bb1acb0b2ed002b554b90_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
