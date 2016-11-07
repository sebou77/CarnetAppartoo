<?php

/* SebouCarnetBundle:Contact:accueil.html.twig */
class __TwigTemplate_2ba3058ea454510cc6193413593bed1f146765dbb88f6ce4fe9e68652ba530e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SebouCarnetBundle::layout.html.twig", "SebouCarnetBundle:Contact:accueil.html.twig", 1);
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
        $__internal_e9a7287f824b111412c583bd854c23852c3ecf96f87439c2ea49b46cfabf7acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a7287f824b111412c583bd854c23852c3ecf96f87439c2ea49b46cfabf7acb->enter($__internal_e9a7287f824b111412c583bd854c23852c3ecf96f87439c2ea49b46cfabf7acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SebouCarnetBundle:Contact:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9a7287f824b111412c583bd854c23852c3ecf96f87439c2ea49b46cfabf7acb->leave($__internal_e9a7287f824b111412c583bd854c23852c3ecf96f87439c2ea49b46cfabf7acb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_19d8f33a3f6758bf3f12f4093bf7db5fc20b449b3d2eb47974aa7cb8df60d213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d8f33a3f6758bf3f12f4093bf7db5fc20b449b3d2eb47974aa7cb8df60d213->enter($__internal_19d8f33a3f6758bf3f12f4093bf7db5fc20b449b3d2eb47974aa7cb8df60d213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:Contact:accueil.html.twig"));

        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_19d8f33a3f6758bf3f12f4093bf7db5fc20b449b3d2eb47974aa7cb8df60d213->leave($__internal_19d8f33a3f6758bf3f12f4093bf7db5fc20b449b3d2eb47974aa7cb8df60d213_prof);

    }

    // line 6
    public function block_lien($context, array $blocks = array())
    {
        $__internal_8eec69d18dd10b5e8a239cb5c4e4cdca933c72a9f6fc4cfce7cc7e781384869b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eec69d18dd10b5e8a239cb5c4e4cdca933c72a9f6fc4cfce7cc7e781384869b->enter($__internal_8eec69d18dd10b5e8a239cb5c4e4cdca933c72a9f6fc4cfce7cc7e781384869b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:Contact:accueil.html.twig"));

        // line 7
        echo "  ";
        $this->displayParentBlock("lien", $context, $blocks);
        echo "
";
        
        $__internal_8eec69d18dd10b5e8a239cb5c4e4cdca933c72a9f6fc4cfce7cc7e781384869b->leave($__internal_8eec69d18dd10b5e8a239cb5c4e4cdca933c72a9f6fc4cfce7cc7e781384869b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_99ad5b3e7d70158603b0698f8261401795070b8312086af9ded02120931eb423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ad5b3e7d70158603b0698f8261401795070b8312086af9ded02120931eb423->enter($__internal_99ad5b3e7d70158603b0698f8261401795070b8312086af9ded02120931eb423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:Contact:accueil.html.twig"));

        // line 10
        echo "  ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_99ad5b3e7d70158603b0698f8261401795070b8312086af9ded02120931eb423->leave($__internal_99ad5b3e7d70158603b0698f8261401795070b8312086af9ded02120931eb423_prof);

    }

    // line 12
    public function block_deco($context, array $blocks = array())
    {
        $__internal_b62d9df9e44fb13dc1d96e5171f813b573de6bd2afcc073e6ad62b6df66b14c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62d9df9e44fb13dc1d96e5171f813b573de6bd2afcc073e6ad62b6df66b14c2->enter($__internal_b62d9df9e44fb13dc1d96e5171f813b573de6bd2afcc073e6ad62b6df66b14c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle:Contact:accueil.html.twig"));

        // line 13
        echo "  ";
        $this->displayParentBlock("deco", $context, $blocks);
        echo "
";
        
        $__internal_b62d9df9e44fb13dc1d96e5171f813b573de6bd2afcc073e6ad62b6df66b14c2->leave($__internal_b62d9df9e44fb13dc1d96e5171f813b573de6bd2afcc073e6ad62b6df66b14c2_prof);

    }

    public function getTemplateName()
    {
        return "SebouCarnetBundle:Contact:accueil.html.twig";
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
  {{ parent()}}
{% endblock %}
", "SebouCarnetBundle:Contact:accueil.html.twig", "C:\\wamp\\www\\Appartoo\\src\\Sebou\\CarnetBundle/Resources/views/Contact/accueil.html.twig");
    }
}
