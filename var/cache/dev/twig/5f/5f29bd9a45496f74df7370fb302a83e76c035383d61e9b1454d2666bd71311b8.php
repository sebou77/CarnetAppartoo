<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_9672229e9127d9542cb4c060af0c0f76feb444dd4613059629c31e036be1c6c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_2ec792a495b6d9bf97b0d8a7da66c441a35005e1b21158b6e4f9ccf840ab2a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec792a495b6d9bf97b0d8a7da66c441a35005e1b21158b6e4f9ccf840ab2a13->enter($__internal_2ec792a495b6d9bf97b0d8a7da66c441a35005e1b21158b6e4f9ccf840ab2a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ec792a495b6d9bf97b0d8a7da66c441a35005e1b21158b6e4f9ccf840ab2a13->leave($__internal_2ec792a495b6d9bf97b0d8a7da66c441a35005e1b21158b6e4f9ccf840ab2a13_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0292d4b1c06375aed5843be2665937054abc88f5f3305197ff82bdc596809e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0292d4b1c06375aed5843be2665937054abc88f5f3305197ff82bdc596809e97->enter($__internal_0292d4b1c06375aed5843be2665937054abc88f5f3305197ff82bdc596809e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0292d4b1c06375aed5843be2665937054abc88f5f3305197ff82bdc596809e97->leave($__internal_0292d4b1c06375aed5843be2665937054abc88f5f3305197ff82bdc596809e97_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
