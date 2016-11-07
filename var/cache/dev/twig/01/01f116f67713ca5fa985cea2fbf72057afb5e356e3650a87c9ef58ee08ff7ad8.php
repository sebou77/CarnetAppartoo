<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_6183971dd83e88695cdd432653e9f05ce823baf34eb3de2bc815e666b043defe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_a2049d5da722cb770349a4d558b391e7513b795c9ee0a2f697c4090fc00adb9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2049d5da722cb770349a4d558b391e7513b795c9ee0a2f697c4090fc00adb9c->enter($__internal_a2049d5da722cb770349a4d558b391e7513b795c9ee0a2f697c4090fc00adb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2049d5da722cb770349a4d558b391e7513b795c9ee0a2f697c4090fc00adb9c->leave($__internal_a2049d5da722cb770349a4d558b391e7513b795c9ee0a2f697c4090fc00adb9c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f897dd21c6f610cadb92096dd8f7f967af931e8e532a315f278fa058c3e5f23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f897dd21c6f610cadb92096dd8f7f967af931e8e532a315f278fa058c3e5f23e->enter($__internal_f897dd21c6f610cadb92096dd8f7f967af931e8e532a315f278fa058c3e5f23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_f897dd21c6f610cadb92096dd8f7f967af931e8e532a315f278fa058c3e5f23e->leave($__internal_f897dd21c6f610cadb92096dd8f7f967af931e8e532a315f278fa058c3e5f23e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
