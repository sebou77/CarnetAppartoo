<?php

/* SebouCarnetBundle:contact:DetailContact.html.twig */
class __TwigTemplate_d6a683df4e1eb0f98ac549b769afd47c23c3e91d1949194eb41a6669df26e224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SebouCarnetBundle::layout.html.twig", "SebouCarnetBundle:contact:DetailContact.html.twig", 1);
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
        $__internal_3db41f26e3eba1af470655b93bec5162efc02b45d88fb4ce34c7e3eccc317a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db41f26e3eba1af470655b93bec5162efc02b45d88fb4ce34c7e3eccc317a9b->enter($__internal_3db41f26e3eba1af470655b93bec5162efc02b45d88fb4ce34c7e3eccc317a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SebouCarnetBundle:contact:DetailContact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3db41f26e3eba1af470655b93bec5162efc02b45d88fb4ce34c7e3eccc317a9b->leave($__internal_3db41f26e3eba1af470655b93bec5162efc02b45d88fb4ce34c7e3eccc317a9b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74dbea934d0bdef0e61ece442d9a25e465bef233a3a77c89db3c14268d4a94cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74dbea934d0bdef0e61ece442d9a25e465bef233a3a77c89db3c14268d4a94cc->enter($__internal_74dbea934d0bdef0e61ece442d9a25e465bef233a3a77c89db3c14268d4a94cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:contact:DetailContact.html.twig"));

        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_74dbea934d0bdef0e61ece442d9a25e465bef233a3a77c89db3c14268d4a94cc->leave($__internal_74dbea934d0bdef0e61ece442d9a25e465bef233a3a77c89db3c14268d4a94cc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d2c49fbe2e07536ebe1260557a4a276773b7d2099022da969936011dfd2ab23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2c49fbe2e07536ebe1260557a4a276773b7d2099022da969936011dfd2ab23->enter($__internal_6d2c49fbe2e07536ebe1260557a4a276773b7d2099022da969936011dfd2ab23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:contact:DetailContact.html.twig"));

        // line 7
        echo "  ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_6d2c49fbe2e07536ebe1260557a4a276773b7d2099022da969936011dfd2ab23->leave($__internal_6d2c49fbe2e07536ebe1260557a4a276773b7d2099022da969936011dfd2ab23_prof);

    }

    // line 9
    public function block_deco($context, array $blocks = array())
    {
        $__internal_090b9a5cdc301b6370e3f8c4e8d8ca41698fb5f57300d92953554577fa2394e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090b9a5cdc301b6370e3f8c4e8d8ca41698fb5f57300d92953554577fa2394e5->enter($__internal_090b9a5cdc301b6370e3f8c4e8d8ca41698fb5f57300d92953554577fa2394e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:contact:DetailContact.html.twig"));

        // line 10
        echo "<div>
<ul>
<li> nom : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "nom", array()), "html", null, true);
        echo "</li>
<li> prenom : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "prenom", array()), "html", null, true);
        echo "</li>
<li> email : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "</li>
<li> adresse : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "adresse", array()), "html", null, true);
        echo "</li>
<li> telephone : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "telephone", array()), "html", null, true);
        echo "</li>
<li> siteweb : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "siteWeb", array()), "html", null, true);
        echo "</li>
</ul>
</div>
";
        
        $__internal_090b9a5cdc301b6370e3f8c4e8d8ca41698fb5f57300d92953554577fa2394e5->leave($__internal_090b9a5cdc301b6370e3f8c4e8d8ca41698fb5f57300d92953554577fa2394e5_prof);

    }

    public function getTemplateName()
    {
        return "SebouCarnetBundle:contact:DetailContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 17,  94 => 16,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
<li> nom : {{ contact.nom }}</li>
<li> prenom : {{ contact.prenom }}</li>
<li> email : {{ contact.email }}</li>
<li> adresse : {{ contact.adresse }}</li>
<li> telephone : {{ contact.telephone }}</li>
<li> siteweb : {{ contact.siteWeb }}</li>
</ul>
</div>
{% endblock %}
", "SebouCarnetBundle:contact:DetailContact.html.twig", "C:\\wamp\\www\\Appartoo\\src\\Sebou\\CarnetBundle/Resources/views/contact/DetailContact.html.twig");
    }
}
