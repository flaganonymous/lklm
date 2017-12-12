<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4e86a8642c9b7e0caae8ed7674483f5671532614f94c4c1ceff1b0127bd2f211 extends Twig_Template
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
        $__internal_81d54e060c6b17bb41d6a75b1c46b875d023c5af2f9ab2874aa678455596a0ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d54e060c6b17bb41d6a75b1c46b875d023c5af2f9ab2874aa678455596a0ec->enter($__internal_81d54e060c6b17bb41d6a75b1c46b875d023c5af2f9ab2874aa678455596a0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_96fb3729501e2c827c395aaabbf236a73411adb7e4608901b74c32c0d45e078f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96fb3729501e2c827c395aaabbf236a73411adb7e4608901b74c32c0d45e078f->enter($__internal_96fb3729501e2c827c395aaabbf236a73411adb7e4608901b74c32c0d45e078f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_81d54e060c6b17bb41d6a75b1c46b875d023c5af2f9ab2874aa678455596a0ec->leave($__internal_81d54e060c6b17bb41d6a75b1c46b875d023c5af2f9ab2874aa678455596a0ec_prof);

        
        $__internal_96fb3729501e2c827c395aaabbf236a73411adb7e4608901b74c32c0d45e078f->leave($__internal_96fb3729501e2c827c395aaabbf236a73411adb7e4608901b74c32c0d45e078f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
