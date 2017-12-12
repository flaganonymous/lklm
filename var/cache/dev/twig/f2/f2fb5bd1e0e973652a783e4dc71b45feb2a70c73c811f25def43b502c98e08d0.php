<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_08e8632a7990a30630159e1d2a04fbd267b0032b9b4ae2b7333f58886b070f3d extends Twig_Template
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
        $__internal_8114d724e65406f80cad85b919e6b5d9f39cc2e16b2f7abb9c51da2f9428fcc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8114d724e65406f80cad85b919e6b5d9f39cc2e16b2f7abb9c51da2f9428fcc3->enter($__internal_8114d724e65406f80cad85b919e6b5d9f39cc2e16b2f7abb9c51da2f9428fcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f7e6c6b7d50ca094df92887c943c76cefbb3ca9a350be1696c791c4628ae72b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e6c6b7d50ca094df92887c943c76cefbb3ca9a350be1696c791c4628ae72b2->enter($__internal_f7e6c6b7d50ca094df92887c943c76cefbb3ca9a350be1696c791c4628ae72b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8114d724e65406f80cad85b919e6b5d9f39cc2e16b2f7abb9c51da2f9428fcc3->leave($__internal_8114d724e65406f80cad85b919e6b5d9f39cc2e16b2f7abb9c51da2f9428fcc3_prof);

        
        $__internal_f7e6c6b7d50ca094df92887c943c76cefbb3ca9a350be1696c791c4628ae72b2->leave($__internal_f7e6c6b7d50ca094df92887c943c76cefbb3ca9a350be1696c791c4628ae72b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
