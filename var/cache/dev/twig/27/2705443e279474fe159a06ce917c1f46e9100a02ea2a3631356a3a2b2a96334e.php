<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_2ce8f4df49fc1ec002fed53680a05fa70fb801cb65f0f543c9463d5ac5910b1c extends Twig_Template
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
        $__internal_4187e48d9f2d1c778881796e4e47ec35524d99628218004834224035ce9bc521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4187e48d9f2d1c778881796e4e47ec35524d99628218004834224035ce9bc521->enter($__internal_4187e48d9f2d1c778881796e4e47ec35524d99628218004834224035ce9bc521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4187e48d9f2d1c778881796e4e47ec35524d99628218004834224035ce9bc521->leave($__internal_4187e48d9f2d1c778881796e4e47ec35524d99628218004834224035ce9bc521_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bfacdc68947e15edf5e8a59acab181b12b9c0ab851ba721fefbb0dddfa412f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfacdc68947e15edf5e8a59acab181b12b9c0ab851ba721fefbb0dddfa412f49->enter($__internal_bfacdc68947e15edf5e8a59acab181b12b9c0ab851ba721fefbb0dddfa412f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bfacdc68947e15edf5e8a59acab181b12b9c0ab851ba721fefbb0dddfa412f49->leave($__internal_bfacdc68947e15edf5e8a59acab181b12b9c0ab851ba721fefbb0dddfa412f49_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bdef110d9664a2fa121dc7c1789ca8d23378a2f82e4d099d682161c5abee0280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdef110d9664a2fa121dc7c1789ca8d23378a2f82e4d099d682161c5abee0280->enter($__internal_bdef110d9664a2fa121dc7c1789ca8d23378a2f82e4d099d682161c5abee0280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bdef110d9664a2fa121dc7c1789ca8d23378a2f82e4d099d682161c5abee0280->leave($__internal_bdef110d9664a2fa121dc7c1789ca8d23378a2f82e4d099d682161c5abee0280_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c89161cf6d007d4a693615fe9a3c81221c46e2c44fda02eb5a69eda438dc3499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89161cf6d007d4a693615fe9a3c81221c46e2c44fda02eb5a69eda438dc3499->enter($__internal_c89161cf6d007d4a693615fe9a3c81221c46e2c44fda02eb5a69eda438dc3499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_c89161cf6d007d4a693615fe9a3c81221c46e2c44fda02eb5a69eda438dc3499->leave($__internal_c89161cf6d007d4a693615fe9a3c81221c46e2c44fda02eb5a69eda438dc3499_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
