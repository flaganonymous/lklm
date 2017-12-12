<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_714d51c2dde564e421caae3fdab2f4470e55254bd69145adf75c4afdc8c59726 extends Twig_Template
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
        $__internal_5997b61986447a035d72c3a778e87759df663919f22560e199c0457dd0a2c847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5997b61986447a035d72c3a778e87759df663919f22560e199c0457dd0a2c847->enter($__internal_5997b61986447a035d72c3a778e87759df663919f22560e199c0457dd0a2c847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_55aae4a4341039280a73591714b766b7729ad4ea3f2eef76459da4926738ed25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55aae4a4341039280a73591714b766b7729ad4ea3f2eef76459da4926738ed25->enter($__internal_55aae4a4341039280a73591714b766b7729ad4ea3f2eef76459da4926738ed25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5997b61986447a035d72c3a778e87759df663919f22560e199c0457dd0a2c847->leave($__internal_5997b61986447a035d72c3a778e87759df663919f22560e199c0457dd0a2c847_prof);

        
        $__internal_55aae4a4341039280a73591714b766b7729ad4ea3f2eef76459da4926738ed25->leave($__internal_55aae4a4341039280a73591714b766b7729ad4ea3f2eef76459da4926738ed25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
