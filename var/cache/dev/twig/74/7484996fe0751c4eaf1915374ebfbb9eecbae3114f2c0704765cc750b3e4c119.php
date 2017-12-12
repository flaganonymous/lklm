<?php

/* EasyAdminBundle:default:show.html.twig */
class __TwigTemplate_0516ed1c1d2f0674c4de9ee3c7fbc834fabfecefac4348e91d84503bc6aa57af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 7, $this->getSourceContext()); })()), "templates", array()), "layout", array()), "EasyAdminBundle:default:show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b45f1646710ff0d4bafa4cb1fb4715d79acb8b13a7e2fcf4a044b1cdf3439854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45f1646710ff0d4bafa4cb1fb4715d79acb8b13a7e2fcf4a044b1cdf3439854->enter($__internal_b45f1646710ff0d4bafa4cb1fb4715d79acb8b13a7e2fcf4a044b1cdf3439854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_a2a7d2eaea9291bfc0914735ca3f1855477bbd859addd0c9dfc709900cdeba0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a7d2eaea9291bfc0914735ca3f1855477bbd859addd0c9dfc709900cdeba0d->enter($__internal_a2a7d2eaea9291bfc0914735ca3f1855477bbd859addd0c9dfc709900cdeba0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 3, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 3, $this->getSourceContext()); })()), "primary_key_field_name", array())));
        // line 4
        $context["__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "name", array()), array(),         // line 4
(isset($context["__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5"]) || array_key_exists("__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5", $context) ? $context["__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5" does not exist.', 4, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "label", array()), array(),         // line 4
(isset($context["__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5"]) || array_key_exists("__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5", $context) ? $context["__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5" does not exist.', 4, $this->getSourceContext()); })())), "%entity_id%" =>         // line 5
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 5, $this->getSourceContext()); })()));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b45f1646710ff0d4bafa4cb1fb4715d79acb8b13a7e2fcf4a044b1cdf3439854->leave($__internal_b45f1646710ff0d4bafa4cb1fb4715d79acb8b13a7e2fcf4a044b1cdf3439854_prof);

        
        $__internal_a2a7d2eaea9291bfc0914735ca3f1855477bbd859addd0c9dfc709900cdeba0d->leave($__internal_a2a7d2eaea9291bfc0914735ca3f1855477bbd859addd0c9dfc709900cdeba0d_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_cc8f25dc83eae7c5b3224358a8907b64dce57b8f48ded1f31675aba51d6ee8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8f25dc83eae7c5b3224358a8907b64dce57b8f48ded1f31675aba51d6ee8f9->enter($__internal_cc8f25dc83eae7c5b3224358a8907b64dce57b8f48ded1f31675aba51d6ee8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_914d534f018710c153a178214bf5e55100d40f723767fd2a6d73c1eca4d12ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914d534f018710c153a178214bf5e55100d40f723767fd2a6d73c1eca4d12ad2->enter($__internal_914d534f018710c153a178214bf5e55100d40f723767fd2a6d73c1eca4d12ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 9, $this->getSourceContext()); })()), "name", array())) . "-") . (isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 9, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_914d534f018710c153a178214bf5e55100d40f723767fd2a6d73c1eca4d12ad2->leave($__internal_914d534f018710c153a178214bf5e55100d40f723767fd2a6d73c1eca4d12ad2_prof);

        
        $__internal_cc8f25dc83eae7c5b3224358a8907b64dce57b8f48ded1f31675aba51d6ee8f9->leave($__internal_cc8f25dc83eae7c5b3224358a8907b64dce57b8f48ded1f31675aba51d6ee8f9_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_ecda140ac586b75cfafade6aebbfa1418999ff56c443cee17269653590522ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecda140ac586b75cfafade6aebbfa1418999ff56c443cee17269653590522ff6->enter($__internal_ecda140ac586b75cfafade6aebbfa1418999ff56c443cee17269653590522ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_ac231fe1e5496126eef210027901e6a717562a22aaec5643832993151b3168b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac231fe1e5496126eef210027901e6a717562a22aaec5643832993151b3168b7->enter($__internal_ac231fe1e5496126eef210027901e6a717562a22aaec5643832993151b3168b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_ac231fe1e5496126eef210027901e6a717562a22aaec5643832993151b3168b7->leave($__internal_ac231fe1e5496126eef210027901e6a717562a22aaec5643832993151b3168b7_prof);

        
        $__internal_ecda140ac586b75cfafade6aebbfa1418999ff56c443cee17269653590522ff6->leave($__internal_ecda140ac586b75cfafade6aebbfa1418999ff56c443cee17269653590522ff6_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_197ade6f6e19821c45c12cda98970f5cd2ccf8aec5ae59f109384cb254298651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_197ade6f6e19821c45c12cda98970f5cd2ccf8aec5ae59f109384cb254298651->enter($__internal_197ade6f6e19821c45c12cda98970f5cd2ccf8aec5ae59f109384cb254298651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_c335fcf112a858b4feeaa2ce288e89b922fb34c015648a986e35e01f40fa8d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c335fcf112a858b4feeaa2ce288e89b922fb34c015648a986e35e01f40fa8d01->enter($__internal_c335fcf112a858b4feeaa2ce288e89b922fb34c015648a986e35e01f40fa8d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 14, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 15, $this->getSourceContext()); })()), "show", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()),         // line 4
(isset($context["__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5"]) || array_key_exists("__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5", $context) ? $context["__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5" does not exist.', 4, $this->getSourceContext()); })()))) : (        // line 15
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 15, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c335fcf112a858b4feeaa2ce288e89b922fb34c015648a986e35e01f40fa8d01->leave($__internal_c335fcf112a858b4feeaa2ce288e89b922fb34c015648a986e35e01f40fa8d01_prof);

        
        $__internal_197ade6f6e19821c45c12cda98970f5cd2ccf8aec5ae59f109384cb254298651->leave($__internal_197ade6f6e19821c45c12cda98970f5cd2ccf8aec5ae59f109384cb254298651_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_df3494a81ac89d6526c0b64a6378f628d6cbb21cfad1b2dbf4743b2c530f5db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df3494a81ac89d6526c0b64a6378f628d6cbb21cfad1b2dbf4743b2c530f5db3->enter($__internal_df3494a81ac89d6526c0b64a6378f628d6cbb21cfad1b2dbf4743b2c530f5db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e65bcf8bbd550aa9bbef8a53b8d2c72cd0acff1de59563dd444bb592afcbd00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65bcf8bbd550aa9bbef8a53b8d2c72cd0acff1de59563dd444bb592afcbd00e->enter($__internal_e65bcf8bbd550aa9bbef8a53b8d2c72cd0acff1de59563dd444bb592afcbd00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 22
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "label", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 24, $this->getSourceContext()); })()),             // line 4
(isset($context["__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5"]) || array_key_exists("__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5", $context) ? $context["__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5" does not exist.', 4, $this->getSourceContext()); })()));
            // line 24
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 28
            echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 28, $this->getSourceContext()); })()), "name", array()), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 28, $this->getSourceContext()); })()), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 31
            if ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 32
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "help", array()), array(),                 // line 4
(isset($context["__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5"]) || array_key_exists("__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5", $context) ? $context["__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_a7b391537e7249a5fb5e86f41b02deea020a10b1f3f21f48c4c92c17d9f9cfc5" does not exist.', 4, $this->getSourceContext()); })()));
                // line 32
                echo "</span>
                    ";
            }
            // line 34
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 40
        $this->displayBlock('item_actions', $context, $blocks);
        // line 52
        echo "            </div>
        </div>
    </div>

    ";
        // line 56
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_e65bcf8bbd550aa9bbef8a53b8d2c72cd0acff1de59563dd444bb592afcbd00e->leave($__internal_e65bcf8bbd550aa9bbef8a53b8d2c72cd0acff1de59563dd444bb592afcbd00e_prof);

        
        $__internal_df3494a81ac89d6526c0b64a6378f628d6cbb21cfad1b2dbf4743b2c530f5db3->leave($__internal_df3494a81ac89d6526c0b64a6378f628d6cbb21cfad1b2dbf4743b2c530f5db3_prof);

    }

    // line 40
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_eb75c8d4657cfa8ccc271bdf69553345795f9cd465e174c91b004ceb57592930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb75c8d4657cfa8ccc271bdf69553345795f9cd465e174c91b004ceb57592930->enter($__internal_eb75c8d4657cfa8ccc271bdf69553345795f9cd465e174c91b004ceb57592930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_6b8d246682a94c953d2856f933808aaa4e147307f3f007c50b4f6c66da550165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8d246682a94c953d2856f933808aaa4e147307f3f007c50b4f6c66da550165->enter($__internal_6b8d246682a94c953d2856f933808aaa4e147307f3f007c50b4f6c66da550165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 41
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 41, $this->getSourceContext()); })()), "name", array()));
        // line 42
        echo "                ";
        $context["_request_parameters"] = array("entity" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 42, $this->getSourceContext()); })()), "name", array()), "referer" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 42, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 43
        echo "
                ";
        // line 44
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 45
(isset($context["_show_actions"]) || array_key_exists("_show_actions", $context) ? $context["_show_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_show_actions" does not exist.', 45, $this->getSourceContext()); })()), "request_parameters" =>         // line 46
(isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 46, $this->getSourceContext()); })()), "translation_domain" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 47
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 47, $this->getSourceContext()); })()), "translation_domain", array()), "trans_parameters" =>         // line 48
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 48, $this->getSourceContext()); })()), "item_id" =>         // line 49
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 49, $this->getSourceContext()); })())), false);
        // line 50
        echo "
            ";
        
        $__internal_6b8d246682a94c953d2856f933808aaa4e147307f3f007c50b4f6c66da550165->leave($__internal_6b8d246682a94c953d2856f933808aaa4e147307f3f007c50b4f6c66da550165_prof);

        
        $__internal_eb75c8d4657cfa8ccc271bdf69553345795f9cd465e174c91b004ceb57592930->leave($__internal_eb75c8d4657cfa8ccc271bdf69553345795f9cd465e174c91b004ceb57592930_prof);

    }

    // line 56
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_710fc3f4d0400e2ae10b73cfc51c7d7b1135c65cc9a1facf0c3ac76a44644cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_710fc3f4d0400e2ae10b73cfc51c7d7b1135c65cc9a1facf0c3ac76a44644cc0->enter($__internal_710fc3f4d0400e2ae10b73cfc51c7d7b1135c65cc9a1facf0c3ac76a44644cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_b8f9ad1c2a5a98c2d09daaae0d6c74b271648e9d2388ba15e1779413993fd684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f9ad1c2a5a98c2d09daaae0d6c74b271648e9d2388ba15e1779413993fd684->enter($__internal_b8f9ad1c2a5a98c2d09daaae0d6c74b271648e9d2388ba15e1779413993fd684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 57
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 59
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 59, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 60
(isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 60, $this->getSourceContext()); })()), "_translation_domain" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 61
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 61, $this->getSourceContext()); })()), "translation_domain", array()), "_trans_parameters" =>         // line 62
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 62, $this->getSourceContext()); })()), "_entity_config" =>         // line 63
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 63, $this->getSourceContext()); })())), false);
        // line 64
        echo "
    ";
        
        $__internal_b8f9ad1c2a5a98c2d09daaae0d6c74b271648e9d2388ba15e1779413993fd684->leave($__internal_b8f9ad1c2a5a98c2d09daaae0d6c74b271648e9d2388ba15e1779413993fd684_prof);

        
        $__internal_710fc3f4d0400e2ae10b73cfc51c7d7b1135c65cc9a1facf0c3ac76a44644cc0->leave($__internal_710fc3f4d0400e2ae10b73cfc51c7d7b1135c65cc9a1facf0c3ac76a44644cc0_prof);

    }

    // line 68
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_b8591907ba280b58611c992a9e19d5324fd130aea55889fa0b4b74ca57a53032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8591907ba280b58611c992a9e19d5324fd130aea55889fa0b4b74ca57a53032->enter($__internal_b8591907ba280b58611c992a9e19d5324fd130aea55889fa0b4b74ca57a53032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_107a1bcf4b5a4498b06b8d7681b5cb41b0c82e8179028c177680249bc96a119e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107a1bcf4b5a4498b06b8d7681b5cb41b0c82e8179028c177680249bc96a119e->enter($__internal_107a1bcf4b5a4498b06b8d7681b5cb41b0c82e8179028c177680249bc96a119e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 69
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
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
        
        $__internal_107a1bcf4b5a4498b06b8d7681b5cb41b0c82e8179028c177680249bc96a119e->leave($__internal_107a1bcf4b5a4498b06b8d7681b5cb41b0c82e8179028c177680249bc96a119e_prof);

        
        $__internal_b8591907ba280b58611c992a9e19d5324fd130aea55889fa0b4b74ca57a53032->leave($__internal_b8591907ba280b58611c992a9e19d5324fd130aea55889fa0b4b74ca57a53032_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 69,  268 => 68,  257 => 64,  255 => 63,  254 => 62,  253 => 61,  252 => 60,  251 => 59,  249 => 57,  240 => 56,  229 => 50,  227 => 49,  226 => 48,  225 => 47,  224 => 46,  223 => 45,  222 => 44,  219 => 43,  216 => 42,  213 => 41,  204 => 40,  194 => 56,  188 => 52,  186 => 40,  181 => 37,  173 => 34,  169 => 32,  167 => 4,  165 => 32,  163 => 31,  157 => 28,  151 => 24,  149 => 4,  148 => 24,  140 => 22,  136 => 21,  133 => 20,  124 => 19,  111 => 15,  110 => 4,  108 => 15,  105 => 14,  103 => 13,  94 => 12,  76 => 10,  58 => 9,  48 => 7,  46 => 5,  45 => 4,  44 => 5,  43 => 4,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 7,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% for field, metadata in fields %}
            <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                <label class=\"col-sm-2 control-label\">
                    {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                    </div>

                    {% if metadata.help|default('') != '' %}
                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                    {% endif %}
                </div>
            </div>
        {% endfor %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
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
{% endblock %}
", "EasyAdminBundle:default:show.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/show.html.twig");
    }
}
