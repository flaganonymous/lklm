<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_acca01985c626fb5053d3c23bbe1612dd10603cddf57b378f20cb0f77814b62f extends Twig_Template
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
        $__internal_f758f313703e32f2e932797fa380a42aa16bbd154a6494d243d6d25015f701a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f758f313703e32f2e932797fa380a42aa16bbd154a6494d243d6d25015f701a9->enter($__internal_f758f313703e32f2e932797fa380a42aa16bbd154a6494d243d6d25015f701a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_b5c6387610465f73f1af8b0d2eaec8e5e648643b9b2743059cf64c42c7dcf015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c6387610465f73f1af8b0d2eaec8e5e648643b9b2743059cf64c42c7dcf015->enter($__internal_b5c6387610465f73f1af8b0d2eaec8e5e648643b9b2743059cf64c42c7dcf015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f758f313703e32f2e932797fa380a42aa16bbd154a6494d243d6d25015f701a9->leave($__internal_f758f313703e32f2e932797fa380a42aa16bbd154a6494d243d6d25015f701a9_prof);

        
        $__internal_b5c6387610465f73f1af8b0d2eaec8e5e648643b9b2743059cf64c42c7dcf015->leave($__internal_b5c6387610465f73f1af8b0d2eaec8e5e648643b9b2743059cf64c42c7dcf015_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
