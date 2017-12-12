<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_135f63a0c194faad6c909a6a852812c26550c1ca119cf4f9bad551d846d994a2 extends Twig_Template
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
        $__internal_138b2548b403752656fd61e7bb53d9e80b848a6a0b49732253855ecc826a5429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138b2548b403752656fd61e7bb53d9e80b848a6a0b49732253855ecc826a5429->enter($__internal_138b2548b403752656fd61e7bb53d9e80b848a6a0b49732253855ecc826a5429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_2317bf6f8d599e25f057bf181b0548e1de23d7dc25c3c8a477a853f5dc2b1ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2317bf6f8d599e25f057bf181b0548e1de23d7dc25c3c8a477a853f5dc2b1ce2->enter($__internal_2317bf6f8d599e25f057bf181b0548e1de23d7dc25c3c8a477a853f5dc2b1ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_138b2548b403752656fd61e7bb53d9e80b848a6a0b49732253855ecc826a5429->leave($__internal_138b2548b403752656fd61e7bb53d9e80b848a6a0b49732253855ecc826a5429_prof);

        
        $__internal_2317bf6f8d599e25f057bf181b0548e1de23d7dc25c3c8a477a853f5dc2b1ce2->leave($__internal_2317bf6f8d599e25f057bf181b0548e1de23d7dc25c3c8a477a853f5dc2b1ce2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
