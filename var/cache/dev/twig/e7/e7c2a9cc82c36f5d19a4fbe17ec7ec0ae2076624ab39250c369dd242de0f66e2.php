<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c375bbf2a68eddf32e82098d8f8dc6989e3bd9777ed5a0a74fc09ce472f59114 extends Twig_Template
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
        $__internal_bb341043a4cac7e02c58c10e2d8869dbed57737e8369dac0d3f6a3174989d194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb341043a4cac7e02c58c10e2d8869dbed57737e8369dac0d3f6a3174989d194->enter($__internal_bb341043a4cac7e02c58c10e2d8869dbed57737e8369dac0d3f6a3174989d194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8f6014170dc578b035bb930a824ff6b435f09f55a30ee4d371963623a0f91684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6014170dc578b035bb930a824ff6b435f09f55a30ee4d371963623a0f91684->enter($__internal_8f6014170dc578b035bb930a824ff6b435f09f55a30ee4d371963623a0f91684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_bb341043a4cac7e02c58c10e2d8869dbed57737e8369dac0d3f6a3174989d194->leave($__internal_bb341043a4cac7e02c58c10e2d8869dbed57737e8369dac0d3f6a3174989d194_prof);

        
        $__internal_8f6014170dc578b035bb930a824ff6b435f09f55a30ee4d371963623a0f91684->leave($__internal_8f6014170dc578b035bb930a824ff6b435f09f55a30ee4d371963623a0f91684_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
