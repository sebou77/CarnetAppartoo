<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_42f0d560d43f322c68bac344fad2cf1bbccf9840a7148c84da670b7851d55a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4952aa5b659473a850e97fd52d66c9dfbaa00b8f0e16a1750607ea803b2f57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4952aa5b659473a850e97fd52d66c9dfbaa00b8f0e16a1750607ea803b2f57b->enter($__internal_e4952aa5b659473a850e97fd52d66c9dfbaa00b8f0e16a1750607ea803b2f57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4952aa5b659473a850e97fd52d66c9dfbaa00b8f0e16a1750607ea803b2f57b->leave($__internal_e4952aa5b659473a850e97fd52d66c9dfbaa00b8f0e16a1750607ea803b2f57b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91d9bcb68aed75a5b1a682bbaec96ffd71fe7a623e17e781f32e8a5b6132c30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d9bcb68aed75a5b1a682bbaec96ffd71fe7a623e17e781f32e8a5b6132c30a->enter($__internal_91d9bcb68aed75a5b1a682bbaec96ffd71fe7a623e17e781f32e8a5b6132c30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/check_email.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_91d9bcb68aed75a5b1a682bbaec96ffd71fe7a623e17e781f32e8a5b6132c30a->leave($__internal_91d9bcb68aed75a5b1a682bbaec96ffd71fe7a623e17e781f32e8a5b6132c30a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
