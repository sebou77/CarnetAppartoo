<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_18e369b2539e13866cc91ccc47f31bbee8c19782d99adf505a118b744938ccd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_551c69233671a2902c017797b3a8b9c28bbf9bd81bbdd88400ebc76c90b17e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551c69233671a2902c017797b3a8b9c28bbf9bd81bbdd88400ebc76c90b17e30->enter($__internal_551c69233671a2902c017797b3a8b9c28bbf9bd81bbdd88400ebc76c90b17e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_551c69233671a2902c017797b3a8b9c28bbf9bd81bbdd88400ebc76c90b17e30->leave($__internal_551c69233671a2902c017797b3a8b9c28bbf9bd81bbdd88400ebc76c90b17e30_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42c694eebd377fc77bf1ea23f8bd2776170587fa86e9f7798999abf3fb37d93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c694eebd377fc77bf1ea23f8bd2776170587fa86e9f7798999abf3fb37d93e->enter($__internal_42c694eebd377fc77bf1ea23f8bd2776170587fa86e9f7798999abf3fb37d93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_42c694eebd377fc77bf1ea23f8bd2776170587fa86e9f7798999abf3fb37d93e->leave($__internal_42c694eebd377fc77bf1ea23f8bd2776170587fa86e9f7798999abf3fb37d93e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_155def32ad26802f275435c48c485769e880b468cf99afd475d2904157f95c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155def32ad26802f275435c48c485769e880b468cf99afd475d2904157f95c01->enter($__internal_155def32ad26802f275435c48c485769e880b468cf99afd475d2904157f95c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

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
        
        $__internal_155def32ad26802f275435c48c485769e880b468cf99afd475d2904157f95c01->leave($__internal_155def32ad26802f275435c48c485769e880b468cf99afd475d2904157f95c01_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
