<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0b7b75cf1e7556c8255e222f766ab5cf3879071a798c891822076071f38ddb19 extends Twig_Template
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
        $__internal_0c468904b574a2b30630f1fd67826b1d32870dcf1bdf9766a3165af8c7e4b404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c468904b574a2b30630f1fd67826b1d32870dcf1bdf9766a3165af8c7e4b404->enter($__internal_0c468904b574a2b30630f1fd67826b1d32870dcf1bdf9766a3165af8c7e4b404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_168dabe0e4a141bd8ae5b8b0501e2f56ba6d2c5acec897d9d05d78ddb23d2201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168dabe0e4a141bd8ae5b8b0501e2f56ba6d2c5acec897d9d05d78ddb23d2201->enter($__internal_168dabe0e4a141bd8ae5b8b0501e2f56ba6d2c5acec897d9d05d78ddb23d2201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0c468904b574a2b30630f1fd67826b1d32870dcf1bdf9766a3165af8c7e4b404->leave($__internal_0c468904b574a2b30630f1fd67826b1d32870dcf1bdf9766a3165af8c7e4b404_prof);

        
        $__internal_168dabe0e4a141bd8ae5b8b0501e2f56ba6d2c5acec897d9d05d78ddb23d2201->leave($__internal_168dabe0e4a141bd8ae5b8b0501e2f56ba6d2c5acec897d9d05d78ddb23d2201_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
