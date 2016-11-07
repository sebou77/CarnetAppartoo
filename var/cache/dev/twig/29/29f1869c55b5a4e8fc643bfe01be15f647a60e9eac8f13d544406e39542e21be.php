<?php

/* SebouCarnetBundle:Contact:listContact.html.twig */
class __TwigTemplate_1a6efd1139af3279290a7d63af573c2fabacc714125d62dfdfb3ffb3bddcb1b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SebouCarnetBundle::layout.html.twig", "SebouCarnetBundle:Contact:listContact.html.twig", 1);
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
        $__internal_36601341a995581b5363934a343fcfcca6c23073e0fb7b19989ad83865c0c828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36601341a995581b5363934a343fcfcca6c23073e0fb7b19989ad83865c0c828->enter($__internal_36601341a995581b5363934a343fcfcca6c23073e0fb7b19989ad83865c0c828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SebouCarnetBundle:Contact:listContact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36601341a995581b5363934a343fcfcca6c23073e0fb7b19989ad83865c0c828->leave($__internal_36601341a995581b5363934a343fcfcca6c23073e0fb7b19989ad83865c0c828_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8bffeb0853eecaac64c33f61630bff206b519d40f059d00d0779f2ab35fb4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8bffeb0853eecaac64c33f61630bff206b519d40f059d00d0779f2ab35fb4e3->enter($__internal_c8bffeb0853eecaac64c33f61630bff206b519d40f059d00d0779f2ab35fb4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:Contact:listContact.html.twig"));

        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c8bffeb0853eecaac64c33f61630bff206b519d40f059d00d0779f2ab35fb4e3->leave($__internal_c8bffeb0853eecaac64c33f61630bff206b519d40f059d00d0779f2ab35fb4e3_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d561e6bff9211b03700ab169d1b845e57dbf5f96290e3fda60a756be05d2b02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d561e6bff9211b03700ab169d1b845e57dbf5f96290e3fda60a756be05d2b02f->enter($__internal_d561e6bff9211b03700ab169d1b845e57dbf5f96290e3fda60a756be05d2b02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:Contact:listContact.html.twig"));

        // line 7
        echo "  ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_d561e6bff9211b03700ab169d1b845e57dbf5f96290e3fda60a756be05d2b02f->leave($__internal_d561e6bff9211b03700ab169d1b845e57dbf5f96290e3fda60a756be05d2b02f_prof);

    }

    // line 9
    public function block_deco($context, array $blocks = array())
    {
        $__internal_1c709e9ca6b5bcb0eb0ca64df8edce3aa0b7839a3bc40cb300282cb804a5c41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c709e9ca6b5bcb0eb0ca64df8edce3aa0b7839a3bc40cb300282cb804a5c41d->enter($__internal_1c709e9ca6b5bcb0eb0ca64df8edce3aa0b7839a3bc40cb300282cb804a5c41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:Contact:listContact.html.twig"));

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
        
        $__internal_1c709e9ca6b5bcb0eb0ca64df8edce3aa0b7839a3bc40cb300282cb804a5c41d->leave($__internal_1c709e9ca6b5bcb0eb0ca64df8edce3aa0b7839a3bc40cb300282cb804a5c41d_prof);

    }

    public function getTemplateName()
    {
        return "SebouCarnetBundle:Contact:listContact.html.twig";
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
", "SebouCarnetBundle:Contact:listContact.html.twig", "C:\\wamp\\www\\Appartoo\\src\\Sebou\\CarnetBundle/Resources/views/Contact/listContact.html.twig");
    }
}
