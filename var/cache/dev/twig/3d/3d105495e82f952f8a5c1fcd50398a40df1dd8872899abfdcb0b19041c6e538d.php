<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f41fa1d88bd2535e4ecd46445efcfa7ab0cb9c8abeae294697a4d5038e08e786 extends Twig_Template
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
        $__internal_81de6c4c11440277c884c6c920c86a9b9370a449f2f9c5db50ae2b307483e7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81de6c4c11440277c884c6c920c86a9b9370a449f2f9c5db50ae2b307483e7b2->enter($__internal_81de6c4c11440277c884c6c920c86a9b9370a449f2f9c5db50ae2b307483e7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_9357a4e2ec14718b3f8cc875513d2be8e927276500154fcda5a70afa873081ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9357a4e2ec14718b3f8cc875513d2be8e927276500154fcda5a70afa873081ba->enter($__internal_9357a4e2ec14718b3f8cc875513d2be8e927276500154fcda5a70afa873081ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_81de6c4c11440277c884c6c920c86a9b9370a449f2f9c5db50ae2b307483e7b2->leave($__internal_81de6c4c11440277c884c6c920c86a9b9370a449f2f9c5db50ae2b307483e7b2_prof);

        
        $__internal_9357a4e2ec14718b3f8cc875513d2be8e927276500154fcda5a70afa873081ba->leave($__internal_9357a4e2ec14718b3f8cc875513d2be8e927276500154fcda5a70afa873081ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
