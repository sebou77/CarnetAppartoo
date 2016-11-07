<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_d7a3bb2168a1e0795dfac260373470d45492251549b6ba7521d867ad10f00df3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_9022f8e29406a6f0bda0ccabed68b2d54c8b6b0289cb68d0ae2e61fb35fc3411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9022f8e29406a6f0bda0ccabed68b2d54c8b6b0289cb68d0ae2e61fb35fc3411->enter($__internal_9022f8e29406a6f0bda0ccabed68b2d54c8b6b0289cb68d0ae2e61fb35fc3411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9022f8e29406a6f0bda0ccabed68b2d54c8b6b0289cb68d0ae2e61fb35fc3411->leave($__internal_9022f8e29406a6f0bda0ccabed68b2d54c8b6b0289cb68d0ae2e61fb35fc3411_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1678c5f94c42f98312b52751a259b5f60d365e3355f679a4208279bda9787700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1678c5f94c42f98312b52751a259b5f60d365e3355f679a4208279bda9787700->enter($__internal_1678c5f94c42f98312b52751a259b5f60d365e3355f679a4208279bda9787700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/check_email.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1678c5f94c42f98312b52751a259b5f60d365e3355f679a4208279bda9787700->leave($__internal_1678c5f94c42f98312b52751a259b5f60d365e3355f679a4208279bda9787700_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
