<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_b5aeb8b4ca48b9d5fdfb25a3ebfce5f8d29cc9a03cd0a5164ce78bb3bc0bf4e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_68a042c318b663ee7a915563cf91415e139231bd054a2442de3acf3a54f0e800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a042c318b663ee7a915563cf91415e139231bd054a2442de3acf3a54f0e800->enter($__internal_68a042c318b663ee7a915563cf91415e139231bd054a2442de3acf3a54f0e800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68a042c318b663ee7a915563cf91415e139231bd054a2442de3acf3a54f0e800->leave($__internal_68a042c318b663ee7a915563cf91415e139231bd054a2442de3acf3a54f0e800_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18417fda0ad41c655fc5a8b8b068309e4240b1286c8ef050c493a550334187a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18417fda0ad41c655fc5a8b8b068309e4240b1286c8ef050c493a550334187a2->enter($__internal_18417fda0ad41c655fc5a8b8b068309e4240b1286c8ef050c493a550334187a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_18417fda0ad41c655fc5a8b8b068309e4240b1286c8ef050c493a550334187a2->leave($__internal_18417fda0ad41c655fc5a8b8b068309e4240b1286c8ef050c493a550334187a2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
