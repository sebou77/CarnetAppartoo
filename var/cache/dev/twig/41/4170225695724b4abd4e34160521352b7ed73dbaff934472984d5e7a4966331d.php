<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_9f3f9a96cb195d0c14285980479accdd4bfcb316c60f45cd8edb256dc56ed737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ab1fe9840138044ca97ab1d80ed76628a560b8cc8ac848cad1314081beb477bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab1fe9840138044ca97ab1d80ed76628a560b8cc8ac848cad1314081beb477bb->enter($__internal_ab1fe9840138044ca97ab1d80ed76628a560b8cc8ac848cad1314081beb477bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab1fe9840138044ca97ab1d80ed76628a560b8cc8ac848cad1314081beb477bb->leave($__internal_ab1fe9840138044ca97ab1d80ed76628a560b8cc8ac848cad1314081beb477bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd0d5972db7b16847f6e71554ee640aeccc2c0b0215c3e9a2ee565cfafaa31b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0d5972db7b16847f6e71554ee640aeccc2c0b0215c3e9a2ee565cfafaa31b6->enter($__internal_cd0d5972db7b16847f6e71554ee640aeccc2c0b0215c3e9a2ee565cfafaa31b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_cd0d5972db7b16847f6e71554ee640aeccc2c0b0215c3e9a2ee565cfafaa31b6->leave($__internal_cd0d5972db7b16847f6e71554ee640aeccc2c0b0215c3e9a2ee565cfafaa31b6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
