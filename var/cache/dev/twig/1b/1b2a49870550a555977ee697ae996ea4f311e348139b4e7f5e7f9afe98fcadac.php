<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_9c00b9cbd4b1abd3ef664dabdcb26b6c8335cd06d03fa694e6c88ce8fae1b4c4 extends Twig_Template
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
        $__internal_5693972aab12612e4339e8ae108432f0e35394492f75bdc2ae093433473f678c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5693972aab12612e4339e8ae108432f0e35394492f75bdc2ae093433473f678c->enter($__internal_5693972aab12612e4339e8ae108432f0e35394492f75bdc2ae093433473f678c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_294a8d78a3b963cb9392cf8552eda9d4f832c7a134b0e4edab60c45fcecb2321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294a8d78a3b963cb9392cf8552eda9d4f832c7a134b0e4edab60c45fcecb2321->enter($__internal_294a8d78a3b963cb9392cf8552eda9d4f832c7a134b0e4edab60c45fcecb2321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_5693972aab12612e4339e8ae108432f0e35394492f75bdc2ae093433473f678c->leave($__internal_5693972aab12612e4339e8ae108432f0e35394492f75bdc2ae093433473f678c_prof);

        
        $__internal_294a8d78a3b963cb9392cf8552eda9d4f832c7a134b0e4edab60c45fcecb2321->leave($__internal_294a8d78a3b963cb9392cf8552eda9d4f832c7a134b0e4edab60c45fcecb2321_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
