<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_07c07ea90fed3d38fd2ee32565647f52ffa44ed210fd7ddc5c0f093def7daa9c extends Twig_Template
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
        $__internal_eed8aa9c73b2c6743926bf02045cfdaa1a61408271ef63f720b7eb31cad711c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed8aa9c73b2c6743926bf02045cfdaa1a61408271ef63f720b7eb31cad711c6->enter($__internal_eed8aa9c73b2c6743926bf02045cfdaa1a61408271ef63f720b7eb31cad711c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_eed8aa9c73b2c6743926bf02045cfdaa1a61408271ef63f720b7eb31cad711c6->leave($__internal_eed8aa9c73b2c6743926bf02045cfdaa1a61408271ef63f720b7eb31cad711c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
