<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c790cfdc6d78b23fc977b9da812dcfad1cb239c399b3b7e58fec65edff5ca7f1 extends Twig_Template
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
        $__internal_02910f45ea74a4e716adeec73bd80d9652d5d76fa4ac06585099d7b81c8160d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02910f45ea74a4e716adeec73bd80d9652d5d76fa4ac06585099d7b81c8160d7->enter($__internal_02910f45ea74a4e716adeec73bd80d9652d5d76fa4ac06585099d7b81c8160d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e2bf70b41c0a50feb01cb025bed6f643f2060a5745183adb6ff19e10d90674f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2bf70b41c0a50feb01cb025bed6f643f2060a5745183adb6ff19e10d90674f5->enter($__internal_e2bf70b41c0a50feb01cb025bed6f643f2060a5745183adb6ff19e10d90674f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_02910f45ea74a4e716adeec73bd80d9652d5d76fa4ac06585099d7b81c8160d7->leave($__internal_02910f45ea74a4e716adeec73bd80d9652d5d76fa4ac06585099d7b81c8160d7_prof);

        
        $__internal_e2bf70b41c0a50feb01cb025bed6f643f2060a5745183adb6ff19e10d90674f5->leave($__internal_e2bf70b41c0a50feb01cb025bed6f643f2060a5745183adb6ff19e10d90674f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
