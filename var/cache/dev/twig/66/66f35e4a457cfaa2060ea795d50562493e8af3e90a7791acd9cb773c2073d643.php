<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_9517605be8361d84bc547c09307247f1ce5ad367bb1ff637970bfa22013f0bd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1718f8e3db78de7a09adf08695939b5c7a42b8109bc2f0879af03423fcbb9aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1718f8e3db78de7a09adf08695939b5c7a42b8109bc2f0879af03423fcbb9aa4->enter($__internal_1718f8e3db78de7a09adf08695939b5c7a42b8109bc2f0879af03423fcbb9aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1718f8e3db78de7a09adf08695939b5c7a42b8109bc2f0879af03423fcbb9aa4->leave($__internal_1718f8e3db78de7a09adf08695939b5c7a42b8109bc2f0879af03423fcbb9aa4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0b548815fca68d6a929fdfce4e8c2dddd4bb9c5877c687d43ed1e0cd22a1b0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b548815fca68d6a929fdfce4e8c2dddd4bb9c5877c687d43ed1e0cd22a1b0c7->enter($__internal_0b548815fca68d6a929fdfce4e8c2dddd4bb9c5877c687d43ed1e0cd22a1b0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0b548815fca68d6a929fdfce4e8c2dddd4bb9c5877c687d43ed1e0cd22a1b0c7->leave($__internal_0b548815fca68d6a929fdfce4e8c2dddd4bb9c5877c687d43ed1e0cd22a1b0c7_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_74ef3c993aaeb0c112f88fa3e6ea8e8edd6b43186a2749896d29876b9aa17329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ef3c993aaeb0c112f88fa3e6ea8e8edd6b43186a2749896d29876b9aa17329->enter($__internal_74ef3c993aaeb0c112f88fa3e6ea8e8edd6b43186a2749896d29876b9aa17329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_74ef3c993aaeb0c112f88fa3e6ea8e8edd6b43186a2749896d29876b9aa17329->leave($__internal_74ef3c993aaeb0c112f88fa3e6ea8e8edd6b43186a2749896d29876b9aa17329_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d00e583cfd00ae685a78f4d81c5b38eb618efe6c10162df7b9b3b27ee115c91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00e583cfd00ae685a78f4d81c5b38eb618efe6c10162df7b9b3b27ee115c91c->enter($__internal_d00e583cfd00ae685a78f4d81c5b38eb618efe6c10162df7b9b3b27ee115c91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        
        $__internal_d00e583cfd00ae685a78f4d81c5b38eb618efe6c10162df7b9b3b27ee115c91c->leave($__internal_d00e583cfd00ae685a78f4d81c5b38eb618efe6c10162df7b9b3b27ee115c91c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
