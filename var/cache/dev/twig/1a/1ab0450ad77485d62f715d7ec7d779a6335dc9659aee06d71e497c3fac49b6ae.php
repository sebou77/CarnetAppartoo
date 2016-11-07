<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_11529b9632298e212e91a40b5ee7ff4267aca2338af7a63bbb4ec7cf2904d3f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_29fef18c5bc85731f7019afd1105f48af9a763576b21094af1f1b3a6e37d2773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fef18c5bc85731f7019afd1105f48af9a763576b21094af1f1b3a6e37d2773->enter($__internal_29fef18c5bc85731f7019afd1105f48af9a763576b21094af1f1b3a6e37d2773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29fef18c5bc85731f7019afd1105f48af9a763576b21094af1f1b3a6e37d2773->leave($__internal_29fef18c5bc85731f7019afd1105f48af9a763576b21094af1f1b3a6e37d2773_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b91950ad6bcf4c54ec3577e2618dce3ca36660bcd1af926493db0cdb53e7b974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91950ad6bcf4c54ec3577e2618dce3ca36660bcd1af926493db0cdb53e7b974->enter($__internal_b91950ad6bcf4c54ec3577e2618dce3ca36660bcd1af926493db0cdb53e7b974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:check_email.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b91950ad6bcf4c54ec3577e2618dce3ca36660bcd1af926493db0cdb53e7b974->leave($__internal_b91950ad6bcf4c54ec3577e2618dce3ca36660bcd1af926493db0cdb53e7b974_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
