<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_21e43916ae7881da2fa1d67403444ac25ab845d35f1367be85fddf14d6c34449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a1ddf065efa41a9693309f8ceed647b8b85be4c9e12404b4c281e7426164304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1ddf065efa41a9693309f8ceed647b8b85be4c9e12404b4c281e7426164304->enter($__internal_3a1ddf065efa41a9693309f8ceed647b8b85be4c9e12404b4c281e7426164304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_e4629fee35dca1ea6982c5b4fcdadd3e70f3c59630d3536126b3be2a4afb8bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4629fee35dca1ea6982c5b4fcdadd3e70f3c59630d3536126b3be2a4afb8bf1->enter($__internal_e4629fee35dca1ea6982c5b4fcdadd3e70f3c59630d3536126b3be2a4afb8bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_3a1ddf065efa41a9693309f8ceed647b8b85be4c9e12404b4c281e7426164304->leave($__internal_3a1ddf065efa41a9693309f8ceed647b8b85be4c9e12404b4c281e7426164304_prof);

        
        $__internal_e4629fee35dca1ea6982c5b4fcdadd3e70f3c59630d3536126b3be2a4afb8bf1->leave($__internal_e4629fee35dca1ea6982c5b4fcdadd3e70f3c59630d3536126b3be2a4afb8bf1_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_9a6574163c868a2eb5122dd0c6006da630ff0f68e7857cca5fe0e21832d21202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6574163c868a2eb5122dd0c6006da630ff0f68e7857cca5fe0e21832d21202->enter($__internal_9a6574163c868a2eb5122dd0c6006da630ff0f68e7857cca5fe0e21832d21202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_609d6d0a59178ad31d1d44f446a3a8c14b26fd1c7c424809e72e9dc1c04b9738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609d6d0a59178ad31d1d44f446a3a8c14b26fd1c7c424809e72e9dc1c04b9738->enter($__internal_609d6d0a59178ad31d1d44f446a3a8c14b26fd1c7c424809e72e9dc1c04b9738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_609d6d0a59178ad31d1d44f446a3a8c14b26fd1c7c424809e72e9dc1c04b9738->leave($__internal_609d6d0a59178ad31d1d44f446a3a8c14b26fd1c7c424809e72e9dc1c04b9738_prof);

        
        $__internal_9a6574163c868a2eb5122dd0c6006da630ff0f68e7857cca5fe0e21832d21202->leave($__internal_9a6574163c868a2eb5122dd0c6006da630ff0f68e7857cca5fe0e21832d21202_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_d3e20eac6204f496a77db42fb6c6eaa1f7185c242e738ae2851fa376373b001c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e20eac6204f496a77db42fb6c6eaa1f7185c242e738ae2851fa376373b001c->enter($__internal_d3e20eac6204f496a77db42fb6c6eaa1f7185c242e738ae2851fa376373b001c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_313c7753e3a98e0de2a0418bcb4414faa18fe8455d2e29db002cf77b65215530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313c7753e3a98e0de2a0418bcb4414faa18fe8455d2e29db002cf77b65215530->enter($__internal_313c7753e3a98e0de2a0418bcb4414faa18fe8455d2e29db002cf77b65215530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        <div class=\"vich-file\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 14, $this->getSourceContext()); })())) {
            // line 15
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 15, $this->getSourceContext()); })()) === false)) ? ((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 15, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 15, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 15, $this->getSourceContext()); })())))), "html", null, true);
            echo "</a>
            ";
        }
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_313c7753e3a98e0de2a0418bcb4414faa18fe8455d2e29db002cf77b65215530->leave($__internal_313c7753e3a98e0de2a0418bcb4414faa18fe8455d2e29db002cf77b65215530_prof);

        
        $__internal_d3e20eac6204f496a77db42fb6c6eaa1f7185c242e738ae2851fa376373b001c->leave($__internal_d3e20eac6204f496a77db42fb6c6eaa1f7185c242e738ae2851fa376373b001c_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_4a3ba2448e952fd097d7a8444898ce86ec1ac5e06b5641810f090259600daf09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3ba2448e952fd097d7a8444898ce86ec1ac5e06b5641810f090259600daf09->enter($__internal_4a3ba2448e952fd097d7a8444898ce86ec1ac5e06b5641810f090259600daf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_319bde4ae8f758a755f6ac9ab5bffd0a99fa4f54d6360c1fd0f4f5076ff410d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319bde4ae8f758a755f6ac9ab5bffd0a99fa4f54d6360c1fd0f4f5076ff410d2->enter($__internal_319bde4ae8f758a755f6ac9ab5bffd0a99fa4f54d6360c1fd0f4f5076ff410d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_319bde4ae8f758a755f6ac9ab5bffd0a99fa4f54d6360c1fd0f4f5076ff410d2->leave($__internal_319bde4ae8f758a755f6ac9ab5bffd0a99fa4f54d6360c1fd0f4f5076ff410d2_prof);

        
        $__internal_4a3ba2448e952fd097d7a8444898ce86ec1ac5e06b5641810f090259600daf09->leave($__internal_4a3ba2448e952fd097d7a8444898ce86ec1ac5e06b5641810f090259600daf09_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_1cd5ee9f6ee5d130a26d98a0acbd6a982ac11b46460cef6831893d60ad469f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd5ee9f6ee5d130a26d98a0acbd6a982ac11b46460cef6831893d60ad469f0c->enter($__internal_1cd5ee9f6ee5d130a26d98a0acbd6a982ac11b46460cef6831893d60ad469f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_64a287ecbf3da6e85478d81cf025186f18782ccbc56c0be8ceb74c9ee5b592b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a287ecbf3da6e85478d81cf025186f18782ccbc56c0be8ceb74c9ee5b592b8->enter($__internal_64a287ecbf3da6e85478d81cf025186f18782ccbc56c0be8ceb74c9ee5b592b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        <div class=\"vich-image\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            ";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
            ";
        }
        // line 33
        echo "
            ";
        // line 34
        if ((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 34, $this->getSourceContext()); })())) {
            // line 35
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"\" /></a>
            ";
        }
        // line 37
        echo "            ";
        if ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 37, $this->getSourceContext()); })())) {
            // line 38
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 38, $this->getSourceContext()); })()) === false)) ? ((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 38, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 38, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 38, $this->getSourceContext()); })())))), "html", null, true);
            echo "</a>
            ";
        }
        // line 40
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_64a287ecbf3da6e85478d81cf025186f18782ccbc56c0be8ceb74c9ee5b592b8->leave($__internal_64a287ecbf3da6e85478d81cf025186f18782ccbc56c0be8ceb74c9ee5b592b8_prof);

        
        $__internal_1cd5ee9f6ee5d130a26d98a0acbd6a982ac11b46460cef6831893d60ad469f0c->leave($__internal_1cd5ee9f6ee5d130a26d98a0acbd6a982ac11b46460cef6831893d60ad469f0c_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 40,  191 => 38,  188 => 37,  180 => 35,  178 => 34,  175 => 33,  169 => 31,  167 => 30,  163 => 29,  160 => 28,  157 => 27,  148 => 26,  138 => 23,  136 => 22,  127 => 21,  115 => 17,  107 => 15,  105 => 14,  102 => 13,  96 => 11,  94 => 10,  90 => 9,  87 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
    {% spaceless %}
        <div class=\"vich-file\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
    {% spaceless %}
        <div class=\"vich-image\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if image_uri %}
                <a href=\"{{ image_uri }}\"><img src=\"{{ image_uri }}\" alt=\"\" /></a>
            {% endif %}
            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/vich/uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
