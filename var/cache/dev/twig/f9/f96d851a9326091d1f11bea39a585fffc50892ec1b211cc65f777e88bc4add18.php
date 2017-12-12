<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c2665a78c31e66523601a54ad864e7b1ab5e1c28bfd05a705f83488e55639839 extends Twig_Template
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
        $__internal_27ba2ebc8def6d4f62d63162cdc6c27e604807b73106930e3d3db40837807369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ba2ebc8def6d4f62d63162cdc6c27e604807b73106930e3d3db40837807369->enter($__internal_27ba2ebc8def6d4f62d63162cdc6c27e604807b73106930e3d3db40837807369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d9bc2cd5c8c6c524c43fad18b9a9e52140ace079fa0d7c512a4baf61526731d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9bc2cd5c8c6c524c43fad18b9a9e52140ace079fa0d7c512a4baf61526731d9->enter($__internal_d9bc2cd5c8c6c524c43fad18b9a9e52140ace079fa0d7c512a4baf61526731d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_27ba2ebc8def6d4f62d63162cdc6c27e604807b73106930e3d3db40837807369->leave($__internal_27ba2ebc8def6d4f62d63162cdc6c27e604807b73106930e3d3db40837807369_prof);

        
        $__internal_d9bc2cd5c8c6c524c43fad18b9a9e52140ace079fa0d7c512a4baf61526731d9->leave($__internal_d9bc2cd5c8c6c524c43fad18b9a9e52140ace079fa0d7c512a4baf61526731d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
