<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_9b0785c808741020e7ff636a5e2f990a8b1baabff7cc9f2813c6fcd2ecb1845a extends Twig_Template
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
        $__internal_0daaae34c2ebe0436fad2e4a951db9a3b973219372ee848c3d84195b7417d9c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0daaae34c2ebe0436fad2e4a951db9a3b973219372ee848c3d84195b7417d9c3->enter($__internal_0daaae34c2ebe0436fad2e4a951db9a3b973219372ee848c3d84195b7417d9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_0a3746c444d180b2f117e01a0b7ec9097edc114b18d333453dd9d7ab34b93872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3746c444d180b2f117e01a0b7ec9097edc114b18d333453dd9d7ab34b93872->enter($__internal_0a3746c444d180b2f117e01a0b7ec9097edc114b18d333453dd9d7ab34b93872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_0daaae34c2ebe0436fad2e4a951db9a3b973219372ee848c3d84195b7417d9c3->leave($__internal_0daaae34c2ebe0436fad2e4a951db9a3b973219372ee848c3d84195b7417d9c3_prof);

        
        $__internal_0a3746c444d180b2f117e01a0b7ec9097edc114b18d333453dd9d7ab34b93872->leave($__internal_0a3746c444d180b2f117e01a0b7ec9097edc114b18d333453dd9d7ab34b93872_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
