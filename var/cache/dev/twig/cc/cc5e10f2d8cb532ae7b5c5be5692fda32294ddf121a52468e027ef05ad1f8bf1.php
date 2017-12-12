<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_6afc20db4b8be69282a9f2ecb201d8a4c97c75fa32c6b607bd9c68577696d3a0 extends Twig_Template
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
        $__internal_87d9a58df80175e8473f96935679a25d31a95ee7000c5735010fa894d9ae8220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d9a58df80175e8473f96935679a25d31a95ee7000c5735010fa894d9ae8220->enter($__internal_87d9a58df80175e8473f96935679a25d31a95ee7000c5735010fa894d9ae8220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e035dc67a939cbb438251f43da3f6493d11c2bace14242115d783838adc41ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e035dc67a939cbb438251f43da3f6493d11c2bace14242115d783838adc41ddd->enter($__internal_e035dc67a939cbb438251f43da3f6493d11c2bace14242115d783838adc41ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_87d9a58df80175e8473f96935679a25d31a95ee7000c5735010fa894d9ae8220->leave($__internal_87d9a58df80175e8473f96935679a25d31a95ee7000c5735010fa894d9ae8220_prof);

        
        $__internal_e035dc67a939cbb438251f43da3f6493d11c2bace14242115d783838adc41ddd->leave($__internal_e035dc67a939cbb438251f43da3f6493d11c2bace14242115d783838adc41ddd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
