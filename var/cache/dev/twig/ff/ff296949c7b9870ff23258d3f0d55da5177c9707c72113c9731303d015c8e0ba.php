<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_de1a471af2b2adcde119926f62c6373b89ce1f9b48ab195a55a782979c95bfae extends Twig_Template
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
        $__internal_2c0bce43c356e5cb7df99e3ee61ff9380f1fd1b6666ef34acfe53e38b053f048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0bce43c356e5cb7df99e3ee61ff9380f1fd1b6666ef34acfe53e38b053f048->enter($__internal_2c0bce43c356e5cb7df99e3ee61ff9380f1fd1b6666ef34acfe53e38b053f048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c0bce43c356e5cb7df99e3ee61ff9380f1fd1b6666ef34acfe53e38b053f048->leave($__internal_2c0bce43c356e5cb7df99e3ee61ff9380f1fd1b6666ef34acfe53e38b053f048_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_367dd3425c381ffbbdc31a4310d48bf8410d11a1681cf17838e1bf06fdb79b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367dd3425c381ffbbdc31a4310d48bf8410d11a1681cf17838e1bf06fdb79b8f->enter($__internal_367dd3425c381ffbbdc31a4310d48bf8410d11a1681cf17838e1bf06fdb79b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_367dd3425c381ffbbdc31a4310d48bf8410d11a1681cf17838e1bf06fdb79b8f->leave($__internal_367dd3425c381ffbbdc31a4310d48bf8410d11a1681cf17838e1bf06fdb79b8f_prof);

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
