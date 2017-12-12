<?php

/* EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_2a4a593783823ef9d0d7d827ce646cf70c3c2593e74b4b0a6c6f57049de7324b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccdbc3a58822cfe881af207e956342560dbb2a1516ab9d3bbd4d2e200b82705d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccdbc3a58822cfe881af207e956342560dbb2a1516ab9d3bbd4d2e200b82705d->enter($__internal_ccdbc3a58822cfe881af207e956342560dbb2a1516ab9d3bbd4d2e200b82705d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        $__internal_fede11e5e9d750abf41d43de5eec802025993b82fab075bcbaa182d776f5b808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fede11e5e9d750abf41d43de5eec802025993b82fab075bcbaa182d776f5b808->enter($__internal_fede11e5e9d750abf41d43de5eec802025993b82fab075bcbaa182d776f5b808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('radio_row', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('submit_row', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('reset_row', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_ccdbc3a58822cfe881af207e956342560dbb2a1516ab9d3bbd4d2e200b82705d->leave($__internal_ccdbc3a58822cfe881af207e956342560dbb2a1516ab9d3bbd4d2e200b82705d_prof);

        
        $__internal_fede11e5e9d750abf41d43de5eec802025993b82fab075bcbaa182d776f5b808->leave($__internal_fede11e5e9d750abf41d43de5eec802025993b82fab075bcbaa182d776f5b808_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_0416eca398562da787144e038efe70ebb6f9c60e231a7f51a6a51373dc7b9a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0416eca398562da787144e038efe70ebb6f9c60e231a7f51a6a51373dc7b9a0a->enter($__internal_0416eca398562da787144e038efe70ebb6f9c60e231a7f51a6a51373dc7b9a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_6868015c98eecdf7f9ae444b2a5fc2a2a4e6e2bd71535361e46c9cf9016333e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6868015c98eecdf7f9ae444b2a5fc2a2a4e6e2bd71535361e46c9cf9016333e5->enter($__internal_6868015c98eecdf7f9ae444b2a5fc2a2a4e6e2bd71535361e46c9cf9016333e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_6868015c98eecdf7f9ae444b2a5fc2a2a4e6e2bd71535361e46c9cf9016333e5->leave($__internal_6868015c98eecdf7f9ae444b2a5fc2a2a4e6e2bd71535361e46c9cf9016333e5_prof);

        
        $__internal_0416eca398562da787144e038efe70ebb6f9c60e231a7f51a6a51373dc7b9a0a->leave($__internal_0416eca398562da787144e038efe70ebb6f9c60e231a7f51a6a51373dc7b9a0a_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_061ca516f3316afb70b24a10143034d06b2227e017a61a529a4990a2b55b36a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061ca516f3316afb70b24a10143034d06b2227e017a61a529a4990a2b55b36a6->enter($__internal_061ca516f3316afb70b24a10143034d06b2227e017a61a529a4990a2b55b36a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0de4ca3cb89149b05a3d1de8692cbff80350755cf63155e291cf39130708e54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de4ca3cb89149b05a3d1de8692cbff80350755cf63155e291cf39130708e54a->enter($__internal_0de4ca3cb89149b05a3d1de8692cbff80350755cf63155e291cf39130708e54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0de4ca3cb89149b05a3d1de8692cbff80350755cf63155e291cf39130708e54a->leave($__internal_0de4ca3cb89149b05a3d1de8692cbff80350755cf63155e291cf39130708e54a_prof);

        
        $__internal_061ca516f3316afb70b24a10143034d06b2227e017a61a529a4990a2b55b36a6->leave($__internal_061ca516f3316afb70b24a10143034d06b2227e017a61a529a4990a2b55b36a6_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_48e0338a39636d3d505538be35b14c404fbd3c6cdb4318580660ac8e54e9220a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e0338a39636d3d505538be35b14c404fbd3c6cdb4318580660ac8e54e9220a->enter($__internal_48e0338a39636d3d505538be35b14c404fbd3c6cdb4318580660ac8e54e9220a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_62890891b7d960a942e2d12a3cc24645cb93904d840617c4e6b7df53270b8d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62890891b7d960a942e2d12a3cc24645cb93904d840617c4e6b7df53270b8d40->enter($__internal_62890891b7d960a942e2d12a3cc24645cb93904d840617c4e6b7df53270b8d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_62890891b7d960a942e2d12a3cc24645cb93904d840617c4e6b7df53270b8d40->leave($__internal_62890891b7d960a942e2d12a3cc24645cb93904d840617c4e6b7df53270b8d40_prof);

        
        $__internal_48e0338a39636d3d505538be35b14c404fbd3c6cdb4318580660ac8e54e9220a->leave($__internal_48e0338a39636d3d505538be35b14c404fbd3c6cdb4318580660ac8e54e9220a_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0c60ab14e4d75112de3b75d62d030698729c7e434e7a0dbbf31535cec5dd6fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c60ab14e4d75112de3b75d62d030698729c7e434e7a0dbbf31535cec5dd6fd0->enter($__internal_0c60ab14e4d75112de3b75d62d030698729c7e434e7a0dbbf31535cec5dd6fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_57f2f83c77807bde324de6a762456719b00bf8301b26b392cdd237dd3c7c84f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f2f83c77807bde324de6a762456719b00bf8301b26b392cdd237dd3c7c84f4->enter($__internal_57f2f83c77807bde324de6a762456719b00bf8301b26b392cdd237dd3c7c84f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 28, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        echo "
        <div class=\"";
        // line 30
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        echo "

            ";
        // line 33
        if ((twig_in_filter((isset($context["_field_type"]) || array_key_exists("_field_type", $context) ? $context["_field_type"] : (function () { throw new Twig_Error_Runtime('Variable "_field_type" does not exist.', 33, $this->getSourceContext()); })()), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 34
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 36
            if ((null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 36, $this->getSourceContext()); })()))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'errors');
        echo "

            ";
        // line 44
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 45
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 45, $this->getSourceContext()); })()), "field", array()), "help", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 45, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 47
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_57f2f83c77807bde324de6a762456719b00bf8301b26b392cdd237dd3c7c84f4->leave($__internal_57f2f83c77807bde324de6a762456719b00bf8301b26b392cdd237dd3c7c84f4_prof);

        
        $__internal_0c60ab14e4d75112de3b75d62d030698729c7e434e7a0dbbf31535cec5dd6fd0->leave($__internal_0c60ab14e4d75112de3b75d62d030698729c7e434e7a0dbbf31535cec5dd6fd0_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_07f9a2ac65040df1645b36e40ce5d6542e0137815921a7f535d312acf15c7ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f9a2ac65040df1645b36e40ce5d6542e0137815921a7f535d312acf15c7ff7->enter($__internal_07f9a2ac65040df1645b36e40ce5d6542e0137815921a7f535d312acf15c7ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_87e9b2adbd1a9e31c54ce0e38efdec8716fa1885bdabab999dbfc0f73b056ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e9b2adbd1a9e31c54ce0e38efdec8716fa1885bdabab999dbfc0f73b056ddb->enter($__internal_87e9b2adbd1a9e31c54ce0e38efdec8716fa1885bdabab999dbfc0f73b056ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_87e9b2adbd1a9e31c54ce0e38efdec8716fa1885bdabab999dbfc0f73b056ddb->leave($__internal_87e9b2adbd1a9e31c54ce0e38efdec8716fa1885bdabab999dbfc0f73b056ddb_prof);

        
        $__internal_07f9a2ac65040df1645b36e40ce5d6542e0137815921a7f535d312acf15c7ff7->leave($__internal_07f9a2ac65040df1645b36e40ce5d6542e0137815921a7f535d312acf15c7ff7_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a1f5820894198d709978dae704a60d916a8b16e1cd14e980e2f6547c62f375bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f5820894198d709978dae704a60d916a8b16e1cd14e980e2f6547c62f375bf->enter($__internal_a1f5820894198d709978dae704a60d916a8b16e1cd14e980e2f6547c62f375bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3616e8489dce661a6b17a2d2c3998332b414b79c5c3e5df25d2defc3608ae29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3616e8489dce661a6b17a2d2c3998332b414b79c5c3e5df25d2defc3608ae29e->enter($__internal_3616e8489dce661a6b17a2d2c3998332b414b79c5c3e5df25d2defc3608ae29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_3616e8489dce661a6b17a2d2c3998332b414b79c5c3e5df25d2defc3608ae29e->leave($__internal_3616e8489dce661a6b17a2d2c3998332b414b79c5c3e5df25d2defc3608ae29e_prof);

        
        $__internal_a1f5820894198d709978dae704a60d916a8b16e1cd14e980e2f6547c62f375bf->leave($__internal_a1f5820894198d709978dae704a60d916a8b16e1cd14e980e2f6547c62f375bf_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_c267705daacdb15db4cdaa3538baaef941df66327857b027dc96f1238af7e84e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c267705daacdb15db4cdaa3538baaef941df66327857b027dc96f1238af7e84e->enter($__internal_c267705daacdb15db4cdaa3538baaef941df66327857b027dc96f1238af7e84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_7e55e62fd518c2f312906c3d5a3c6f3a2cd237d55dd39da82ed638f9c9b5a661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e55e62fd518c2f312906c3d5a3c6f3a2cd237d55dd39da82ed638f9c9b5a661->enter($__internal_7e55e62fd518c2f312906c3d5a3c6f3a2cd237d55dd39da82ed638f9c9b5a661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 61
        ob_start();
        // line 62
        echo "    <div class=\"form-group ";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 62, $this->getSourceContext()); })())) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 62, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 63
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 64
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7e55e62fd518c2f312906c3d5a3c6f3a2cd237d55dd39da82ed638f9c9b5a661->leave($__internal_7e55e62fd518c2f312906c3d5a3c6f3a2cd237d55dd39da82ed638f9c9b5a661_prof);

        
        $__internal_c267705daacdb15db4cdaa3538baaef941df66327857b027dc96f1238af7e84e->leave($__internal_c267705daacdb15db4cdaa3538baaef941df66327857b027dc96f1238af7e84e_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_1d154c8ed353fd19dc33b42cd11b90841b77308bb65242496a734440ea39d364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d154c8ed353fd19dc33b42cd11b90841b77308bb65242496a734440ea39d364->enter($__internal_1d154c8ed353fd19dc33b42cd11b90841b77308bb65242496a734440ea39d364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_48c795c63fcf0c4b80a5f2776ee4ce96d4ba2a385f84779d8a5fecf178e4a190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c795c63fcf0c4b80a5f2776ee4ce96d4ba2a385f84779d8a5fecf178e4a190->enter($__internal_48c795c63fcf0c4b80a5f2776ee4ce96d4ba2a385f84779d8a5fecf178e4a190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 73
        ob_start();
        // line 74
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 74, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 75
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 76
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_48c795c63fcf0c4b80a5f2776ee4ce96d4ba2a385f84779d8a5fecf178e4a190->leave($__internal_48c795c63fcf0c4b80a5f2776ee4ce96d4ba2a385f84779d8a5fecf178e4a190_prof);

        
        $__internal_1d154c8ed353fd19dc33b42cd11b90841b77308bb65242496a734440ea39d364->leave($__internal_1d154c8ed353fd19dc33b42cd11b90841b77308bb65242496a734440ea39d364_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_9aebadc14223c08c68f02eb6f4d43ec6df92446c4afc8aa336b1c9f0965d237c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aebadc14223c08c68f02eb6f4d43ec6df92446c4afc8aa336b1c9f0965d237c->enter($__internal_9aebadc14223c08c68f02eb6f4d43ec6df92446c4afc8aa336b1c9f0965d237c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_cf4c028d854f7eccd7600c2df4f4821273d0458ffb17e0ba542d127e12b8e2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4c028d854f7eccd7600c2df4f4821273d0458ffb17e0ba542d127e12b8e2c4->enter($__internal_cf4c028d854f7eccd7600c2df4f4821273d0458ffb17e0ba542d127e12b8e2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 84
        ob_start();
        // line 85
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 86
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 87
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cf4c028d854f7eccd7600c2df4f4821273d0458ffb17e0ba542d127e12b8e2c4->leave($__internal_cf4c028d854f7eccd7600c2df4f4821273d0458ffb17e0ba542d127e12b8e2c4_prof);

        
        $__internal_9aebadc14223c08c68f02eb6f4d43ec6df92446c4afc8aa336b1c9f0965d237c->leave($__internal_9aebadc14223c08c68f02eb6f4d43ec6df92446c4afc8aa336b1c9f0965d237c_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_ed52e5532ccad72b6bd9fb8a72d6c71b4601ad1b30dfb130fae1ef74a6cc9feb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed52e5532ccad72b6bd9fb8a72d6c71b4601ad1b30dfb130fae1ef74a6cc9feb->enter($__internal_ed52e5532ccad72b6bd9fb8a72d6c71b4601ad1b30dfb130fae1ef74a6cc9feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_6b9a38155986f18220649e20f11dfd62c38a573b66cb61fbaa364ea6e4ce6206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9a38155986f18220649e20f11dfd62c38a573b66cb61fbaa364ea6e4ce6206->enter($__internal_6b9a38155986f18220649e20f11dfd62c38a573b66cb61fbaa364ea6e4ce6206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_6b9a38155986f18220649e20f11dfd62c38a573b66cb61fbaa364ea6e4ce6206->leave($__internal_6b9a38155986f18220649e20f11dfd62c38a573b66cb61fbaa364ea6e4ce6206_prof);

        
        $__internal_ed52e5532ccad72b6bd9fb8a72d6c71b4601ad1b30dfb130fae1ef74a6cc9feb->leave($__internal_ed52e5532ccad72b6bd9fb8a72d6c71b4601ad1b30dfb130fae1ef74a6cc9feb_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  430 => 94,  415 => 88,  411 => 87,  407 => 86,  404 => 85,  402 => 84,  393 => 83,  378 => 77,  374 => 76,  370 => 75,  365 => 74,  363 => 73,  354 => 72,  339 => 66,  335 => 65,  331 => 64,  327 => 63,  318 => 62,  316 => 61,  307 => 60,  297 => 57,  288 => 56,  278 => 53,  269 => 52,  256 => 47,  250 => 45,  248 => 44,  243 => 42,  240 => 41,  233 => 37,  227 => 36,  223 => 34,  221 => 33,  216 => 31,  212 => 30,  208 => 29,  199 => 28,  196 => 27,  194 => 26,  185 => 25,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 94,  98 => 93,  96 => 83,  93 => 82,  91 => 72,  88 => 71,  86 => 60,  83 => 59,  81 => 56,  78 => 55,  76 => 52,  73 => 51,  71 => 25,  68 => 24,  65 => 22,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"@EasyAdmin/form/bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set _easyadmin_form_type = 'horizontal' %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class 'col-sm-2' %}

{# Rows #}

{% block form_row -%}
{% spaceless %}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{ form_label(form) }}
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}

            {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {{ form_errors(form) }}

            {% if easyadmin.field.help|default('') != '' %}
                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class 'col-sm-10' %}
", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/form/bootstrap_3_horizontal_layout.html.twig");
    }
}
