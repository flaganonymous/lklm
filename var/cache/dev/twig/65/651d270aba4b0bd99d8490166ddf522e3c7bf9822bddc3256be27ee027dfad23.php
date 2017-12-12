<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_6513467aab7451bc4dace077127771528a2d0d1fa6d6b4b693e0092ab3534769 extends Twig_Template
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
        $__internal_18db37859936cd751757a55ed7129d343922b39cafbfeee3dcfd0d6ecca572f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18db37859936cd751757a55ed7129d343922b39cafbfeee3dcfd0d6ecca572f5->enter($__internal_18db37859936cd751757a55ed7129d343922b39cafbfeee3dcfd0d6ecca572f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e323bdb242498f5da51369b61f471b1108efc82d0b4697f3c57ac85d6847fc1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e323bdb242498f5da51369b61f471b1108efc82d0b4697f3c57ac85d6847fc1b->enter($__internal_e323bdb242498f5da51369b61f471b1108efc82d0b4697f3c57ac85d6847fc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_18db37859936cd751757a55ed7129d343922b39cafbfeee3dcfd0d6ecca572f5->leave($__internal_18db37859936cd751757a55ed7129d343922b39cafbfeee3dcfd0d6ecca572f5_prof);

        
        $__internal_e323bdb242498f5da51369b61f471b1108efc82d0b4697f3c57ac85d6847fc1b->leave($__internal_e323bdb242498f5da51369b61f471b1108efc82d0b4697f3c57ac85d6847fc1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
