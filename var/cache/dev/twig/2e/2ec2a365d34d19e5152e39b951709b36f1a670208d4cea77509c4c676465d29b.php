<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5bfe4665bbde756646fe2fb3359c0f214efc88c24d17cf9e7b811f7a54d25503 extends Twig_Template
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
        $__internal_c8ff53e90a9a6400786e68444d174d8239d03abd0dae2ffa97d0c486807d0370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ff53e90a9a6400786e68444d174d8239d03abd0dae2ffa97d0c486807d0370->enter($__internal_c8ff53e90a9a6400786e68444d174d8239d03abd0dae2ffa97d0c486807d0370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3bd22fd1da9d0443d59df69afdd147c871cd5efea3bcdaec79c30a4004e7c42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd22fd1da9d0443d59df69afdd147c871cd5efea3bcdaec79c30a4004e7c42e->enter($__internal_3bd22fd1da9d0443d59df69afdd147c871cd5efea3bcdaec79c30a4004e7c42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c8ff53e90a9a6400786e68444d174d8239d03abd0dae2ffa97d0c486807d0370->leave($__internal_c8ff53e90a9a6400786e68444d174d8239d03abd0dae2ffa97d0c486807d0370_prof);

        
        $__internal_3bd22fd1da9d0443d59df69afdd147c871cd5efea3bcdaec79c30a4004e7c42e->leave($__internal_3bd22fd1da9d0443d59df69afdd147c871cd5efea3bcdaec79c30a4004e7c42e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
