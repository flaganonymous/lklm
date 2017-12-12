<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e9b052074df9b499205efeb3976285e709622c6537db35c5ef32089d755f0c37 extends Twig_Template
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
        $__internal_bd275b5c5fb01f5f1a439eb8b17a28c2b6cd24b9db28dfae9965a27f71b2812f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd275b5c5fb01f5f1a439eb8b17a28c2b6cd24b9db28dfae9965a27f71b2812f->enter($__internal_bd275b5c5fb01f5f1a439eb8b17a28c2b6cd24b9db28dfae9965a27f71b2812f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ba51974a4ea34ff8896813dd677cc3ce3076289096b7a73d1c258ab603739ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba51974a4ea34ff8896813dd677cc3ce3076289096b7a73d1c258ab603739ec5->enter($__internal_ba51974a4ea34ff8896813dd677cc3ce3076289096b7a73d1c258ab603739ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_bd275b5c5fb01f5f1a439eb8b17a28c2b6cd24b9db28dfae9965a27f71b2812f->leave($__internal_bd275b5c5fb01f5f1a439eb8b17a28c2b6cd24b9db28dfae9965a27f71b2812f_prof);

        
        $__internal_ba51974a4ea34ff8896813dd677cc3ce3076289096b7a73d1c258ab603739ec5->leave($__internal_ba51974a4ea34ff8896813dd677cc3ce3076289096b7a73d1c258ab603739ec5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
