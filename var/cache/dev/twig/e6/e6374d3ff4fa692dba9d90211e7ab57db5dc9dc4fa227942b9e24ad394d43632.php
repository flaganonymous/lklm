<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_2e557e1ea760fc4c08c85686056eb7359d072add725c06bb191016c51bff2c3c extends Twig_Template
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
        $__internal_36ca3388ef7388d6ffc1a26c67895ef13a766626bee1a31097160f2157b4df6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ca3388ef7388d6ffc1a26c67895ef13a766626bee1a31097160f2157b4df6e->enter($__internal_36ca3388ef7388d6ffc1a26c67895ef13a766626bee1a31097160f2157b4df6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_39d7c8ee592410d587bdfb54ff4023b831715405ffc18b663d24b8eaec68f79c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d7c8ee592410d587bdfb54ff4023b831715405ffc18b663d24b8eaec68f79c->enter($__internal_39d7c8ee592410d587bdfb54ff4023b831715405ffc18b663d24b8eaec68f79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_36ca3388ef7388d6ffc1a26c67895ef13a766626bee1a31097160f2157b4df6e->leave($__internal_36ca3388ef7388d6ffc1a26c67895ef13a766626bee1a31097160f2157b4df6e_prof);

        
        $__internal_39d7c8ee592410d587bdfb54ff4023b831715405ffc18b663d24b8eaec68f79c->leave($__internal_39d7c8ee592410d587bdfb54ff4023b831715405ffc18b663d24b8eaec68f79c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
