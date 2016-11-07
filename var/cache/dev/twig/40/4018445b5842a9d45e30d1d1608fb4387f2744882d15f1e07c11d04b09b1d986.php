<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_b1ac653ce0ea7a2ad4ec53a30d349b021f27e2169b1451f2fbe0082447e58f64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_5102c692a8b8cc545495f94c645507a9382c4c15404afaab95e31c0f959400bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5102c692a8b8cc545495f94c645507a9382c4c15404afaab95e31c0f959400bf->enter($__internal_5102c692a8b8cc545495f94c645507a9382c4c15404afaab95e31c0f959400bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5102c692a8b8cc545495f94c645507a9382c4c15404afaab95e31c0f959400bf->leave($__internal_5102c692a8b8cc545495f94c645507a9382c4c15404afaab95e31c0f959400bf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_550148bd03d922ce69165f78208283ecc11958f64ca0c37641c13d54f8bafda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550148bd03d922ce69165f78208283ecc11958f64ca0c37641c13d54f8bafda8->enter($__internal_550148bd03d922ce69165f78208283ecc11958f64ca0c37641c13d54f8bafda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_550148bd03d922ce69165f78208283ecc11958f64ca0c37641c13d54f8bafda8->leave($__internal_550148bd03d922ce69165f78208283ecc11958f64ca0c37641c13d54f8bafda8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
