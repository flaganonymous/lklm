<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_abaed1bfa96186fe4c02fcfb8245c4bea5b596cf954358738f481c67065ccd7b extends Twig_Template
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
        $__internal_b7eb4b4e88f65d1b84367824c88e01df703a54c865ac9a0de9cb9ecd20680c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7eb4b4e88f65d1b84367824c88e01df703a54c865ac9a0de9cb9ecd20680c16->enter($__internal_b7eb4b4e88f65d1b84367824c88e01df703a54c865ac9a0de9cb9ecd20680c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_8af59f413a71037d7fe719217aae3f68236bfc2064b9687039ca70193747756c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af59f413a71037d7fe719217aae3f68236bfc2064b9687039ca70193747756c->enter($__internal_8af59f413a71037d7fe719217aae3f68236bfc2064b9687039ca70193747756c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b7eb4b4e88f65d1b84367824c88e01df703a54c865ac9a0de9cb9ecd20680c16->leave($__internal_b7eb4b4e88f65d1b84367824c88e01df703a54c865ac9a0de9cb9ecd20680c16_prof);

        
        $__internal_8af59f413a71037d7fe719217aae3f68236bfc2064b9687039ca70193747756c->leave($__internal_8af59f413a71037d7fe719217aae3f68236bfc2064b9687039ca70193747756c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
