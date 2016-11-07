<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_ae3ffff557e26ff32d432a3ea390fa27ad8c38b70a437b7bf491aa982a82b688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_1a21971aecde54d1dd944dfde90ccb0e07ee59572d3388b2c981e3aeb8d7806b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a21971aecde54d1dd944dfde90ccb0e07ee59572d3388b2c981e3aeb8d7806b->enter($__internal_1a21971aecde54d1dd944dfde90ccb0e07ee59572d3388b2c981e3aeb8d7806b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a21971aecde54d1dd944dfde90ccb0e07ee59572d3388b2c981e3aeb8d7806b->leave($__internal_1a21971aecde54d1dd944dfde90ccb0e07ee59572d3388b2c981e3aeb8d7806b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10b6c57362d1f908d79dd373b35d11aab38560453bdc8a77f05a36702027e344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b6c57362d1f908d79dd373b35d11aab38560453bdc8a77f05a36702027e344->enter($__internal_10b6c57362d1f908d79dd373b35d11aab38560453bdc8a77f05a36702027e344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_10b6c57362d1f908d79dd373b35d11aab38560453bdc8a77f05a36702027e344->leave($__internal_10b6c57362d1f908d79dd373b35d11aab38560453bdc8a77f05a36702027e344_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
