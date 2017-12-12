<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_5dc3bbbc3f81dc54786cb03aad0e6e75c4eab7b71f16fa76fd3ead3efb19c6b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14f58ffbe593cd9db231555a3d82cdf95dcaeec8b7d51576e0e47ac5e6edf71b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f58ffbe593cd9db231555a3d82cdf95dcaeec8b7d51576e0e47ac5e6edf71b->enter($__internal_14f58ffbe593cd9db231555a3d82cdf95dcaeec8b7d51576e0e47ac5e6edf71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        $__internal_b0ce46f58df4e47e4e7067fd57afb81b3a6491824794f92a1a3443c22cd5b1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ce46f58df4e47e4e7067fd57afb81b3a6491824794f92a1a3443c22cd5b1c1->enter($__internal_b0ce46f58df4e47e4e7067fd57afb81b3a6491824794f92a1a3443c22cd5b1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 19
        echo "
";
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('form_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('button_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('money_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('date_widget', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 206
        echo "
";
        // line 208
        echo "
";
        // line 209
        $this->displayBlock('form_label', $context, $blocks);
        // line 213
        echo "
";
        // line 214
        $this->displayBlock('choice_label', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 223
        echo "
";
        // line 224
        $this->displayBlock('radio_label', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 246
        echo "
";
        // line 248
        echo "
";
        // line 249
        $this->displayBlock('form_row', $context, $blocks);
        // line 271
        echo "
";
        // line 272
        $this->displayBlock('collection_row', $context, $blocks);
        // line 307
        echo "
";
        // line 308
        $this->displayBlock('button_row', $context, $blocks);
        // line 313
        echo "
";
        // line 314
        $this->displayBlock('choice_row', $context, $blocks);
        // line 318
        echo "
";
        // line 319
        $this->displayBlock('date_row', $context, $blocks);
        // line 323
        echo "
";
        // line 324
        $this->displayBlock('time_row', $context, $blocks);
        // line 328
        echo "
";
        // line 329
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 333
        echo "
";
        // line 334
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 340
        echo "
";
        // line 341
        $this->displayBlock('radio_row', $context, $blocks);
        // line 347
        echo "
";
        // line 349
        $this->displayBlock('form_errors', $context, $blocks);
        // line 367
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 380
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 385
        echo "
";
        // line 386
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 390
        echo "
";
        // line 391
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 412
        echo "
";
        // line 413
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 417
        echo "
";
        // line 418
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 440
        echo "
";
        // line 442
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 524
        echo "
";
        // line 526
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 536
        echo "
";
        // line 537
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 541
        echo "
";
        // line 543
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 548
        echo "
";
        // line 550
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_14f58ffbe593cd9db231555a3d82cdf95dcaeec8b7d51576e0e47ac5e6edf71b->leave($__internal_14f58ffbe593cd9db231555a3d82cdf95dcaeec8b7d51576e0e47ac5e6edf71b_prof);

        
        $__internal_b0ce46f58df4e47e4e7067fd57afb81b3a6491824794f92a1a3443c22cd5b1c1->leave($__internal_b0ce46f58df4e47e4e7067fd57afb81b3a6491824794f92a1a3443c22cd5b1c1_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_ac0c06fc6a64b495f8c263bab8026d2a44037b00c563d847c7039f7933358f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac0c06fc6a64b495f8c263bab8026d2a44037b00c563d847c7039f7933358f3d->enter($__internal_ac0c06fc6a64b495f8c263bab8026d2a44037b00c563d847c7039f7933358f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_012c43dd5eb7be2efe2368a125e9f12649d48ee913cfe03cc4db71353a7e90f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012c43dd5eb7be2efe2368a125e9f12649d48ee913cfe03cc4db71353a7e90f9->enter($__internal_012c43dd5eb7be2efe2368a125e9f12649d48ee913cfe03cc4db71353a7e90f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 4, $this->getSourceContext()); })()),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 5, $this->getSourceContext()); })()), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter((isset($context["_easyadmin_form_type"]) || array_key_exists("_easyadmin_form_type", $context) ? $context["_easyadmin_form_type"] : (function () { throw new Twig_Error_Runtime('Variable "_easyadmin_form_type" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 8
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")), 2 => (twig_get_attribute($this->env, $this->getSourceContext(),             // line 9
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 9, $this->getSourceContext()); })()), "view", array()) . "-form")), " "), "data-view" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 11
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 11, $this->getSourceContext()); })()), "view", array()), "data-entity" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 12
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 12, $this->getSourceContext()); })()), "entity", array()), "name", array()), "data-entity-id" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 13
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 13, $this->getSourceContext()); })()), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_012c43dd5eb7be2efe2368a125e9f12649d48ee913cfe03cc4db71353a7e90f9->leave($__internal_012c43dd5eb7be2efe2368a125e9f12649d48ee913cfe03cc4db71353a7e90f9_prof);

        
        $__internal_ac0c06fc6a64b495f8c263bab8026d2a44037b00c563d847c7039f7933358f3d->leave($__internal_ac0c06fc6a64b495f8c263bab8026d2a44037b00c563d847c7039f7933358f3d_prof);

    }

    // line 22
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_e4f05af3786eb306bfbac2adea364e9794be7c70353478e3929453f0ffe97ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f05af3786eb306bfbac2adea364e9794be7c70353478e3929453f0ffe97ae2->enter($__internal_e4f05af3786eb306bfbac2adea364e9794be7c70353478e3929453f0ffe97ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_7c29630dfed29a0a19cfa63d7c7ef62822e9cb6c5111e062949d741eb1d832aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c29630dfed29a0a19cfa63d7c7ef62822e9cb6c5111e062949d741eb1d832aa->enter($__internal_7c29630dfed29a0a19cfa63d7c7ef62822e9cb6c5111e062949d741eb1d832aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 23
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 25
        if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 26
            echo "        ";
            ob_start();
            // line 27
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 30, $this->getSourceContext()); })()), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 42
            echo (isset($context["remove_item_javascript"]) || array_key_exists("remove_item_javascript", $context) ? $context["remove_item_javascript"] : (function () { throw new Twig_Error_Runtime('Variable "remove_item_javascript" does not exist.', 42, $this->getSourceContext()); })());
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_7c29630dfed29a0a19cfa63d7c7ef62822e9cb6c5111e062949d741eb1d832aa->leave($__internal_7c29630dfed29a0a19cfa63d7c7ef62822e9cb6c5111e062949d741eb1d832aa_prof);

        
        $__internal_e4f05af3786eb306bfbac2adea364e9794be7c70353478e3929453f0ffe97ae2->leave($__internal_e4f05af3786eb306bfbac2adea364e9794be7c70353478e3929453f0ffe97ae2_prof);

    }

    // line 50
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6b0c7bf027bdc1b30f4d060bcc944fbee641128e5c794933da3fef0c7fba24f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0c7bf027bdc1b30f4d060bcc944fbee641128e5c794933da3fef0c7fba24f2->enter($__internal_6b0c7bf027bdc1b30f4d060bcc944fbee641128e5c794933da3fef0c7fba24f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_919bf2714c6d8a0bc8437fc8b16833dc502e5e5a7dea06ab53079350771d61de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919bf2714c6d8a0bc8437fc8b16833dc502e5e5a7dea06ab53079350771d61de->enter($__internal_919bf2714c6d8a0bc8437fc8b16833dc502e5e5a7dea06ab53079350771d61de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 51
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 51, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 52
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 52, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 54
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_919bf2714c6d8a0bc8437fc8b16833dc502e5e5a7dea06ab53079350771d61de->leave($__internal_919bf2714c6d8a0bc8437fc8b16833dc502e5e5a7dea06ab53079350771d61de_prof);

        
        $__internal_6b0c7bf027bdc1b30f4d060bcc944fbee641128e5c794933da3fef0c7fba24f2->leave($__internal_6b0c7bf027bdc1b30f4d060bcc944fbee641128e5c794933da3fef0c7fba24f2_prof);

    }

    // line 57
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2f3a9f211e473c8090c36715358fa275696cf2f89f97947dd8cb42975a7a8275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f3a9f211e473c8090c36715358fa275696cf2f89f97947dd8cb42975a7a8275->enter($__internal_2f3a9f211e473c8090c36715358fa275696cf2f89f97947dd8cb42975a7a8275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_e111b55dee3a13e9ce34301f6bceaa5c8b02e9f36f4c62b1cd9d8b9191d65bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e111b55dee3a13e9ce34301f6bceaa5c8b02e9f36f4c62b1cd9d8b9191d65bec->enter($__internal_e111b55dee3a13e9ce34301f6bceaa5c8b02e9f36f4c62b1cd9d8b9191d65bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 58
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 58, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 59
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_e111b55dee3a13e9ce34301f6bceaa5c8b02e9f36f4c62b1cd9d8b9191d65bec->leave($__internal_e111b55dee3a13e9ce34301f6bceaa5c8b02e9f36f4c62b1cd9d8b9191d65bec_prof);

        
        $__internal_2f3a9f211e473c8090c36715358fa275696cf2f89f97947dd8cb42975a7a8275->leave($__internal_2f3a9f211e473c8090c36715358fa275696cf2f89f97947dd8cb42975a7a8275_prof);

    }

    // line 62
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_b96104d35ed51e7d7aff6f904260940a260f534365365641ef835cfe275dbdcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96104d35ed51e7d7aff6f904260940a260f534365365641ef835cfe275dbdcc->enter($__internal_b96104d35ed51e7d7aff6f904260940a260f534365365641ef835cfe275dbdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_14e3e361c56af3ececc63c693f1c839ab7486a208b4b4b59a657cd0a5e532c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e3e361c56af3ececc63c693f1c839ab7486a208b4b4b59a657cd0a5e532c89->enter($__internal_14e3e361c56af3ececc63c693f1c839ab7486a208b4b4b59a657cd0a5e532c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 63
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 63, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 64
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_14e3e361c56af3ececc63c693f1c839ab7486a208b4b4b59a657cd0a5e532c89->leave($__internal_14e3e361c56af3ececc63c693f1c839ab7486a208b4b4b59a657cd0a5e532c89_prof);

        
        $__internal_b96104d35ed51e7d7aff6f904260940a260f534365365641ef835cfe275dbdcc->leave($__internal_b96104d35ed51e7d7aff6f904260940a260f534365365641ef835cfe275dbdcc_prof);

    }

    // line 67
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_62272b7d734e246abf28bb5c9605819b3db7b8bdfe8d67718e1afd2e3cd7cfba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62272b7d734e246abf28bb5c9605819b3db7b8bdfe8d67718e1afd2e3cd7cfba->enter($__internal_62272b7d734e246abf28bb5c9605819b3db7b8bdfe8d67718e1afd2e3cd7cfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_404dd1e51468fcf7f68370d9f76a75d2de3003a6eccd6b3c9b84f33759895154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404dd1e51468fcf7f68370d9f76a75d2de3003a6eccd6b3c9b84f33759895154->enter($__internal_404dd1e51468fcf7f68370d9f76a75d2de3003a6eccd6b3c9b84f33759895154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 68
        echo "<div class=\"input-group\">
        ";
        // line 69
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 69, $this->getSourceContext()); })()), 0, 2));
        // line 70
        echo "        ";
        if ( !(isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 70, $this->getSourceContext()); })())) {
            // line 71
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 71, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 73
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 74
        if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 74, $this->getSourceContext()); })())) {
            // line 75
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 75, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 77
        echo "    </div>";
        
        $__internal_404dd1e51468fcf7f68370d9f76a75d2de3003a6eccd6b3c9b84f33759895154->leave($__internal_404dd1e51468fcf7f68370d9f76a75d2de3003a6eccd6b3c9b84f33759895154_prof);

        
        $__internal_62272b7d734e246abf28bb5c9605819b3db7b8bdfe8d67718e1afd2e3cd7cfba->leave($__internal_62272b7d734e246abf28bb5c9605819b3db7b8bdfe8d67718e1afd2e3cd7cfba_prof);

    }

    // line 80
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_6a58daea9993da8b9e7b0e06422a535b280ac0a7fc501e9f947f131abc55aed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a58daea9993da8b9e7b0e06422a535b280ac0a7fc501e9f947f131abc55aed7->enter($__internal_6a58daea9993da8b9e7b0e06422a535b280ac0a7fc501e9f947f131abc55aed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_91e743094f016bfe74db4533af1d25b4137fd0f1c1ce7088abac53f48c9f5379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e743094f016bfe74db4533af1d25b4137fd0f1c1ce7088abac53f48c9f5379->enter($__internal_91e743094f016bfe74db4533af1d25b4137fd0f1c1ce7088abac53f48c9f5379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 81
        echo "<div class=\"input-group\">";
        // line 82
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 83
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_91e743094f016bfe74db4533af1d25b4137fd0f1c1ce7088abac53f48c9f5379->leave($__internal_91e743094f016bfe74db4533af1d25b4137fd0f1c1ce7088abac53f48c9f5379_prof);

        
        $__internal_6a58daea9993da8b9e7b0e06422a535b280ac0a7fc501e9f947f131abc55aed7->leave($__internal_6a58daea9993da8b9e7b0e06422a535b280ac0a7fc501e9f947f131abc55aed7_prof);

    }

    // line 87
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_a8f17e82dfba32725473e56536d6e256a9e7ef09aadce2f698abe1df9acf7917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f17e82dfba32725473e56536d6e256a9e7ef09aadce2f698abe1df9acf7917->enter($__internal_a8f17e82dfba32725473e56536d6e256a9e7ef09aadce2f698abe1df9acf7917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_434eb64db93f7ddf44ba1acd1c048821e7ee7ca2b4943f736c836abca9d89f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434eb64db93f7ddf44ba1acd1c048821e7ee7ca2b4943f736c836abca9d89f49->enter($__internal_434eb64db93f7ddf44ba1acd1c048821e7ee7ca2b4943f736c836abca9d89f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 88
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 88, $this->getSourceContext()); })()) == "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 91, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 92
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 93
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 94
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), "date", array()), 'widget', array("datetime" => true));
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 96, $this->getSourceContext()); })()), "time", array()), 'widget', array("datetime" => true));
            // line 97
            echo "</div>";
        }
        
        $__internal_434eb64db93f7ddf44ba1acd1c048821e7ee7ca2b4943f736c836abca9d89f49->leave($__internal_434eb64db93f7ddf44ba1acd1c048821e7ee7ca2b4943f736c836abca9d89f49_prof);

        
        $__internal_a8f17e82dfba32725473e56536d6e256a9e7ef09aadce2f698abe1df9acf7917->leave($__internal_a8f17e82dfba32725473e56536d6e256a9e7ef09aadce2f698abe1df9acf7917_prof);

    }

    // line 101
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_500c3302cadebe9e24468da68597ac153bd4bc4e8efeee343ba8e8f3d39afcd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500c3302cadebe9e24468da68597ac153bd4bc4e8efeee343ba8e8f3d39afcd3->enter($__internal_500c3302cadebe9e24468da68597ac153bd4bc4e8efeee343ba8e8f3d39afcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_7e9a5151ea2fa1af239953c1d0950b8b0e40651f38df0ed932f477ea6ae4ee0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9a5151ea2fa1af239953c1d0950b8b0e40651f38df0ed932f477ea6ae4ee0a->enter($__internal_7e9a5151ea2fa1af239953c1d0950b8b0e40651f38df0ed932f477ea6ae4ee0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 102
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 102, $this->getSourceContext()); })()) == "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 105, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 106
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 106, $this->getSourceContext()); })()))) {
                // line 107
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 109
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 109, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 110
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 110, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 111
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 112
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 112, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 114
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 114, $this->getSourceContext()); })()))) {
                // line 115
                echo "</div>";
            }
        }
        
        $__internal_7e9a5151ea2fa1af239953c1d0950b8b0e40651f38df0ed932f477ea6ae4ee0a->leave($__internal_7e9a5151ea2fa1af239953c1d0950b8b0e40651f38df0ed932f477ea6ae4ee0a_prof);

        
        $__internal_500c3302cadebe9e24468da68597ac153bd4bc4e8efeee343ba8e8f3d39afcd3->leave($__internal_500c3302cadebe9e24468da68597ac153bd4bc4e8efeee343ba8e8f3d39afcd3_prof);

    }

    // line 120
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ef3e32f26bf954a7c2f8b65d45131a7da8a31924852c61b746513a70bbb9641b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef3e32f26bf954a7c2f8b65d45131a7da8a31924852c61b746513a70bbb9641b->enter($__internal_ef3e32f26bf954a7c2f8b65d45131a7da8a31924852c61b746513a70bbb9641b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_37295f6dbbe888eda60c505832fb83d19615c9cf9cd83aa31bfb2b103a7ac36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37295f6dbbe888eda60c505832fb83d19615c9cf9cd83aa31bfb2b103a7ac36a->enter($__internal_37295f6dbbe888eda60c505832fb83d19615c9cf9cd83aa31bfb2b103a7ac36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 121
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 121, $this->getSourceContext()); })()) == "single_text")) {
            // line 122
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 124
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 124, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 125
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 125, $this->getSourceContext()); })())))) {
                // line 126
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget');
            }
            // line 129
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 129, $this->getSourceContext()); })())))) {
                // line 130
                echo "</div>";
            }
        }
        
        $__internal_37295f6dbbe888eda60c505832fb83d19615c9cf9cd83aa31bfb2b103a7ac36a->leave($__internal_37295f6dbbe888eda60c505832fb83d19615c9cf9cd83aa31bfb2b103a7ac36a_prof);

        
        $__internal_ef3e32f26bf954a7c2f8b65d45131a7da8a31924852c61b746513a70bbb9641b->leave($__internal_ef3e32f26bf954a7c2f8b65d45131a7da8a31924852c61b746513a70bbb9641b_prof);

    }

    // line 135
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d80faa766d8fc7e9bab6dea1fdf8a5b934e797e3eaf89aa42d6fd4e7d0ccd53d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80faa766d8fc7e9bab6dea1fdf8a5b934e797e3eaf89aa42d6fd4e7d0ccd53d->enter($__internal_d80faa766d8fc7e9bab6dea1fdf8a5b934e797e3eaf89aa42d6fd4e7d0ccd53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_82b7da6689f792c3d5e1559a36b92127317bd0787e05819567703ab307109dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b7da6689f792c3d5e1559a36b92127317bd0787e05819567703ab307109dc0->enter($__internal_82b7da6689f792c3d5e1559a36b92127317bd0787e05819567703ab307109dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 136
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 136, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 137
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 138
        if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 139
            echo "        ";
            ob_start();
            // line 140
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 143
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 143, $this->getSourceContext()); })()), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 153
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 155
            echo (isset($context["remove_item_javascript"]) || array_key_exists("remove_item_javascript", $context) ? $context["remove_item_javascript"] : (function () { throw new Twig_Error_Runtime('Variable "remove_item_javascript" does not exist.', 155, $this->getSourceContext()); })());
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_82b7da6689f792c3d5e1559a36b92127317bd0787e05819567703ab307109dc0->leave($__internal_82b7da6689f792c3d5e1559a36b92127317bd0787e05819567703ab307109dc0_prof);

        
        $__internal_d80faa766d8fc7e9bab6dea1fdf8a5b934e797e3eaf89aa42d6fd4e7d0ccd53d->leave($__internal_d80faa766d8fc7e9bab6dea1fdf8a5b934e797e3eaf89aa42d6fd4e7d0ccd53d_prof);

    }

    // line 163
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_136b02fd457e1d5de945d7e87a7b01078754a01dcc0d524b4148498e77a68c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_136b02fd457e1d5de945d7e87a7b01078754a01dcc0d524b4148498e77a68c8b->enter($__internal_136b02fd457e1d5de945d7e87a7b01078754a01dcc0d524b4148498e77a68c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_ca9a13510bcb8736982e3c9b67514f035e0b10ab22aa29e535427c257431a900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9a13510bcb8736982e3c9b67514f035e0b10ab22aa29e535427c257431a900->enter($__internal_ca9a13510bcb8736982e3c9b67514f035e0b10ab22aa29e535427c257431a900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 164
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 165
            echo "<div class=\"control-group\">";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 166, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 167
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 168
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 169
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 169, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "</div>";
        } else {
            // line 174
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 175, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 176
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 177
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 178
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 178, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "</div>";
        }
        
        $__internal_ca9a13510bcb8736982e3c9b67514f035e0b10ab22aa29e535427c257431a900->leave($__internal_ca9a13510bcb8736982e3c9b67514f035e0b10ab22aa29e535427c257431a900_prof);

        
        $__internal_136b02fd457e1d5de945d7e87a7b01078754a01dcc0d524b4148498e77a68c8b->leave($__internal_136b02fd457e1d5de945d7e87a7b01078754a01dcc0d524b4148498e77a68c8b_prof);

    }

    // line 185
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8cd3db3942e1d1aebd6304fadd3adccced5037d9340dc28fa11c2323b5afbcd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd3db3942e1d1aebd6304fadd3adccced5037d9340dc28fa11c2323b5afbcd1->enter($__internal_8cd3db3942e1d1aebd6304fadd3adccced5037d9340dc28fa11c2323b5afbcd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_591e18d3536d2c304bca1e614cd5d549876af5e91b8b21d5844703e8988eaaad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591e18d3536d2c304bca1e614cd5d549876af5e91b8b21d5844703e8988eaaad->enter($__internal_591e18d3536d2c304bca1e614cd5d549876af5e91b8b21d5844703e8988eaaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 186
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 186, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 187
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 187, $this->getSourceContext()); })()))) {
            // line 188
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 188, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 190
            echo "<div class=\"checkbox\">";
            // line 191
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 191, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 192
            echo "</div>";
        }
        
        $__internal_591e18d3536d2c304bca1e614cd5d549876af5e91b8b21d5844703e8988eaaad->leave($__internal_591e18d3536d2c304bca1e614cd5d549876af5e91b8b21d5844703e8988eaaad_prof);

        
        $__internal_8cd3db3942e1d1aebd6304fadd3adccced5037d9340dc28fa11c2323b5afbcd1->leave($__internal_8cd3db3942e1d1aebd6304fadd3adccced5037d9340dc28fa11c2323b5afbcd1_prof);

    }

    // line 196
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_9c88270a045fc651c009b9503dd769af151d582e04bd0c74b4528cfdaef79f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c88270a045fc651c009b9503dd769af151d582e04bd0c74b4528cfdaef79f8e->enter($__internal_9c88270a045fc651c009b9503dd769af151d582e04bd0c74b4528cfdaef79f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_0454ed5206a978c5d364a89ee557f5ab7aa110ff3063391c98cf8791231d7e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0454ed5206a978c5d364a89ee557f5ab7aa110ff3063391c98cf8791231d7e1f->enter($__internal_0454ed5206a978c5d364a89ee557f5ab7aa110ff3063391c98cf8791231d7e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 197
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 197, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 198
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 198, $this->getSourceContext()); })()))) {
            // line 199
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 199, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 201
            echo "<div class=\"radio\">";
            // line 202
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 202, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 203
            echo "</div>";
        }
        
        $__internal_0454ed5206a978c5d364a89ee557f5ab7aa110ff3063391c98cf8791231d7e1f->leave($__internal_0454ed5206a978c5d364a89ee557f5ab7aa110ff3063391c98cf8791231d7e1f_prof);

        
        $__internal_9c88270a045fc651c009b9503dd769af151d582e04bd0c74b4528cfdaef79f8e->leave($__internal_9c88270a045fc651c009b9503dd769af151d582e04bd0c74b4528cfdaef79f8e_prof);

    }

    // line 209
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_59395c5ff015b500aebf009465e9c3947003d27c2e7dd73a2c0af629c214d726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59395c5ff015b500aebf009465e9c3947003d27c2e7dd73a2c0af629c214d726->enter($__internal_59395c5ff015b500aebf009465e9c3947003d27c2e7dd73a2c0af629c214d726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3c70394fcd2e7d351cec896eb92228e309120d0f44b924ed1dca167cae12c93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c70394fcd2e7d351cec896eb92228e309120d0f44b924ed1dca167cae12c93c->enter($__internal_3c70394fcd2e7d351cec896eb92228e309120d0f44b924ed1dca167cae12c93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 210
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 210, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 211
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_3c70394fcd2e7d351cec896eb92228e309120d0f44b924ed1dca167cae12c93c->leave($__internal_3c70394fcd2e7d351cec896eb92228e309120d0f44b924ed1dca167cae12c93c_prof);

        
        $__internal_59395c5ff015b500aebf009465e9c3947003d27c2e7dd73a2c0af629c214d726->leave($__internal_59395c5ff015b500aebf009465e9c3947003d27c2e7dd73a2c0af629c214d726_prof);

    }

    // line 214
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_c576c0d011cff3d2739d9040eb54c6ff9d420b3cdfc43dad965221ef62b9b59a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c576c0d011cff3d2739d9040eb54c6ff9d420b3cdfc43dad965221ef62b9b59a->enter($__internal_c576c0d011cff3d2739d9040eb54c6ff9d420b3cdfc43dad965221ef62b9b59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_899a914b5c4bc06226ff988369c81574b2f27a0a4b40f370352b7f30f6771a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_899a914b5c4bc06226ff988369c81574b2f27a0a4b40f370352b7f30f6771a7a->enter($__internal_899a914b5c4bc06226ff988369c81574b2f27a0a4b40f370352b7f30f6771a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 216
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 216, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 217
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_899a914b5c4bc06226ff988369c81574b2f27a0a4b40f370352b7f30f6771a7a->leave($__internal_899a914b5c4bc06226ff988369c81574b2f27a0a4b40f370352b7f30f6771a7a_prof);

        
        $__internal_c576c0d011cff3d2739d9040eb54c6ff9d420b3cdfc43dad965221ef62b9b59a->leave($__internal_c576c0d011cff3d2739d9040eb54c6ff9d420b3cdfc43dad965221ef62b9b59a_prof);

    }

    // line 220
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_223b6add8a4b072e08e9a4da57ee12c6fe168424c736037abb7c78858c222ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_223b6add8a4b072e08e9a4da57ee12c6fe168424c736037abb7c78858c222ce0->enter($__internal_223b6add8a4b072e08e9a4da57ee12c6fe168424c736037abb7c78858c222ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_716d8049dec4acf3115800070f8aa1da823a3cd5851a7e3e43d4af1b947b72dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716d8049dec4acf3115800070f8aa1da823a3cd5851a7e3e43d4af1b947b72dd->enter($__internal_716d8049dec4acf3115800070f8aa1da823a3cd5851a7e3e43d4af1b947b72dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 221
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_716d8049dec4acf3115800070f8aa1da823a3cd5851a7e3e43d4af1b947b72dd->leave($__internal_716d8049dec4acf3115800070f8aa1da823a3cd5851a7e3e43d4af1b947b72dd_prof);

        
        $__internal_223b6add8a4b072e08e9a4da57ee12c6fe168424c736037abb7c78858c222ce0->leave($__internal_223b6add8a4b072e08e9a4da57ee12c6fe168424c736037abb7c78858c222ce0_prof);

    }

    // line 224
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_b863a73ff35d9bea141a9e3c42849bcbbae5992e9c5faa3a86dd4ff89fbd95a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b863a73ff35d9bea141a9e3c42849bcbbae5992e9c5faa3a86dd4ff89fbd95a4->enter($__internal_b863a73ff35d9bea141a9e3c42849bcbbae5992e9c5faa3a86dd4ff89fbd95a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_b6028c43aa2e8e142d5ed4c3d5341e0aba156e19320980a9f465a14fdc62a197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6028c43aa2e8e142d5ed4c3d5341e0aba156e19320980a9f465a14fdc62a197->enter($__internal_b6028c43aa2e8e142d5ed4c3d5341e0aba156e19320980a9f465a14fdc62a197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 225
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b6028c43aa2e8e142d5ed4c3d5341e0aba156e19320980a9f465a14fdc62a197->leave($__internal_b6028c43aa2e8e142d5ed4c3d5341e0aba156e19320980a9f465a14fdc62a197_prof);

        
        $__internal_b863a73ff35d9bea141a9e3c42849bcbbae5992e9c5faa3a86dd4ff89fbd95a4->leave($__internal_b863a73ff35d9bea141a9e3c42849bcbbae5992e9c5faa3a86dd4ff89fbd95a4_prof);

    }

    // line 228
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_a148585409d74ccf2c16f5101f5127680107d1b9389ccfb35faa096dfe20212b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a148585409d74ccf2c16f5101f5127680107d1b9389ccfb35faa096dfe20212b->enter($__internal_a148585409d74ccf2c16f5101f5127680107d1b9389ccfb35faa096dfe20212b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_d8340a180555ee891df5197012c9ef82fe7b6f570d875da2d4bcf41348424511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8340a180555ee891df5197012c9ef82fe7b6f570d875da2d4bcf41348424511->enter($__internal_d8340a180555ee891df5197012c9ef82fe7b6f570d875da2d4bcf41348424511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 229
        echo "    ";
        // line 230
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 231
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 231, $this->getSourceContext()); })())) {
                // line 232
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 232, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 233
                echo "        ";
            }
            // line 234
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 235
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 235, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 235, $this->getSourceContext()); })())))));
                // line 236
                echo "        ";
            }
            // line 237
            echo "        ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 237, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 237, $this->getSourceContext()); })())))) {
                // line 238
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 238, $this->getSourceContext()); })()));
                // line 239
                echo "        ";
            }
            // line 240
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 240, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 241
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 241, $this->getSourceContext()); })());
            // line 242
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 242, $this->getSourceContext()); })()) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 242, $this->getSourceContext()); })()), array(), (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 242, $this->getSourceContext()); })())) ? ((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 242, $this->getSourceContext()); })())) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 242, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array()))))) : ("")), "html", null, true);
            // line 243
            echo "</label>
    ";
        }
        
        $__internal_d8340a180555ee891df5197012c9ef82fe7b6f570d875da2d4bcf41348424511->leave($__internal_d8340a180555ee891df5197012c9ef82fe7b6f570d875da2d4bcf41348424511_prof);

        
        $__internal_a148585409d74ccf2c16f5101f5127680107d1b9389ccfb35faa096dfe20212b->leave($__internal_a148585409d74ccf2c16f5101f5127680107d1b9389ccfb35faa096dfe20212b_prof);

    }

    // line 249
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c9f5f182091e2c5834257513b866e95dd8467660924fe95bb30aec8652fbed5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f5f182091e2c5834257513b866e95dd8467660924fe95bb30aec8652fbed5f->enter($__internal_c9f5f182091e2c5834257513b866e95dd8467660924fe95bb30aec8652fbed5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_63792d4b4e749a5f386518d0ed59eb973fb055231545bb43d1bc9bd2bd5db1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63792d4b4e749a5f386518d0ed59eb973fb055231545bb43d1bc9bd2bd5db1a1->enter($__internal_63792d4b4e749a5f386518d0ed59eb973fb055231545bb43d1bc9bd2bd5db1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 250
        $context["_field_type"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 251
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 251, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 251, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 251, $this->getSourceContext()); })()))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 251, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">";
        // line 252
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 252, $this->getSourceContext()); })()), 'label');
        // line 253
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 253, $this->getSourceContext()); })()), 'widget');
        // line 255
        if ((twig_in_filter((isset($context["_field_type"]) || array_key_exists("_field_type", $context) ? $context["_field_type"] : (function () { throw new Twig_Error_Runtime('Variable "_field_type" does not exist.', 255, $this->getSourceContext()); })()), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 256
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 258
            if ((null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 258, $this->getSourceContext()); })()))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 259
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 264, $this->getSourceContext()); })()), 'errors');
        // line 266
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 267
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 267, $this->getSourceContext()); })()), "field", array()), "help", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 267, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 269
        echo "    </div>";
        
        $__internal_63792d4b4e749a5f386518d0ed59eb973fb055231545bb43d1bc9bd2bd5db1a1->leave($__internal_63792d4b4e749a5f386518d0ed59eb973fb055231545bb43d1bc9bd2bd5db1a1_prof);

        
        $__internal_c9f5f182091e2c5834257513b866e95dd8467660924fe95bb30aec8652fbed5f->leave($__internal_c9f5f182091e2c5834257513b866e95dd8467660924fe95bb30aec8652fbed5f_prof);

    }

    // line 272
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_2ae4279c013aef2f900b216541d6aa2f687d1c0f0ba93848283720fb1a2e865b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae4279c013aef2f900b216541d6aa2f687d1c0f0ba93848283720fb1a2e865b->enter($__internal_2ae4279c013aef2f900b216541d6aa2f687d1c0f0ba93848283720fb1a2e865b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_ca1c7c8dca6a0761c3810b5d577895dfa2d247ab5a1b7f2383aa123d6e5fd76e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1c7c8dca6a0761c3810b5d577895dfa2d247ab5a1b7f2383aa123d6e5fd76e->enter($__internal_ca1c7c8dca6a0761c3810b5d577895dfa2d247ab5a1b7f2383aa123d6e5fd76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 273
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 275
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 275, $this->getSourceContext()); })()), false)) : (false))) {
            // line 276
            echo "        ";
            ob_start();
            // line 277
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 280
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 280, $this->getSourceContext()); })()), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 288
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 288, $this->getSourceContext()); })()), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 288, $this->getSourceContext()); })()), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 289
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 289, $this->getSourceContext()); })()), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 289, $this->getSourceContext()); })()), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 298
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 300
            echo (isset($context["js_add_item"]) || array_key_exists("js_add_item", $context) ? $context["js_add_item"] : (function () { throw new Twig_Error_Runtime('Variable "js_add_item" does not exist.', 300, $this->getSourceContext()); })());
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 302
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 302, $this->getSourceContext()); })())) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_ca1c7c8dca6a0761c3810b5d577895dfa2d247ab5a1b7f2383aa123d6e5fd76e->leave($__internal_ca1c7c8dca6a0761c3810b5d577895dfa2d247ab5a1b7f2383aa123d6e5fd76e_prof);

        
        $__internal_2ae4279c013aef2f900b216541d6aa2f687d1c0f0ba93848283720fb1a2e865b->leave($__internal_2ae4279c013aef2f900b216541d6aa2f687d1c0f0ba93848283720fb1a2e865b_prof);

    }

    // line 308
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e554c4fd1bbbc864a669ee2a81ba7f32db873bbbc4add5e17ce8b50baf5eac84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e554c4fd1bbbc864a669ee2a81ba7f32db873bbbc4add5e17ce8b50baf5eac84->enter($__internal_e554c4fd1bbbc864a669ee2a81ba7f32db873bbbc4add5e17ce8b50baf5eac84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_2c9a68ffdbba1af2f08dfdf32b9c9fc87ed5b66a2bb4baa3e240d2d44d4fd302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9a68ffdbba1af2f08dfdf32b9c9fc87ed5b66a2bb4baa3e240d2d44d4fd302->enter($__internal_2c9a68ffdbba1af2f08dfdf32b9c9fc87ed5b66a2bb4baa3e240d2d44d4fd302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 309
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 309, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 310
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo "</div>";
        
        $__internal_2c9a68ffdbba1af2f08dfdf32b9c9fc87ed5b66a2bb4baa3e240d2d44d4fd302->leave($__internal_2c9a68ffdbba1af2f08dfdf32b9c9fc87ed5b66a2bb4baa3e240d2d44d4fd302_prof);

        
        $__internal_e554c4fd1bbbc864a669ee2a81ba7f32db873bbbc4add5e17ce8b50baf5eac84->leave($__internal_e554c4fd1bbbc864a669ee2a81ba7f32db873bbbc4add5e17ce8b50baf5eac84_prof);

    }

    // line 314
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_f0ec30d0f1b3261412c8748fe0b22ca96f77ccc954911341ddaf1c3e3ca082c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0ec30d0f1b3261412c8748fe0b22ca96f77ccc954911341ddaf1c3e3ca082c5->enter($__internal_f0ec30d0f1b3261412c8748fe0b22ca96f77ccc954911341ddaf1c3e3ca082c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ba5270243b0adadc98a83ae9e54cd8e5aec2c3517cc7813dc1426632037cda45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5270243b0adadc98a83ae9e54cd8e5aec2c3517cc7813dc1426632037cda45->enter($__internal_ba5270243b0adadc98a83ae9e54cd8e5aec2c3517cc7813dc1426632037cda45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 315
        $context["force_error"] = true;
        // line 316
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ba5270243b0adadc98a83ae9e54cd8e5aec2c3517cc7813dc1426632037cda45->leave($__internal_ba5270243b0adadc98a83ae9e54cd8e5aec2c3517cc7813dc1426632037cda45_prof);

        
        $__internal_f0ec30d0f1b3261412c8748fe0b22ca96f77ccc954911341ddaf1c3e3ca082c5->leave($__internal_f0ec30d0f1b3261412c8748fe0b22ca96f77ccc954911341ddaf1c3e3ca082c5_prof);

    }

    // line 319
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_0c8e099ee6ab1a511293990be667f47e4251333d77fec15f9fe278813004521c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8e099ee6ab1a511293990be667f47e4251333d77fec15f9fe278813004521c->enter($__internal_0c8e099ee6ab1a511293990be667f47e4251333d77fec15f9fe278813004521c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_82eac0721bc8519f68853ac895690ac4f5da712cf9f773bec37febbcd52d925c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82eac0721bc8519f68853ac895690ac4f5da712cf9f773bec37febbcd52d925c->enter($__internal_82eac0721bc8519f68853ac895690ac4f5da712cf9f773bec37febbcd52d925c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 320
        $context["force_error"] = true;
        // line 321
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_82eac0721bc8519f68853ac895690ac4f5da712cf9f773bec37febbcd52d925c->leave($__internal_82eac0721bc8519f68853ac895690ac4f5da712cf9f773bec37febbcd52d925c_prof);

        
        $__internal_0c8e099ee6ab1a511293990be667f47e4251333d77fec15f9fe278813004521c->leave($__internal_0c8e099ee6ab1a511293990be667f47e4251333d77fec15f9fe278813004521c_prof);

    }

    // line 324
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_442be8c5a43d16f15b5222048c28dfaa34bce8afdf675750d3b60222501db2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442be8c5a43d16f15b5222048c28dfaa34bce8afdf675750d3b60222501db2d2->enter($__internal_442be8c5a43d16f15b5222048c28dfaa34bce8afdf675750d3b60222501db2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_e05924131ce424793bb6e691ac6e517b230622a6e5ad0677e46c2416384ab153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05924131ce424793bb6e691ac6e517b230622a6e5ad0677e46c2416384ab153->enter($__internal_e05924131ce424793bb6e691ac6e517b230622a6e5ad0677e46c2416384ab153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 325
        $context["force_error"] = true;
        // line 326
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e05924131ce424793bb6e691ac6e517b230622a6e5ad0677e46c2416384ab153->leave($__internal_e05924131ce424793bb6e691ac6e517b230622a6e5ad0677e46c2416384ab153_prof);

        
        $__internal_442be8c5a43d16f15b5222048c28dfaa34bce8afdf675750d3b60222501db2d2->leave($__internal_442be8c5a43d16f15b5222048c28dfaa34bce8afdf675750d3b60222501db2d2_prof);

    }

    // line 329
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_44cc55801202437c194fac39123d19b32d91c954632f2f08e058fc008de845de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44cc55801202437c194fac39123d19b32d91c954632f2f08e058fc008de845de->enter($__internal_44cc55801202437c194fac39123d19b32d91c954632f2f08e058fc008de845de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_8cec16cdde170c85562fc407592bcccd431fcb3e70d5f186dcad5cc2bf463a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cec16cdde170c85562fc407592bcccd431fcb3e70d5f186dcad5cc2bf463a7f->enter($__internal_8cec16cdde170c85562fc407592bcccd431fcb3e70d5f186dcad5cc2bf463a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 330
        $context["force_error"] = true;
        // line 331
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8cec16cdde170c85562fc407592bcccd431fcb3e70d5f186dcad5cc2bf463a7f->leave($__internal_8cec16cdde170c85562fc407592bcccd431fcb3e70d5f186dcad5cc2bf463a7f_prof);

        
        $__internal_44cc55801202437c194fac39123d19b32d91c954632f2f08e058fc008de845de->leave($__internal_44cc55801202437c194fac39123d19b32d91c954632f2f08e058fc008de845de_prof);

    }

    // line 334
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b432234635943be6b3bc37c79f7e68966903e08d8e44ccc1ddd5f34a8fdf1d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b432234635943be6b3bc37c79f7e68966903e08d8e44ccc1ddd5f34a8fdf1d9e->enter($__internal_b432234635943be6b3bc37c79f7e68966903e08d8e44ccc1ddd5f34a8fdf1d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c09b1a1265df3bb323f83d328c9e0cbb79d3f476f0c1260e390ccf79d575d0e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09b1a1265df3bb323f83d328c9e0cbb79d3f476f0c1260e390ccf79d575d0e6->enter($__internal_c09b1a1265df3bb323f83d328c9e0cbb79d3f476f0c1260e390ccf79d575d0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 335
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 335, $this->getSourceContext()); })())) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 335, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">";
        // line 336
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 336, $this->getSourceContext()); })()), 'widget');
        // line 337
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 337, $this->getSourceContext()); })()), 'errors');
        // line 338
        echo "</div>";
        
        $__internal_c09b1a1265df3bb323f83d328c9e0cbb79d3f476f0c1260e390ccf79d575d0e6->leave($__internal_c09b1a1265df3bb323f83d328c9e0cbb79d3f476f0c1260e390ccf79d575d0e6_prof);

        
        $__internal_b432234635943be6b3bc37c79f7e68966903e08d8e44ccc1ddd5f34a8fdf1d9e->leave($__internal_b432234635943be6b3bc37c79f7e68966903e08d8e44ccc1ddd5f34a8fdf1d9e_prof);

    }

    // line 341
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_f18d79149c9f2db70b4068173e766046efaef49ec43e6619f7ae0dab969b6ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f18d79149c9f2db70b4068173e766046efaef49ec43e6619f7ae0dab969b6ced->enter($__internal_f18d79149c9f2db70b4068173e766046efaef49ec43e6619f7ae0dab969b6ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_f95e42f50a1512eb0f2176d883c118a021a5bd361bf8a468a7d8a89cc4ff18e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95e42f50a1512eb0f2176d883c118a021a5bd361bf8a468a7d8a89cc4ff18e7->enter($__internal_f95e42f50a1512eb0f2176d883c118a021a5bd361bf8a468a7d8a89cc4ff18e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 342
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 342, $this->getSourceContext()); })())) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 342, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">";
        // line 343
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 343, $this->getSourceContext()); })()), 'widget');
        // line 344
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 344, $this->getSourceContext()); })()), 'errors');
        // line 345
        echo "</div>";
        
        $__internal_f95e42f50a1512eb0f2176d883c118a021a5bd361bf8a468a7d8a89cc4ff18e7->leave($__internal_f95e42f50a1512eb0f2176d883c118a021a5bd361bf8a468a7d8a89cc4ff18e7_prof);

        
        $__internal_f18d79149c9f2db70b4068173e766046efaef49ec43e6619f7ae0dab969b6ced->leave($__internal_f18d79149c9f2db70b4068173e766046efaef49ec43e6619f7ae0dab969b6ced_prof);

    }

    // line 349
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a811e93273d9008f2b09816ac63e76e82fa30297b607ea37f95e8fb1229f3696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a811e93273d9008f2b09816ac63e76e82fa30297b607ea37f95e8fb1229f3696->enter($__internal_a811e93273d9008f2b09816ac63e76e82fa30297b607ea37f95e8fb1229f3696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_99a5a5387c3b657f370d9aa2b09d60fc8804a20bbd9308f3c61b7c9802c443dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a5a5387c3b657f370d9aa2b09d60fc8804a20bbd9308f3c61b7c9802c443dc->enter($__internal_99a5a5387c3b657f370d9aa2b09d60fc8804a20bbd9308f3c61b7c9802c443dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 350
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 350, $this->getSourceContext()); })()));
        // line 351
        echo "    ";
        if (((isset($context["error_count"]) || array_key_exists("error_count", $context) ? $context["error_count"] : (function () { throw new Twig_Error_Runtime('Variable "error_count" does not exist.', 351, $this->getSourceContext()); })()) >= 1)) {
            // line 352
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 353
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", (isset($context["error_count"]) || array_key_exists("error_count", $context) ? $context["error_count"] : (function () { throw new Twig_Error_Runtime('Variable "error_count" does not exist.', 353, $this->getSourceContext()); })()), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 354
            if (((isset($context["error_count"]) || array_key_exists("error_count", $context) ? $context["error_count"] : (function () { throw new Twig_Error_Runtime('Variable "error_count" does not exist.', 354, $this->getSourceContext()); })()) == 1)) {
                // line 355
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_first($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 355, $this->getSourceContext()); })())), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 357
                echo "                <ul>
                    ";
                // line 358
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 358, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 359
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 361
                echo "                </ul>
            ";
            }
            // line 363
            echo "        </div>
    ";
        }
        
        $__internal_99a5a5387c3b657f370d9aa2b09d60fc8804a20bbd9308f3c61b7c9802c443dc->leave($__internal_99a5a5387c3b657f370d9aa2b09d60fc8804a20bbd9308f3c61b7c9802c443dc_prof);

        
        $__internal_a811e93273d9008f2b09816ac63e76e82fa30297b607ea37f95e8fb1229f3696->leave($__internal_a811e93273d9008f2b09816ac63e76e82fa30297b607ea37f95e8fb1229f3696_prof);

    }

    // line 367
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_79303537ebe07e6083c60266cd5c4cc7a6925f9de1109475adc745a84c5088b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79303537ebe07e6083c60266cd5c4cc7a6925f9de1109475adc745a84c5088b1->enter($__internal_79303537ebe07e6083c60266cd5c4cc7a6925f9de1109475adc745a84c5088b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_9a29ba6a01e4b76144016c9a89c87f20d8a55b09e47c83cbe25495611ec68013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a29ba6a01e4b76144016c9a89c87f20d8a55b09e47c83cbe25495611ec68013->enter($__internal_9a29ba6a01e4b76144016c9a89c87f20d8a55b09e47c83cbe25495611ec68013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 370
        echo "    ";
        if ((twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 370, $this->getSourceContext()); })())) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 370, $this->getSourceContext()); })())))) {
            // line 371
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 373
        echo "    ";
        if (((twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 373, $this->getSourceContext()); })())) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 373, $this->getSourceContext()); })()))) || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 374
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 374, $this->getSourceContext()); })()), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 375
            echo "    ";
        }
        // line 376
        echo "
    ";
        // line 377
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_9a29ba6a01e4b76144016c9a89c87f20d8a55b09e47c83cbe25495611ec68013->leave($__internal_9a29ba6a01e4b76144016c9a89c87f20d8a55b09e47c83cbe25495611ec68013_prof);

        
        $__internal_79303537ebe07e6083c60266cd5c4cc7a6925f9de1109475adc745a84c5088b1->leave($__internal_79303537ebe07e6083c60266cd5c4cc7a6925f9de1109475adc745a84c5088b1_prof);

    }

    // line 380
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_83c6454eb774648ca2fb1bf14be6c58a1da41895a185d431368eab359f412705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c6454eb774648ca2fb1bf14be6c58a1da41895a185d431368eab359f412705->enter($__internal_83c6454eb774648ca2fb1bf14be6c58a1da41895a185d431368eab359f412705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_c582a04ad2b9bcb1b493d4269d68830677982a5ce3afbea9a2840d0c02853a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c582a04ad2b9bcb1b493d4269d68830677982a5ce3afbea9a2840d0c02853a03->enter($__internal_c582a04ad2b9bcb1b493d4269d68830677982a5ce3afbea9a2840d0c02853a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 381
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 382
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 382, $this->getSourceContext()); })()), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_c582a04ad2b9bcb1b493d4269d68830677982a5ce3afbea9a2840d0c02853a03->leave($__internal_c582a04ad2b9bcb1b493d4269d68830677982a5ce3afbea9a2840d0c02853a03_prof);

        
        $__internal_83c6454eb774648ca2fb1bf14be6c58a1da41895a185d431368eab359f412705->leave($__internal_83c6454eb774648ca2fb1bf14be6c58a1da41895a185d431368eab359f412705_prof);

    }

    // line 386
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_d2df2d740e617324ce728521378cc2ca3f6a54a3b1d7ef64063e935da6c60675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2df2d740e617324ce728521378cc2ca3f6a54a3b1d7ef64063e935da6c60675->enter($__internal_d2df2d740e617324ce728521378cc2ca3f6a54a3b1d7ef64063e935da6c60675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_66c8e775d50aaf13345086857661485d115aa360f8a19da783a9b92b60a66c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c8e775d50aaf13345086857661485d115aa360f8a19da783a9b92b60a66c36->enter($__internal_66c8e775d50aaf13345086857661485d115aa360f8a19da783a9b92b60a66c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 387
        echo "    ";
        $context["force_error"] = true;
        // line 388
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_66c8e775d50aaf13345086857661485d115aa360f8a19da783a9b92b60a66c36->leave($__internal_66c8e775d50aaf13345086857661485d115aa360f8a19da783a9b92b60a66c36_prof);

        
        $__internal_d2df2d740e617324ce728521378cc2ca3f6a54a3b1d7ef64063e935da6c60675->leave($__internal_d2df2d740e617324ce728521378cc2ca3f6a54a3b1d7ef64063e935da6c60675_prof);

    }

    // line 391
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_3f18a836790e8e85e68c601a7e7ee843b377f92f33f2e3c2991b577b6ea46d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f18a836790e8e85e68c601a7e7ee843b377f92f33f2e3c2991b577b6ea46d45->enter($__internal_3f18a836790e8e85e68c601a7e7ee843b377f92f33f2e3c2991b577b6ea46d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_d77ccd3f6f64de4ae83b7c77cc9581ed65e595d350eee573e9ac47e31a4d5ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77ccd3f6f64de4ae83b7c77cc9581ed65e595d350eee573e9ac47e31a4d5ffa->enter($__internal_d77ccd3f6f64de4ae83b7c77cc9581ed65e595d350eee573e9ac47e31a4d5ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 392
        ob_start();
        // line 393
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 394
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 394, $this->getSourceContext()); })()), "")) : ("")))) {
            // line 395
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 395, $this->getSourceContext()); })()), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 395, $this->getSourceContext()); })()), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 396
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 396, $this->getSourceContext()); })())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) || array_key_exists("download_title", $context) ? $context["download_title"] : (function () { throw new Twig_Error_Runtime('Variable "download_title" does not exist.', 396, $this->getSourceContext()); })()), "html", null, true);
            echo "</a>
        ";
        }
        // line 398
        echo "
        <div class=\"row\">
            ";
        // line 400
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 401
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 402
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 402, $this->getSourceContext()); })()), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 405
        echo "            <div class=\"";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 406
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 406, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d77ccd3f6f64de4ae83b7c77cc9581ed65e595d350eee573e9ac47e31a4d5ffa->leave($__internal_d77ccd3f6f64de4ae83b7c77cc9581ed65e595d350eee573e9ac47e31a4d5ffa_prof);

        
        $__internal_3f18a836790e8e85e68c601a7e7ee843b377f92f33f2e3c2991b577b6ea46d45->leave($__internal_3f18a836790e8e85e68c601a7e7ee843b377f92f33f2e3c2991b577b6ea46d45_prof);

    }

    // line 413
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_17dc5d3d6c155ec5dca859009ff40b313a73d1b9ff38bf6b343aa3bca0fc5f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17dc5d3d6c155ec5dca859009ff40b313a73d1b9ff38bf6b343aa3bca0fc5f92->enter($__internal_17dc5d3d6c155ec5dca859009ff40b313a73d1b9ff38bf6b343aa3bca0fc5f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_39638fe4d3791f10fa8678197a7ffabce62c0ebf3f561eec16c0da3f9fb694d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39638fe4d3791f10fa8678197a7ffabce62c0ebf3f561eec16c0da3f9fb694d9->enter($__internal_39638fe4d3791f10fa8678197a7ffabce62c0ebf3f561eec16c0da3f9fb694d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 414
        echo "    ";
        $context["force_error"] = true;
        // line 415
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_39638fe4d3791f10fa8678197a7ffabce62c0ebf3f561eec16c0da3f9fb694d9->leave($__internal_39638fe4d3791f10fa8678197a7ffabce62c0ebf3f561eec16c0da3f9fb694d9_prof);

        
        $__internal_17dc5d3d6c155ec5dca859009ff40b313a73d1b9ff38bf6b343aa3bca0fc5f92->leave($__internal_17dc5d3d6c155ec5dca859009ff40b313a73d1b9ff38bf6b343aa3bca0fc5f92_prof);

    }

    // line 418
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_936ed1b4a79883838bb81702112b6e4117448aeebac21dffbf664bd61bf216c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936ed1b4a79883838bb81702112b6e4117448aeebac21dffbf664bd61bf216c5->enter($__internal_936ed1b4a79883838bb81702112b6e4117448aeebac21dffbf664bd61bf216c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_95c8eb6ccbcd18feca487d3ada6dbc3a0c784ac8bf8c85c19a0bbb38eb773354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c8eb6ccbcd18feca487d3ada6dbc3a0c784ac8bf8c85c19a0bbb38eb773354->enter($__internal_95c8eb6ccbcd18feca487d3ada6dbc3a0c784ac8bf8c85c19a0bbb38eb773354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 419
        ob_start();
        // line 420
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 421
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 421, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
        ";
        // line 422
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 423
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 423, $this->getSourceContext()); })()), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 425
        echo "
        ";
        // line 426
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 426, $this->getSourceContext()); })()), "")) : ("")))) {
            // line 427
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 427, $this->getSourceContext()); })()));
            // line 428
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 429
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new Twig_Error_Runtime('Variable "_lightbox_id" does not exist.', 429, $this->getSourceContext()); })()), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 430
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 430, $this->getSourceContext()); })())), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 433
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new Twig_Error_Runtime('Variable "_lightbox_id" does not exist.', 433, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 434
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 434, $this->getSourceContext()); })())), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 437
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_95c8eb6ccbcd18feca487d3ada6dbc3a0c784ac8bf8c85c19a0bbb38eb773354->leave($__internal_95c8eb6ccbcd18feca487d3ada6dbc3a0c784ac8bf8c85c19a0bbb38eb773354_prof);

        
        $__internal_936ed1b4a79883838bb81702112b6e4117448aeebac21dffbf664bd61bf216c5->leave($__internal_936ed1b4a79883838bb81702112b6e4117448aeebac21dffbf664bd61bf216c5_prof);

    }

    // line 442
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_df365e6985a405bf263cb72ca398be1d4abf3b13ea1d6ce61e06cf75f0e6576a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df365e6985a405bf263cb72ca398be1d4abf3b13ea1d6ce61e06cf75f0e6576a->enter($__internal_df365e6985a405bf263cb72ca398be1d4abf3b13ea1d6ce61e06cf75f0e6576a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        $__internal_ca3b9763714ec8c93bd1c13fb30fb1de0e211c6b1ab6e3425c15c406aca245cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3b9763714ec8c93bd1c13fb30fb1de0e211c6b1ab6e3425c15c406aca245cf->enter($__internal_ca3b9763714ec8c93bd1c13fb30fb1de0e211c6b1ab6e3425c15c406aca245cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 443
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 443, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array());
        // line 444
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 444, $this->getSourceContext()); })()), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 444, $this->getSourceContext()); })()), "entity", array()), "label", array())));
        // line 445
        echo "
    ";
        // line 446
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 446, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            // line 447
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 447, $this->getSourceContext()); })()), 'errors');
            echo "
    ";
        }
        // line 449
        echo "
    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 450
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 450, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>

    <div class=\"row\">
        ";
        // line 453
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_groups"]) || array_key_exists("easyadmin_form_groups", $context) ? $context["easyadmin_form_groups"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin_form_groups" does not exist.', 453, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            // line 454
            echo "            <div class=\"field-group col-xs-12 ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"box box-default\">
                    ";
            // line 456
            if ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "label", array()), false)) : (false)) || ((twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "icon", array()), false)) : (false)))) {
                // line 457
                echo "                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                ";
                // line 459
                if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "icon", array()), false)) : (false))) {
                    // line 460
                    echo "                                    <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 462
                echo "                                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "label", array()), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 462, $this->getSourceContext()); })()));
                echo "
                            </h3>
                        </div>
                    ";
            }
            // line 466
            echo "
                    <div class=\"box-body\">
                        ";
            // line 468
            if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "help", array()), false)) : (false))) {
                // line 469
                echo "                            <p class=\"help-block\">";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["group_config"], "help", array()), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 469, $this->getSourceContext()); })())), "html", null, true));
                echo "</p>
                        ";
            }
            // line 471
            echo "
                        <div class=\"row\">
                            ";
            // line 473
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 473, $this->getSourceContext()); })()), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "block_prefixes", array())) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                    // line 474
                    echo "                                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                                    ";
                    // line 475
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                                </div>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 478
            echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 483
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 483, $this->getSourceContext()); })()), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 484
                    echo "                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 485
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                </div>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 488
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 489
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    ";
        // line 495
        $this->displayBlock('item_actions', $context, $blocks);
        // line 519
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_ca3b9763714ec8c93bd1c13fb30fb1de0e211c6b1ab6e3425c15c406aca245cf->leave($__internal_ca3b9763714ec8c93bd1c13fb30fb1de0e211c6b1ab6e3425c15c406aca245cf_prof);

        
        $__internal_df365e6985a405bf263cb72ca398be1d4abf3b13ea1d6ce61e06cf75f0e6576a->leave($__internal_df365e6985a405bf263cb72ca398be1d4abf3b13ea1d6ce61e06cf75f0e6576a_prof);

    }

    // line 495
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_b4532e63c002b68b4939ff8f271a8386f969d83eb43d8dcbe204be1b22600d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4532e63c002b68b4939ff8f271a8386f969d83eb43d8dcbe204be1b22600d50->enter($__internal_b4532e63c002b68b4939ff8f271a8386f969d83eb43d8dcbe204be1b22600d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_5df2f96e262eedac58d5ae8a2866eee1d630a4a76401ba711f9bd7765e83d460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df2f96e262eedac58d5ae8a2866eee1d630a4a76401ba711f9bd7765e83d460->enter($__internal_5df2f96e262eedac58d5ae8a2866eee1d630a4a76401ba711f9bd7765e83d460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 496
        echo "                        ";
        // line 497
        echo "                        <button type=\"submit\" class=\"btn btn-primary action-save\">
                            <i class=\"fa fa-save\"></i> ";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 498, $this->getSourceContext()); })()), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 498, $this->getSourceContext()); })())), "html", null, true);
        echo "
                        </button>

                        ";
        // line 501
        $context["_entity_actions"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 501, $this->getSourceContext()); })()), "view", array()) == "new")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 502
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 502, $this->getSourceContext()); })()), "entity", array()), "name", array()))) : ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 503
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 503, $this->getSourceContext()); })()), "entity", array()), "name", array()))));
        // line 504
        echo "
                        ";
        // line 505
        $context["_entity_id"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 505, $this->getSourceContext()); })()), "view", array()) == "new")) ? (null) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 507
(isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 507, $this->getSourceContext()); })()), "item", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 507, $this->getSourceContext()); })()), "entity", array()), "primary_key_field_name", array()))));
        // line 508
        echo "
                        ";
        // line 509
        $context["_request_parameters"] = array("entity" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 509, $this->getSourceContext()); })()), "entity", array()), "name", array()), "referer" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 509, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 510
        echo "
                        ";
        // line 511
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 512
(isset($context["_entity_actions"]) || array_key_exists("_entity_actions", $context) ? $context["_entity_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_actions" does not exist.', 512, $this->getSourceContext()); })()), "request_parameters" =>         // line 513
(isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 513, $this->getSourceContext()); })()), "translation_domain" =>         // line 514
(isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 514, $this->getSourceContext()); })()), "trans_parameters" =>         // line 515
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 515, $this->getSourceContext()); })()), "item_id" =>         // line 516
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 516, $this->getSourceContext()); })())), false);
        // line 517
        echo "
                    ";
        
        $__internal_5df2f96e262eedac58d5ae8a2866eee1d630a4a76401ba711f9bd7765e83d460->leave($__internal_5df2f96e262eedac58d5ae8a2866eee1d630a4a76401ba711f9bd7765e83d460_prof);

        
        $__internal_b4532e63c002b68b4939ff8f271a8386f969d83eb43d8dcbe204be1b22600d50->leave($__internal_b4532e63c002b68b4939ff8f271a8386f969d83eb43d8dcbe204be1b22600d50_prof);

    }

    // line 526
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_085674017f3e70280e8f73ecaf1de5364aa0e08ba92635b9aa4957e0acad598e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085674017f3e70280e8f73ecaf1de5364aa0e08ba92635b9aa4957e0acad598e->enter($__internal_085674017f3e70280e8f73ecaf1de5364aa0e08ba92635b9aa4957e0acad598e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        $__internal_69c82506fca401a8621c03bda6414c1a3002c7f3f2fb7cb6c03b11a92515a2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c82506fca401a8621c03bda6414c1a3002c7f3f2fb7cb6c03b11a92515a2e2->enter($__internal_69c82506fca401a8621c03bda6414c1a3002c7f3f2fb7cb6c03b11a92515a2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 527
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 527, $this->getSourceContext()); })()), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 528
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 528, $this->getSourceContext()); })()), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 531
(isset($context["autocomplete_entity_name"]) || array_key_exists("autocomplete_entity_name", $context) ? $context["autocomplete_entity_name"] : (function () { throw new Twig_Error_Runtime('Variable "autocomplete_entity_name" does not exist.', 531, $this->getSourceContext()); })())))))));
        // line 534
        echo "
";
        
        $__internal_69c82506fca401a8621c03bda6414c1a3002c7f3f2fb7cb6c03b11a92515a2e2->leave($__internal_69c82506fca401a8621c03bda6414c1a3002c7f3f2fb7cb6c03b11a92515a2e2_prof);

        
        $__internal_085674017f3e70280e8f73ecaf1de5364aa0e08ba92635b9aa4957e0acad598e->leave($__internal_085674017f3e70280e8f73ecaf1de5364aa0e08ba92635b9aa4957e0acad598e_prof);

    }

    // line 537
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_9fdda69201c600f4f3a9fd236cdbb4534340c7f50a78dbb0d92c342f21c4ee01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fdda69201c600f4f3a9fd236cdbb4534340c7f50a78dbb0d92c342f21c4ee01->enter($__internal_9fdda69201c600f4f3a9fd236cdbb4534340c7f50a78dbb0d92c342f21c4ee01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        $__internal_0105dc871eab3acf7cd9c2ed7fdb4f172b9edebf6300c9967df26b4931086f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0105dc871eab3acf7cd9c2ed7fdb4f172b9edebf6300c9967df26b4931086f35->enter($__internal_0105dc871eab3acf7cd9c2ed7fdb4f172b9edebf6300c9967df26b4931086f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 538
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 538, $this->getSourceContext()); })()), "parent", array()), "vars", array()), "name", array());
        // line 539
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_0105dc871eab3acf7cd9c2ed7fdb4f172b9edebf6300c9967df26b4931086f35->leave($__internal_0105dc871eab3acf7cd9c2ed7fdb4f172b9edebf6300c9967df26b4931086f35_prof);

        
        $__internal_9fdda69201c600f4f3a9fd236cdbb4534340c7f50a78dbb0d92c342f21c4ee01->leave($__internal_9fdda69201c600f4f3a9fd236cdbb4534340c7f50a78dbb0d92c342f21c4ee01_prof);

    }

    // line 543
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_56b8f6e24290642d3316ba597ebce280aee81d3bcc7c21a0731d20b86c02f545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b8f6e24290642d3316ba597ebce280aee81d3bcc7c21a0731d20b86c02f545->enter($__internal_56b8f6e24290642d3316ba597ebce280aee81d3bcc7c21a0731d20b86c02f545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        $__internal_0f16e83374a6d4ffaef98bf66ceb6bad899072e3c8e011cd3553f9338e4bd81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f16e83374a6d4ffaef98bf66ceb6bad899072e3c8e011cd3553f9338e4bd81a->enter($__internal_0f16e83374a6d4ffaef98bf66ceb6bad899072e3c8e011cd3553f9338e4bd81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 544
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_0f16e83374a6d4ffaef98bf66ceb6bad899072e3c8e011cd3553f9338e4bd81a->leave($__internal_0f16e83374a6d4ffaef98bf66ceb6bad899072e3c8e011cd3553f9338e4bd81a_prof);

        
        $__internal_56b8f6e24290642d3316ba597ebce280aee81d3bcc7c21a0731d20b86c02f545->leave($__internal_56b8f6e24290642d3316ba597ebce280aee81d3bcc7c21a0731d20b86c02f545_prof);

    }

    // line 550
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_739bc51fc0373232da89bc796808ae8ef910bd741a1fdbc5132cec8801ab4fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739bc51fc0373232da89bc796808ae8ef910bd741a1fdbc5132cec8801ab4fc0->enter($__internal_739bc51fc0373232da89bc796808ae8ef910bd741a1fdbc5132cec8801ab4fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        $__internal_52999e909f7806dbee7ef92373fac9a53ba0a47fa0df625a830f825e9d149734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52999e909f7806dbee7ef92373fac9a53ba0a47fa0df625a830f825e9d149734->enter($__internal_52999e909f7806dbee7ef92373fac9a53ba0a47fa0df625a830f825e9d149734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 551
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 551, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array());
        // line 552
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 553
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 554
            echo "            <h2>
                ";
            // line 555
            if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 555, $this->getSourceContext()); })()), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 556
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 556, $this->getSourceContext()); })()));
            echo "
            </h2>
        ";
        }
        // line 559
        echo "
        ";
        // line 560
        if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 561
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 561, $this->getSourceContext()); })()), "field", array()), "help", array()), array(), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 561, $this->getSourceContext()); })())), "html", null, true));
            echo "</p>
        ";
        }
        // line 563
        echo "    </div>
";
        
        $__internal_52999e909f7806dbee7ef92373fac9a53ba0a47fa0df625a830f825e9d149734->leave($__internal_52999e909f7806dbee7ef92373fac9a53ba0a47fa0df625a830f825e9d149734_prof);

        
        $__internal_739bc51fc0373232da89bc796808ae8ef910bd741a1fdbc5132cec8801ab4fc0->leave($__internal_739bc51fc0373232da89bc796808ae8ef910bd741a1fdbc5132cec8801ab4fc0_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1928 => 563,  1922 => 561,  1920 => 560,  1917 => 559,  1910 => 556,  1904 => 555,  1901 => 554,  1899 => 553,  1894 => 552,  1891 => 551,  1882 => 550,  1869 => 544,  1860 => 543,  1850 => 539,  1847 => 538,  1838 => 537,  1827 => 534,  1825 => 531,  1824 => 528,  1822 => 527,  1813 => 526,  1802 => 517,  1800 => 516,  1799 => 515,  1798 => 514,  1797 => 513,  1796 => 512,  1795 => 511,  1792 => 510,  1790 => 509,  1787 => 508,  1785 => 507,  1784 => 505,  1781 => 504,  1779 => 503,  1778 => 502,  1777 => 501,  1771 => 498,  1768 => 497,  1766 => 496,  1757 => 495,  1743 => 519,  1741 => 495,  1733 => 489,  1727 => 488,  1717 => 485,  1712 => 484,  1706 => 483,  1697 => 478,  1687 => 475,  1682 => 474,  1677 => 473,  1673 => 471,  1667 => 469,  1665 => 468,  1661 => 466,  1653 => 462,  1647 => 460,  1645 => 459,  1641 => 457,  1639 => 456,  1633 => 454,  1628 => 453,  1622 => 450,  1619 => 449,  1613 => 447,  1611 => 446,  1608 => 445,  1605 => 444,  1602 => 443,  1593 => 442,  1581 => 437,  1575 => 434,  1571 => 433,  1565 => 430,  1561 => 429,  1558 => 428,  1555 => 427,  1553 => 426,  1550 => 425,  1544 => 423,  1542 => 422,  1538 => 421,  1535 => 420,  1533 => 419,  1524 => 418,  1511 => 415,  1508 => 414,  1499 => 413,  1483 => 406,  1478 => 405,  1472 => 402,  1469 => 401,  1467 => 400,  1463 => 398,  1455 => 396,  1452 => 395,  1450 => 394,  1447 => 393,  1445 => 392,  1436 => 391,  1423 => 388,  1420 => 387,  1411 => 386,  1398 => 382,  1395 => 381,  1386 => 380,  1376 => 377,  1373 => 376,  1370 => 375,  1367 => 374,  1364 => 373,  1358 => 371,  1355 => 370,  1346 => 367,  1334 => 363,  1330 => 361,  1321 => 359,  1317 => 358,  1314 => 357,  1308 => 355,  1306 => 354,  1302 => 353,  1299 => 352,  1296 => 351,  1293 => 350,  1284 => 349,  1274 => 345,  1272 => 344,  1270 => 343,  1262 => 342,  1253 => 341,  1243 => 338,  1241 => 337,  1239 => 336,  1231 => 335,  1222 => 334,  1212 => 331,  1210 => 330,  1201 => 329,  1191 => 326,  1189 => 325,  1180 => 324,  1170 => 321,  1168 => 320,  1159 => 319,  1149 => 316,  1147 => 315,  1138 => 314,  1128 => 311,  1126 => 310,  1120 => 309,  1111 => 308,  1096 => 302,  1091 => 300,  1087 => 298,  1073 => 289,  1067 => 288,  1056 => 280,  1051 => 277,  1048 => 276,  1046 => 275,  1040 => 273,  1031 => 272,  1021 => 269,  1015 => 267,  1013 => 266,  1011 => 264,  1004 => 259,  998 => 258,  994 => 256,  992 => 255,  990 => 253,  988 => 252,  980 => 251,  978 => 250,  969 => 249,  957 => 243,  955 => 242,  953 => 241,  938 => 240,  935 => 239,  932 => 238,  929 => 237,  926 => 236,  923 => 235,  920 => 234,  917 => 233,  914 => 232,  911 => 231,  908 => 230,  906 => 229,  897 => 228,  887 => 225,  878 => 224,  868 => 221,  859 => 220,  849 => 217,  847 => 216,  838 => 214,  828 => 211,  826 => 210,  817 => 209,  806 => 203,  804 => 202,  802 => 201,  799 => 199,  797 => 198,  795 => 197,  786 => 196,  775 => 192,  773 => 191,  771 => 190,  768 => 188,  766 => 187,  764 => 186,  755 => 185,  744 => 181,  738 => 178,  737 => 177,  736 => 176,  732 => 175,  728 => 174,  725 => 172,  719 => 169,  718 => 168,  717 => 167,  713 => 166,  711 => 165,  709 => 164,  700 => 163,  685 => 157,  680 => 155,  676 => 153,  663 => 143,  658 => 140,  655 => 139,  653 => 138,  651 => 137,  649 => 136,  640 => 135,  628 => 130,  625 => 129,  617 => 128,  612 => 126,  610 => 125,  608 => 124,  605 => 122,  603 => 121,  594 => 120,  582 => 115,  580 => 114,  578 => 112,  577 => 111,  576 => 110,  575 => 109,  570 => 107,  568 => 106,  566 => 105,  563 => 103,  561 => 102,  552 => 101,  541 => 97,  539 => 96,  537 => 95,  535 => 94,  533 => 93,  529 => 92,  527 => 91,  524 => 89,  522 => 88,  513 => 87,  502 => 83,  500 => 82,  498 => 81,  489 => 80,  479 => 77,  473 => 75,  471 => 74,  469 => 73,  463 => 71,  460 => 70,  458 => 69,  455 => 68,  446 => 67,  436 => 64,  434 => 63,  425 => 62,  415 => 59,  413 => 58,  404 => 57,  394 => 54,  391 => 52,  389 => 51,  380 => 50,  365 => 44,  360 => 42,  356 => 40,  343 => 30,  338 => 27,  335 => 26,  333 => 25,  331 => 23,  322 => 22,  312 => 17,  309 => 15,  307 => 13,  306 => 12,  305 => 11,  304 => 9,  303 => 8,  302 => 7,  300 => 5,  298 => 4,  289 => 3,  279 => 550,  276 => 548,  274 => 543,  271 => 541,  269 => 537,  266 => 536,  264 => 526,  261 => 524,  259 => 442,  256 => 440,  254 => 418,  251 => 417,  249 => 413,  246 => 412,  244 => 391,  241 => 390,  239 => 386,  236 => 385,  234 => 380,  232 => 367,  230 => 349,  227 => 347,  225 => 341,  222 => 340,  220 => 334,  217 => 333,  215 => 329,  212 => 328,  210 => 324,  207 => 323,  205 => 319,  202 => 318,  200 => 314,  197 => 313,  195 => 308,  192 => 307,  190 => 272,  187 => 271,  185 => 249,  182 => 248,  179 => 246,  177 => 228,  174 => 227,  172 => 224,  169 => 223,  167 => 220,  164 => 219,  162 => 214,  159 => 213,  157 => 209,  154 => 208,  151 => 206,  149 => 196,  146 => 195,  144 => 185,  141 => 184,  139 => 163,  136 => 162,  134 => 135,  131 => 134,  129 => 120,  126 => 119,  124 => 101,  121 => 100,  119 => 87,  116 => 86,  114 => 80,  111 => 79,  109 => 67,  106 => 66,  104 => 62,  101 => 61,  99 => 57,  96 => 56,  94 => 50,  91 => 49,  89 => 22,  86 => 21,  83 => 19,  81 => 3,  78 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [
                _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',
                attr.class|default(''),
                easyadmin.view ~ '-form'
            ]|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {{- parent() -}}
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do no display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? label|trans({}, translation_domain ?: easyadmin.entity.translation_domain) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}

        {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                    {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                </label>
            </div>
        {% endif %}

        {{- form_errors(form) -}}

        {% if easyadmin.field.help|default('') != '' %}
            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
        {% endif %}
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[__name__\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"{{ js_add_item|raw }}\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}
{% block form_errors %}
    {% set error_count = errors|length %}
    {% if error_count >= 1 %}
        <div class=\"error-block\">
            <span class=\"label label-danger\">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>
            {% if error_count == 1 %}
                {{ errors|first.message }}
            {% else %}
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}
{% endblock form_errors %}

{%- block form_widget_compound -%}
    {# the \"is iterable\" check is needed because if an object implements __toString() and
       returns an empty string, \"is empty\" returns true even if it's not a collection #}
    {% if value is iterable and value is empty %}
        {{ block('empty_collection') }}
    {% endif %}
    {% if value is iterable and value is empty or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {{ parent() }}
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            <a href=\"{{ asset(download_uri) }}\">{{ download_title }}</a>
        {% endif %}

        <div class=\"row\">
            {% if form.delete is defined %}
            <div class=\"col-sm-3 col-md-2\">
                {{ form_row(form.delete, { label: 'action.delete' }) }}
            </div>
            {% endif %}
            <div class=\"{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}\">
                {{ form_widget(form.file) }}
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
            {{ form_row(form.delete, { label: 'action.delete' }) }}
        {% endif %}

        {% if download_uri|default('') is not empty %}
            {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"{{ asset(download_uri) }}\">
            </a>

            <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                <img src=\"{{ asset(download_uri) }}\">
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>

    <div class=\"row\">
        {% for group_name, group_config in easyadmin_form_groups %}
            <div class=\"field-group col-xs-12 {{ group_config.css_class|default('') }}\">
                <div class=\"box box-default\">
                    {% if group_config.label|default(false) or group_config.icon|default(false) %}
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                {% if group_config.icon|default(false) %}
                                    <i class=\"fa fa-{{ group_config.icon }}\"></i>
                                {% endif %}
                                {{ group_config.label|trans(domain = _translation_domain)|raw }}
                            </h3>
                        </div>
                    {% endif %}

                    <div class=\"box-body\">
                        {% if group_config.help|default(false) %}
                            <p class=\"help-block\">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
                        {% endif %}

                        <div class=\"row\">
                            {% for field in form.children if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                    {{ form_row(field) }}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            {% for field in form.children if 'hidden' not in field.vars.block_prefixes %}
                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                    {{ form_row(field) }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    {% block item_actions %}
                        {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
                        <button type=\"submit\" class=\"btn btn-primary action-save\">
                            <i class=\"fa fa-save\"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
                        </button>

                        {% set _entity_actions = (easyadmin.view == 'new')
                            ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
                            : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

                        {% set _entity_id = (easyadmin.view == 'new')
                            ? null
                            : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

                        {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

                        {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                            actions: _entity_actions,
                            request_parameters: _request_parameters,
                            translation_domain: _translation_domain,
                            trans_parameters: _trans_parameters,
                            item_id: _entity_id
                        }, with_context = false) }}
                    {% endblock item_actions %}
                </div>
            </div>
        </div>
    </div>
{% endblock easyadmin_widget %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminDivider form type #}
{% block easyadmin_divider_row %}
    <div class=\"field-divider\">
        <hr>
    </div>
{% endblock easyadmin_divider_row %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"field-section {{ easyadmin.field.css_class|default('') }}\">
        {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}
            <h2>
                {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
                {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}
            </h2>
        {% endif %}

        {% if easyadmin.field.help|default(false) %}
            <p class=\"help-block\">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/form/bootstrap_3_layout.html.twig");
    }
}
