<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_3e447920a746a3e8fb07cda7939cd0e21b906ab86a3573179c5392d6ca57bfe4 extends Twig_Template
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
        $__internal_0daf2db28ce018b47ad4c9ffc2a089fe716dad189cb3acbcbbac5ae3c6a63f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0daf2db28ce018b47ad4c9ffc2a089fe716dad189cb3acbcbbac5ae3c6a63f13->enter($__internal_0daf2db28ce018b47ad4c9ffc2a089fe716dad189cb3acbcbbac5ae3c6a63f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4a510bd20bcd3e60ae2870e78083655842687b02e1612429b48f3a954ce1c0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a510bd20bcd3e60ae2870e78083655842687b02e1612429b48f3a954ce1c0c4->enter($__internal_4a510bd20bcd3e60ae2870e78083655842687b02e1612429b48f3a954ce1c0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0daf2db28ce018b47ad4c9ffc2a089fe716dad189cb3acbcbbac5ae3c6a63f13->leave($__internal_0daf2db28ce018b47ad4c9ffc2a089fe716dad189cb3acbcbbac5ae3c6a63f13_prof);

        
        $__internal_4a510bd20bcd3e60ae2870e78083655842687b02e1612429b48f3a954ce1c0c4->leave($__internal_4a510bd20bcd3e60ae2870e78083655842687b02e1612429b48f3a954ce1c0c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
