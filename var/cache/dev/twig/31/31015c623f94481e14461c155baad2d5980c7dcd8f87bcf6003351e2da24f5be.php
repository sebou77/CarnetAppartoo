<?php

/* SebouCarnetBundle::layout.html.twig */
class __TwigTemplate_89305d81987f89edf7b0f9f4c5958e41d9d80d16c6d662c703e7776dedf73dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "SebouCarnetBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lien' => array($this, 'block_lien'),
            'body' => array($this, 'block_body'),
            'deco' => array($this, 'block_deco'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfe0b1e1310960aa41c4e8f0c9ae776f8e2d4525f6d7cfb3ac72618754de63bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe0b1e1310960aa41c4e8f0c9ae776f8e2d4525f6d7cfb3ac72618754de63bc->enter($__internal_dfe0b1e1310960aa41c4e8f0c9ae776f8e2d4525f6d7cfb3ac72618754de63bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SebouCarnetBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfe0b1e1310960aa41c4e8f0c9ae776f8e2d4525f6d7cfb3ac72618754de63bc->leave($__internal_dfe0b1e1310960aa41c4e8f0c9ae776f8e2d4525f6d7cfb3ac72618754de63bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_31f54b78728127ab5f39249f311bf1b2694556a4d2bdb74a3ef7c22e32270dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f54b78728127ab5f39249f311bf1b2694556a4d2bdb74a3ef7c22e32270dcd->enter($__internal_31f54b78728127ab5f39249f311bf1b2694556a4d2bdb74a3ef7c22e32270dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle::layout.html.twig"));

        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_31f54b78728127ab5f39249f311bf1b2694556a4d2bdb74a3ef7c22e32270dcd->leave($__internal_31f54b78728127ab5f39249f311bf1b2694556a4d2bdb74a3ef7c22e32270dcd_prof);

    }

    // line 6
    public function block_lien($context, array $blocks = array())
    {
        $__internal_a43e1d1be948146e2214415d316dd8a16b61ac1162ad2448ec29c83673dc89f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43e1d1be948146e2214415d316dd8a16b61ac1162ad2448ec29c83673dc89f2->enter($__internal_a43e1d1be948146e2214415d316dd8a16b61ac1162ad2448ec29c83673dc89f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle::layout.html.twig"));

        // line 7
        echo "  ";
        $this->displayParentBlock("lien", $context, $blocks);
        echo "
";
        
        $__internal_a43e1d1be948146e2214415d316dd8a16b61ac1162ad2448ec29c83673dc89f2->leave($__internal_a43e1d1be948146e2214415d316dd8a16b61ac1162ad2448ec29c83673dc89f2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b457af1b4b41a07ecd808bf689d84309440663c30b7880ac801eaf28596c9e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b457af1b4b41a07ecd808bf689d84309440663c30b7880ac801eaf28596c9e2c->enter($__internal_b457af1b4b41a07ecd808bf689d84309440663c30b7880ac801eaf28596c9e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle::layout.html.twig"));

        // line 10
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
  ";
        // line 11
        $this->displayBlock('deco', $context, $blocks);
        
        $__internal_b457af1b4b41a07ecd808bf689d84309440663c30b7880ac801eaf28596c9e2c->leave($__internal_b457af1b4b41a07ecd808bf689d84309440663c30b7880ac801eaf28596c9e2c_prof);

    }

    public function block_deco($context, array $blocks = array())
    {
        $__internal_71e179c0a79e00e734455b6f12abebd87b9daf1df3dc3de95a11d220166ddada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e179c0a79e00e734455b6f12abebd87b9daf1df3dc3de95a11d220166ddada->enter($__internal_71e179c0a79e00e734455b6f12abebd87b9daf1df3dc3de95a11d220166ddada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle::layout.html.twig"));

        // line 12
        echo "  ";
        
        $__internal_71e179c0a79e00e734455b6f12abebd87b9daf1df3dc3de95a11d220166ddada->leave($__internal_71e179c0a79e00e734455b6f12abebd87b9daf1df3dc3de95a11d220166ddada_prof);

    }

    public function getTemplateName()
    {
        return "SebouCarnetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 12,  80 => 11,  75 => 10,  69 => 9,  59 => 7,  53 => 6,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block title %}
  {{ parent() }}
{% endblock %}
{% block lien %}
  {{ parent() }}
{% endblock %}
{% block body %}
    {{ parent() }}
  {% block deco %}
  {% endblock %}
{% endblock %}
", "SebouCarnetBundle::layout.html.twig", "C:\\wamp\\www\\Appartoo\\src\\Sebou\\CarnetBundle/Resources/views/layout.html.twig");
    }
}
