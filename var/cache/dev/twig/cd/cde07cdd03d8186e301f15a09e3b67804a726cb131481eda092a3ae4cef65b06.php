<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_936446844fea075988733e8e211be5f6f991f939aaff436e2bc8d333f2512c73 extends Twig_Template
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
        $__internal_d6244e7d47d2f3157414cd28685dc22ec91b4902f7baab5acfeffc617f76d51d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6244e7d47d2f3157414cd28685dc22ec91b4902f7baab5acfeffc617f76d51d->enter($__internal_d6244e7d47d2f3157414cd28685dc22ec91b4902f7baab5acfeffc617f76d51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_96c96aa085a3e540ed7fe22e9afc395eca5ceb602e4206e61aefa55fbcc19c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c96aa085a3e540ed7fe22e9afc395eca5ceb602e4206e61aefa55fbcc19c39->enter($__internal_96c96aa085a3e540ed7fe22e9afc395eca5ceb602e4206e61aefa55fbcc19c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d6244e7d47d2f3157414cd28685dc22ec91b4902f7baab5acfeffc617f76d51d->leave($__internal_d6244e7d47d2f3157414cd28685dc22ec91b4902f7baab5acfeffc617f76d51d_prof);

        
        $__internal_96c96aa085a3e540ed7fe22e9afc395eca5ceb602e4206e61aefa55fbcc19c39->leave($__internal_96c96aa085a3e540ed7fe22e9afc395eca5ceb602e4206e61aefa55fbcc19c39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
