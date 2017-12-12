<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_dc9ddc25dd71e14b3cec64de4a604ed8e02f9594fb94f5caa03048509c6f5c59 extends Twig_Template
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
        $__internal_650c2088caa5d7b241f44637193878910ebc6184cc442ac65f361b5e33daaa00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650c2088caa5d7b241f44637193878910ebc6184cc442ac65f361b5e33daaa00->enter($__internal_650c2088caa5d7b241f44637193878910ebc6184cc442ac65f361b5e33daaa00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_faa1710fdd1092492914698d149958b38a7288637af1302beed1bf335a540b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa1710fdd1092492914698d149958b38a7288637af1302beed1bf335a540b90->enter($__internal_faa1710fdd1092492914698d149958b38a7288637af1302beed1bf335a540b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_650c2088caa5d7b241f44637193878910ebc6184cc442ac65f361b5e33daaa00->leave($__internal_650c2088caa5d7b241f44637193878910ebc6184cc442ac65f361b5e33daaa00_prof);

        
        $__internal_faa1710fdd1092492914698d149958b38a7288637af1302beed1bf335a540b90->leave($__internal_faa1710fdd1092492914698d149958b38a7288637af1302beed1bf335a540b90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
