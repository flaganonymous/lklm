<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_e1c7c1cd6edad031c46541627b1480146063605f39d81aaf8f9ab058fe87954f extends Twig_Template
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
        $__internal_79a86641be0ec2a22bb8a2b81bdd38d6548aeedba5299b0fcd3eaaf4b936560e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a86641be0ec2a22bb8a2b81bdd38d6548aeedba5299b0fcd3eaaf4b936560e->enter($__internal_79a86641be0ec2a22bb8a2b81bdd38d6548aeedba5299b0fcd3eaaf4b936560e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_4786d393ca87364b732d59650d780bee46be219b2d8f39d8f59fd196c6feaa95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4786d393ca87364b732d59650d780bee46be219b2d8f39d8f59fd196c6feaa95->enter($__internal_4786d393ca87364b732d59650d780bee46be219b2d8f39d8f59fd196c6feaa95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_79a86641be0ec2a22bb8a2b81bdd38d6548aeedba5299b0fcd3eaaf4b936560e->leave($__internal_79a86641be0ec2a22bb8a2b81bdd38d6548aeedba5299b0fcd3eaaf4b936560e_prof);

        
        $__internal_4786d393ca87364b732d59650d780bee46be219b2d8f39d8f59fd196c6feaa95->leave($__internal_4786d393ca87364b732d59650d780bee46be219b2d8f39d8f59fd196c6feaa95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
