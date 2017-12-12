<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4cda1683be2251a76340198bf3992aca6645727a7ee4ad37e801c94415a232a7 extends Twig_Template
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
        $__internal_7e1aacd79d9d19bccf0faf32c29836f4659d33d49da224ecd62d21e58344587b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1aacd79d9d19bccf0faf32c29836f4659d33d49da224ecd62d21e58344587b->enter($__internal_7e1aacd79d9d19bccf0faf32c29836f4659d33d49da224ecd62d21e58344587b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_673de39f7f0a7ef94539fd0a1f3b944c8a08bfaa619193f6ad780a4e8c851367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673de39f7f0a7ef94539fd0a1f3b944c8a08bfaa619193f6ad780a4e8c851367->enter($__internal_673de39f7f0a7ef94539fd0a1f3b944c8a08bfaa619193f6ad780a4e8c851367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7e1aacd79d9d19bccf0faf32c29836f4659d33d49da224ecd62d21e58344587b->leave($__internal_7e1aacd79d9d19bccf0faf32c29836f4659d33d49da224ecd62d21e58344587b_prof);

        
        $__internal_673de39f7f0a7ef94539fd0a1f3b944c8a08bfaa619193f6ad780a4e8c851367->leave($__internal_673de39f7f0a7ef94539fd0a1f3b944c8a08bfaa619193f6ad780a4e8c851367_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
