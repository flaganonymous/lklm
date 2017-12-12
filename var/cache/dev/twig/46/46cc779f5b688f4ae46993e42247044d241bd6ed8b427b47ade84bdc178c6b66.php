<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a27889932b5b69bd5032a3cec8dfa81ed865ea3261392ba274f91adc236501e6 extends Twig_Template
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
        $__internal_37bc36c1795986186cd290ae813c2d2672d937c15844a3477b2e12c16b772c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37bc36c1795986186cd290ae813c2d2672d937c15844a3477b2e12c16b772c7a->enter($__internal_37bc36c1795986186cd290ae813c2d2672d937c15844a3477b2e12c16b772c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_9eab767a3e970fa240d491cb031e8b0c27e852001618e278a78620785e02bad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eab767a3e970fa240d491cb031e8b0c27e852001618e278a78620785e02bad5->enter($__internal_9eab767a3e970fa240d491cb031e8b0c27e852001618e278a78620785e02bad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_37bc36c1795986186cd290ae813c2d2672d937c15844a3477b2e12c16b772c7a->leave($__internal_37bc36c1795986186cd290ae813c2d2672d937c15844a3477b2e12c16b772c7a_prof);

        
        $__internal_9eab767a3e970fa240d491cb031e8b0c27e852001618e278a78620785e02bad5->leave($__internal_9eab767a3e970fa240d491cb031e8b0c27e852001618e278a78620785e02bad5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
