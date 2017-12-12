<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2a0d6552f556cbb8e664546d246d0644783dd6139221a97c91b2bc58f7b6255a extends Twig_Template
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
        $__internal_fa07f63875ea8bd5cd5949b0409b819dc199034e959a62e80b3441aa66cbebe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa07f63875ea8bd5cd5949b0409b819dc199034e959a62e80b3441aa66cbebe6->enter($__internal_fa07f63875ea8bd5cd5949b0409b819dc199034e959a62e80b3441aa66cbebe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_960208f153f109adf43ded7cc91599085b57b75e3cc52e20e1c7e86b46f36047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960208f153f109adf43ded7cc91599085b57b75e3cc52e20e1c7e86b46f36047->enter($__internal_960208f153f109adf43ded7cc91599085b57b75e3cc52e20e1c7e86b46f36047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_fa07f63875ea8bd5cd5949b0409b819dc199034e959a62e80b3441aa66cbebe6->leave($__internal_fa07f63875ea8bd5cd5949b0409b819dc199034e959a62e80b3441aa66cbebe6_prof);

        
        $__internal_960208f153f109adf43ded7cc91599085b57b75e3cc52e20e1c7e86b46f36047->leave($__internal_960208f153f109adf43ded7cc91599085b57b75e3cc52e20e1c7e86b46f36047_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
