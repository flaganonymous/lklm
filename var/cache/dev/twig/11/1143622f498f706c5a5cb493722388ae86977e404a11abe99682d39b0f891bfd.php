<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_287182833a8a38e576972b8acf68114ebc3a19ef009e8ed688ced661eaae7fce extends Twig_Template
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
        $__internal_c9f73d456271b1e49476be02ea65296b359ecee11c75c724eee8d5d4c4aaee4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f73d456271b1e49476be02ea65296b359ecee11c75c724eee8d5d4c4aaee4a->enter($__internal_c9f73d456271b1e49476be02ea65296b359ecee11c75c724eee8d5d4c4aaee4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_8f5585ddb83496814922eb93a5e86b6b6c62440b6cf62ce5f37c6343ba457e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5585ddb83496814922eb93a5e86b6b6c62440b6cf62ce5f37c6343ba457e59->enter($__internal_8f5585ddb83496814922eb93a5e86b6b6c62440b6cf62ce5f37c6343ba457e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "   <iframe frameborder='0' height='465px' width='470px' scrolling='no' src='http://localhost:8888/WebGL/finished/' frameborder=\"0\" allowfullscreen></iframe>
<div class=\"columns small-12 medium-4\">
    <h1>Connexion</h1>
    ";
        // line 5
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })())) {
            // line 6
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        ";
        // line 9
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 9, $this->getSourceContext()); })())) {
            // line 10
            echo "            <input  name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        }
        // line 12
        echo "
        <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" />

        <label for=\"password\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <button class=\"button expanded\" type=\"submit\" id=\"_submit\" name=\"_submit\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
    </form>
    <div class=\"columns small-12\"><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">J'ai oublié mon mot de passe.</a></div>
</div>";
        
        $__internal_c9f73d456271b1e49476be02ea65296b359ecee11c75c724eee8d5d4c4aaee4a->leave($__internal_c9f73d456271b1e49476be02ea65296b359ecee11c75c724eee8d5d4c4aaee4a_prof);

        
        $__internal_8f5585ddb83496814922eb93a5e86b6b6c62440b6cf62ce5f37c6343ba457e59->leave($__internal_8f5585ddb83496814922eb93a5e86b6b6c62440b6cf62ce5f37c6343ba457e59_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  74 => 21,  70 => 20,  63 => 16,  58 => 14,  54 => 13,  51 => 12,  45 => 10,  43 => 9,  38 => 8,  32 => 6,  30 => 5,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
   <iframe frameborder='0' height='465px' width='470px' scrolling='no' src='http://localhost:8888/WebGL/finished/' frameborder=\"0\" allowfullscreen></iframe>
<div class=\"columns small-12 medium-4\">
    <h1>Connexion</h1>
    {% if error %}
        <div class=\"error\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        {% if csrf_token %}
            <input  name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}

        <label for=\"username\">{{ 'security.login.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

        <label for=\"password\">{{ 'security.login.password'|trans }}</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
        <button class=\"button expanded\" type=\"submit\" id=\"_submit\" name=\"_submit\">{{ 'security.login.submit'|trans }}</button>
    </form>
    <div class=\"columns small-12\"><a href=\"{{ path('fos_user_resetting_request') }}\">J'ai oublié mon mot de passe.</a></div>
</div>", "FOSUserBundle:Security:login_content.html.twig", "/Applications/MAMP/htdocs/pimms-web/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
