<?php

/* SebouCarnetBundle:contact:listContact.html.twig */
class __TwigTemplate_0afac83f584025c36116f87aa0f2d07cb785079005fbbaf4a5d7081f62051a2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SebouCarnetBundle::layout.html.twig", "SebouCarnetBundle:contact:listContact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lien' => array($this, 'block_lien'),
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
        $__internal_381e6274f6a860dfb725d58be7df05cc260d374227d5b47efbc761484e1776ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381e6274f6a860dfb725d58be7df05cc260d374227d5b47efbc761484e1776ba->enter($__internal_381e6274f6a860dfb725d58be7df05cc260d374227d5b47efbc761484e1776ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SebouCarnetBundle:contact:listContact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_381e6274f6a860dfb725d58be7df05cc260d374227d5b47efbc761484e1776ba->leave($__internal_381e6274f6a860dfb725d58be7df05cc260d374227d5b47efbc761484e1776ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a15666dc85e6eea00c085c61313d34440aa8a6552baa452ab15a2318e567ea67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15666dc85e6eea00c085c61313d34440aa8a6552baa452ab15a2318e567ea67->enter($__internal_a15666dc85e6eea00c085c61313d34440aa8a6552baa452ab15a2318e567ea67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:contact:listContact.html.twig"));

        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a15666dc85e6eea00c085c61313d34440aa8a6552baa452ab15a2318e567ea67->leave($__internal_a15666dc85e6eea00c085c61313d34440aa8a6552baa452ab15a2318e567ea67_prof);

    }

    // line 6
    public function block_lien($context, array $blocks = array())
    {
        $__internal_eb797d4a88e9210f6efdfac4cab1b34415861e11f36a04b261e83f852d8c195d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb797d4a88e9210f6efdfac4cab1b34415861e11f36a04b261e83f852d8c195d->enter($__internal_eb797d4a88e9210f6efdfac4cab1b34415861e11f36a04b261e83f852d8c195d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:contact:listContact.html.twig"));

        // line 7
        echo "  ";
        $this->displayParentBlock("lien", $context, $blocks);
        echo "
";
        
        $__internal_eb797d4a88e9210f6efdfac4cab1b34415861e11f36a04b261e83f852d8c195d->leave($__internal_eb797d4a88e9210f6efdfac4cab1b34415861e11f36a04b261e83f852d8c195d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b14b9c7ef9370004f743cbaf56fa654a1ef02ea62fd9692c82f949ae81f883d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14b9c7ef9370004f743cbaf56fa654a1ef02ea62fd9692c82f949ae81f883d1->enter($__internal_b14b9c7ef9370004f743cbaf56fa654a1ef02ea62fd9692c82f949ae81f883d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:contact:listContact.html.twig"));

        // line 10
        echo "  ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_b14b9c7ef9370004f743cbaf56fa654a1ef02ea62fd9692c82f949ae81f883d1->leave($__internal_b14b9c7ef9370004f743cbaf56fa654a1ef02ea62fd9692c82f949ae81f883d1_prof);

    }

    // line 12
    public function block_deco($context, array $blocks = array())
    {
        $__internal_f634673e68e70bea5a8939f7bfbdf4426899805ab58b1d60a5c90dceb2ec4073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f634673e68e70bea5a8939f7bfbdf4426899805ab58b1d60a5c90dceb2ec4073->enter($__internal_f634673e68e70bea5a8939f7bfbdf4426899805ab58b1d60a5c90dceb2ec4073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:contact:listContact.html.twig"));

        // line 13
        echo "<div>
<ul>
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listContact"]) ? $context["listContact"] : $this->getContext($context, "listContact")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 16
            echo "  <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "nom", array()), "html", null, true);
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">Detail</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supp", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a> </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</ul>
</div>
";
        
        $__internal_f634673e68e70bea5a8939f7bfbdf4426899805ab58b1d60a5c90dceb2ec4073->leave($__internal_f634673e68e70bea5a8939f7bfbdf4426899805ab58b1d60a5c90dceb2ec4073_prof);

    }

    public function getTemplateName()
    {
        return "SebouCarnetBundle:contact:listContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 18,  99 => 16,  95 => 15,  91 => 13,  85 => 12,  75 => 10,  69 => 9,  59 => 7,  53 => 6,  43 => 4,  37 => 3,  11 => 1,);
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
{% block lien %}
  {{ parent() }}
{% endblock %}
{% block body %}
  {{ parent()}}
{% endblock %}
{% block deco %}
<div>
<ul>
{% for contact in listContact %}
  <li>{{ contact.nom }}  <a href=\"{{ path('detail',{'id':contact.id}) }}\">Detail</a> <a href=\"{{ path('edit',{'id':contact.id}) }}\">Modifier</a>  <a href=\"{{ path('supp',{'id':contact.id}) }}\">Supprimer</a> </li>
{% endfor %}
</ul>
</div>
{% endblock %}
", "SebouCarnetBundle:contact:listContact.html.twig", "C:\\wamp\\www\\Appartoo\\src\\Sebou\\CarnetBundle/Resources/views/contact/listContact.html.twig");
    }
}
