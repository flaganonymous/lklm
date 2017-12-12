<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e10c937be0898c09e125f88c6ca68c4aa7fee0431516d6ea1b932c78688d6b23 extends Twig_Template
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
        $__internal_e348f9015cb232403a4cd77c290661a8b5eea5f669dc0ea15b51b94915308d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e348f9015cb232403a4cd77c290661a8b5eea5f669dc0ea15b51b94915308d78->enter($__internal_e348f9015cb232403a4cd77c290661a8b5eea5f669dc0ea15b51b94915308d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_413ba2ed61529742fd4f4476d2e9421c8e948027a7ca82c84edf891145efdb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413ba2ed61529742fd4f4476d2e9421c8e948027a7ca82c84edf891145efdb3e->enter($__internal_413ba2ed61529742fd4f4476d2e9421c8e948027a7ca82c84edf891145efdb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e348f9015cb232403a4cd77c290661a8b5eea5f669dc0ea15b51b94915308d78->leave($__internal_e348f9015cb232403a4cd77c290661a8b5eea5f669dc0ea15b51b94915308d78_prof);

        
        $__internal_413ba2ed61529742fd4f4476d2e9421c8e948027a7ca82c84edf891145efdb3e->leave($__internal_413ba2ed61529742fd4f4476d2e9421c8e948027a7ca82c84edf891145efdb3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
