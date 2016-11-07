<?php

/* @SebouCarnet/Contact/listContact.html.twig */
class __TwigTemplate_329a22aac855bc2c8f0d67d0cc85a56eb39b2950743fe65fe29410647aee2d70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SebouCarnetBundle::layout.html.twig", "@SebouCarnet/Contact/listContact.html.twig", 1);
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
        $__internal_7f048a8fc236a39dbfc61bb6c05db6181f61967a2f49e0c8ceebc135f788bfd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f048a8fc236a39dbfc61bb6c05db6181f61967a2f49e0c8ceebc135f788bfd2->enter($__internal_7f048a8fc236a39dbfc61bb6c05db6181f61967a2f49e0c8ceebc135f788bfd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SebouCarnet/Contact/listContact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f048a8fc236a39dbfc61bb6c05db6181f61967a2f49e0c8ceebc135f788bfd2->leave($__internal_7f048a8fc236a39dbfc61bb6c05db6181f61967a2f49e0c8ceebc135f788bfd2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3ecf3c92cbdc13a9dd1bfb71fe51d4e8512a700fb9e48e00cc7036d42e85163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ecf3c92cbdc13a9dd1bfb71fe51d4e8512a700fb9e48e00cc7036d42e85163->enter($__internal_e3ecf3c92cbdc13a9dd1bfb71fe51d4e8512a700fb9e48e00cc7036d42e85163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@SebouCarnet/Contact/listContact.html.twig"));

        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e3ecf3c92cbdc13a9dd1bfb71fe51d4e8512a700fb9e48e00cc7036d42e85163->leave($__internal_e3ecf3c92cbdc13a9dd1bfb71fe51d4e8512a700fb9e48e00cc7036d42e85163_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1398fe1e196136475f3761be5377be78243152f0bb39c0b10e42908752249e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1398fe1e196136475f3761be5377be78243152f0bb39c0b10e42908752249e0a->enter($__internal_1398fe1e196136475f3761be5377be78243152f0bb39c0b10e42908752249e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@SebouCarnet/Contact/listContact.html.twig"));

        // line 7
        echo "  ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_1398fe1e196136475f3761be5377be78243152f0bb39c0b10e42908752249e0a->leave($__internal_1398fe1e196136475f3761be5377be78243152f0bb39c0b10e42908752249e0a_prof);

    }

    // line 9
    public function block_deco($context, array $blocks = array())
    {
        $__internal_2384729d3a11c7adaa7329d5831d1b45d010354d7a4354f3a282d0c33ca1bf62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2384729d3a11c7adaa7329d5831d1b45d010354d7a4354f3a282d0c33ca1bf62->enter($__internal_2384729d3a11c7adaa7329d5831d1b45d010354d7a4354f3a282d0c33ca1bf62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@SebouCarnet/Contact/listContact.html.twig"));

        // line 10
        echo "<div>
<ul>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listContact"]) ? $context["listContact"] : $this->getContext($context, "listContact")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 13
            echo "  <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "content", array()), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>
</div>
";
        
        $__internal_2384729d3a11c7adaa7329d5831d1b45d010354d7a4354f3a282d0c33ca1bf62->leave($__internal_2384729d3a11c7adaa7329d5831d1b45d010354d7a4354f3a282d0c33ca1bf62_prof);

    }

    public function getTemplateName()
    {
        return "@SebouCarnet/Contact/listContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 15,  82 => 13,  78 => 12,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
<ul>
{% for advert in listContact %}
  <li>{{ advert.content }}</li>
{% endfor %}
</ul>
</div>
{% endblock %}
", "@SebouCarnet/Contact/listContact.html.twig", "C:\\wamp\\www\\Appartoo\\src\\Sebou\\CarnetBundle\\Resources\\views\\Contact\\listContact.html.twig");
    }
}
