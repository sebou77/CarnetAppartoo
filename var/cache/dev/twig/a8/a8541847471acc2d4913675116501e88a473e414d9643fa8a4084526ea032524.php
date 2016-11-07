<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_07c0e5777e0f7970d0271e33ae12922f656a74d7ff24a58b546ff6a9dd556ac5 extends Twig_Template
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
        $__internal_7e9c0666e6b73db3b6b8bd4d48b94cf8259ee180ed0bd3d55e387b2ecb211985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9c0666e6b73db3b6b8bd4d48b94cf8259ee180ed0bd3d55e387b2ecb211985->enter($__internal_7e9c0666e6b73db3b6b8bd4d48b94cf8259ee180ed0bd3d55e387b2ecb211985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7e9c0666e6b73db3b6b8bd4d48b94cf8259ee180ed0bd3d55e387b2ecb211985->leave($__internal_7e9c0666e6b73db3b6b8bd4d48b94cf8259ee180ed0bd3d55e387b2ecb211985_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
