<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_cca55dc0b9709ef4880cab1652c14a8a9e9601915d7ae47b654c78bb70afaf52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc8fd85a7961e4be3e3715157f7bf653ce914e53946df9b6f3b713465f3825f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8fd85a7961e4be3e3715157f7bf653ce914e53946df9b6f3b713465f3825f4->enter($__internal_bc8fd85a7961e4be3e3715157f7bf653ce914e53946df9b6f3b713465f3825f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_df485bebaabc717940726ab58ffe9b490e4e8bc411c7ef909e70f56d67d7f24c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df485bebaabc717940726ab58ffe9b490e4e8bc411c7ef909e70f56d67d7f24c->enter($__internal_df485bebaabc717940726ab58ffe9b490e4e8bc411c7ef909e70f56d67d7f24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 162
        echo "</html>
";
        
        $__internal_bc8fd85a7961e4be3e3715157f7bf653ce914e53946df9b6f3b713465f3825f4->leave($__internal_bc8fd85a7961e4be3e3715157f7bf653ce914e53946df9b6f3b713465f3825f4_prof);

        
        $__internal_df485bebaabc717940726ab58ffe9b490e4e8bc411c7ef909e70f56d67d7f24c->leave($__internal_df485bebaabc717940726ab58ffe9b490e4e8bc411c7ef909e70f56d67d7f24c_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a1b436d53b06b3849de990aacc0fc6bd793c215426ce0982f4a506055e227e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b436d53b06b3849de990aacc0fc6bd793c215426ce0982f4a506055e227e5c->enter($__internal_a1b436d53b06b3849de990aacc0fc6bd793c215426ce0982f4a506055e227e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_3bd745fd5f8a10b7f738e7be7a67833dd803175013a94fa6ce570183b57b86e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd745fd5f8a10b7f738e7be7a67833dd803175013a94fa6ce570183b57b86e0->enter($__internal_3bd745fd5f8a10b7f738e7be7a67833dd803175013a94fa6ce570183b57b86e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_3bd745fd5f8a10b7f738e7be7a67833dd803175013a94fa6ce570183b57b86e0->leave($__internal_3bd745fd5f8a10b7f738e7be7a67833dd803175013a94fa6ce570183b57b86e0_prof);

        
        $__internal_a1b436d53b06b3849de990aacc0fc6bd793c215426ce0982f4a506055e227e5c->leave($__internal_a1b436d53b06b3849de990aacc0fc6bd793c215426ce0982f4a506055e227e5c_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_3e3e92827be8076bd33861c68ff24ff630606b10ba4ae91a3d06138273e58c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3e92827be8076bd33861c68ff24ff630606b10ba4ae91a3d06138273e58c90->enter($__internal_3e3e92827be8076bd33861c68ff24ff630606b10ba4ae91a3d06138273e58c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_b2e0c73b3284e59430430262fc6c3c7b84d49deac61cc3ddcc5baa3e0ed886b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e0c73b3284e59430430262fc6c3c7b84d49deac61cc3ddcc5baa3e0ed886b1->enter($__internal_b2e0c73b3284e59430430262fc6c3c7b84d49deac61cc3ddcc5baa3e0ed886b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_b2e0c73b3284e59430430262fc6c3c7b84d49deac61cc3ddcc5baa3e0ed886b1->leave($__internal_b2e0c73b3284e59430430262fc6c3c7b84d49deac61cc3ddcc5baa3e0ed886b1_prof);

        
        $__internal_3e3e92827be8076bd33861c68ff24ff630606b10ba4ae91a3d06138273e58c90->leave($__internal_3e3e92827be8076bd33861c68ff24ff630606b10ba4ae91a3d06138273e58c90_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_05c3c59a430f42f04d01b15c0fb9aa47de9d24cdc536d614c3b0a9d7f1a1707b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c3c59a430f42f04d01b15c0fb9aa47de9d24cdc536d614c3b0a9d7f1a1707b->enter($__internal_05c3c59a430f42f04d01b15c0fb9aa47de9d24cdc536d614c3b0a9d7f1a1707b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_1ec6f04b39b1a3d1dbfaafdf61387522878f0bfb8260fd8630ff3592a254b8c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec6f04b39b1a3d1dbfaafdf61387522878f0bfb8260fd8630ff3592a254b8c4->enter($__internal_1ec6f04b39b1a3d1dbfaafdf61387522878f0bfb8260fd8630ff3592a254b8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new Twig_Error_Runtime('Variable "favicon" does not exist.', 25, $this->getSourceContext()); })()), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new Twig_Error_Runtime('Variable "favicon" does not exist.', 25, $this->getSourceContext()); })()), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_1ec6f04b39b1a3d1dbfaafdf61387522878f0bfb8260fd8630ff3592a254b8c4->leave($__internal_1ec6f04b39b1a3d1dbfaafdf61387522878f0bfb8260fd8630ff3592a254b8c4_prof);

        
        $__internal_05c3c59a430f42f04d01b15c0fb9aa47de9d24cdc536d614c3b0a9d7f1a1707b->leave($__internal_05c3c59a430f42f04d01b15c0fb9aa47de9d24cdc536d614c3b0a9d7f1a1707b_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_0ed119a7e661e20375cb0847e74be49f1c9d7bbf7207d62a1f315de7b23745d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed119a7e661e20375cb0847e74be49f1c9d7bbf7207d62a1f315de7b23745d8->enter($__internal_0ed119a7e661e20375cb0847e74be49f1c9d7bbf7207d62a1f315de7b23745d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_2e220b87f06dec3121fae17ddf8bc1a154d315375ad5f02bc9f599b6c64f1662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e220b87f06dec3121fae17ddf8bc1a154d315375ad5f02bc9f599b6c64f1662->enter($__internal_2e220b87f06dec3121fae17ddf8bc1a154d315375ad5f02bc9f599b6c64f1662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_2e220b87f06dec3121fae17ddf8bc1a154d315375ad5f02bc9f599b6c64f1662->leave($__internal_2e220b87f06dec3121fae17ddf8bc1a154d315375ad5f02bc9f599b6c64f1662_prof);

        
        $__internal_0ed119a7e661e20375cb0847e74be49f1c9d7bbf7207d62a1f315de7b23745d8->leave($__internal_0ed119a7e661e20375cb0847e74be49f1c9d7bbf7207d62a1f315de7b23745d8_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_6e6f2c6565abb34a4087ef9a19fbbd2b462fbcff4b7fe267040c9a04e1f4f694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e6f2c6565abb34a4087ef9a19fbbd2b462fbcff4b7fe267040c9a04e1f4f694->enter($__internal_6e6f2c6565abb34a4087ef9a19fbbd2b462fbcff4b7fe267040c9a04e1f4f694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_421cde2a3e91234f8be6ba68eda70f184ce642b17ed5df07ca80242591ef0dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421cde2a3e91234f8be6ba68eda70f184ce642b17ed5df07ca80242591ef0dd0->enter($__internal_421cde2a3e91234f8be6ba68eda70f184ce642b17ed5df07ca80242591ef0dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_421cde2a3e91234f8be6ba68eda70f184ce642b17ed5df07ca80242591ef0dd0->leave($__internal_421cde2a3e91234f8be6ba68eda70f184ce642b17ed5df07ca80242591ef0dd0_prof);

        
        $__internal_6e6f2c6565abb34a4087ef9a19fbbd2b462fbcff4b7fe267040c9a04e1f4f694->leave($__internal_6e6f2c6565abb34a4087ef9a19fbbd2b462fbcff4b7fe267040c9a04e1f4f694_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d6961278f2b2986c20b3419afb4142271fbdf34a2eb6b59ca51714433e72b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d6961278f2b2986c20b3419afb4142271fbdf34a2eb6b59ca51714433e72b9a->enter($__internal_6d6961278f2b2986c20b3419afb4142271fbdf34a2eb6b59ca51714433e72b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_faa77be0e4f7f2b907794085b5481549882301f2c4322098d25aa367075da301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa77be0e4f7f2b907794085b5481549882301f2c4322098d25aa367075da301->enter($__internal_faa77be0e4f7f2b907794085b5481549882301f2c4322098d25aa367075da301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->getSourceContext()); })()), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 153
        echo "        </div>

        ";
        // line 155
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 156
        echo "
        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 158
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "    </body>
    ";
        
        $__internal_faa77be0e4f7f2b907794085b5481549882301f2c4322098d25aa367075da301->leave($__internal_faa77be0e4f7f2b907794085b5481549882301f2c4322098d25aa367075da301_prof);

        
        $__internal_6d6961278f2b2986c20b3419afb4142271fbdf34a2eb6b59ca51714433e72b9a->leave($__internal_6d6961278f2b2986c20b3419afb4142271fbdf34a2eb6b59ca51714433e72b9a_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_6cd83a11cd8bba1ebf22c3b32dcd326a82cb6aba2aa0143c614cf1d3b6172cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd83a11cd8bba1ebf22c3b32dcd326a82cb6aba2aa0143c614cf1d3b6172cbe->enter($__internal_6cd83a11cd8bba1ebf22c3b32dcd326a82cb6aba2aa0143c614cf1d3b6172cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_e793847bb826fad7536643f5f790ecd80b93a988b48cfe575beafc3473a620c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e793847bb826fad7536643f5f790ecd80b93a988b48cfe575beafc3473a620c6->enter($__internal_e793847bb826fad7536643f5f790ecd80b93a988b48cfe575beafc3473a620c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_e793847bb826fad7536643f5f790ecd80b93a988b48cfe575beafc3473a620c6->leave($__internal_e793847bb826fad7536643f5f790ecd80b93a988b48cfe575beafc3473a620c6_prof);

        
        $__internal_6cd83a11cd8bba1ebf22c3b32dcd326a82cb6aba2aa0143c614cf1d3b6172cbe->leave($__internal_6cd83a11cd8bba1ebf22c3b32dcd326a82cb6aba2aa0143c614cf1d3b6172cbe_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_ff0780364f5c74b2f8b555f327336d58984dbfcbf2820310a61ab2f7d93f8f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff0780364f5c74b2f8b555f327336d58984dbfcbf2820310a61ab2f7d93f8f51->enter($__internal_ff0780364f5c74b2f8b555f327336d58984dbfcbf2820310a61ab2f7d93f8f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_a0d039161c685fbef726ff89c1c1cccfa381bce597ad77a576c8b31bd8b2930d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d039161c685fbef726ff89c1c1cccfa381bce597ad77a576c8b31bd8b2930d->enter($__internal_a0d039161c685fbef726ff89c1c1cccfa381bce597ad77a576c8b31bd8b2930d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_a0d039161c685fbef726ff89c1c1cccfa381bce597ad77a576c8b31bd8b2930d->leave($__internal_a0d039161c685fbef726ff89c1c1cccfa381bce597ad77a576c8b31bd8b2930d_prof);

        
        $__internal_ff0780364f5c74b2f8b555f327336d58984dbfcbf2820310a61ab2f7d93f8f51->leave($__internal_ff0780364f5c74b2f8b555f327336d58984dbfcbf2820310a61ab2f7d93f8f51_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_9378c35323fc5f48603d15bb9847d609d7d95a9cc855cc2f905dc40cf96d8d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9378c35323fc5f48603d15bb9847d609d7d95a9cc855cc2f905dc40cf96d8d42->enter($__internal_9378c35323fc5f48603d15bb9847d609d7d95a9cc855cc2f905dc40cf96d8d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_f2b8fdc3330c6a5bf78d597beb7ef6b3b72d5d3289a8ec519ee325bd9d0858f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b8fdc3330c6a5bf78d597beb7ef6b3b72d5d3289a8ec519ee325bd9d0858f2->enter($__internal_f2b8fdc3330c6a5bf78d597beb7ef6b3b72d5d3289a8ec519ee325bd9d0858f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 110
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 113
        $this->displayBlock('sidebar', $context, $blocks);
        // line 124
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 127
        $this->displayBlock('content', $context, $blocks);
        // line 151
        echo "            </div>
        ";
        
        $__internal_f2b8fdc3330c6a5bf78d597beb7ef6b3b72d5d3289a8ec519ee325bd9d0858f2->leave($__internal_f2b8fdc3330c6a5bf78d597beb7ef6b3b72d5d3289a8ec519ee325bd9d0858f2_prof);

        
        $__internal_9378c35323fc5f48603d15bb9847d609d7d95a9cc855cc2f905dc40cf96d8d42->leave($__internal_9378c35323fc5f48603d15bb9847d609d7d95a9cc855cc2f905dc40cf96d8d42_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_aef1a38a92715aadb619cec8aba08ec226c3fb7cb09e66c2806a69bc1257d4a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef1a38a92715aadb619cec8aba08ec226c3fb7cb09e66c2806a69bc1257d4a2->enter($__internal_aef1a38a92715aadb619cec8aba08ec226c3fb7cb09e66c2806a69bc1257d4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_72b9e6d766d44937f89a9420d3b04ced2a94a89e3f1391a1934af7866bf5715c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b9e6d766d44937f89a9420d3b04ced2a94a89e3f1391a1934af7866bf5715c->enter($__internal_72b9e6d766d44937f89a9420d3b04ced2a94a89e3f1391a1934af7866bf5715c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 107
        echo "                    </div>
                </nav>
            ";
        
        $__internal_72b9e6d766d44937f89a9420d3b04ced2a94a89e3f1391a1934af7866bf5715c->leave($__internal_72b9e6d766d44937f89a9420d3b04ced2a94a89e3f1391a1934af7866bf5715c_prof);

        
        $__internal_aef1a38a92715aadb619cec8aba08ec226c3fb7cb09e66c2806a69bc1257d4a2->leave($__internal_aef1a38a92715aadb619cec8aba08ec226c3fb7cb09e66c2806a69bc1257d4a2_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_b2d06a4d1049c522c5417368b1441e52fec248af1052e469f8f5a41023e0f800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d06a4d1049c522c5417368b1441e52fec248af1052e469f8f5a41023e0f800->enter($__internal_b2d06a4d1049c522c5417368b1441e52fec248af1052e469f8f5a41023e0f800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_1dba028fa084805b3da79971efa035bff21a3555e691bd713fbcdf9bbe02cf4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dba028fa084805b3da79971efa035bff21a3555e691bd713fbcdf9bbe02cf4b->enter($__internal_1dba028fa084805b3da79971efa035bff21a3555e691bd713fbcdf9bbe02cf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_1dba028fa084805b3da79971efa035bff21a3555e691bd713fbcdf9bbe02cf4b->leave($__internal_1dba028fa084805b3da79971efa035bff21a3555e691bd713fbcdf9bbe02cf4b_prof);

        
        $__internal_b2d06a4d1049c522c5417368b1441e52fec248af1052e469f8f5a41023e0f800->leave($__internal_b2d06a4d1049c522c5417368b1441e52fec248af1052e469f8f5a41023e0f800_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_634d58d5c5fa280eb882213087a69d35d8714371db9892e3d1fa29fe85305822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634d58d5c5fa280eb882213087a69d35d8714371db9892e3d1fa29fe85305822->enter($__internal_634d58d5c5fa280eb882213087a69d35d8714371db9892e3d1fa29fe85305822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_a98031f9ffb3f6f5ddf30a078ade35217e31a1095c62186eb73cdee31e764d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98031f9ffb3f6f5ddf30a078ade35217e31a1095c62186eb73cdee31e764d2e->enter($__internal_a98031f9ffb3f6f5ddf30a078ade35217e31a1095c62186eb73cdee31e764d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 104
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_a98031f9ffb3f6f5ddf30a078ade35217e31a1095c62186eb73cdee31e764d2e->leave($__internal_a98031f9ffb3f6f5ddf30a078ade35217e31a1095c62186eb73cdee31e764d2e_prof);

        
        $__internal_634d58d5c5fa280eb882213087a69d35d8714371db9892e3d1fa29fe85305822->leave($__internal_634d58d5c5fa280eb882213087a69d35d8714371db9892e3d1fa29fe85305822_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_39f0bf18a30605ede85a2f70091b554fdcfefde97d46d8758ce2b4d47f17b4d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f0bf18a30605ede85a2f70091b554fdcfefde97d46d8758ce2b4d47f17b4d5->enter($__internal_39f0bf18a30605ede85a2f70091b554fdcfefde97d46d8758ce2b4d47f17b4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_e03da13f2556c36c806531b057a26385c3618acaa6ca1acd50852e9ad90e582f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03da13f2556c36c806531b057a26385c3618acaa6ca1acd50852e9ad90e582f->enter($__internal_e03da13f2556c36c806531b057a26385c3618acaa6ca1acd50852e9ad90e582f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
(isset($context["_logout_path"]) || array_key_exists("_logout_path", $context) ? $context["_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_path" does not exist.', 82, $this->getSourceContext()); })())) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 100
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 103
        echo "                                ";
        
        $__internal_e03da13f2556c36c806531b057a26385c3618acaa6ca1acd50852e9ad90e582f->leave($__internal_e03da13f2556c36c806531b057a26385c3618acaa6ca1acd50852e9ad90e582f_prof);

        
        $__internal_39f0bf18a30605ede85a2f70091b554fdcfefde97d46d8758ce2b4d47f17b4d5->leave($__internal_39f0bf18a30605ede85a2f70091b554fdcfefde97d46d8758ce2b4d47f17b4d5_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_0a619850b5cbf2d8f0ca5de14cec8d296741d57099e74c99febf75aab630b927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a619850b5cbf2d8f0ca5de14cec8d296741d57099e74c99febf75aab630b927->enter($__internal_0a619850b5cbf2d8f0ca5de14cec8d296741d57099e74c99febf75aab630b927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_e646f029dbb48073a701253df349ae4de2a1a21968fdc283f9dfa9cc6046cbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e646f029dbb48073a701253df349ae4de2a1a21968fdc283f9dfa9cc6046cbc0->enter($__internal_e646f029dbb48073a701253df349ae4de2a1a21968fdc283f9dfa9cc6046cbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["_logout_path"]) || array_key_exists("_logout_path", $context) ? $context["_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_path" does not exist.', 97, $this->getSourceContext()); })()), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        
        $__internal_e646f029dbb48073a701253df349ae4de2a1a21968fdc283f9dfa9cc6046cbc0->leave($__internal_e646f029dbb48073a701253df349ae4de2a1a21968fdc283f9dfa9cc6046cbc0_prof);

        
        $__internal_0a619850b5cbf2d8f0ca5de14cec8d296741d57099e74c99febf75aab630b927->leave($__internal_0a619850b5cbf2d8f0ca5de14cec8d296741d57099e74c99febf75aab630b927_prof);

    }

    // line 113
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5219af596103796b264306b17ffe20838e4d1b91d7fed8dcaec11fe29a9bd2df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5219af596103796b264306b17ffe20838e4d1b91d7fed8dcaec11fe29a9bd2df->enter($__internal_5219af596103796b264306b17ffe20838e4d1b91d7fed8dcaec11fe29a9bd2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_7ef017149a58bab1df64718d95cc8e13afea37c95b55e3715ff8929644244ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef017149a58bab1df64718d95cc8e13afea37c95b55e3715ff8929644244ff4->enter($__internal_7ef017149a58bab1df64718d95cc8e13afea37c95b55e3715ff8929644244ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 114
        echo "                <section class=\"sidebar\">
                    ";
        // line 115
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 122
        echo "                </section>
            ";
        
        $__internal_7ef017149a58bab1df64718d95cc8e13afea37c95b55e3715ff8929644244ff4->leave($__internal_7ef017149a58bab1df64718d95cc8e13afea37c95b55e3715ff8929644244ff4_prof);

        
        $__internal_5219af596103796b264306b17ffe20838e4d1b91d7fed8dcaec11fe29a9bd2df->leave($__internal_5219af596103796b264306b17ffe20838e4d1b91d7fed8dcaec11fe29a9bd2df_prof);

    }

    // line 115
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_a8ce16337aa810a4c618e3d23c0f6e9db4d8f4cea815c2ed444f29fbc77df061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ce16337aa810a4c618e3d23c0f6e9db4d8f4cea815c2ed444f29fbc77df061->enter($__internal_a8ce16337aa810a4c618e3d23c0f6e9db4d8f4cea815c2ed444f29fbc77df061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_acab6b26fc86d301a726bd084f77963fc218622a39a0fde9020d48ce0bc64492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acab6b26fc86d301a726bd084f77963fc218622a39a0fde9020d48ce0bc64492->enter($__internal_acab6b26fc86d301a726bd084f77963fc218622a39a0fde9020d48ce0bc64492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 116
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 117
array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 117, $this->getSourceContext()); })()), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 120
        echo "
                    ";
        
        $__internal_acab6b26fc86d301a726bd084f77963fc218622a39a0fde9020d48ce0bc64492->leave($__internal_acab6b26fc86d301a726bd084f77963fc218622a39a0fde9020d48ce0bc64492_prof);

        
        $__internal_a8ce16337aa810a4c618e3d23c0f6e9db4d8f4cea815c2ed444f29fbc77df061->leave($__internal_a8ce16337aa810a4c618e3d23c0f6e9db4d8f4cea815c2ed444f29fbc77df061_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_3b3bb1775f9f2082058450ea38dbba3d25b0166c661be5ea293754e50595aff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3bb1775f9f2082058450ea38dbba3d25b0166c661be5ea293754e50595aff7->enter($__internal_3b3bb1775f9f2082058450ea38dbba3d25b0166c661be5ea293754e50595aff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9b7d2ba464ef659c7e4b4da13eaa18935f8950a2402e380da713328c49676249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7d2ba464ef659c7e4b4da13eaa18935f8950a2402e380da713328c49676249->enter($__internal_9b7d2ba464ef659c7e4b4da13eaa18935f8950a2402e380da713328c49676249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 128
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 131
        echo "
                <section class=\"content-header\">
                ";
        // line 133
        $this->displayBlock('content_header', $context, $blocks);
        // line 136
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 145
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 148
        $this->displayBlock('main', $context, $blocks);
        // line 149
        echo "                </section>
            ";
        
        $__internal_9b7d2ba464ef659c7e4b4da13eaa18935f8950a2402e380da713328c49676249->leave($__internal_9b7d2ba464ef659c7e4b4da13eaa18935f8950a2402e380da713328c49676249_prof);

        
        $__internal_3b3bb1775f9f2082058450ea38dbba3d25b0166c661be5ea293754e50595aff7->leave($__internal_3b3bb1775f9f2082058450ea38dbba3d25b0166c661be5ea293754e50595aff7_prof);

    }

    // line 128
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_258bc0982d4489fa73867f2d4d98dcfbaae057bf57ed7f2d07470770c2c31909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_258bc0982d4489fa73867f2d4d98dcfbaae057bf57ed7f2d07470770c2c31909->enter($__internal_258bc0982d4489fa73867f2d4d98dcfbaae057bf57ed7f2d07470770c2c31909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_873f3f354db3f101e9c945993ac80b3b25eee3d0e538265d122cd01327ba5d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873f3f354db3f101e9c945993ac80b3b25eee3d0e538265d122cd01327ba5d8d->enter($__internal_873f3f354db3f101e9c945993ac80b3b25eee3d0e538265d122cd01327ba5d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 129
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 129, $this->getSourceContext()); })()), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_873f3f354db3f101e9c945993ac80b3b25eee3d0e538265d122cd01327ba5d8d->leave($__internal_873f3f354db3f101e9c945993ac80b3b25eee3d0e538265d122cd01327ba5d8d_prof);

        
        $__internal_258bc0982d4489fa73867f2d4d98dcfbaae057bf57ed7f2d07470770c2c31909->leave($__internal_258bc0982d4489fa73867f2d4d98dcfbaae057bf57ed7f2d07470770c2c31909_prof);

    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_a773592be6136493ffb0fe65fc3174a6cca00e2e44f3b282fdbc7982aebd5372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a773592be6136493ffb0fe65fc3174a6cca00e2e44f3b282fdbc7982aebd5372->enter($__internal_a773592be6136493ffb0fe65fc3174a6cca00e2e44f3b282fdbc7982aebd5372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_f3b7288948f6b060a6a7671e02f3eafdc3cc5ff1b1b9084d76e3fb703f965369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b7288948f6b060a6a7671e02f3eafdc3cc5ff1b1b9084d76e3fb703f965369->enter($__internal_f3b7288948f6b060a6a7671e02f3eafdc3cc5ff1b1b9084d76e3fb703f965369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 134
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_f3b7288948f6b060a6a7671e02f3eafdc3cc5ff1b1b9084d76e3fb703f965369->leave($__internal_f3b7288948f6b060a6a7671e02f3eafdc3cc5ff1b1b9084d76e3fb703f965369_prof);

        
        $__internal_a773592be6136493ffb0fe65fc3174a6cca00e2e44f3b282fdbc7982aebd5372->leave($__internal_a773592be6136493ffb0fe65fc3174a6cca00e2e44f3b282fdbc7982aebd5372_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_ccb440573e837a29a16a00a888ebbc98ec19d0f52e412661c11ca772c848f63f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb440573e837a29a16a00a888ebbc98ec19d0f52e412661c11ca772c848f63f->enter($__internal_ccb440573e837a29a16a00a888ebbc98ec19d0f52e412661c11ca772c848f63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_b2da4e78b1449e195bb4c94b5f1525062b3e59a97bddb42edf0b1b35215a00f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2da4e78b1449e195bb4c94b5f1525062b3e59a97bddb42edf0b1b35215a00f0->enter($__internal_b2da4e78b1449e195bb4c94b5f1525062b3e59a97bddb42edf0b1b35215a00f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_b2da4e78b1449e195bb4c94b5f1525062b3e59a97bddb42edf0b1b35215a00f0->leave($__internal_b2da4e78b1449e195bb4c94b5f1525062b3e59a97bddb42edf0b1b35215a00f0_prof);

        
        $__internal_ccb440573e837a29a16a00a888ebbc98ec19d0f52e412661c11ca772c848f63f->leave($__internal_ccb440573e837a29a16a00a888ebbc98ec19d0f52e412661c11ca772c848f63f_prof);

    }

    // line 136
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_13bc555a663fb3a3d2328896bf89488522c09421bdcc9551c7f7c0d81e25b130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13bc555a663fb3a3d2328896bf89488522c09421bdcc9551c7f7c0d81e25b130->enter($__internal_13bc555a663fb3a3d2328896bf89488522c09421bdcc9551c7f7c0d81e25b130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_56053837bec1b5901a73cebe1ecb4951eb13fb896af867c5da2b978a2cc4dc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56053837bec1b5901a73cebe1ecb4951eb13fb896af867c5da2b978a2cc4dc3e->enter($__internal_56053837bec1b5901a73cebe1ecb4951eb13fb896af867c5da2b978a2cc4dc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 137
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 137, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 137, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 138
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 140, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 140, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 144
        echo "                ";
        
        $__internal_56053837bec1b5901a73cebe1ecb4951eb13fb896af867c5da2b978a2cc4dc3e->leave($__internal_56053837bec1b5901a73cebe1ecb4951eb13fb896af867c5da2b978a2cc4dc3e_prof);

        
        $__internal_13bc555a663fb3a3d2328896bf89488522c09421bdcc9551c7f7c0d81e25b130->leave($__internal_13bc555a663fb3a3d2328896bf89488522c09421bdcc9551c7f7c0d81e25b130_prof);

    }

    // line 148
    public function block_main($context, array $blocks = array())
    {
        $__internal_95e473fd801d2ebff8fe8c50bae8035aac0647760db3f3c79b921cc741270c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e473fd801d2ebff8fe8c50bae8035aac0647760db3f3c79b921cc741270c6e->enter($__internal_95e473fd801d2ebff8fe8c50bae8035aac0647760db3f3c79b921cc741270c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_41d35fcc40362551ea4eeef835b6224144f85853328dc078049d5b0c2964fd18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d35fcc40362551ea4eeef835b6224144f85853328dc078049d5b0c2964fd18->enter($__internal_41d35fcc40362551ea4eeef835b6224144f85853328dc078049d5b0c2964fd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_41d35fcc40362551ea4eeef835b6224144f85853328dc078049d5b0c2964fd18->leave($__internal_41d35fcc40362551ea4eeef835b6224144f85853328dc078049d5b0c2964fd18_prof);

        
        $__internal_95e473fd801d2ebff8fe8c50bae8035aac0647760db3f3c79b921cc741270c6e->leave($__internal_95e473fd801d2ebff8fe8c50bae8035aac0647760db3f3c79b921cc741270c6e_prof);

    }

    // line 155
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_45861a6eff09463472d241cd20d6d02061c0ca242cbed26269120c354b743e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45861a6eff09463472d241cd20d6d02061c0ca242cbed26269120c354b743e45->enter($__internal_45861a6eff09463472d241cd20d6d02061c0ca242cbed26269120c354b743e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_ae4c637bf8fcba3d3f8ceccb5ba86f07c9b57db8e2a831d26121c22076c35016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4c637bf8fcba3d3f8ceccb5ba86f07c9b57db8e2a831d26121c22076c35016->enter($__internal_ae4c637bf8fcba3d3f8ceccb5ba86f07c9b57db8e2a831d26121c22076c35016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_ae4c637bf8fcba3d3f8ceccb5ba86f07c9b57db8e2a831d26121c22076c35016->leave($__internal_ae4c637bf8fcba3d3f8ceccb5ba86f07c9b57db8e2a831d26121c22076c35016_prof);

        
        $__internal_45861a6eff09463472d241cd20d6d02061c0ca242cbed26269120c354b743e45->leave($__internal_45861a6eff09463472d241cd20d6d02061c0ca242cbed26269120c354b743e45_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  775 => 155,  758 => 148,  748 => 144,  741 => 140,  737 => 138,  734 => 137,  725 => 136,  696 => 134,  687 => 133,  674 => 129,  665 => 128,  654 => 149,  652 => 148,  647 => 145,  644 => 136,  642 => 133,  638 => 131,  635 => 128,  626 => 127,  615 => 120,  613 => 117,  611 => 116,  602 => 115,  591 => 122,  589 => 115,  586 => 114,  577 => 113,  562 => 97,  559 => 96,  550 => 95,  540 => 103,  535 => 100,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 104,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 107,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 151,  370 => 127,  365 => 124,  363 => 113,  358 => 110,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 160,  291 => 158,  287 => 157,  284 => 156,  282 => 155,  278 => 153,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 162,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "EasyAdminBundle:default:layout.html.twig", "/Applications/MAMP/htdocs/pimms-web/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
