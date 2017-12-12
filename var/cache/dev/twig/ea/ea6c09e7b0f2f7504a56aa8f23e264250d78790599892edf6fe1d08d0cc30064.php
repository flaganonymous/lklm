<?php

/* :dashboard:keolis.html.twig */
class __TwigTemplate_8612a473652e793cc9a316beaf6b3fe5d1e3e24f516e270b9d556cba13f714a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dashboard:keolis.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_435be50eba31a8e79e9127e44f460c3f18a4613a2014d0f239088ce27c415e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435be50eba31a8e79e9127e44f460c3f18a4613a2014d0f239088ce27c415e51->enter($__internal_435be50eba31a8e79e9127e44f460c3f18a4613a2014d0f239088ce27c415e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dashboard:keolis.html.twig"));

        $__internal_8a65cd223fce8afb80b3aa112a8343edb11845e6b43d36e37686bce1ed229801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a65cd223fce8afb80b3aa112a8343edb11845e6b43d36e37686bce1ed229801->enter($__internal_8a65cd223fce8afb80b3aa112a8343edb11845e6b43d36e37686bce1ed229801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dashboard:keolis.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_435be50eba31a8e79e9127e44f460c3f18a4613a2014d0f239088ce27c415e51->leave($__internal_435be50eba31a8e79e9127e44f460c3f18a4613a2014d0f239088ce27c415e51_prof);

        
        $__internal_8a65cd223fce8afb80b3aa112a8343edb11845e6b43d36e37686bce1ed229801->leave($__internal_8a65cd223fce8afb80b3aa112a8343edb11845e6b43d36e37686bce1ed229801_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0228964a6b8737b2b818ef1ab64ee1484bee6a023e5cb9956736c126fc5abb73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0228964a6b8737b2b818ef1ab64ee1484bee6a023e5cb9956736c126fc5abb73->enter($__internal_0228964a6b8737b2b818ef1ab64ee1484bee6a023e5cb9956736c126fc5abb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e90f3e1a4c3de97709f789da42446f36fe30913154157519c3685393cc3e336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e90f3e1a4c3de97709f789da42446f36fe30913154157519c3685393cc3e336->enter($__internal_2e90f3e1a4c3de97709f789da42446f36fe30913154157519c3685393cc3e336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Onyxp";
        
        $__internal_2e90f3e1a4c3de97709f789da42446f36fe30913154157519c3685393cc3e336->leave($__internal_2e90f3e1a4c3de97709f789da42446f36fe30913154157519c3685393cc3e336_prof);

        
        $__internal_0228964a6b8737b2b818ef1ab64ee1484bee6a023e5cb9956736c126fc5abb73->leave($__internal_0228964a6b8737b2b818ef1ab64ee1484bee6a023e5cb9956736c126fc5abb73_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ce3678b8620a1e7398c41abc818c389175b7f075c6eaf8661d4c0e22c32be3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce3678b8620a1e7398c41abc818c389175b7f075c6eaf8661d4c0e22c32be3c->enter($__internal_3ce3678b8620a1e7398c41abc818c389175b7f075c6eaf8661d4c0e22c32be3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4059943b503227f127caeb9946e7087771498609b71221f14fda9236522c9ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4059943b503227f127caeb9946e7087771498609b71221f14fda9236522c9ce9->enter($__internal_4059943b503227f127caeb9946e7087771498609b71221f14fda9236522c9ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"columns small-12\">
    <h1>Tableau de bord </h1>
    <div class=\"row\">
        <div class=\"columns small-12 text-right\">
            <h3>Période</h3>
\t\t    <a href=\"#\" class=\"button small\" id=\"dpstart\" data-date-format=\"dd-mm-yyyy\" data-date=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new Twig_Error_Runtime('Variable "start" does not exist.', 9, $this->getSourceContext()); })()), "d-m-Y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new Twig_Error_Runtime('Variable "start" does not exist.', 9, $this->getSourceContext()); })()), "d-m-Y"), "html", null, true);
        echo "</a>
\t\t\t - <a href=\"#\" class=\"button small\" id=\"dpend\" data-date-format=\"dd-mm-yyyy\" data-date=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new Twig_Error_Runtime('Variable "end" does not exist.', 10, $this->getSourceContext()); })()), "d-m-Y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new Twig_Error_Runtime('Variable "end" does not exist.', 10, $this->getSourceContext()); })()), "d-m-Y"), "html", null, true);
        echo "</a>
        </div>
    </div>
    <div class=\"alert alert-box\"  style=\"display:none;\" id=\"alert\">\t<strong>Oups</strong>
    </div>
    <div class=\"row align-spaced\">
        <div class=\"columns small-12 text-center chart\">
            <h3>Nombre d'actions par code</h3>
            <div style=\"height:600px;\">
                <canvas id=\"codes\" width=\"100%\" height=\"300\"></canvas>
            </div>
        </div>
        <div class=\"columns small-12 medium-3 text-center chart\">
            <h3>Age</h3>
            <div>
                <canvas id=\"ages\" width=\"100%\" height=\"auto\"></canvas>
            </div>
        </div>
        <div class=\"columns small-12 medium-3 text-center chart\">
            <h3>Sexe</h3>
            <div>
                <canvas id=\"genders\" width=\"100%\" height=\"auto\"></canvas>
            </div>
        </div>
        <div class=\"columns small-12 medium-3 text-center chart\">
            <h3>Types d'action</h3>
            <div>
                <canvas id=\"actions\" width=\"100%\" height=\"auto\"></canvas>
            </div>
        </div>
        <div class=\"columns small-12 medium-3 text-center chart\">
            <h3>Durée</h3>
            <div>
                <canvas id=\"durations\" width=\"100%\" height=\"auto\"></canvas>
            </div>
        </div>
    </div>
    <div class=\"row align-center\">
        <a target=\"_blank\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("download", array("network" => "DIVIA", "start" => twig_date_format_filter($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new Twig_Error_Runtime('Variable "start" does not exist.', 48, $this->getSourceContext()); })()), "Y-m-d"), "end" => twig_date_format_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new Twig_Error_Runtime('Variable "end" does not exist.', 48, $this->getSourceContext()); })()), "Y-m-d"))), "html", null, true);
        echo "\" class=\"button\"><i class=\"fa fa-download\"></i> Télécharger les données</a>
    </div>
</div>
<script>
var codes = ";
        // line 52
        echo json_encode((isset($context["codes"]) || array_key_exists("codes", $context) ? $context["codes"] : (function () { throw new Twig_Error_Runtime('Variable "codes" does not exist.', 52, $this->getSourceContext()); })()));
        echo ";
var ages = ";
        // line 53
        echo json_encode((isset($context["ages"]) || array_key_exists("ages", $context) ? $context["ages"] : (function () { throw new Twig_Error_Runtime('Variable "ages" does not exist.', 53, $this->getSourceContext()); })()));
        echo ";
var genders = ";
        // line 54
        echo json_encode((isset($context["genders"]) || array_key_exists("genders", $context) ? $context["genders"] : (function () { throw new Twig_Error_Runtime('Variable "genders" does not exist.', 54, $this->getSourceContext()); })()));
        echo ";
var actions = ";
        // line 55
        echo json_encode((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new Twig_Error_Runtime('Variable "actions" does not exist.', 55, $this->getSourceContext()); })()));
        echo ";
var durations = ";
        // line 56
        echo json_encode((isset($context["durations"]) || array_key_exists("durations", $context) ? $context["durations"] : (function () { throw new Twig_Error_Runtime('Variable "durations" does not exist.', 56, $this->getSourceContext()); })()));
        echo ";
var startDate = new Date(";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new Twig_Error_Runtime('Variable "start" does not exist.', 57, $this->getSourceContext()); })()), "Y"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new Twig_Error_Runtime('Variable "start" does not exist.', 57, $this->getSourceContext()); })()), "m"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new Twig_Error_Runtime('Variable "start" does not exist.', 57, $this->getSourceContext()); })()), "d"), "html", null, true);
        echo ");
var endDate = new Date(";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new Twig_Error_Runtime('Variable "end" does not exist.', 58, $this->getSourceContext()); })()), "Y"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new Twig_Error_Runtime('Variable "end" does not exist.', 58, $this->getSourceContext()); })()), "m"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new Twig_Error_Runtime('Variable "end" does not exist.', 58, $this->getSourceContext()); })()), "d"), "html", null, true);
        echo ");
</script>
";
        
        $__internal_4059943b503227f127caeb9946e7087771498609b71221f14fda9236522c9ce9->leave($__internal_4059943b503227f127caeb9946e7087771498609b71221f14fda9236522c9ce9_prof);

        
        $__internal_3ce3678b8620a1e7398c41abc818c389175b7f075c6eaf8661d4c0e22c32be3c->leave($__internal_3ce3678b8620a1e7398c41abc818c389175b7f075c6eaf8661d4c0e22c32be3c_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b26d3cb679ced49253b4e4c3fa38a1cd2994941a13c28f938980f996b0763996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26d3cb679ced49253b4e4c3fa38a1cd2994941a13c28f938980f996b0763996->enter($__internal_b26d3cb679ced49253b4e4c3fa38a1cd2994941a13c28f938980f996b0763996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_51c1c99a2d2ae3889d9180989f4980c16dc7547d774d3731a3bfaa987e9a4d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c1c99a2d2ae3889d9180989f4980c16dc7547d774d3731a3bfaa987e9a4d85->enter($__internal_51c1c99a2d2ae3889d9180989f4980c16dc7547d774d3731a3bfaa987e9a4d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/keolis.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_51c1c99a2d2ae3889d9180989f4980c16dc7547d774d3731a3bfaa987e9a4d85->leave($__internal_51c1c99a2d2ae3889d9180989f4980c16dc7547d774d3731a3bfaa987e9a4d85_prof);

        
        $__internal_b26d3cb679ced49253b4e4c3fa38a1cd2994941a13c28f938980f996b0763996->leave($__internal_b26d3cb679ced49253b4e4c3fa38a1cd2994941a13c28f938980f996b0763996_prof);

    }

    public function getTemplateName()
    {
        return ":dashboard:keolis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 64,  186 => 63,  177 => 62,  160 => 58,  152 => 57,  148 => 56,  144 => 55,  140 => 54,  136 => 53,  132 => 52,  125 => 48,  82 => 10,  76 => 9,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Onyxp{% endblock %}
{% block body %}
<div class=\"columns small-12\">
    <h1>Tableau de bord </h1>
    <div class=\"row\">
        <div class=\"columns small-12 text-right\">
            <h3>Période</h3>
\t\t    <a href=\"#\" class=\"button small\" id=\"dpstart\" data-date-format=\"dd-mm-yyyy\" data-date=\"{{start|date('d-m-Y')}}\">{{start|date('d-m-Y')}}</a>
\t\t\t - <a href=\"#\" class=\"button small\" id=\"dpend\" data-date-format=\"dd-mm-yyyy\" data-date=\"{{end|date('d-m-Y')}}\">{{end|date('d-m-Y')}}</a>
        </div>
    </div>
    <div class=\"alert alert-box\"  style=\"display:none;\" id=\"alert\">\t<strong>Oups</strong>
    </div>
    <div class=\"row align-spaced\">
        <div class=\"columns small-12 text-center chart\">
            <h3>Nombre d'actions par code</h3>
            <div style=\"height:600px;\">
                <canvas id=\"codes\" width=\"100%\" height=\"300\"></canvas>
            </div>
        </div>
        <div class=\"columns small-12 medium-3 text-center chart\">
            <h3>Age</h3>
            <div>
                <canvas id=\"ages\" width=\"100%\" height=\"auto\"></canvas>
            </div>
        </div>
        <div class=\"columns small-12 medium-3 text-center chart\">
            <h3>Sexe</h3>
            <div>
                <canvas id=\"genders\" width=\"100%\" height=\"auto\"></canvas>
            </div>
        </div>
        <div class=\"columns small-12 medium-3 text-center chart\">
            <h3>Types d'action</h3>
            <div>
                <canvas id=\"actions\" width=\"100%\" height=\"auto\"></canvas>
            </div>
        </div>
        <div class=\"columns small-12 medium-3 text-center chart\">
            <h3>Durée</h3>
            <div>
                <canvas id=\"durations\" width=\"100%\" height=\"auto\"></canvas>
            </div>
        </div>
    </div>
    <div class=\"row align-center\">
        <a target=\"_blank\" href=\"{{ path('download', {'network': 'DIVIA', 'start': start|date('Y-m-d'), 'end': end|date('Y-m-d') }) }}\" class=\"button\"><i class=\"fa fa-download\"></i> Télécharger les données</a>
    </div>
</div>
<script>
var codes = {{ codes|json_encode|raw }};
var ages = {{ ages|json_encode|raw }};
var genders = {{ genders|json_encode|raw }};
var actions = {{ actions|json_encode|raw }};
var durations = {{ durations|json_encode|raw }};
var startDate = new Date({{ start|date('Y') }}, {{ start|date('m') }}, {{ start|date('d') }});
var endDate = new Date({{ end|date('Y') }}, {{ end|date('m') }}, {{ end|date('d') }});
</script>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"{{ asset('assets/js/keolis.js') }}\"></script>
{% endblock %}
", ":dashboard:keolis.html.twig", "/Applications/MAMP/htdocs/pimms-web/app/Resources/views/dashboard/keolis.html.twig");
    }
}
