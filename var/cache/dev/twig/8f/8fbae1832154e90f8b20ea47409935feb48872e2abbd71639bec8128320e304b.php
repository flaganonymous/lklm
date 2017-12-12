<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d0d64e6cce0e05037f821fbe34838db3ab71a0ea6bd474b91885028f5dfee660 extends Twig_Template
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
        $__internal_4d1cc18eb1e22c72e82b2690f5977c595e861f1ee03f70425c48aac073156216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1cc18eb1e22c72e82b2690f5977c595e861f1ee03f70425c48aac073156216->enter($__internal_4d1cc18eb1e22c72e82b2690f5977c595e861f1ee03f70425c48aac073156216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_2625e45023288a92fb290a9c5f9ba3ee6f40991c783a37fd308c908c18bc7829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2625e45023288a92fb290a9c5f9ba3ee6f40991c783a37fd308c908c18bc7829->enter($__internal_2625e45023288a92fb290a9c5f9ba3ee6f40991c783a37fd308c908c18bc7829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4d1cc18eb1e22c72e82b2690f5977c595e861f1ee03f70425c48aac073156216->leave($__internal_4d1cc18eb1e22c72e82b2690f5977c595e861f1ee03f70425c48aac073156216_prof);

        
        $__internal_2625e45023288a92fb290a9c5f9ba3ee6f40991c783a37fd308c908c18bc7829->leave($__internal_2625e45023288a92fb290a9c5f9ba3ee6f40991c783a37fd308c908c18bc7829_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
