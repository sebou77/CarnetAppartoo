<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_aa1a9906f64dfed644eb7eda4b7e6b65c073eaa10491aeeb7a0c5dbe0d627abb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b7c1a7e81cd62338c4476ff3423bfa910af7bf8389ded81e31ecb1b1f5f4e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7c1a7e81cd62338c4476ff3423bfa910af7bf8389ded81e31ecb1b1f5f4e22->enter($__internal_4b7c1a7e81cd62338c4476ff3423bfa910af7bf8389ded81e31ecb1b1f5f4e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b7c1a7e81cd62338c4476ff3423bfa910af7bf8389ded81e31ecb1b1f5f4e22->leave($__internal_4b7c1a7e81cd62338c4476ff3423bfa910af7bf8389ded81e31ecb1b1f5f4e22_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_db13af19e905bf31dda29b63312cfa1168bb8bea1fa502d8321610ed6429ff10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db13af19e905bf31dda29b63312cfa1168bb8bea1fa502d8321610ed6429ff10->enter($__internal_db13af19e905bf31dda29b63312cfa1168bb8bea1fa502d8321610ed6429ff10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_db13af19e905bf31dda29b63312cfa1168bb8bea1fa502d8321610ed6429ff10->leave($__internal_db13af19e905bf31dda29b63312cfa1168bb8bea1fa502d8321610ed6429ff10_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_36bd83401e5e21f0b4146ac72acf1a4e58e437696202cb31334530621e032319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36bd83401e5e21f0b4146ac72acf1a4e58e437696202cb31334530621e032319->enter($__internal_36bd83401e5e21f0b4146ac72acf1a4e58e437696202cb31334530621e032319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_36bd83401e5e21f0b4146ac72acf1a4e58e437696202cb31334530621e032319->leave($__internal_36bd83401e5e21f0b4146ac72acf1a4e58e437696202cb31334530621e032319_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
