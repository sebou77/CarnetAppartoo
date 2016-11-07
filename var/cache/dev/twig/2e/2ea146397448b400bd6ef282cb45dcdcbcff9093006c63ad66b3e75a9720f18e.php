<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_843fdf673d6dacf55a88b8a0fef6f5bf0a175a89dfbeeb69c11d191875755e15 extends Twig_Template
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
        $__internal_231c00adf3470a746e74d6281276e9ccf087619c99cd38a3ad63ee3b2921c741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231c00adf3470a746e74d6281276e9ccf087619c99cd38a3ad63ee3b2921c741->enter($__internal_231c00adf3470a746e74d6281276e9ccf087619c99cd38a3ad63ee3b2921c741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_231c00adf3470a746e74d6281276e9ccf087619c99cd38a3ad63ee3b2921c741->leave($__internal_231c00adf3470a746e74d6281276e9ccf087619c99cd38a3ad63ee3b2921c741_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb4709fb7f058ab0757c84c20902beb70640cdb70e0ce36fffe0dcf13b6a5f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4709fb7f058ab0757c84c20902beb70640cdb70e0ce36fffe0dcf13b6a5f90->enter($__internal_fb4709fb7f058ab0757c84c20902beb70640cdb70e0ce36fffe0dcf13b6a5f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_fb4709fb7f058ab0757c84c20902beb70640cdb70e0ce36fffe0dcf13b6a5f90->leave($__internal_fb4709fb7f058ab0757c84c20902beb70640cdb70e0ce36fffe0dcf13b6a5f90_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_186103fa6b8d386418bd8152d5bff9953e3843fd624159614e6393b711bff46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186103fa6b8d386418bd8152d5bff9953e3843fd624159614e6393b711bff46c->enter($__internal_186103fa6b8d386418bd8152d5bff9953e3843fd624159614e6393b711bff46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_186103fa6b8d386418bd8152d5bff9953e3843fd624159614e6393b711bff46c->leave($__internal_186103fa6b8d386418bd8152d5bff9953e3843fd624159614e6393b711bff46c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b286bc33b5cabc70662ccc3bbb181483889a6715ee34461e7c9e743d88dce8ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b286bc33b5cabc70662ccc3bbb181483889a6715ee34461e7c9e743d88dce8ea->enter($__internal_b286bc33b5cabc70662ccc3bbb181483889a6715ee34461e7c9e743d88dce8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b286bc33b5cabc70662ccc3bbb181483889a6715ee34461e7c9e743d88dce8ea->leave($__internal_b286bc33b5cabc70662ccc3bbb181483889a6715ee34461e7c9e743d88dce8ea_prof);

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
