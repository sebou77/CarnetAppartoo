<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e5835f74e0f46a882450a49a5d09c363225e535f0b3d995722ce987c2948fb92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_85708a107f44e4500a8090aab9de7bb68ae242022ce44600c9a52d0f3763bba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85708a107f44e4500a8090aab9de7bb68ae242022ce44600c9a52d0f3763bba0->enter($__internal_85708a107f44e4500a8090aab9de7bb68ae242022ce44600c9a52d0f3763bba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85708a107f44e4500a8090aab9de7bb68ae242022ce44600c9a52d0f3763bba0->leave($__internal_85708a107f44e4500a8090aab9de7bb68ae242022ce44600c9a52d0f3763bba0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_552578e9e660f96dfa648b0568489647333c0a1ba14b9f4640a12d944f6220eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552578e9e660f96dfa648b0568489647333c0a1ba14b9f4640a12d944f6220eb->enter($__internal_552578e9e660f96dfa648b0568489647333c0a1ba14b9f4640a12d944f6220eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_552578e9e660f96dfa648b0568489647333c0a1ba14b9f4640a12d944f6220eb->leave($__internal_552578e9e660f96dfa648b0568489647333c0a1ba14b9f4640a12d944f6220eb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8304d8cffbab137970b7d66deb18168c87598b27068b8cd2dfa2386481ea7294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8304d8cffbab137970b7d66deb18168c87598b27068b8cd2dfa2386481ea7294->enter($__internal_8304d8cffbab137970b7d66deb18168c87598b27068b8cd2dfa2386481ea7294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8304d8cffbab137970b7d66deb18168c87598b27068b8cd2dfa2386481ea7294->leave($__internal_8304d8cffbab137970b7d66deb18168c87598b27068b8cd2dfa2386481ea7294_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f94ca6d1092123ab31b8c3e7ffee2f2f0230ed4a3c126a443fb35742c2c62719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94ca6d1092123ab31b8c3e7ffee2f2f0230ed4a3c126a443fb35742c2c62719->enter($__internal_f94ca6d1092123ab31b8c3e7ffee2f2f0230ed4a3c126a443fb35742c2c62719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f94ca6d1092123ab31b8c3e7ffee2f2f0230ed4a3c126a443fb35742c2c62719->leave($__internal_f94ca6d1092123ab31b8c3e7ffee2f2f0230ed4a3c126a443fb35742c2c62719_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
