<?php

/* EasyAdminBundle:default/includes:_actions.html.twig */
class __TwigTemplate_9527b2c2e2afcc0b3e07080f897bfd92de0c2e9775dd5214d890886c7e5c5b99 extends Twig_Template
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
        $__internal_5fb11c013dad43002bc4d1066c6bd7abc1a7db7f37e244565137611556a3671d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb11c013dad43002bc4d1066c6bd7abc1a7db7f37e244565137611556a3671d->enter($__internal_5fb11c013dad43002bc4d1066c6bd7abc1a7db7f37e244565137611556a3671d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default/includes:_actions.html.twig"));

        $__internal_b16e3a4ef74e62b24ee7326414c5206b87dd4a6ddac8442c89842c902bbfb9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16e3a4ef74e62b24ee7326414c5206b87dd4a6ddac8442c89842c902bbfb9e8->enter($__internal_b16e3a4ef74e62b24ee7326414c5206b87dd4a6ddac8442c89842c902bbfb9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default/includes:_actions.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new Twig_Error_Runtime('Variable "actions" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 2
            echo "    ";
            if (("list" == twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "name", array()))) {
                // line 3
                echo "        ";
                $context["action_href"] = ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["request_parameters"] ?? null), "referer", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["request_parameters"] ?? null), "referer", array()), "")) : (""))) ? (urldecode(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request_parameters"]) || array_key_exists("request_parameters", $context) ? $context["request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "request_parameters" does not exist.', 3, $this->getSourceContext()); })()), "referer", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["request_parameters"]) || array_key_exists("request_parameters", $context) ? $context["request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "request_parameters" does not exist.', 3, $this->getSourceContext()); })()), array("action" => "list")))));
                // line 4
                echo "    ";
            } elseif (("method" == twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "type", array()))) {
                // line 5
                echo "        ";
                $context["action_href"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["request_parameters"]) || array_key_exists("request_parameters", $context) ? $context["request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "request_parameters" does not exist.', 5, $this->getSourceContext()); })()), array("action" => twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "name", array()), "id" => (isset($context["item_id"]) || array_key_exists("item_id", $context) ? $context["item_id"] : (function () { throw new Twig_Error_Runtime('Variable "item_id" does not exist.', 5, $this->getSourceContext()); })()))));
                // line 6
                echo "    ";
            } elseif (("route" == twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "type", array()))) {
                // line 7
                echo "        ";
                $context["action_href"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "name", array()), twig_array_merge((isset($context["request_parameters"]) || array_key_exists("request_parameters", $context) ? $context["request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "request_parameters" does not exist.', 7, $this->getSourceContext()); })()), array("action" => twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "name", array()), "id" => (isset($context["item_id"]) || array_key_exists("item_id", $context) ? $context["item_id"] : (function () { throw new Twig_Error_Runtime('Variable "item_id" does not exist.', 7, $this->getSourceContext()); })()))));
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <a class=\"";
            // line 10
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "title", array()), "")) : ("")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["action_href"]) || array_key_exists("action_href", $context) ? $context["action_href"] : (function () { throw new Twig_Error_Runtime('Variable "action_href" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "target", array()), "html", null, true);
            echo "\">";
            // line 11
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "icon", array()), "html", null, true);
                echo "\"></i> ";
            }
            // line 12
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "label", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "label", array())))) {
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["action"], "label", array()), twig_array_merge((isset($context["trans_parameters"]) || array_key_exists("trans_parameters", $context) ? $context["trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "trans_parameters" does not exist.', 13, $this->getSourceContext()); })()), array("%entity_id%" => (isset($context["item_id"]) || array_key_exists("item_id", $context) ? $context["item_id"] : (function () { throw new Twig_Error_Runtime('Variable "item_id" does not exist.', 13, $this->getSourceContext()); })()))), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 13, $this->getSourceContext()); })())), "html", null, true);
            }
            // line 15
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5fb11c013dad43002bc4d1066c6bd7abc1a7db7f37e244565137611556a3671d->leave($__internal_5fb11c013dad43002bc4d1066c6bd7abc1a7db7f37e244565137611556a3671d_prof);

        
        $__internal_b16e3a4ef74e62b24ee7326414c5206b87dd4a6ddac8442c89842c902bbfb9e8->leave($__internal_b16e3a4ef74e62b24ee7326414c5206b87dd4a6ddac8442c89842c902bbfb9e8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default/includes:_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  70 => 13,  68 => 12,  62 => 11,  53 => 10,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  32 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for action in actions %}
    {% if 'list' == action.name %}
        {% set action_href = request_parameters.referer|default('') ? request_parameters.referer|easyadmin_urldecode : path('easyadmin', request_parameters|merge({ action: 'list' })) %}
    {% elseif 'method' == action.type %}
        {% set action_href = path('easyadmin', request_parameters|merge({ action: action.name, id: item_id })) %}
    {% elseif 'route' == action.type %}
        {% set action_href = path(action.name, request_parameters|merge({ action: action.name, id: item_id })) %}
    {% endif %}

    <a class=\"{{ action.css_class|default('') }}\" title=\"{{ action.title|default('') }}\" href=\"{{ action_href }}\" target=\"{{ action.target }}\">
        {%- if action.icon %}<i class=\"fa fa-{{ action.icon }}\"></i> {% endif -%}
        {%- if action.label is defined and not action.label is empty -%}
            {{ action.label|trans(arguments = trans_parameters|merge({ '%entity_id%': item_id }), domain = translation_domain) }}
        {%- endif -%}
    </a>
{% endfor %}
", "EasyAdminBundle:default/includes:_actions.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/includes/_actions.html.twig");
    }
}
