<?php

/* SebouCarnetBundle:Contact:index.html.twig */
class __TwigTemplate_101cd8032db7cc5365870ef962d7372d89c09ce7ce31b897fdca2b5933826b06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SebouCarnetBundle::layout.html.twig", "SebouCarnetBundle:Contact:index.html.twig", 1);
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
        $__internal_94c41b4dc54856072f17c1560b415285fa8ba3a9138337279630e96670ede7e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c41b4dc54856072f17c1560b415285fa8ba3a9138337279630e96670ede7e0->enter($__internal_94c41b4dc54856072f17c1560b415285fa8ba3a9138337279630e96670ede7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SebouCarnetBundle:Contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94c41b4dc54856072f17c1560b415285fa8ba3a9138337279630e96670ede7e0->leave($__internal_94c41b4dc54856072f17c1560b415285fa8ba3a9138337279630e96670ede7e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_188986e75368290c116268e9afbb402b16c31afce8f6a8dada0230320159f03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188986e75368290c116268e9afbb402b16c31afce8f6a8dada0230320159f03b->enter($__internal_188986e75368290c116268e9afbb402b16c31afce8f6a8dada0230320159f03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:Contact:index.html.twig"));

        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_188986e75368290c116268e9afbb402b16c31afce8f6a8dada0230320159f03b->leave($__internal_188986e75368290c116268e9afbb402b16c31afce8f6a8dada0230320159f03b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c29dfa71d0a3b8f546ec10392ad21534cce0e0ba38091d1d752b427bbde3a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c29dfa71d0a3b8f546ec10392ad21534cce0e0ba38091d1d752b427bbde3a16->enter($__internal_9c29dfa71d0a3b8f546ec10392ad21534cce0e0ba38091d1d752b427bbde3a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:Contact:index.html.twig"));

        // line 7
        echo "  ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_9c29dfa71d0a3b8f546ec10392ad21534cce0e0ba38091d1d752b427bbde3a16->leave($__internal_9c29dfa71d0a3b8f546ec10392ad21534cce0e0ba38091d1d752b427bbde3a16_prof);

    }

    // line 9
    public function block_deco($context, array $blocks = array())
    {
        $__internal_3ed8143c4946dee75f87101d3dfb7ab9a4a945ff2edbe73ae552a8eaa0cd11eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed8143c4946dee75f87101d3dfb7ab9a4a945ff2edbe73ae552a8eaa0cd11eb->enter($__internal_3ed8143c4946dee75f87101d3dfb7ab9a4a945ff2edbe73ae552a8eaa0cd11eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:Contact:index.html.twig"));

        // line 10
        echo "<div>
  ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
";
        
        $__internal_3ed8143c4946dee75f87101d3dfb7ab9a4a945ff2edbe73ae552a8eaa0cd11eb->leave($__internal_3ed8143c4946dee75f87101d3dfb7ab9a4a945ff2edbe73ae552a8eaa0cd11eb_prof);

    }

    public function getTemplateName()
    {
        return "SebouCarnetBundle:Contact:index.html.twig";
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
", "SebouCarnetBundle:Contact:index.html.twig", "C:\\wamp\\www\\Appartoo\\src\\Sebou\\CarnetBundle/Resources/views/Contact/index.html.twig");
    }
}
