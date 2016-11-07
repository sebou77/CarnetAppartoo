<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_516e72495fe77af5af2ca1cedfb6fffc5a3f6c143f18271132eeaa0e751231f3 extends Twig_Template
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
        $__internal_442b0c099bce5160a48ea1c7bf1619c81fd87add085bb04e2450ca6f1502d005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442b0c099bce5160a48ea1c7bf1619c81fd87add085bb04e2450ca6f1502d005->enter($__internal_442b0c099bce5160a48ea1c7bf1619c81fd87add085bb04e2450ca6f1502d005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_442b0c099bce5160a48ea1c7bf1619c81fd87add085bb04e2450ca6f1502d005->leave($__internal_442b0c099bce5160a48ea1c7bf1619c81fd87add085bb04e2450ca6f1502d005_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_50823473a718a87a747a7172aaccf23eb8666344b208957c95736d8b77e80a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50823473a718a87a747a7172aaccf23eb8666344b208957c95736d8b77e80a96->enter($__internal_50823473a718a87a747a7172aaccf23eb8666344b208957c95736d8b77e80a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_50823473a718a87a747a7172aaccf23eb8666344b208957c95736d8b77e80a96->leave($__internal_50823473a718a87a747a7172aaccf23eb8666344b208957c95736d8b77e80a96_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_619bc11b395c4ab367cdfb9645a0b84523feac99facb2d36b3cd38180cc3edfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_619bc11b395c4ab367cdfb9645a0b84523feac99facb2d36b3cd38180cc3edfe->enter($__internal_619bc11b395c4ab367cdfb9645a0b84523feac99facb2d36b3cd38180cc3edfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_619bc11b395c4ab367cdfb9645a0b84523feac99facb2d36b3cd38180cc3edfe->leave($__internal_619bc11b395c4ab367cdfb9645a0b84523feac99facb2d36b3cd38180cc3edfe_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5cb0d66fc2df05c7438a93507a238636fb206b804886e198ded987f90e2d99c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb0d66fc2df05c7438a93507a238636fb206b804886e198ded987f90e2d99c2->enter($__internal_5cb0d66fc2df05c7438a93507a238636fb206b804886e198ded987f90e2d99c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        
        $__internal_5cb0d66fc2df05c7438a93507a238636fb206b804886e198ded987f90e2d99c2->leave($__internal_5cb0d66fc2df05c7438a93507a238636fb206b804886e198ded987f90e2d99c2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
