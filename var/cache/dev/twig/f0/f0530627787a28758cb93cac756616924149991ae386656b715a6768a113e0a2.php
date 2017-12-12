<?php

/* EasyAdminBundle:default:field_association.html.twig */
class __TwigTemplate_cb3eb39ea0492131523ac94ee8b057c95da65c280e254edad1f4093d93a3e82a extends Twig_Template
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
        $__internal_43ef69a0bd06d6cc6ceef4d077ca9c39aa5c6cf5339590797b0177c391492858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ef69a0bd06d6cc6ceef4d077ca9c39aa5c6cf5339590797b0177c391492858->enter($__internal_43ef69a0bd06d6cc6ceef4d077ca9c39aa5c6cf5339590797b0177c391492858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_association.html.twig"));

        $__internal_21957f5809e459413ffc6f188fca0035b238fe8e470bb06215bd2893dc08aede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21957f5809e459413ffc6f188fca0035b238fe8e470bb06215bd2893dc08aede->enter($__internal_21957f5809e459413ffc6f188fca0035b238fe8e470bb06215bd2893dc08aede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_association.html.twig"));

        // line 2
        if (twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()))) {
            // line 3
            echo "    ";
            if (("show" == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 3, $this->getSourceContext()); })()))) {
                // line 4
                echo "        ";
                if ((twig_length_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())) > 0)) {
                    // line 5
                    echo "            <ul class=\"";
                    echo (((twig_length_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 5, $this->getSourceContext()); })())) < 2)) ? ("inline") : (""));
                    echo "\">
                ";
                    // line 6
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 6, $this->getSourceContext()); })()), 0, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("show.max_results")));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 7
                        echo "                    <li>
                        ";
                        // line 8
                        if (array_key_exists("link_parameters", $context)) {
                            // line 9
                            echo "                            ";
                            // line 10
                            echo "                            ";
                            $context["primary_key_value"] = ("" . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["link_parameters"]) || array_key_exists("link_parameters", $context) ? $context["link_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "link_parameters" does not exist.', 10, $this->getSourceContext()); })()), "primary_key_name", array())));
                            // line 11
                            echo "                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["link_parameters"]) || array_key_exists("link_parameters", $context) ? $context["link_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "link_parameters" does not exist.', 11, $this->getSourceContext()); })()), array("id" => (isset($context["primary_key_value"]) || array_key_exists("primary_key_value", $context) ? $context["primary_key_value"] : (function () { throw new Twig_Error_Runtime('Variable "primary_key_value" does not exist.', 11, $this->getSourceContext()); })()), "referer" => ""))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "</a>
                        ";
                        } else {
                            // line 13
                            echo "                            ";
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "
                        ";
                        }
                        // line 15
                        echo "                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "
                ";
                    // line 18
                    $context["_remaining_items"] = (twig_length_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })())) - $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("show.max_results"));
                    // line 19
                    echo "                ";
                    if (((isset($context["_remaining_items"]) || array_key_exists("_remaining_items", $context) ? $context["_remaining_items"] : (function () { throw new Twig_Error_Runtime('Variable "_remaining_items" does not exist.', 19, $this->getSourceContext()); })()) > 0)) {
                        // line 20
                        echo "                    <li class=\"remaining-items\">(";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("show.remaining_items", (isset($context["_remaining_items"]) || array_key_exists("_remaining_items", $context) ? $context["_remaining_items"] : (function () { throw new Twig_Error_Runtime('Variable "_remaining_items" does not exist.', 20, $this->getSourceContext()); })()), array(), "EasyAdminBundle"), "html", null, true);
                        echo ")</li>
                ";
                    }
                    // line 22
                    echo "            </ul>
        ";
                } else {
                    // line 24
                    echo "            <div class=\"empty collection-empty\">
                ";
                    // line 25
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity_config"]) || array_key_exists("entity_config", $context) ? $context["entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "entity_config" does not exist.', 25, $this->getSourceContext()); })()), "templates", array()), "label_empty", array()));
                    echo "
            </div>
        ";
                }
                // line 28
                echo "    ";
            } elseif (("list" == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 28, $this->getSourceContext()); })()))) {
                // line 29
                echo "        <span class=\"badge\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 29, $this->getSourceContext()); })())), "html", null, true);
                echo "</span>
    ";
            }
        } elseif (        // line 32
array_key_exists("link_parameters", $context)) {
            // line 33
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["link_parameters"]) || array_key_exists("link_parameters", $context) ? $context["link_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "link_parameters" does not exist.', 33, $this->getSourceContext()); })()), array("referer" => ""))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 33, $this->getSourceContext()); })())), "html", null, true);
            echo "</a>
";
        } else {
            // line 35
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 35, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        }
        
        $__internal_43ef69a0bd06d6cc6ceef4d077ca9c39aa5c6cf5339590797b0177c391492858->leave($__internal_43ef69a0bd06d6cc6ceef4d077ca9c39aa5c6cf5339590797b0177c391492858_prof);

        
        $__internal_21957f5809e459413ffc6f188fca0035b238fe8e470bb06215bd2893dc08aede->leave($__internal_21957f5809e459413ffc6f188fca0035b238fe8e470bb06215bd2893dc08aede_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  111 => 33,  109 => 32,  103 => 29,  100 => 28,  94 => 25,  91 => 24,  87 => 22,  81 => 20,  78 => 19,  76 => 18,  73 => 17,  66 => 15,  60 => 13,  52 => 11,  49 => 10,  47 => 9,  45 => 8,  42 => 7,  38 => 6,  33 => 5,  30 => 4,  27 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# a *-to-many collection of values #}
{% if value is iterable %}
    {% if 'show' == view %}
        {% if value|length > 0 %}
            <ul class=\"{{ value|length < 2 ? 'inline' }}\">
                {% for item in value|slice(0, easyadmin_config('show.max_results')) %}
                    <li>
                        {% if link_parameters is defined %}
                            {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
                            {% set primary_key_value = '' ~ attribute(item, link_parameters.primary_key_name) %}
                            <a href=\"{{ path('easyadmin', link_parameters|merge({ id: primary_key_value, referer: '' })) }}\">{{ item }}</a>
                        {% else %}
                            {{ item }}
                        {% endif %}
                    </li>
                {% endfor %}

                {% set _remaining_items = value|length - easyadmin_config('show.max_results') %}
                {% if _remaining_items > 0 %}
                    <li class=\"remaining-items\">({{ 'show.remaining_items'|transchoice(_remaining_items, {}, 'EasyAdminBundle') }})</li>
                {% endif %}
            </ul>
        {% else %}
            <div class=\"empty collection-empty\">
                {{ include(entity_config.templates.label_empty) }}
            </div>
        {% endif %}
    {% elseif 'list' == view %}
        <span class=\"badge\">{{ value|length }}</span>
    {% endif %}
{# a simple *-to-one value associated with an entity managed by this backend #}
{% elseif link_parameters is defined %}
    <a href=\"{{ path('easyadmin', link_parameters|merge({ referer: '' })) }}\">{{ value|easyadmin_truncate }}</a>
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_association.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_association.html.twig");
    }
}
