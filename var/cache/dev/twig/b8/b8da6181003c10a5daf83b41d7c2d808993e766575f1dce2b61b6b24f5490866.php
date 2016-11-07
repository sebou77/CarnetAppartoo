<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_46d01504b7dfc44136e8b2bba6308db87077e5159591114008a35aa563c2dcef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_cdb4ed50a326f2ed5adb8d9b359348cd9d3a6f10169082a7d12b51b9245ba2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb4ed50a326f2ed5adb8d9b359348cd9d3a6f10169082a7d12b51b9245ba2ee->enter($__internal_cdb4ed50a326f2ed5adb8d9b359348cd9d3a6f10169082a7d12b51b9245ba2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdb4ed50a326f2ed5adb8d9b359348cd9d3a6f10169082a7d12b51b9245ba2ee->leave($__internal_cdb4ed50a326f2ed5adb8d9b359348cd9d3a6f10169082a7d12b51b9245ba2ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2aaf342553aacc6ac8d36865b08b844f5e84cfa81579f4231a40e3f92e0cdd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2aaf342553aacc6ac8d36865b08b844f5e84cfa81579f4231a40e3f92e0cdd7->enter($__internal_a2aaf342553aacc6ac8d36865b08b844f5e84cfa81579f4231a40e3f92e0cdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a2aaf342553aacc6ac8d36865b08b844f5e84cfa81579f4231a40e3f92e0cdd7->leave($__internal_a2aaf342553aacc6ac8d36865b08b844f5e84cfa81579f4231a40e3f92e0cdd7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
