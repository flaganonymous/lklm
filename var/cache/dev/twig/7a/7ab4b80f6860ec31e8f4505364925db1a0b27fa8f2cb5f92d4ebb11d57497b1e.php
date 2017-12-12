<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a3ae23fe1822a3f3d0d47a4afe503da8c23c9227394741c61bfea23bc8d3763d extends Twig_Template
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
        $__internal_077ab8c2a7df27c6f9a420ae80a4725f7c5c4169c2bd5c5495ab30c12fa4d84a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_077ab8c2a7df27c6f9a420ae80a4725f7c5c4169c2bd5c5495ab30c12fa4d84a->enter($__internal_077ab8c2a7df27c6f9a420ae80a4725f7c5c4169c2bd5c5495ab30c12fa4d84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_13544776686c3113256eca1c19070cdd9b5cd644a6dab3d6acfc180692f99763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13544776686c3113256eca1c19070cdd9b5cd644a6dab3d6acfc180692f99763->enter($__internal_13544776686c3113256eca1c19070cdd9b5cd644a6dab3d6acfc180692f99763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_077ab8c2a7df27c6f9a420ae80a4725f7c5c4169c2bd5c5495ab30c12fa4d84a->leave($__internal_077ab8c2a7df27c6f9a420ae80a4725f7c5c4169c2bd5c5495ab30c12fa4d84a_prof);

        
        $__internal_13544776686c3113256eca1c19070cdd9b5cd644a6dab3d6acfc180692f99763->leave($__internal_13544776686c3113256eca1c19070cdd9b5cd644a6dab3d6acfc180692f99763_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
