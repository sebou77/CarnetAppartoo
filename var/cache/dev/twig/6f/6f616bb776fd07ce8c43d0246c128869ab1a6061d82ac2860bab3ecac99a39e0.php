<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8c339993f34806cb08fadc9de08f3e431767d3bab1d1df50deee4117e77178d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fa53651b4e39ff6082e580ce952521af5befe7834e7405821393d8ee3dc9004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa53651b4e39ff6082e580ce952521af5befe7834e7405821393d8ee3dc9004->enter($__internal_2fa53651b4e39ff6082e580ce952521af5befe7834e7405821393d8ee3dc9004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fa53651b4e39ff6082e580ce952521af5befe7834e7405821393d8ee3dc9004->leave($__internal_2fa53651b4e39ff6082e580ce952521af5befe7834e7405821393d8ee3dc9004_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d956d734fe53dbaa3c751e26d834be127969326d661aa66d635a8d0d0fb33b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d956d734fe53dbaa3c751e26d834be127969326d661aa66d635a8d0d0fb33b94->enter($__internal_d956d734fe53dbaa3c751e26d834be127969326d661aa66d635a8d0d0fb33b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_d956d734fe53dbaa3c751e26d834be127969326d661aa66d635a8d0d0fb33b94->leave($__internal_d956d734fe53dbaa3c751e26d834be127969326d661aa66d635a8d0d0fb33b94_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_33fd3594205d10105309e811b01ae629a2f98bc9391363c5e70680abf13dc5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33fd3594205d10105309e811b01ae629a2f98bc9391363c5e70680abf13dc5f4->enter($__internal_33fd3594205d10105309e811b01ae629a2f98bc9391363c5e70680abf13dc5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_33fd3594205d10105309e811b01ae629a2f98bc9391363c5e70680abf13dc5f4->leave($__internal_33fd3594205d10105309e811b01ae629a2f98bc9391363c5e70680abf13dc5f4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0dcc273bfa7cfed4dfb16b503337db6aecb6924f7fe2ff844ad6b50a1ca15d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dcc273bfa7cfed4dfb16b503337db6aecb6924f7fe2ff844ad6b50a1ca15d5b->enter($__internal_0dcc273bfa7cfed4dfb16b503337db6aecb6924f7fe2ff844ad6b50a1ca15d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0dcc273bfa7cfed4dfb16b503337db6aecb6924f7fe2ff844ad6b50a1ca15d5b->leave($__internal_0dcc273bfa7cfed4dfb16b503337db6aecb6924f7fe2ff844ad6b50a1ca15d5b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
