<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1993d5f6998e62e53306490be35fa563ff0e96d684f6873b71e6cbadc123444c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7604528af748a0573cb487a8a27f6609ffee01293ba7623b4087c9b715866a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7604528af748a0573cb487a8a27f6609ffee01293ba7623b4087c9b715866a0c->enter($__internal_7604528af748a0573cb487a8a27f6609ffee01293ba7623b4087c9b715866a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7604528af748a0573cb487a8a27f6609ffee01293ba7623b4087c9b715866a0c->leave($__internal_7604528af748a0573cb487a8a27f6609ffee01293ba7623b4087c9b715866a0c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91f4cc897adcbe319399dbd35b3e938adf3c9f9ed786ae90f1492b6f197c1c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f4cc897adcbe319399dbd35b3e938adf3c9f9ed786ae90f1492b6f197c1c38->enter($__internal_91f4cc897adcbe319399dbd35b3e938adf3c9f9ed786ae90f1492b6f197c1c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_91f4cc897adcbe319399dbd35b3e938adf3c9f9ed786ae90f1492b6f197c1c38->leave($__internal_91f4cc897adcbe319399dbd35b3e938adf3c9f9ed786ae90f1492b6f197c1c38_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f010c7e871f26b9820d6bd0e8488e663bb23abfe6019abf7e8234ec469f359f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f010c7e871f26b9820d6bd0e8488e663bb23abfe6019abf7e8234ec469f359f2->enter($__internal_f010c7e871f26b9820d6bd0e8488e663bb23abfe6019abf7e8234ec469f359f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f010c7e871f26b9820d6bd0e8488e663bb23abfe6019abf7e8234ec469f359f2->leave($__internal_f010c7e871f26b9820d6bd0e8488e663bb23abfe6019abf7e8234ec469f359f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f80ca9c4c31886cea708fdc38c4f8b474cd080cc3fae015dc50329050be80d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f80ca9c4c31886cea708fdc38c4f8b474cd080cc3fae015dc50329050be80d9->enter($__internal_2f80ca9c4c31886cea708fdc38c4f8b474cd080cc3fae015dc50329050be80d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2f80ca9c4c31886cea708fdc38c4f8b474cd080cc3fae015dc50329050be80d9->leave($__internal_2f80ca9c4c31886cea708fdc38c4f8b474cd080cc3fae015dc50329050be80d9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
