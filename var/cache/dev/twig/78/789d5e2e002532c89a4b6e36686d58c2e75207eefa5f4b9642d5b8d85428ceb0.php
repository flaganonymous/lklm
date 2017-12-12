<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_1b624bd11308f9fa021f6ec5afdc41082036bf4783cbeb55060ca8f54e056a13 extends Twig_Template
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
        $__internal_b20df5aa227a72758f9014ab064ef9016a1d3c30a44e2e4bf0ec5a68b7e806e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b20df5aa227a72758f9014ab064ef9016a1d3c30a44e2e4bf0ec5a68b7e806e0->enter($__internal_b20df5aa227a72758f9014ab064ef9016a1d3c30a44e2e4bf0ec5a68b7e806e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_9e7af6fcb0a71898abccddbcc4b0925ce8e15b96f853421540f70578e33fca18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7af6fcb0a71898abccddbcc4b0925ce8e15b96f853421540f70578e33fca18->enter($__internal_9e7af6fcb0a71898abccddbcc4b0925ce8e15b96f853421540f70578e33fca18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b20df5aa227a72758f9014ab064ef9016a1d3c30a44e2e4bf0ec5a68b7e806e0->leave($__internal_b20df5aa227a72758f9014ab064ef9016a1d3c30a44e2e4bf0ec5a68b7e806e0_prof);

        
        $__internal_9e7af6fcb0a71898abccddbcc4b0925ce8e15b96f853421540f70578e33fca18->leave($__internal_9e7af6fcb0a71898abccddbcc4b0925ce8e15b96f853421540f70578e33fca18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
