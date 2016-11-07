<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0757442fb53eb306f9a87c5a11a0a008779ce220274143fcdfeec9c7d3cbefb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4f4483c60387da5194e94038364194d3737bef030bf2eae0c1b8ca7502b6a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f4483c60387da5194e94038364194d3737bef030bf2eae0c1b8ca7502b6a9d->enter($__internal_d4f4483c60387da5194e94038364194d3737bef030bf2eae0c1b8ca7502b6a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d4f4483c60387da5194e94038364194d3737bef030bf2eae0c1b8ca7502b6a9d->leave($__internal_d4f4483c60387da5194e94038364194d3737bef030bf2eae0c1b8ca7502b6a9d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
