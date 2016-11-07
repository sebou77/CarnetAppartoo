<?php

/* @SebouUser/Contact/index.html.twig */
class __TwigTemplate_a30883a26d8533e5f713cd911f52bbdd3435263712c1dbaf284ff8e3db98988f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SebouCarnetBundle::layout.html.twig", "@SebouUser/Contact/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'deco' => array($this, 'block_deco'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SebouCarnetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07c8577a77a5471a375f09e5a833f48e503a84c50d006a877b7bda5bb8ec2082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c8577a77a5471a375f09e5a833f48e503a84c50d006a877b7bda5bb8ec2082->enter($__internal_07c8577a77a5471a375f09e5a833f48e503a84c50d006a877b7bda5bb8ec2082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SebouUser/Contact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07c8577a77a5471a375f09e5a833f48e503a84c50d006a877b7bda5bb8ec2082->leave($__internal_07c8577a77a5471a375f09e5a833f48e503a84c50d006a877b7bda5bb8ec2082_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cead9d01bdfe8f4c7f3dc209cc8433985975a2d0b7cb41648b2715fd37e1c0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cead9d01bdfe8f4c7f3dc209cc8433985975a2d0b7cb41648b2715fd37e1c0b6->enter($__internal_cead9d01bdfe8f4c7f3dc209cc8433985975a2d0b7cb41648b2715fd37e1c0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@SebouUser/Contact/index.html.twig"));

        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cead9d01bdfe8f4c7f3dc209cc8433985975a2d0b7cb41648b2715fd37e1c0b6->leave($__internal_cead9d01bdfe8f4c7f3dc209cc8433985975a2d0b7cb41648b2715fd37e1c0b6_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2208e93e522a69bda8d6452f770b37357a181291979fc148bac3641955856b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2208e93e522a69bda8d6452f770b37357a181291979fc148bac3641955856b3a->enter($__internal_2208e93e522a69bda8d6452f770b37357a181291979fc148bac3641955856b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@SebouUser/Contact/index.html.twig"));

        // line 7
        echo "  ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_2208e93e522a69bda8d6452f770b37357a181291979fc148bac3641955856b3a->leave($__internal_2208e93e522a69bda8d6452f770b37357a181291979fc148bac3641955856b3a_prof);

    }

    // line 9
    public function block_deco($context, array $blocks = array())
    {
        $__internal_fe10aa24586b90f743bf787ebdc853bf58c4e37f60e10d67bb976cb050e4346f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe10aa24586b90f743bf787ebdc853bf58c4e37f60e10d67bb976cb050e4346f->enter($__internal_fe10aa24586b90f743bf787ebdc853bf58c4e37f60e10d67bb976cb050e4346f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@SebouUser/Contact/index.html.twig"));

        // line 10
        echo "<div>
  ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
";
        
        $__internal_fe10aa24586b90f743bf787ebdc853bf58c4e37f60e10d67bb976cb050e4346f->leave($__internal_fe10aa24586b90f743bf787ebdc853bf58c4e37f60e10d67bb976cb050e4346f_prof);

    }

    public function getTemplateName()
    {
        return "@SebouUser/Contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SebouCarnetBundle::layout.html.twig\" %}

{% block title %}
  {{ parent() }}
{% endblock %}
{% block body %}
  {{ parent()}}
{% endblock %}
{% block deco %}
<div>
  {{form(form)}}
</div>
{% endblock %}
", "@SebouUser/Contact/index.html.twig", "C:\\wamp\\www\\Appartoo\\src\\Sebou\\UserBundle\\Resources\\views\\Contact\\index.html.twig");
    }
}
