<?php

/* SebouCarnetBundle:contact:supp.html.twig */
class __TwigTemplate_6e647daa3a47e4c78258383ad85bf37a7a17f90f5734e09f20c9635608e7a5df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SebouCarnetBundle::layout.html.twig", "SebouCarnetBundle:contact:supp.html.twig", 1);
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
        $__internal_914346556cf4361712425a432c6986cb50e9cca42f714ec08d1f86176b035b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914346556cf4361712425a432c6986cb50e9cca42f714ec08d1f86176b035b89->enter($__internal_914346556cf4361712425a432c6986cb50e9cca42f714ec08d1f86176b035b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SebouCarnetBundle:contact:supp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_914346556cf4361712425a432c6986cb50e9cca42f714ec08d1f86176b035b89->leave($__internal_914346556cf4361712425a432c6986cb50e9cca42f714ec08d1f86176b035b89_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ac209abacccecca0b925ce269d0bab188726d5d27000940889a503e663dd4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac209abacccecca0b925ce269d0bab188726d5d27000940889a503e663dd4d3->enter($__internal_7ac209abacccecca0b925ce269d0bab188726d5d27000940889a503e663dd4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:contact:supp.html.twig"));

        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7ac209abacccecca0b925ce269d0bab188726d5d27000940889a503e663dd4d3->leave($__internal_7ac209abacccecca0b925ce269d0bab188726d5d27000940889a503e663dd4d3_prof);

    }

    // line 6
    public function block_lien($context, array $blocks = array())
    {
        $__internal_450314dba44de7bad14c45e7b7ba5b5dae1715ba014aaefd41b22fc91d4782ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450314dba44de7bad14c45e7b7ba5b5dae1715ba014aaefd41b22fc91d4782ff->enter($__internal_450314dba44de7bad14c45e7b7ba5b5dae1715ba014aaefd41b22fc91d4782ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:contact:supp.html.twig"));

        // line 7
        echo "  ";
        $this->displayParentBlock("lien", $context, $blocks);
        echo "
";
        
        $__internal_450314dba44de7bad14c45e7b7ba5b5dae1715ba014aaefd41b22fc91d4782ff->leave($__internal_450314dba44de7bad14c45e7b7ba5b5dae1715ba014aaefd41b22fc91d4782ff_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_455b9dffa4e4d278a9c3dfc7701d67b845d5b9d97eb1f17d63a7960bfb9a3182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455b9dffa4e4d278a9c3dfc7701d67b845d5b9d97eb1f17d63a7960bfb9a3182->enter($__internal_455b9dffa4e4d278a9c3dfc7701d67b845d5b9d97eb1f17d63a7960bfb9a3182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:contact:supp.html.twig"));

        // line 10
        echo "  ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_455b9dffa4e4d278a9c3dfc7701d67b845d5b9d97eb1f17d63a7960bfb9a3182->leave($__internal_455b9dffa4e4d278a9c3dfc7701d67b845d5b9d97eb1f17d63a7960bfb9a3182_prof);

    }

    // line 12
    public function block_deco($context, array $blocks = array())
    {
        $__internal_809b1d4f732afca8ee5b41be50993c0e06556b65bcb4a36a18c216492b31b037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809b1d4f732afca8ee5b41be50993c0e06556b65bcb4a36a18c216492b31b037->enter($__internal_809b1d4f732afca8ee5b41be50993c0e06556b65bcb4a36a18c216492b31b037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:contact:supp.html.twig"));

        // line 13
        echo "<div>
  Le contact a bien été supprimé.
</div>
";
        
        $__internal_809b1d4f732afca8ee5b41be50993c0e06556b65bcb4a36a18c216492b31b037->leave($__internal_809b1d4f732afca8ee5b41be50993c0e06556b65bcb4a36a18c216492b31b037_prof);

    }

    public function getTemplateName()
    {
        return "SebouCarnetBundle:contact:supp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 13,  85 => 12,  75 => 10,  69 => 9,  59 => 7,  53 => 6,  43 => 4,  37 => 3,  11 => 1,);
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
  Le contact a bien été supprimé.
</div>
{% endblock %}
", "SebouCarnetBundle:contact:supp.html.twig", "C:\\wamp\\www\\Appartoo\\src\\Sebou\\CarnetBundle/Resources/views/contact/supp.html.twig");
    }
}
