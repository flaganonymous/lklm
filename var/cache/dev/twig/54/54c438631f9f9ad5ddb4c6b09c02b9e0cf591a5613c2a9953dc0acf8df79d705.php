<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_8b3910bf46431a9bebe1ab1686a85a42b1610635eb725259cf62a18d04439519 extends Twig_Template
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
        $__internal_ad499deb2f9bd691ff0ebe3a5d91d9b76af6ff2a805fc946cfa5a5a921aa4f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad499deb2f9bd691ff0ebe3a5d91d9b76af6ff2a805fc946cfa5a5a921aa4f03->enter($__internal_ad499deb2f9bd691ff0ebe3a5d91d9b76af6ff2a805fc946cfa5a5a921aa4f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_9acdcc4e4d5c4c812d79644cb5e0c93a9b9be2d95c5d21af1b051f78d9ce23fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9acdcc4e4d5c4c812d79644cb5e0c93a9b9be2d95c5d21af1b051f78d9ce23fe->enter($__internal_9acdcc4e4d5c4c812d79644cb5e0c93a9b9be2d95c5d21af1b051f78d9ce23fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ad499deb2f9bd691ff0ebe3a5d91d9b76af6ff2a805fc946cfa5a5a921aa4f03->leave($__internal_ad499deb2f9bd691ff0ebe3a5d91d9b76af6ff2a805fc946cfa5a5a921aa4f03_prof);

        
        $__internal_9acdcc4e4d5c4c812d79644cb5e0c93a9b9be2d95c5d21af1b051f78d9ce23fe->leave($__internal_9acdcc4e4d5c4c812d79644cb5e0c93a9b9be2d95c5d21af1b051f78d9ce23fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
