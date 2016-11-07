<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_70a894cb98d12eef98b3d5153df081b48cd9387dc524627b49171d0ecc1158f4 extends Twig_Template
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
        $__internal_1331c6a3afe154eb21cfdfa0f3482f4d71828b88d5bb59d6f4b84ed01d5e43ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1331c6a3afe154eb21cfdfa0f3482f4d71828b88d5bb59d6f4b84ed01d5e43ca->enter($__internal_1331c6a3afe154eb21cfdfa0f3482f4d71828b88d5bb59d6f4b84ed01d5e43ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1331c6a3afe154eb21cfdfa0f3482f4d71828b88d5bb59d6f4b84ed01d5e43ca->leave($__internal_1331c6a3afe154eb21cfdfa0f3482f4d71828b88d5bb59d6f4b84ed01d5e43ca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp\\www\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
