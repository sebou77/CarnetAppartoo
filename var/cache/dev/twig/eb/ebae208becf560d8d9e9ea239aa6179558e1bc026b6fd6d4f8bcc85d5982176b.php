<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_f4d7d5c5ff95e6d25481b7f7fe968ff8b9f0112fbeef54db25a92de23f30f9f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_381b308199527d239ce5c0022ff5ff8c91910bb2965573530212fe667428d5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381b308199527d239ce5c0022ff5ff8c91910bb2965573530212fe667428d5ff->enter($__internal_381b308199527d239ce5c0022ff5ff8c91910bb2965573530212fe667428d5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_381b308199527d239ce5c0022ff5ff8c91910bb2965573530212fe667428d5ff->leave($__internal_381b308199527d239ce5c0022ff5ff8c91910bb2965573530212fe667428d5ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc73fef13752d7cc8015068aa36193d7d5ed58f288ae9f4dcdfe2751ccf61928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc73fef13752d7cc8015068aa36193d7d5ed58f288ae9f4dcdfe2751ccf61928->enter($__internal_bc73fef13752d7cc8015068aa36193d7d5ed58f288ae9f4dcdfe2751ccf61928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_bc73fef13752d7cc8015068aa36193d7d5ed58f288ae9f4dcdfe2751ccf61928->leave($__internal_bc73fef13752d7cc8015068aa36193d7d5ed58f288ae9f4dcdfe2751ccf61928_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
