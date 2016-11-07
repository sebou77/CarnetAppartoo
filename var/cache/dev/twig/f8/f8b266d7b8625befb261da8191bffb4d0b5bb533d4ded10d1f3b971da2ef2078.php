<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0a0765e89b9b72ed36ee38457d3ea2bbccf531be440a0f3e0b7c0578773c777d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_46c76adc86c86ffdaa81cdd921bcd3d24bb4dba526d9f8e5383ad830d08b96ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c76adc86c86ffdaa81cdd921bcd3d24bb4dba526d9f8e5383ad830d08b96ae->enter($__internal_46c76adc86c86ffdaa81cdd921bcd3d24bb4dba526d9f8e5383ad830d08b96ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46c76adc86c86ffdaa81cdd921bcd3d24bb4dba526d9f8e5383ad830d08b96ae->leave($__internal_46c76adc86c86ffdaa81cdd921bcd3d24bb4dba526d9f8e5383ad830d08b96ae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d6b4032ed9c48d54913118fa7259fc86dfe0030a3f18256fb56c811ad177bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6b4032ed9c48d54913118fa7259fc86dfe0030a3f18256fb56c811ad177bcc->enter($__internal_0d6b4032ed9c48d54913118fa7259fc86dfe0030a3f18256fb56c811ad177bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_0d6b4032ed9c48d54913118fa7259fc86dfe0030a3f18256fb56c811ad177bcc->leave($__internal_0d6b4032ed9c48d54913118fa7259fc86dfe0030a3f18256fb56c811ad177bcc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
