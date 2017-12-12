<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b908a652e9551a1509f4ad1f3318714be3abc89d1fcff019c5f1aa3928e1bd0d extends Twig_Template
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
        $__internal_91097e131437fec6f23c957dbe2f40cd41ee8c2a697c4d7d255aab91f429d317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91097e131437fec6f23c957dbe2f40cd41ee8c2a697c4d7d255aab91f429d317->enter($__internal_91097e131437fec6f23c957dbe2f40cd41ee8c2a697c4d7d255aab91f429d317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4ed4f1f10a67afcb3344e1f3696db091d0e23aed051e593c01638b2c7d4e6f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed4f1f10a67afcb3344e1f3696db091d0e23aed051e593c01638b2c7d4e6f09->enter($__internal_4ed4f1f10a67afcb3344e1f3696db091d0e23aed051e593c01638b2c7d4e6f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_91097e131437fec6f23c957dbe2f40cd41ee8c2a697c4d7d255aab91f429d317->leave($__internal_91097e131437fec6f23c957dbe2f40cd41ee8c2a697c4d7d255aab91f429d317_prof);

        
        $__internal_4ed4f1f10a67afcb3344e1f3696db091d0e23aed051e593c01638b2c7d4e6f09->leave($__internal_4ed4f1f10a67afcb3344e1f3696db091d0e23aed051e593c01638b2c7d4e6f09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
