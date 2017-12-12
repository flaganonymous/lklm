<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8b6fe15384ade61d38fa5501f905b03157d544dbfcf1abe357576e3ad15cbb56 extends Twig_Template
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
        $__internal_3f21f60e7fd136aecb5f336cfa71d0b78d4cb50b5190ca3d377992170e6e0509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f21f60e7fd136aecb5f336cfa71d0b78d4cb50b5190ca3d377992170e6e0509->enter($__internal_3f21f60e7fd136aecb5f336cfa71d0b78d4cb50b5190ca3d377992170e6e0509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_d8952d472a32bac49d0a91eb378dfb553cd5a086e5320413026a4a5e4456512c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8952d472a32bac49d0a91eb378dfb553cd5a086e5320413026a4a5e4456512c->enter($__internal_d8952d472a32bac49d0a91eb378dfb553cd5a086e5320413026a4a5e4456512c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3f21f60e7fd136aecb5f336cfa71d0b78d4cb50b5190ca3d377992170e6e0509->leave($__internal_3f21f60e7fd136aecb5f336cfa71d0b78d4cb50b5190ca3d377992170e6e0509_prof);

        
        $__internal_d8952d472a32bac49d0a91eb378dfb553cd5a086e5320413026a4a5e4456512c->leave($__internal_d8952d472a32bac49d0a91eb378dfb553cd5a086e5320413026a4a5e4456512c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/pimms-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
