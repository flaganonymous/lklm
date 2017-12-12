<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_488e662eda2b0c3f28bca524d79364bf7082856c9ac2e56da63b0967e6b42fdb extends Twig_Template
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
        $__internal_371421d49b2a5c99744c7dc268ee86fd07fff868ae9bf383fdf877b3710560d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371421d49b2a5c99744c7dc268ee86fd07fff868ae9bf383fdf877b3710560d0->enter($__internal_371421d49b2a5c99744c7dc268ee86fd07fff868ae9bf383fdf877b3710560d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_5064f21483b2ba2c30b3180e8862326bf120240810fe3e026b51c6534889aa70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5064f21483b2ba2c30b3180e8862326bf120240810fe3e026b51c6534889aa70->enter($__internal_5064f21483b2ba2c30b3180e8862326bf120240810fe3e026b51c6534889aa70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_371421d49b2a5c99744c7dc268ee86fd07fff868ae9bf383fdf877b3710560d0->leave($__internal_371421d49b2a5c99744c7dc268ee86fd07fff868ae9bf383fdf877b3710560d0_prof);

        
        $__internal_5064f21483b2ba2c30b3180e8862326bf120240810fe3e026b51c6534889aa70->leave($__internal_5064f21483b2ba2c30b3180e8862326bf120240810fe3e026b51c6534889aa70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
