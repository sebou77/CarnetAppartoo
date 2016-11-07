<?php

/* SebouCarnetBundle::layout.html.twig */
class __TwigTemplate_40e3437126dd9fb72c7049756a86c5d10da9700cc613cbeba6519cac2c8b9fae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "SebouCarnetBundle::layout.html.twig", 1);
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
        $__internal_a92ee8adfd0cec9ba5758b312646f54576b1b076dc0815da60cd12de677fdad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92ee8adfd0cec9ba5758b312646f54576b1b076dc0815da60cd12de677fdad0->enter($__internal_a92ee8adfd0cec9ba5758b312646f54576b1b076dc0815da60cd12de677fdad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SebouCarnetBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a92ee8adfd0cec9ba5758b312646f54576b1b076dc0815da60cd12de677fdad0->leave($__internal_a92ee8adfd0cec9ba5758b312646f54576b1b076dc0815da60cd12de677fdad0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f309c896ee49b6e1bedf41ddcda5f5d0f1e0bc9006ebdcc817302bad0e437645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f309c896ee49b6e1bedf41ddcda5f5d0f1e0bc9006ebdcc817302bad0e437645->enter($__internal_f309c896ee49b6e1bedf41ddcda5f5d0f1e0bc9006ebdcc817302bad0e437645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle::layout.html.twig"));

        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f309c896ee49b6e1bedf41ddcda5f5d0f1e0bc9006ebdcc817302bad0e437645->leave($__internal_f309c896ee49b6e1bedf41ddcda5f5d0f1e0bc9006ebdcc817302bad0e437645_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b41eaf1c0326aa0fae4f36031c7158a3b9109b40998fff7be8c2bc24e2454f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41eaf1c0326aa0fae4f36031c7158a3b9109b40998fff7be8c2bc24e2454f1f->enter($__internal_b41eaf1c0326aa0fae4f36031c7158a3b9109b40998fff7be8c2bc24e2454f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle::layout.html.twig"));

        // line 7
        echo "  <h1>patate</h1>
  ";
        // line 8
        $this->displayBlock('deco', $context, $blocks);
        
        $__internal_b41eaf1c0326aa0fae4f36031c7158a3b9109b40998fff7be8c2bc24e2454f1f->leave($__internal_b41eaf1c0326aa0fae4f36031c7158a3b9109b40998fff7be8c2bc24e2454f1f_prof);

    }

    public function block_deco($context, array $blocks = array())
    {
        $__internal_b0af429403a57eb291fb53106e951d8925d06568e537e49862f9f3df8c61817d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0af429403a57eb291fb53106e951d8925d06568e537e49862f9f3df8c61817d->enter($__internal_b0af429403a57eb291fb53106e951d8925d06568e537e49862f9f3df8c61817d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouCarnetBundle::layout.html.twig"));

        // line 9
        echo "  ";
        
        $__internal_b0af429403a57eb291fb53106e951d8925d06568e537e49862f9f3df8c61817d->leave($__internal_b0af429403a57eb291fb53106e951d8925d06568e537e49862f9f3df8c61817d_prof);

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
", "SebouCarnetBundle::layout.html.twig", "C:\\wamp\\www\\Appartoo\\src\\Sebou\\CarnetBundle/Resources/views/layout.html.twig");
    }
}
