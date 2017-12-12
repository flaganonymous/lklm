<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5acca7e00bc33b8bf08df0f4d2523f7e697a953bb7a691e545c6b54f6bacc788 extends Twig_Template
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
        $__internal_cf1c545041736008c56f81924cc39de5705d7aaaeb706789b737c41e2ca19476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1c545041736008c56f81924cc39de5705d7aaaeb706789b737c41e2ca19476->enter($__internal_cf1c545041736008c56f81924cc39de5705d7aaaeb706789b737c41e2ca19476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d024eb600833a43cbf4b1ab32341dbe33ec63cda2c7de185a88d3091742ab5b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d024eb600833a43cbf4b1ab32341dbe33ec63cda2c7de185a88d3091742ab5b6->enter($__internal_d024eb600833a43cbf4b1ab32341dbe33ec63cda2c7de185a88d3091742ab5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_cf1c545041736008c56f81924cc39de5705d7aaaeb706789b737c41e2ca19476->leave($__internal_cf1c545041736008c56f81924cc39de5705d7aaaeb706789b737c41e2ca19476_prof);

        
        $__internal_d024eb600833a43cbf4b1ab32341dbe33ec63cda2c7de185a88d3091742ab5b6->leave($__internal_d024eb600833a43cbf4b1ab32341dbe33ec63cda2c7de185a88d3091742ab5b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
