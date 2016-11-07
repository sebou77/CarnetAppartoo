<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b54946893d63aec2e9beff8873cb46db07ab39fe3e54d9a1737eca5071b7ed98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_c294848f640fbc1f59c19b65aa490f5d07132c879b085c637fbebd5e57d844c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c294848f640fbc1f59c19b65aa490f5d07132c879b085c637fbebd5e57d844c7->enter($__internal_c294848f640fbc1f59c19b65aa490f5d07132c879b085c637fbebd5e57d844c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c294848f640fbc1f59c19b65aa490f5d07132c879b085c637fbebd5e57d844c7->leave($__internal_c294848f640fbc1f59c19b65aa490f5d07132c879b085c637fbebd5e57d844c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5be5ce592299d4c0abcd4370108e43e5b032c062e24d77c7286b1b358ef820a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be5ce592299d4c0abcd4370108e43e5b032c062e24d77c7286b1b358ef820a9->enter($__internal_5be5ce592299d4c0abcd4370108e43e5b032c062e24d77c7286b1b358ef820a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_5be5ce592299d4c0abcd4370108e43e5b032c062e24d77c7286b1b358ef820a9->leave($__internal_5be5ce592299d4c0abcd4370108e43e5b032c062e24d77c7286b1b358ef820a9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
