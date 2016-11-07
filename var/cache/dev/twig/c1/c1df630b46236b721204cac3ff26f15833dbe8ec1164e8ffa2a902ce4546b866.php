<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_c9d1eb366426c938e30f789dc6c88e602ecb4bd66389a92368c5adb60d0d7223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_1cf5dc1ac8ef544b31f816434cf3c4099d0bd844fcacfa966e35bab238bb78d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf5dc1ac8ef544b31f816434cf3c4099d0bd844fcacfa966e35bab238bb78d3->enter($__internal_1cf5dc1ac8ef544b31f816434cf3c4099d0bd844fcacfa966e35bab238bb78d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cf5dc1ac8ef544b31f816434cf3c4099d0bd844fcacfa966e35bab238bb78d3->leave($__internal_1cf5dc1ac8ef544b31f816434cf3c4099d0bd844fcacfa966e35bab238bb78d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b58a4f951d4f6327f0bb45a6f2c714e554f1d1db8d6fdc281e4bc1cee172836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b58a4f951d4f6327f0bb45a6f2c714e554f1d1db8d6fdc281e4bc1cee172836->enter($__internal_0b58a4f951d4f6327f0bb45a6f2c714e554f1d1db8d6fdc281e4bc1cee172836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_0b58a4f951d4f6327f0bb45a6f2c714e554f1d1db8d6fdc281e4bc1cee172836->leave($__internal_0b58a4f951d4f6327f0bb45a6f2c714e554f1d1db8d6fdc281e4bc1cee172836_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
