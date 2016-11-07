<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_f06023d3cdd9ad170ca442fad678c18385f2588eaa9de81e7936ea34fea38c83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_773468ddd03b89626f2710f37a8555e58ecf5255f96d651492f64c71abebd88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773468ddd03b89626f2710f37a8555e58ecf5255f96d651492f64c71abebd88f->enter($__internal_773468ddd03b89626f2710f37a8555e58ecf5255f96d651492f64c71abebd88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_773468ddd03b89626f2710f37a8555e58ecf5255f96d651492f64c71abebd88f->leave($__internal_773468ddd03b89626f2710f37a8555e58ecf5255f96d651492f64c71abebd88f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05db134a17419923baa2ca62487efce08e34caca3382803d9585fe4460c3f8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05db134a17419923baa2ca62487efce08e34caca3382803d9585fe4460c3f8d8->enter($__internal_05db134a17419923baa2ca62487efce08e34caca3382803d9585fe4460c3f8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_05db134a17419923baa2ca62487efce08e34caca3382803d9585fe4460c3f8d8->leave($__internal_05db134a17419923baa2ca62487efce08e34caca3382803d9585fe4460c3f8d8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
", "@FOSUser/Group/edit.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
