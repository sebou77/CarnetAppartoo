<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b53ab281da2d9eb8e08bfce535c02ab749a3555d560f11840ee92a0103bf35e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_ac1d6762cf2d81964489840ebeab7929807fe116c0fc0c247eb0d22fd38d030c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1d6762cf2d81964489840ebeab7929807fe116c0fc0c247eb0d22fd38d030c->enter($__internal_ac1d6762cf2d81964489840ebeab7929807fe116c0fc0c247eb0d22fd38d030c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac1d6762cf2d81964489840ebeab7929807fe116c0fc0c247eb0d22fd38d030c->leave($__internal_ac1d6762cf2d81964489840ebeab7929807fe116c0fc0c247eb0d22fd38d030c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e7425bd13c97f98987c48444dd57822827da2f24e3bccd25b7bac13bac1d769d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7425bd13c97f98987c48444dd57822827da2f24e3bccd25b7bac13bac1d769d->enter($__internal_e7425bd13c97f98987c48444dd57822827da2f24e3bccd25b7bac13bac1d769d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_e7425bd13c97f98987c48444dd57822827da2f24e3bccd25b7bac13bac1d769d->leave($__internal_e7425bd13c97f98987c48444dd57822827da2f24e3bccd25b7bac13bac1d769d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_66eb6be1ef63507420f8014d45da772975f34d84461125848726b2f9db740fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66eb6be1ef63507420f8014d45da772975f34d84461125848726b2f9db740fe9->enter($__internal_66eb6be1ef63507420f8014d45da772975f34d84461125848726b2f9db740fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_66eb6be1ef63507420f8014d45da772975f34d84461125848726b2f9db740fe9->leave($__internal_66eb6be1ef63507420f8014d45da772975f34d84461125848726b2f9db740fe9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_13a020dab1d70275ee7bad49812db9e2a75fbf1f4903204cd248995d9091e06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a020dab1d70275ee7bad49812db9e2a75fbf1f4903204cd248995d9091e06a->enter($__internal_13a020dab1d70275ee7bad49812db9e2a75fbf1f4903204cd248995d9091e06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_13a020dab1d70275ee7bad49812db9e2a75fbf1f4903204cd248995d9091e06a->leave($__internal_13a020dab1d70275ee7bad49812db9e2a75fbf1f4903204cd248995d9091e06a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
