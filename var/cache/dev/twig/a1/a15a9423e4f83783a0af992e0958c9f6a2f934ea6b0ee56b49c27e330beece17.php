<?php

/* @SebouCarnet/layout.html.twig */
class __TwigTemplate_a389c77d7f421c32f04824c6301c93008eaa2d5a8a5fb7e6a9aa1c230966d4f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@SebouCarnet/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_63678f37066086adbbe08e9d89c3b2b5f4414131e5e39b2f31dff6b496ddda19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63678f37066086adbbe08e9d89c3b2b5f4414131e5e39b2f31dff6b496ddda19->enter($__internal_63678f37066086adbbe08e9d89c3b2b5f4414131e5e39b2f31dff6b496ddda19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SebouCarnet/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63678f37066086adbbe08e9d89c3b2b5f4414131e5e39b2f31dff6b496ddda19->leave($__internal_63678f37066086adbbe08e9d89c3b2b5f4414131e5e39b2f31dff6b496ddda19_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f527f119eba0c9fe8184b1502ef52432ab991d1f6f2bacf1ee1576c07c002c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f527f119eba0c9fe8184b1502ef52432ab991d1f6f2bacf1ee1576c07c002c5c->enter($__internal_f527f119eba0c9fe8184b1502ef52432ab991d1f6f2bacf1ee1576c07c002c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@SebouCarnet/layout.html.twig"));

        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f527f119eba0c9fe8184b1502ef52432ab991d1f6f2bacf1ee1576c07c002c5c->leave($__internal_f527f119eba0c9fe8184b1502ef52432ab991d1f6f2bacf1ee1576c07c002c5c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e26974c4b280f9a06a141713959fbf49dd2c22bd590bd6a148675403f0f363cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e26974c4b280f9a06a141713959fbf49dd2c22bd590bd6a148675403f0f363cf->enter($__internal_e26974c4b280f9a06a141713959fbf49dd2c22bd590bd6a148675403f0f363cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@SebouCarnet/layout.html.twig"));

        // line 7
        echo "  <h1>patate</h1>
  ";
        // line 8
        $this->displayBlock('deco', $context, $blocks);
        
        $__internal_e26974c4b280f9a06a141713959fbf49dd2c22bd590bd6a148675403f0f363cf->leave($__internal_e26974c4b280f9a06a141713959fbf49dd2c22bd590bd6a148675403f0f363cf_prof);

    }

    public function block_deco($context, array $blocks = array())
    {
        $__internal_a8409660593febb60a106fdcce58f782295f5681ca7d405f49150487281910fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8409660593febb60a106fdcce58f782295f5681ca7d405f49150487281910fa->enter($__internal_a8409660593febb60a106fdcce58f782295f5681ca7d405f49150487281910fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@SebouCarnet/layout.html.twig"));

        // line 9
        echo "  ";
        
        $__internal_a8409660593febb60a106fdcce58f782295f5681ca7d405f49150487281910fa->leave($__internal_a8409660593febb60a106fdcce58f782295f5681ca7d405f49150487281910fa_prof);

    }

    public function getTemplateName()
    {
        return "@SebouCarnet/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 9,  61 => 8,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
{% block body %}
  <h1>patate</h1>
  {% block deco %}
  {% endblock %}
{% endblock %}
", "@SebouCarnet/layout.html.twig", "C:\\wamp\\www\\Appartoo\\src\\Sebou\\CarnetBundle\\Resources\\views\\layout.html.twig");
    }
}
