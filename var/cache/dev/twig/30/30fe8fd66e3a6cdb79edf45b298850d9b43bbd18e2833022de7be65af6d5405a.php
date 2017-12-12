<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_200d69a2f090d00dd87bc398c3793282ff9d32dfd13b8e898b457d3b56b0f1c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 7, $this->getSourceContext()); })()), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57647f304230c39ef44e6ff0b855b89d7176d84970ea184eb30a264d0a514eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57647f304230c39ef44e6ff0b855b89d7176d84970ea184eb30a264d0a514eab->enter($__internal_57647f304230c39ef44e6ff0b855b89d7176d84970ea184eb30a264d0a514eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_894dcf4ca1abc032c227a8d19c8f98bf847416745b413c7857a3364e645c186a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894dcf4ca1abc032c227a8d19c8f98bf847416745b413c7857a3364e645c186a->enter($__internal_894dcf4ca1abc032c227a8d19c8f98bf847416745b413c7857a3364e645c186a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_d549457afeb15a9528ea4632b8ff028b156b0bc547d90951be2e47f413ea88b4"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "name", array()), array(),         // line 4
(isset($context["__internal_d549457afeb15a9528ea4632b8ff028b156b0bc547d90951be2e47f413ea88b4"]) || array_key_exists("__internal_d549457afeb15a9528ea4632b8ff028b156b0bc547d90951be2e47f413ea88b4", $context) ? $context["__internal_d549457afeb15a9528ea4632b8ff028b156b0bc547d90951be2e47f413ea88b4"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d549457afeb15a9528ea4632b8ff028b156b0bc547d90951be2e47f413ea88b4" does not exist.', 4, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "label", array()), array(),         // line 4
(isset($context["__internal_d549457afeb15a9528ea4632b8ff028b156b0bc547d90951be2e47f413ea88b4"]) || array_key_exists("__internal_d549457afeb15a9528ea4632b8ff028b156b0bc547d90951be2e47f413ea88b4", $context) ? $context["__internal_d549457afeb15a9528ea4632b8ff028b156b0bc547d90951be2e47f413ea88b4"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d549457afeb15a9528ea4632b8ff028b156b0bc547d90951be2e47f413ea88b4" does not exist.', 4, $this->getSourceContext()); })())));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57647f304230c39ef44e6ff0b855b89d7176d84970ea184eb30a264d0a514eab->leave($__internal_57647f304230c39ef44e6ff0b855b89d7176d84970ea184eb30a264d0a514eab_prof);

        
        $__internal_894dcf4ca1abc032c227a8d19c8f98bf847416745b413c7857a3364e645c186a->leave($__internal_894dcf4ca1abc032c227a8d19c8f98bf847416745b413c7857a3364e645c186a_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_4239909b004bfbaf7eaff3726a2a5cd3c5151bce95ec2147b8073f75a7827380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4239909b004bfbaf7eaff3726a2a5cd3c5151bce95ec2147b8073f75a7827380->enter($__internal_4239909b004bfbaf7eaff3726a2a5cd3c5151bce95ec2147b8073f75a7827380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_c562c36567fb5eb407119fbe0e1c8fc2c4bc23352669d7642047f28c0e03488e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c562c36567fb5eb407119fbe0e1c8fc2c4bc23352669d7642047f28c0e03488e->enter($__internal_c562c36567fb5eb407119fbe0e1c8fc2c4bc23352669d7642047f28c0e03488e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 9, $this->getSourceContext()); })()), "name", array())), "html", null, true);
        
        $__internal_c562c36567fb5eb407119fbe0e1c8fc2c4bc23352669d7642047f28c0e03488e->leave($__internal_c562c36567fb5eb407119fbe0e1c8fc2c4bc23352669d7642047f28c0e03488e_prof);

        
        $__internal_4239909b004bfbaf7eaff3726a2a5cd3c5151bce95ec2147b8073f75a7827380->leave($__internal_4239909b004bfbaf7eaff3726a2a5cd3c5151bce95ec2147b8073f75a7827380_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_338e033d437c273d16b2273643bbfea1e30a2f991addf06ec26e9377fbcf28a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_338e033d437c273d16b2273643bbfea1e30a2f991addf06ec26e9377fbcf28a1->enter($__internal_338e033d437c273d16b2273643bbfea1e30a2f991addf06ec26e9377fbcf28a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_bf326224db55e40cc201eba040d6a1a42cf64270ae8d732dfd32b6736cf7810b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf326224db55e40cc201eba040d6a1a42cf64270ae8d732dfd32b6736cf7810b->enter($__internal_bf326224db55e40cc201eba040d6a1a42cf64270ae8d732dfd32b6736cf7810b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_bf326224db55e40cc201eba040d6a1a42cf64270ae8d732dfd32b6736cf7810b->leave($__internal_bf326224db55e40cc201eba040d6a1a42cf64270ae8d732dfd32b6736cf7810b_prof);

        
        $__internal_338e033d437c273d16b2273643bbfea1e30a2f991addf06ec26e9377fbcf28a1->leave($__internal_338e033d437c273d16b2273643bbfea1e30a2f991addf06ec26e9377fbcf28a1_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_9b42cb60c32cad13cd8d7958e8b2a59009079c1e823c1b552385677579723448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b42cb60c32cad13cd8d7958e8b2a59009079c1e823c1b552385677579723448->enter($__internal_9b42cb60c32cad13cd8d7958e8b2a59009079c1e823c1b552385677579723448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_99213697584e5ebfb4cc1b5e6c5a3db17d4f5faed4fb102b13c68202630b7e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99213697584e5ebfb4cc1b5e6c5a3db17d4f5faed4fb102b13c68202630b7e31->enter($__internal_99213697584e5ebfb4cc1b5e6c5a3db17d4f5faed4fb102b13c68202630b7e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 14, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 15, $this->getSourceContext()); })()), "new", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()),         // line 4
(isset($context["__internal_d549457afeb15a9528ea4632b8ff028b156b0bc547d90951be2e47f413ea88b4"]) || array_key_exists("__internal_d549457afeb15a9528ea4632b8ff028b156b0bc547d90951be2e47f413ea88b4", $context) ? $context["__internal_d549457afeb15a9528ea4632b8ff028b156b0bc547d90951be2e47f413ea88b4"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d549457afeb15a9528ea4632b8ff028b156b0bc547d90951be2e47f413ea88b4" does not exist.', 4, $this->getSourceContext()); })()))) : (        // line 15
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 15, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_99213697584e5ebfb4cc1b5e6c5a3db17d4f5faed4fb102b13c68202630b7e31->leave($__internal_99213697584e5ebfb4cc1b5e6c5a3db17d4f5faed4fb102b13c68202630b7e31_prof);

        
        $__internal_9b42cb60c32cad13cd8d7958e8b2a59009079c1e823c1b552385677579723448->leave($__internal_9b42cb60c32cad13cd8d7958e8b2a59009079c1e823c1b552385677579723448_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_878d7ae00e20b532b6aab8186ecc2bf5a39b2489749223e355dd3c716108348a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878d7ae00e20b532b6aab8186ecc2bf5a39b2489749223e355dd3c716108348a->enter($__internal_878d7ae00e20b532b6aab8186ecc2bf5a39b2489749223e355dd3c716108348a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_1900546870dcf0680b724a0a004964aa8f80e4ff689ccd70931e5e793132b5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1900546870dcf0680b724a0a004964aa8f80e4ff689ccd70931e5e793132b5a2->enter($__internal_1900546870dcf0680b724a0a004964aa8f80e4ff689ccd70931e5e793132b5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_1900546870dcf0680b724a0a004964aa8f80e4ff689ccd70931e5e793132b5a2->leave($__internal_1900546870dcf0680b724a0a004964aa8f80e4ff689ccd70931e5e793132b5a2_prof);

        
        $__internal_878d7ae00e20b532b6aab8186ecc2bf5a39b2489749223e355dd3c716108348a->leave($__internal_878d7ae00e20b532b6aab8186ecc2bf5a39b2489749223e355dd3c716108348a_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_5a72a4120b201a8cf97f9c963c226f928f4b135c73f2ea46449e434eccd8a2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a72a4120b201a8cf97f9c963c226f928f4b135c73f2ea46449e434eccd8a2f3->enter($__internal_5a72a4120b201a8cf97f9c963c226f928f4b135c73f2ea46449e434eccd8a2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_a3824466e22219f96c44aa766b64e8f4571e5cbfe4b36dafdb6782b7ba17738f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3824466e22219f96c44aa766b64e8f4571e5cbfe4b36dafdb6782b7ba17738f->enter($__internal_a3824466e22219f96c44aa766b64e8f4571e5cbfe4b36dafdb6782b7ba17738f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form');
        echo "
    ";
        
        $__internal_a3824466e22219f96c44aa766b64e8f4571e5cbfe4b36dafdb6782b7ba17738f->leave($__internal_a3824466e22219f96c44aa766b64e8f4571e5cbfe4b36dafdb6782b7ba17738f_prof);

        
        $__internal_5a72a4120b201a8cf97f9c963c226f928f4b135c73f2ea46449e434eccd8a2f3->leave($__internal_5a72a4120b201a8cf97f9c963c226f928f4b135c73f2ea46449e434eccd8a2f3_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_59645e17730dd260ec60212ff1e8aa067d006cf9b8c0be2e32c069bae8b346e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59645e17730dd260ec60212ff1e8aa067d006cf9b8c0be2e32c069bae8b346e4->enter($__internal_59645e17730dd260ec60212ff1e8aa067d006cf9b8c0be2e32c069bae8b346e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_d5a9403a356f90dfb8a9abdbf5a382cbef168320d7d0371efe3cf26bfea2eaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a9403a356f90dfb8a9abdbf5a382cbef168320d7d0371efe3cf26bfea2eaef->enter($__internal_d5a9403a356f90dfb8a9abdbf5a382cbef168320d7d0371efe3cf26bfea2eaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_d5a9403a356f90dfb8a9abdbf5a382cbef168320d7d0371efe3cf26bfea2eaef->leave($__internal_d5a9403a356f90dfb8a9abdbf5a382cbef168320d7d0371efe3cf26bfea2eaef_prof);

        
        $__internal_59645e17730dd260ec60212ff1e8aa067d006cf9b8c0be2e32c069bae8b346e4->leave($__internal_59645e17730dd260ec60212ff1e8aa067d006cf9b8c0be2e32c069bae8b346e4_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:new.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
