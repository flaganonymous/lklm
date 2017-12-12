<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_902b3e677a5a76977000eda83b7e3c466f35a0505e3386cc460fbea99c3cf8f4 extends Twig_Template
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
        $__internal_ae30ca184ef7000a53a3e0c285f509d88d6c4e22912c2c13ba50bec6fca82c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae30ca184ef7000a53a3e0c285f509d88d6c4e22912c2c13ba50bec6fca82c26->enter($__internal_ae30ca184ef7000a53a3e0c285f509d88d6c4e22912c2c13ba50bec6fca82c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_59076df5c04f273b9b856e3364330f6d064669e9c5adf94e667f07c25cddd11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59076df5c04f273b9b856e3364330f6d064669e9c5adf94e667f07c25cddd11c->enter($__internal_59076df5c04f273b9b856e3364330f6d064669e9c5adf94e667f07c25cddd11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ae30ca184ef7000a53a3e0c285f509d88d6c4e22912c2c13ba50bec6fca82c26->leave($__internal_ae30ca184ef7000a53a3e0c285f509d88d6c4e22912c2c13ba50bec6fca82c26_prof);

        
        $__internal_59076df5c04f273b9b856e3364330f6d064669e9c5adf94e667f07c25cddd11c->leave($__internal_59076df5c04f273b9b856e3364330f6d064669e9c5adf94e667f07c25cddd11c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
