<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_15dddee0a17a48f3778696ec6440c1cf2b1ae80c6a7d7347d61ea2e912d13524 extends Twig_Template
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
        $__internal_fe07bcc87d29987299dd66ad406dd300e022be272e99913abbe0ba740cc39bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe07bcc87d29987299dd66ad406dd300e022be272e99913abbe0ba740cc39bf7->enter($__internal_fe07bcc87d29987299dd66ad406dd300e022be272e99913abbe0ba740cc39bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c3b816b6c8f268e1c119b630ee6a479c707a940cc6d4a29ce946267c7dc3c643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b816b6c8f268e1c119b630ee6a479c707a940cc6d4a29ce946267c7dc3c643->enter($__internal_c3b816b6c8f268e1c119b630ee6a479c707a940cc6d4a29ce946267c7dc3c643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fe07bcc87d29987299dd66ad406dd300e022be272e99913abbe0ba740cc39bf7->leave($__internal_fe07bcc87d29987299dd66ad406dd300e022be272e99913abbe0ba740cc39bf7_prof);

        
        $__internal_c3b816b6c8f268e1c119b630ee6a479c707a940cc6d4a29ce946267c7dc3c643->leave($__internal_c3b816b6c8f268e1c119b630ee6a479c707a940cc6d4a29ce946267c7dc3c643_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
