<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_77c21f1665cbb6a0060f02862dbee8785005c0bc3fc5efec293b527f0f442cbc extends Twig_Template
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
        $__internal_ba09a238e903c44650e38834f80c060f9a8ad772fa9ddaf2b61fa494368f6dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba09a238e903c44650e38834f80c060f9a8ad772fa9ddaf2b61fa494368f6dd1->enter($__internal_ba09a238e903c44650e38834f80c060f9a8ad772fa9ddaf2b61fa494368f6dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_3426bfe118ee44f5c826a49029f2c38df6cfc7adc6775db2e53e4237958ca4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3426bfe118ee44f5c826a49029f2c38df6cfc7adc6775db2e53e4237958ca4ea->enter($__internal_3426bfe118ee44f5c826a49029f2c38df6cfc7adc6775db2e53e4237958ca4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ba09a238e903c44650e38834f80c060f9a8ad772fa9ddaf2b61fa494368f6dd1->leave($__internal_ba09a238e903c44650e38834f80c060f9a8ad772fa9ddaf2b61fa494368f6dd1_prof);

        
        $__internal_3426bfe118ee44f5c826a49029f2c38df6cfc7adc6775db2e53e4237958ca4ea->leave($__internal_3426bfe118ee44f5c826a49029f2c38df6cfc7adc6775db2e53e4237958ca4ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
