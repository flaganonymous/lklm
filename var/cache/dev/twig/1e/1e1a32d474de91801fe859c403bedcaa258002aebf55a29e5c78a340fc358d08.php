<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_54aa1dd6313b0086f0a3f15b569f1cb713cf840ef12f0d33e6cb2325240d1b10 extends Twig_Template
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
        $__internal_8c0067f9178d25e55538263ffa3a3ee3bb82e72386f14c7182f04d996f1cfa96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0067f9178d25e55538263ffa3a3ee3bb82e72386f14c7182f04d996f1cfa96->enter($__internal_8c0067f9178d25e55538263ffa3a3ee3bb82e72386f14c7182f04d996f1cfa96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c6ba405793ec502ce691900141275e0d164aa668d0e1c3fc4fd206569709d4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ba405793ec502ce691900141275e0d164aa668d0e1c3fc4fd206569709d4c8->enter($__internal_c6ba405793ec502ce691900141275e0d164aa668d0e1c3fc4fd206569709d4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_8c0067f9178d25e55538263ffa3a3ee3bb82e72386f14c7182f04d996f1cfa96->leave($__internal_8c0067f9178d25e55538263ffa3a3ee3bb82e72386f14c7182f04d996f1cfa96_prof);

        
        $__internal_c6ba405793ec502ce691900141275e0d164aa668d0e1c3fc4fd206569709d4c8->leave($__internal_c6ba405793ec502ce691900141275e0d164aa668d0e1c3fc4fd206569709d4c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
