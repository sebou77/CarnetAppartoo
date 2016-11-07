<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_ee544adf7b8376047129177a63da3f8c5b127ed1835a2dd059f0f97708b632ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_ba853fc19bbe34deaf91d4f0862d5e271f83fd40c729bff844013374f1ac08d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba853fc19bbe34deaf91d4f0862d5e271f83fd40c729bff844013374f1ac08d1->enter($__internal_ba853fc19bbe34deaf91d4f0862d5e271f83fd40c729bff844013374f1ac08d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba853fc19bbe34deaf91d4f0862d5e271f83fd40c729bff844013374f1ac08d1->leave($__internal_ba853fc19bbe34deaf91d4f0862d5e271f83fd40c729bff844013374f1ac08d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05d226332fb32369c30af05a66d63a8408168617cc1be52720a15f3eb6b283c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d226332fb32369c30af05a66d63a8408168617cc1be52720a15f3eb6b283c5->enter($__internal_05d226332fb32369c30af05a66d63a8408168617cc1be52720a15f3eb6b283c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_05d226332fb32369c30af05a66d63a8408168617cc1be52720a15f3eb6b283c5->leave($__internal_05d226332fb32369c30af05a66d63a8408168617cc1be52720a15f3eb6b283c5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
