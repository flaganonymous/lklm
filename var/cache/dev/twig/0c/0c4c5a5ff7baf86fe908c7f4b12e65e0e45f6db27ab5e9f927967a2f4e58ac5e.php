<?php

/* :dashboard:sncf.html.twig */
class __TwigTemplate_6e0517659247d20ebb21c775bf6a43bad810de23c9ca8ff5b75392959dcf93e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dashboard:sncf.html.twig", 1);
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
        $__internal_0a2266f6988e03b83e47892635a4a53e6ce527cb706977c4b1426871e3350524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a2266f6988e03b83e47892635a4a53e6ce527cb706977c4b1426871e3350524->enter($__internal_0a2266f6988e03b83e47892635a4a53e6ce527cb706977c4b1426871e3350524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dashboard:sncf.html.twig"));

        $__internal_e8de9aec42ce86f64870ba77482fd8bb13a471c393d1bde81c2cdf756a557532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8de9aec42ce86f64870ba77482fd8bb13a471c393d1bde81c2cdf756a557532->enter($__internal_e8de9aec42ce86f64870ba77482fd8bb13a471c393d1bde81c2cdf756a557532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dashboard:sncf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a2266f6988e03b83e47892635a4a53e6ce527cb706977c4b1426871e3350524->leave($__internal_0a2266f6988e03b83e47892635a4a53e6ce527cb706977c4b1426871e3350524_prof);

        
        $__internal_e8de9aec42ce86f64870ba77482fd8bb13a471c393d1bde81c2cdf756a557532->leave($__internal_e8de9aec42ce86f64870ba77482fd8bb13a471c393d1bde81c2cdf756a557532_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_be5778e0d200da1604eaa37a6c25c5d047ffae5d5c6bfc0445589153e22e5ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be5778e0d200da1604eaa37a6c25c5d047ffae5d5c6bfc0445589153e22e5ba5->enter($__internal_be5778e0d200da1604eaa37a6c25c5d047ffae5d5c6bfc0445589153e22e5ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2bc539ea3284ab062ab96038bd9cc5bdc12e1ab17f87e2cbbdec93513d0a11c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc539ea3284ab062ab96038bd9cc5bdc12e1ab17f87e2cbbdec93513d0a11c1->enter($__internal_2bc539ea3284ab062ab96038bd9cc5bdc12e1ab17f87e2cbbdec93513d0a11c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2bc539ea3284ab062ab96038bd9cc5bdc12e1ab17f87e2cbbdec93513d0a11c1->leave($__internal_2bc539ea3284ab062ab96038bd9cc5bdc12e1ab17f87e2cbbdec93513d0a11c1_prof);

        
        $__internal_be5778e0d200da1604eaa37a6c25c5d047ffae5d5c6bfc0445589153e22e5ba5->leave($__internal_be5778e0d200da1604eaa37a6c25c5d047ffae5d5c6bfc0445589153e22e5ba5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c7c24b63bb9860f732bd46650cf060dafbc225e60a9909a8b17b0532a09cca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7c24b63bb9860f732bd46650cf060dafbc225e60a9909a8b17b0532a09cca8->enter($__internal_8c7c24b63bb9860f732bd46650cf060dafbc225e60a9909a8b17b0532a09cca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ecd4e9205bcfcc8e66e3cf31a49c884b1e62f9b09719d395441e2e8996839b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ecd4e9205bcfcc8e66e3cf31a49c884b1e62f9b09719d395441e2e8996839b9->enter($__internal_1ecd4e9205bcfcc8e66e3cf31a49c884b1e62f9b09719d395441e2e8996839b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"columns small-12\">
    <h1>Tableau de bord SNCF</h1>
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
        <div class=\"columns small-3 small-offset-9 text-right\">
            <select id=\"lines\">
                <option value=\"all\">Toutes les lignes</option>
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 16
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "name", array()) == (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 16, $this->getSourceContext()); })()))) {
                // line 17
                echo "                    <option selected=\"selected\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "name", array()), "html", null, true);
                echo "</option>
                    ";
            } else {
                // line 19
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "name", array()), "html", null, true);
                echo "</option>
                    ";
            }
            // line 21
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </select>
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
        <div class=\"columns small-12 medium-3 text-center chart\">
            <h3>Ambiance</h3>
            <div>
                <canvas id=\"moods\" width=\"100%\" height=\"auto\"></canvas>
            </div>
        </div>
        <div class=\"columns small-12 medium-3 text-center chart\">
            <h3>Actions</h3>
            <div>
                <canvas id=\"categories\" width=\"100%\" height=\"auto\"></canvas>
            </div>
        </div>
    </div>
    <div class=\"row align-center\">
        <a target=\"_blank\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("download", array("network" => "TER", "start" => twig_date_format_filter($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new Twig_Error_Runtime('Variable "start" does not exist.', 72, $this->getSourceContext()); })()), "Y-m-d"), "end" => twig_date_format_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new Twig_Error_Runtime('Variable "end" does not exist.', 72, $this->getSourceContext()); })()), "Y-m-d"))), "html", null, true);
        echo "\" class=\"button\"><i class=\"fa fa-download\"></i> Télécharger les données</a>
    </div>
</div>

<script>
var codes = ";
        // line 77
        echo json_encode((isset($context["codes"]) || array_key_exists("codes", $context) ? $context["codes"] : (function () { throw new Twig_Error_Runtime('Variable "codes" does not exist.', 77, $this->getSourceContext()); })()));
        echo ";
var ages = ";
        // line 78
        echo json_encode((isset($context["ages"]) || array_key_exists("ages", $context) ? $context["ages"] : (function () { throw new Twig_Error_Runtime('Variable "ages" does not exist.', 78, $this->getSourceContext()); })()));
        echo ";
var genders = ";
        // line 79
        echo json_encode((isset($context["genders"]) || array_key_exists("genders", $context) ? $context["genders"] : (function () { throw new Twig_Error_Runtime('Variable "genders" does not exist.', 79, $this->getSourceContext()); })()));
        echo ";
var actions = ";
        // line 80
        echo json_encode((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new Twig_Error_Runtime('Variable "actions" does not exist.', 80, $this->getSourceContext()); })()));
        echo ";
var durations = ";
        // line 81
        echo json_encode((isset($context["durations"]) || array_key_exists("durations", $context) ? $context["durations"] : (function () { throw new Twig_Error_Runtime('Variable "durations" does not exist.', 81, $this->getSourceContext()); })()));
        echo ";
var moods = ";
        // line 82
        echo json_encode((isset($context["moods"]) || array_key_exists("moods", $context) ? $context["moods"] : (function () { throw new Twig_Error_Runtime('Variable "moods" does not exist.', 82, $this->getSourceContext()); })()));
        echo ";
var categories = ";
        // line 83
        echo json_encode((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 83, $this->getSourceContext()); })()));
        echo ";
// Month starts from zero in Javascript!
var startDate = new Date(";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new Twig_Error_Runtime('Variable "start" does not exist.', 85, $this->getSourceContext()); })()), "Y"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new Twig_Error_Runtime('Variable "start" does not exist.', 85, $this->getSourceContext()); })()), "m") - 1), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new Twig_Error_Runtime('Variable "start" does not exist.', 85, $this->getSourceContext()); })()), "d"), "html", null, true);
        echo ");
var endDate = new Date(";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new Twig_Error_Runtime('Variable "end" does not exist.', 86, $this->getSourceContext()); })()), "Y"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new Twig_Error_Runtime('Variable "end" does not exist.', 86, $this->getSourceContext()); })()), "m") - 1), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new Twig_Error_Runtime('Variable "end" does not exist.', 86, $this->getSourceContext()); })()), "d"), "html", null, true);
        echo ");
</script>
";
        
        $__internal_1ecd4e9205bcfcc8e66e3cf31a49c884b1e62f9b09719d395441e2e8996839b9->leave($__internal_1ecd4e9205bcfcc8e66e3cf31a49c884b1e62f9b09719d395441e2e8996839b9_prof);

        
        $__internal_8c7c24b63bb9860f732bd46650cf060dafbc225e60a9909a8b17b0532a09cca8->leave($__internal_8c7c24b63bb9860f732bd46650cf060dafbc225e60a9909a8b17b0532a09cca8_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2de076b0547c9b57b4b5ebca3ebee080ba236b4e855c9b912c579475e0404279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de076b0547c9b57b4b5ebca3ebee080ba236b4e855c9b912c579475e0404279->enter($__internal_2de076b0547c9b57b4b5ebca3ebee080ba236b4e855c9b912c579475e0404279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_26a3c2d612a5165c9403f914411654fc229503e15c30ae2a3a1b6133ba8e63dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a3c2d612a5165c9403f914411654fc229503e15c30ae2a3a1b6133ba8e63dc->enter($__internal_26a3c2d612a5165c9403f914411654fc229503e15c30ae2a3a1b6133ba8e63dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/sncf.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_26a3c2d612a5165c9403f914411654fc229503e15c30ae2a3a1b6133ba8e63dc->leave($__internal_26a3c2d612a5165c9403f914411654fc229503e15c30ae2a3a1b6133ba8e63dc_prof);

        
        $__internal_2de076b0547c9b57b4b5ebca3ebee080ba236b4e855c9b912c579475e0404279->leave($__internal_2de076b0547c9b57b4b5ebca3ebee080ba236b4e855c9b912c579475e0404279_prof);

    }

    public function getTemplateName()
    {
        return ":dashboard:sncf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 91,  243 => 90,  234 => 89,  217 => 86,  209 => 85,  204 => 83,  200 => 82,  196 => 81,  192 => 80,  188 => 79,  184 => 78,  180 => 77,  172 => 72,  120 => 22,  114 => 21,  106 => 19,  98 => 17,  95 => 16,  91 => 15,  81 => 10,  75 => 9,  68 => 4,  59 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}{% endblock %}
{% block body %}
<div class=\"columns small-12\">
    <h1>Tableau de bord SNCF</h1>
    <div class=\"row\">
        <div class=\"columns small-12 text-right\">
            <h3>Période</h3>
\t\t    <a href=\"#\" class=\"button small\" id=\"dpstart\" data-date-format=\"dd-mm-yyyy\" data-date=\"{{start|date('d-m-Y')}}\">{{start|date('d-m-Y')}}</a>
\t\t\t - <a href=\"#\" class=\"button small\" id=\"dpend\" data-date-format=\"dd-mm-yyyy\" data-date=\"{{end|date('d-m-Y')}}\">{{end|date('d-m-Y')}}</a>
        </div>
        <div class=\"columns small-3 small-offset-9 text-right\">
            <select id=\"lines\">
                <option value=\"all\">Toutes les lignes</option>
                {% for l in lines %}
                    {% if l.name == line %}
                    <option selected=\"selected\" value=\"{{ l.id }}\">{{ l.name }}</option>
                    {% else %}
                    <option value=\"{{ l.id }}\">{{ l.name }}</option>
                    {% endif %}
                {% endfor %}
            </select>
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
        <div class=\"columns small-12 medium-3 text-center chart\">
            <h3>Ambiance</h3>
            <div>
                <canvas id=\"moods\" width=\"100%\" height=\"auto\"></canvas>
            </div>
        </div>
        <div class=\"columns small-12 medium-3 text-center chart\">
            <h3>Actions</h3>
            <div>
                <canvas id=\"categories\" width=\"100%\" height=\"auto\"></canvas>
            </div>
        </div>
    </div>
    <div class=\"row align-center\">
        <a target=\"_blank\" href=\"{{ path('download', {'network': 'TER', 'start': start|date('Y-m-d'), 'end': end|date('Y-m-d') }) }}\" class=\"button\"><i class=\"fa fa-download\"></i> Télécharger les données</a>
    </div>
</div>

<script>
var codes = {{ codes|json_encode|raw }};
var ages = {{ ages|json_encode|raw }};
var genders = {{ genders|json_encode|raw }};
var actions = {{ actions|json_encode|raw }};
var durations = {{ durations|json_encode|raw }};
var moods = {{ moods|json_encode|raw }};
var categories = {{ categories|json_encode|raw }};
// Month starts from zero in Javascript!
var startDate = new Date({{ start|date('Y') }}, {{ start|date('m') - 1 }}, {{ start|date('d') }});
var endDate = new Date({{ end|date('Y') }}, {{ end|date('m') - 1 }}, {{ end|date('d') }});
</script>
{% endblock %}
{% block javascripts %}
{{ parent() }}
<script src=\"{{ asset('assets/js/sncf.js') }}\"></script>
{% endblock %}", ":dashboard:sncf.html.twig", "/Applications/MAMP/htdocs/pimms-web/app/Resources/views/dashboard/sncf.html.twig");
    }
}
