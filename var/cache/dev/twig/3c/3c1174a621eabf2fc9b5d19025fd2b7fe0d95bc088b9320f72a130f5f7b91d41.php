<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_dc0323c2b20ac922b5078d276c3073a43570c045dfe2bc6f2b92df00e2a5b339 extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 8, $this->getSourceContext()); })()), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2488cb17c97ca1a6d1d0f96d1909b4a0fa50cd2302555968eb662235d7079aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2488cb17c97ca1a6d1d0f96d1909b4a0fa50cd2302555968eb662235d7079aeb->enter($__internal_2488cb17c97ca1a6d1d0f96d1909b4a0fa50cd2302555968eb662235d7079aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_2c3e1db3fa42ae62255a99676be6693afc78781c8c06031344726d9457decd1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3e1db3fa42ae62255a99676be6693afc78781c8c06031344726d9457decd1e->enter($__internal_2c3e1db3fa42ae62255a99676be6693afc78781c8c06031344726d9457decd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 4, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "primary_key_field_name", array()));
        // line 5
        $context["__internal_9f49009ab2a9ab7675af4786c371c0aedb94e19a01589cdc2da806d846f0b928"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), array(),         // line 5
(isset($context["__internal_9f49009ab2a9ab7675af4786c371c0aedb94e19a01589cdc2da806d846f0b928"]) || array_key_exists("__internal_9f49009ab2a9ab7675af4786c371c0aedb94e19a01589cdc2da806d846f0b928", $context) ? $context["__internal_9f49009ab2a9ab7675af4786c371c0aedb94e19a01589cdc2da806d846f0b928"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_9f49009ab2a9ab7675af4786c371c0aedb94e19a01589cdc2da806d846f0b928" does not exist.', 5, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 6, $this->getSourceContext()); })()), "label", array()), array(),         // line 5
(isset($context["__internal_9f49009ab2a9ab7675af4786c371c0aedb94e19a01589cdc2da806d846f0b928"]) || array_key_exists("__internal_9f49009ab2a9ab7675af4786c371c0aedb94e19a01589cdc2da806d846f0b928", $context) ? $context["__internal_9f49009ab2a9ab7675af4786c371c0aedb94e19a01589cdc2da806d846f0b928"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_9f49009ab2a9ab7675af4786c371c0aedb94e19a01589cdc2da806d846f0b928" does not exist.', 5, $this->getSourceContext()); })())), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 6, $this->getSourceContext()); })()));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2488cb17c97ca1a6d1d0f96d1909b4a0fa50cd2302555968eb662235d7079aeb->leave($__internal_2488cb17c97ca1a6d1d0f96d1909b4a0fa50cd2302555968eb662235d7079aeb_prof);

        
        $__internal_2c3e1db3fa42ae62255a99676be6693afc78781c8c06031344726d9457decd1e->leave($__internal_2c3e1db3fa42ae62255a99676be6693afc78781c8c06031344726d9457decd1e_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f8a367c87baddfbc78793dc763111de0065569087d8a05904baeccfc5edacdb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a367c87baddfbc78793dc763111de0065569087d8a05904baeccfc5edacdb3->enter($__internal_f8a367c87baddfbc78793dc763111de0065569087d8a05904baeccfc5edacdb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_e519e90307609cfd2865d92cd9313d19929a98fa3e84c073028672389707ef84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e519e90307609cfd2865d92cd9313d19929a98fa3e84c073028672389707ef84->enter($__internal_e519e90307609cfd2865d92cd9313d19929a98fa3e84c073028672389707ef84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array())) . "-") . (isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 10, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_e519e90307609cfd2865d92cd9313d19929a98fa3e84c073028672389707ef84->leave($__internal_e519e90307609cfd2865d92cd9313d19929a98fa3e84c073028672389707ef84_prof);

        
        $__internal_f8a367c87baddfbc78793dc763111de0065569087d8a05904baeccfc5edacdb3->leave($__internal_f8a367c87baddfbc78793dc763111de0065569087d8a05904baeccfc5edacdb3_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_a2ecedf48ebda0d794d176794f443b75bc4242bb934d764389d92a9f20491297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ecedf48ebda0d794d176794f443b75bc4242bb934d764389d92a9f20491297->enter($__internal_a2ecedf48ebda0d794d176794f443b75bc4242bb934d764389d92a9f20491297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_3ca27b39d0cdf7f803c512a8e1a0e2c9dada1c4dd61dd15cf34386392c1bc146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca27b39d0cdf7f803c512a8e1a0e2c9dada1c4dd61dd15cf34386392c1bc146->enter($__internal_3ca27b39d0cdf7f803c512a8e1a0e2c9dada1c4dd61dd15cf34386392c1bc146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 11, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_3ca27b39d0cdf7f803c512a8e1a0e2c9dada1c4dd61dd15cf34386392c1bc146->leave($__internal_3ca27b39d0cdf7f803c512a8e1a0e2c9dada1c4dd61dd15cf34386392c1bc146_prof);

        
        $__internal_a2ecedf48ebda0d794d176794f443b75bc4242bb934d764389d92a9f20491297->leave($__internal_a2ecedf48ebda0d794d176794f443b75bc4242bb934d764389d92a9f20491297_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_254da8c817e2127a7f75d8980951b144968b9b3b6f1a2506dd6332f9013f50fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254da8c817e2127a7f75d8980951b144968b9b3b6f1a2506dd6332f9013f50fe->enter($__internal_254da8c817e2127a7f75d8980951b144968b9b3b6f1a2506dd6332f9013f50fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_660da851595601e845583785489decf23f6d13155f5d8bed1600b90b913400f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660da851595601e845583785489decf23f6d13155f5d8bed1600b90b913400f9->enter($__internal_660da851595601e845583785489decf23f6d13155f5d8bed1600b90b913400f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 16, $this->getSourceContext()); })()), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 16, $this->getSourceContext()); })()),         // line 5
(isset($context["__internal_9f49009ab2a9ab7675af4786c371c0aedb94e19a01589cdc2da806d846f0b928"]) || array_key_exists("__internal_9f49009ab2a9ab7675af4786c371c0aedb94e19a01589cdc2da806d846f0b928", $context) ? $context["__internal_9f49009ab2a9ab7675af4786c371c0aedb94e19a01589cdc2da806d846f0b928"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_9f49009ab2a9ab7675af4786c371c0aedb94e19a01589cdc2da806d846f0b928" does not exist.', 5, $this->getSourceContext()); })()))) : (        // line 16
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 16, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_660da851595601e845583785489decf23f6d13155f5d8bed1600b90b913400f9->leave($__internal_660da851595601e845583785489decf23f6d13155f5d8bed1600b90b913400f9_prof);

        
        $__internal_254da8c817e2127a7f75d8980951b144968b9b3b6f1a2506dd6332f9013f50fe->leave($__internal_254da8c817e2127a7f75d8980951b144968b9b3b6f1a2506dd6332f9013f50fe_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_be620b8d8291f86f584baaec4f0e5bcf5ec9e1142cc4d9bf3a0b9c9d8f9214f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be620b8d8291f86f584baaec4f0e5bcf5ec9e1142cc4d9bf3a0b9c9d8f9214f2->enter($__internal_be620b8d8291f86f584baaec4f0e5bcf5ec9e1142cc4d9bf3a0b9c9d8f9214f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e8578043d47bc90da5551aeedcd43680274a8b0380bf58623fcecad5e51d4feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8578043d47bc90da5551aeedcd43680274a8b0380bf58623fcecad5e51d4feb->enter($__internal_e8578043d47bc90da5551aeedcd43680274a8b0380bf58623fcecad5e51d4feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_e8578043d47bc90da5551aeedcd43680274a8b0380bf58623fcecad5e51d4feb->leave($__internal_e8578043d47bc90da5551aeedcd43680274a8b0380bf58623fcecad5e51d4feb_prof);

        
        $__internal_be620b8d8291f86f584baaec4f0e5bcf5ec9e1142cc4d9bf3a0b9c9d8f9214f2->leave($__internal_be620b8d8291f86f584baaec4f0e5bcf5ec9e1142cc4d9bf3a0b9c9d8f9214f2_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_d4180dc7ab6d5740a9551fc64dc897bc8a5817f4eff620fed445e74260b9a22b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4180dc7ab6d5740a9551fc64dc897bc8a5817f4eff620fed445e74260b9a22b->enter($__internal_d4180dc7ab6d5740a9551fc64dc897bc8a5817f4eff620fed445e74260b9a22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_3af4aeea1cfdd1b0483c20a2c2c4bd0c9a07eccca7fac7ff11953ea8377d4a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af4aeea1cfdd1b0483c20a2c2c4bd0c9a07eccca7fac7ff11953ea8377d4a60->enter($__internal_3af4aeea1cfdd1b0483c20a2c2c4bd0c9a07eccca7fac7ff11953ea8377d4a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form');
        echo "
    ";
        
        $__internal_3af4aeea1cfdd1b0483c20a2c2c4bd0c9a07eccca7fac7ff11953ea8377d4a60->leave($__internal_3af4aeea1cfdd1b0483c20a2c2c4bd0c9a07eccca7fac7ff11953ea8377d4a60_prof);

        
        $__internal_d4180dc7ab6d5740a9551fc64dc897bc8a5817f4eff620fed445e74260b9a22b->leave($__internal_d4180dc7ab6d5740a9551fc64dc897bc8a5817f4eff620fed445e74260b9a22b_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_1793e78693988039e6ded8fa25d8f77e753504810cad1a499ecda40a359c7d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1793e78693988039e6ded8fa25d8f77e753504810cad1a499ecda40a359c7d26->enter($__internal_1793e78693988039e6ded8fa25d8f77e753504810cad1a499ecda40a359c7d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_469f43f22c76d3c210442ac39a7406298e5bfaf52b5779cef23c08bac21afefc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469f43f22c76d3c210442ac39a7406298e5bfaf52b5779cef23c08bac21afefc->enter($__internal_469f43f22c76d3c210442ac39a7406298e5bfaf52b5779cef23c08bac21afefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 28
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
(isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 29, $this->getSourceContext()); })()), "_translation_domain" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 30
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 30, $this->getSourceContext()); })()), "translation_domain", array()), "_trans_parameters" =>         // line 31
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 31, $this->getSourceContext()); })()), "_entity_config" =>         // line 32
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 32, $this->getSourceContext()); })())), false);
        // line 33
        echo "
    ";
        
        $__internal_469f43f22c76d3c210442ac39a7406298e5bfaf52b5779cef23c08bac21afefc->leave($__internal_469f43f22c76d3c210442ac39a7406298e5bfaf52b5779cef23c08bac21afefc_prof);

        
        $__internal_1793e78693988039e6ded8fa25d8f77e753504810cad1a499ecda40a359c7d26->leave($__internal_1793e78693988039e6ded8fa25d8f77e753504810cad1a499ecda40a359c7d26_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_33718359e87cd86fbdbd88c8758437dacd6c59d72f0bf58d5cdfc5f619ff14da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33718359e87cd86fbdbd88c8758437dacd6c59d72f0bf58d5cdfc5f619ff14da->enter($__internal_33718359e87cd86fbdbd88c8758437dacd6c59d72f0bf58d5cdfc5f619ff14da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_33a727970dfa0d1780be810b949f5fe3dc145d4617fdaad20b238a45d34017f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a727970dfa0d1780be810b949f5fe3dc145d4617fdaad20b238a45d34017f3->enter($__internal_33a727970dfa0d1780be810b949f5fe3dc145d4617fdaad20b238a45d34017f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_33a727970dfa0d1780be810b949f5fe3dc145d4617fdaad20b238a45d34017f3->leave($__internal_33a727970dfa0d1780be810b949f5fe3dc145d4617fdaad20b238a45d34017f3_prof);

        
        $__internal_33718359e87cd86fbdbd88c8758437dacd6c59d72f0bf58d5cdfc5f619ff14da->leave($__internal_33718359e87cd86fbdbd88c8758437dacd6c59d72f0bf58d5cdfc5f619ff14da_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  218 => 42,  210 => 38,  201 => 37,  190 => 33,  188 => 32,  187 => 31,  186 => 30,  185 => 29,  184 => 28,  182 => 26,  173 => 25,  160 => 22,  151 => 21,  141 => 25,  138 => 24,  135 => 21,  126 => 20,  113 => 16,  112 => 5,  110 => 16,  107 => 15,  105 => 14,  96 => 13,  78 => 11,  60 => 10,  50 => 8,  48 => 6,  47 => 5,  46 => 6,  45 => 5,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 8,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:edit.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
