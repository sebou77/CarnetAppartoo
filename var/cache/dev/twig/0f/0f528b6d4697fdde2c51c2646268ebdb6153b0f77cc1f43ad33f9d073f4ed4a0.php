<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_71e1d2fa59b8a0438bdaeeffb90ef7019177db63c872a55fd20d67cade705a71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07146d2ee88e16122804eb96b82606297dd08b465c286805085e5e1ce039a755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07146d2ee88e16122804eb96b82606297dd08b465c286805085e5e1ce039a755->enter($__internal_07146d2ee88e16122804eb96b82606297dd08b465c286805085e5e1ce039a755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07146d2ee88e16122804eb96b82606297dd08b465c286805085e5e1ce039a755->leave($__internal_07146d2ee88e16122804eb96b82606297dd08b465c286805085e5e1ce039a755_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6dc9325d697921348987663c021ea551d91d48f8beeee7e078035ad399a2141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6dc9325d697921348987663c021ea551d91d48f8beeee7e078035ad399a2141->enter($__internal_b6dc9325d697921348987663c021ea551d91d48f8beeee7e078035ad399a2141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b6dc9325d697921348987663c021ea551d91d48f8beeee7e078035ad399a2141->leave($__internal_b6dc9325d697921348987663c021ea551d91d48f8beeee7e078035ad399a2141_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
