<?php

/* SebouUserBundle:Contact:index.html.twig */
class __TwigTemplate_44cc5f9c41826540d350b2636f3e561584e4b905ccabe4761d0ca7a994b15c9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SebouCarnetBundle::layout.html.twig", "SebouUserBundle:Contact:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_b68deb26fea20fadd6fcd623a7561cbc4053534e93417ad7efeb140eebf83b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68deb26fea20fadd6fcd623a7561cbc4053534e93417ad7efeb140eebf83b41->enter($__internal_b68deb26fea20fadd6fcd623a7561cbc4053534e93417ad7efeb140eebf83b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SebouUserBundle:Contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b68deb26fea20fadd6fcd623a7561cbc4053534e93417ad7efeb140eebf83b41->leave($__internal_b68deb26fea20fadd6fcd623a7561cbc4053534e93417ad7efeb140eebf83b41_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_77de84d96d9253aafc32341a3161c1a2152836d075b86135f90ae1eb92b69068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77de84d96d9253aafc32341a3161c1a2152836d075b86135f90ae1eb92b69068->enter($__internal_77de84d96d9253aafc32341a3161c1a2152836d075b86135f90ae1eb92b69068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouUserBundle:Contact:index.html.twig"));

        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_77de84d96d9253aafc32341a3161c1a2152836d075b86135f90ae1eb92b69068->leave($__internal_77de84d96d9253aafc32341a3161c1a2152836d075b86135f90ae1eb92b69068_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_28dab1be92c68ae0fc2be4793418ba9bc82905a119bd604980149e901994faac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28dab1be92c68ae0fc2be4793418ba9bc82905a119bd604980149e901994faac->enter($__internal_28dab1be92c68ae0fc2be4793418ba9bc82905a119bd604980149e901994faac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouUserBundle:Contact:index.html.twig"));

        // line 7
        echo "  ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_28dab1be92c68ae0fc2be4793418ba9bc82905a119bd604980149e901994faac->leave($__internal_28dab1be92c68ae0fc2be4793418ba9bc82905a119bd604980149e901994faac_prof);

    }

    // line 9
    public function block_deco($context, array $blocks = array())
    {
        $__internal_ed0683016ac5e8bd58e9e94f73d3ab12c5b7de3a99e55eca0bc99f71a485724c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0683016ac5e8bd58e9e94f73d3ab12c5b7de3a99e55eca0bc99f71a485724c->enter($__internal_ed0683016ac5e8bd58e9e94f73d3ab12c5b7de3a99e55eca0bc99f71a485724c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SebouUserBundle:Contact:index.html.twig"));

        // line 10
        echo "<div>
  ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
";
        
        $__internal_ed0683016ac5e8bd58e9e94f73d3ab12c5b7de3a99e55eca0bc99f71a485724c->leave($__internal_ed0683016ac5e8bd58e9e94f73d3ab12c5b7de3a99e55eca0bc99f71a485724c_prof);

    }

    public function getTemplateName()
    {
        return "SebouUserBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
{% block body %}
  {{ parent()}}
{% endblock %}
{% block deco %}
<div>
  {{form(form)}}
</div>
{% endblock %}
", "SebouUserBundle:Contact:index.html.twig", "C:\\wamp\\www\\Appartoo\\src\\Sebou\\UserBundle/Resources/views/Contact/index.html.twig");
    }
}
