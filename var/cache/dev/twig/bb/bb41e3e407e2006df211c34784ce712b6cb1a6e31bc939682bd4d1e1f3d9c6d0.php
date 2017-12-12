<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2005df445b50d1a033a4aa87a4d33a8e6a577927b3ba0c447f308fc1f99fee51 extends Twig_Template
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
        $__internal_23983cdb993e1eed375e5fbbcdcae81345ade51d60c1e5e64073e1bb1fccd51d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23983cdb993e1eed375e5fbbcdcae81345ade51d60c1e5e64073e1bb1fccd51d->enter($__internal_23983cdb993e1eed375e5fbbcdcae81345ade51d60c1e5e64073e1bb1fccd51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_debea7507264f6296a9038f048a48e35829c824d9a4baf9471f285722232de9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debea7507264f6296a9038f048a48e35829c824d9a4baf9471f285722232de9c->enter($__internal_debea7507264f6296a9038f048a48e35829c824d9a4baf9471f285722232de9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_23983cdb993e1eed375e5fbbcdcae81345ade51d60c1e5e64073e1bb1fccd51d->leave($__internal_23983cdb993e1eed375e5fbbcdcae81345ade51d60c1e5e64073e1bb1fccd51d_prof);

        
        $__internal_debea7507264f6296a9038f048a48e35829c824d9a4baf9471f285722232de9c->leave($__internal_debea7507264f6296a9038f048a48e35829c824d9a4baf9471f285722232de9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
