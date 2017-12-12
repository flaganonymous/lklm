<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_83c95d1dd92fb2f4254231f9848e3218d7852d52fee6cab12ad54ede3c289189 extends Twig_Template
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
        $__internal_885c20560051ffd885c4d8145c73402cf550a5f6e2d1061eb3db7e6f4416e524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885c20560051ffd885c4d8145c73402cf550a5f6e2d1061eb3db7e6f4416e524->enter($__internal_885c20560051ffd885c4d8145c73402cf550a5f6e2d1061eb3db7e6f4416e524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_3276ae6c67336fd7c29ea38c30fbd8da6e5e01cb83f105ed83d621f8cabc4c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3276ae6c67336fd7c29ea38c30fbd8da6e5e01cb83f105ed83d621f8cabc4c2a->enter($__internal_3276ae6c67336fd7c29ea38c30fbd8da6e5e01cb83f105ed83d621f8cabc4c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_885c20560051ffd885c4d8145c73402cf550a5f6e2d1061eb3db7e6f4416e524->leave($__internal_885c20560051ffd885c4d8145c73402cf550a5f6e2d1061eb3db7e6f4416e524_prof);

        
        $__internal_3276ae6c67336fd7c29ea38c30fbd8da6e5e01cb83f105ed83d621f8cabc4c2a->leave($__internal_3276ae6c67336fd7c29ea38c30fbd8da6e5e01cb83f105ed83d621f8cabc4c2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
