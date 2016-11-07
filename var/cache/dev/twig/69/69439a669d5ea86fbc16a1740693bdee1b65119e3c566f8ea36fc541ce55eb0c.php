<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_faeadb4778b7bdc3f0a3f465ba8b8c617c7f9b3b72b3f06fa79f05c8cdf025de extends Twig_Template
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
        $__internal_5cc14c88e222809968243ed50e8ab20fce53b25e0fac038d3d91dd71524c4075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc14c88e222809968243ed50e8ab20fce53b25e0fac038d3d91dd71524c4075->enter($__internal_5cc14c88e222809968243ed50e8ab20fce53b25e0fac038d3d91dd71524c4075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5cc14c88e222809968243ed50e8ab20fce53b25e0fac038d3d91dd71524c4075->leave($__internal_5cc14c88e222809968243ed50e8ab20fce53b25e0fac038d3d91dd71524c4075_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8888107ea3eb3030e1f82cf28b2d14e275d348ae8859344d372a2505d05e3442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8888107ea3eb3030e1f82cf28b2d14e275d348ae8859344d372a2505d05e3442->enter($__internal_8888107ea3eb3030e1f82cf28b2d14e275d348ae8859344d372a2505d05e3442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_8888107ea3eb3030e1f82cf28b2d14e275d348ae8859344d372a2505d05e3442->leave($__internal_8888107ea3eb3030e1f82cf28b2d14e275d348ae8859344d372a2505d05e3442_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1c9e961037a8bea46c3b416d34eb4717dd78f78e68a889fd62fc201629673d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9e961037a8bea46c3b416d34eb4717dd78f78e68a889fd62fc201629673d64->enter($__internal_1c9e961037a8bea46c3b416d34eb4717dd78f78e68a889fd62fc201629673d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1c9e961037a8bea46c3b416d34eb4717dd78f78e68a889fd62fc201629673d64->leave($__internal_1c9e961037a8bea46c3b416d34eb4717dd78f78e68a889fd62fc201629673d64_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_029c5c4c7a0054c72a3737b8274d48cd13458482ad2a239495099a098c1f8b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029c5c4c7a0054c72a3737b8274d48cd13458482ad2a239495099a098c1f8b17->enter($__internal_029c5c4c7a0054c72a3737b8274d48cd13458482ad2a239495099a098c1f8b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_029c5c4c7a0054c72a3737b8274d48cd13458482ad2a239495099a098c1f8b17->leave($__internal_029c5c4c7a0054c72a3737b8274d48cd13458482ad2a239495099a098c1f8b17_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
