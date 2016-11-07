<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_d0d5dc385cc3c01fa126218c9517a620d71d30d84437c18219f7bbe41d6996bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_b91b9ff091c8971c70a43366bdeb4aa9ce2c856af617e0da84d2f8142382122a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91b9ff091c8971c70a43366bdeb4aa9ce2c856af617e0da84d2f8142382122a->enter($__internal_b91b9ff091c8971c70a43366bdeb4aa9ce2c856af617e0da84d2f8142382122a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91b9ff091c8971c70a43366bdeb4aa9ce2c856af617e0da84d2f8142382122a->leave($__internal_b91b9ff091c8971c70a43366bdeb4aa9ce2c856af617e0da84d2f8142382122a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9cfc5af1b2ba1ed1396e86eb3a231c98d4b07fa68006f42aab82b5b33f8e6ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfc5af1b2ba1ed1396e86eb3a231c98d4b07fa68006f42aab82b5b33f8e6ae6->enter($__internal_9cfc5af1b2ba1ed1396e86eb3a231c98d4b07fa68006f42aab82b5b33f8e6ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_9cfc5af1b2ba1ed1396e86eb3a231c98d4b07fa68006f42aab82b5b33f8e6ae6->leave($__internal_9cfc5af1b2ba1ed1396e86eb3a231c98d4b07fa68006f42aab82b5b33f8e6ae6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
", "@FOSUser/Group/show.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
