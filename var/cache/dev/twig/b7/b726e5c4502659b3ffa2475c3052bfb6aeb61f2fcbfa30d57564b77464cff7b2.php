<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_019664e90db1cc6b3213e00680f03dfac33a827cf28782c2c3e8002a7a297e86 extends Twig_Template
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
        $__internal_d015cddc1b7c2d57e96a052f20fcf355cdb563ac7a5f16ee220b8d61ca73d9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d015cddc1b7c2d57e96a052f20fcf355cdb563ac7a5f16ee220b8d61ca73d9f8->enter($__internal_d015cddc1b7c2d57e96a052f20fcf355cdb563ac7a5f16ee220b8d61ca73d9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f1ef7ae805a0973d8235cb8054c4054d75368ef0fde227e67a1194cb45203ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ef7ae805a0973d8235cb8054c4054d75368ef0fde227e67a1194cb45203ccc->enter($__internal_f1ef7ae805a0973d8235cb8054c4054d75368ef0fde227e67a1194cb45203ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_d015cddc1b7c2d57e96a052f20fcf355cdb563ac7a5f16ee220b8d61ca73d9f8->leave($__internal_d015cddc1b7c2d57e96a052f20fcf355cdb563ac7a5f16ee220b8d61ca73d9f8_prof);

        
        $__internal_f1ef7ae805a0973d8235cb8054c4054d75368ef0fde227e67a1194cb45203ccc->leave($__internal_f1ef7ae805a0973d8235cb8054c4054d75368ef0fde227e67a1194cb45203ccc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
