<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_f10d09a1839408d5d585e243ea183c62238216298c28ceff5d6fcd991c3870d8 extends Twig_Template
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
        $__internal_5f77081d6c903e8f0bba06bd9c694dc45f5d303aa53dc02d09c05b943fc72360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f77081d6c903e8f0bba06bd9c694dc45f5d303aa53dc02d09c05b943fc72360->enter($__internal_5f77081d6c903e8f0bba06bd9c694dc45f5d303aa53dc02d09c05b943fc72360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_5f77081d6c903e8f0bba06bd9c694dc45f5d303aa53dc02d09c05b943fc72360->leave($__internal_5f77081d6c903e8f0bba06bd9c694dc45f5d303aa53dc02d09c05b943fc72360_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
