<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9d4aaf6ccf550b4fe46c56542cf912073b0484b4444cdf4dbb880e11362931d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_b52bf65136370b902dda7e3da55559837a51089897820a8321ecbcf1262f9135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52bf65136370b902dda7e3da55559837a51089897820a8321ecbcf1262f9135->enter($__internal_b52bf65136370b902dda7e3da55559837a51089897820a8321ecbcf1262f9135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b52bf65136370b902dda7e3da55559837a51089897820a8321ecbcf1262f9135->leave($__internal_b52bf65136370b902dda7e3da55559837a51089897820a8321ecbcf1262f9135_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15cc64d0e6cbd699f3a744873fd6b91d0bcdc165df97ad2111e9926f903b2337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15cc64d0e6cbd699f3a744873fd6b91d0bcdc165df97ad2111e9926f903b2337->enter($__internal_15cc64d0e6cbd699f3a744873fd6b91d0bcdc165df97ad2111e9926f903b2337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_15cc64d0e6cbd699f3a744873fd6b91d0bcdc165df97ad2111e9926f903b2337->leave($__internal_15cc64d0e6cbd699f3a744873fd6b91d0bcdc165df97ad2111e9926f903b2337_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
