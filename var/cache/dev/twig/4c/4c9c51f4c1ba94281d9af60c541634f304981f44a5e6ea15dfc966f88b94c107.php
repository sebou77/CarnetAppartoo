<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_371458dd49f3982f0af4320c58993e1fff87d3cdca30e03d0fa9edc0a82db242 extends Twig_Template
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
        $__internal_3ee1d9e6b15848b9820754137baa2e435e04da3d63697dfffe1394ea26cc4f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee1d9e6b15848b9820754137baa2e435e04da3d63697dfffe1394ea26cc4f54->enter($__internal_3ee1d9e6b15848b9820754137baa2e435e04da3d63697dfffe1394ea26cc4f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee1d9e6b15848b9820754137baa2e435e04da3d63697dfffe1394ea26cc4f54->leave($__internal_3ee1d9e6b15848b9820754137baa2e435e04da3d63697dfffe1394ea26cc4f54_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1400d6d4fd00d4716de4efc0aa4bc97efc5ad780eedc193755a9d70a02afeebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1400d6d4fd00d4716de4efc0aa4bc97efc5ad780eedc193755a9d70a02afeebf->enter($__internal_1400d6d4fd00d4716de4efc0aa4bc97efc5ad780eedc193755a9d70a02afeebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1400d6d4fd00d4716de4efc0aa4bc97efc5ad780eedc193755a9d70a02afeebf->leave($__internal_1400d6d4fd00d4716de4efc0aa4bc97efc5ad780eedc193755a9d70a02afeebf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfd6f8df099a03047935d8c74a7277f645e9ec48fbc806dc4ecda4c40ae89c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd6f8df099a03047935d8c74a7277f645e9ec48fbc806dc4ecda4c40ae89c19->enter($__internal_dfd6f8df099a03047935d8c74a7277f645e9ec48fbc806dc4ecda4c40ae89c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dfd6f8df099a03047935d8c74a7277f645e9ec48fbc806dc4ecda4c40ae89c19->leave($__internal_dfd6f8df099a03047935d8c74a7277f645e9ec48fbc806dc4ecda4c40ae89c19_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_77b435ef5bba81db8939b9eb89636d353737fa80e843126764a8de8fbdfccd8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b435ef5bba81db8939b9eb89636d353737fa80e843126764a8de8fbdfccd8f->enter($__internal_77b435ef5bba81db8939b9eb89636d353737fa80e843126764a8de8fbdfccd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_77b435ef5bba81db8939b9eb89636d353737fa80e843126764a8de8fbdfccd8f->leave($__internal_77b435ef5bba81db8939b9eb89636d353737fa80e843126764a8de8fbdfccd8f_prof);

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
