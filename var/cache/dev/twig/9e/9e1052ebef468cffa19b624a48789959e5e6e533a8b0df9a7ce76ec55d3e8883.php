<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a42fbedc5fc39c6557759a9d4fee614ebcce50d37115024262d3892cbb4f3915 extends Twig_Template
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
        $__internal_eb67b9fbb8eed0f6058fbf4a117349a7045771142abd37326ab72c07fb33e80b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb67b9fbb8eed0f6058fbf4a117349a7045771142abd37326ab72c07fb33e80b->enter($__internal_eb67b9fbb8eed0f6058fbf4a117349a7045771142abd37326ab72c07fb33e80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_b60df2cb1691250b718ecafeeffb9c0cc60b206fe020aec412c57832a0ab9b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60df2cb1691250b718ecafeeffb9c0cc60b206fe020aec412c57832a0ab9b4c->enter($__internal_b60df2cb1691250b718ecafeeffb9c0cc60b206fe020aec412c57832a0ab9b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_eb67b9fbb8eed0f6058fbf4a117349a7045771142abd37326ab72c07fb33e80b->leave($__internal_eb67b9fbb8eed0f6058fbf4a117349a7045771142abd37326ab72c07fb33e80b_prof);

        
        $__internal_b60df2cb1691250b718ecafeeffb9c0cc60b206fe020aec412c57832a0ab9b4c->leave($__internal_b60df2cb1691250b718ecafeeffb9c0cc60b206fe020aec412c57832a0ab9b4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
