<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_b6d47bc95dec0a5e094f2b9085a8b2a93c0d2c849a51175794a5eb3f0884f7fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_acee0a3dcb30ca7d00cd517d3f4f38b36901a3aaa4c0551619b9de03a2495ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acee0a3dcb30ca7d00cd517d3f4f38b36901a3aaa4c0551619b9de03a2495ad4->enter($__internal_acee0a3dcb30ca7d00cd517d3f4f38b36901a3aaa4c0551619b9de03a2495ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acee0a3dcb30ca7d00cd517d3f4f38b36901a3aaa4c0551619b9de03a2495ad4->leave($__internal_acee0a3dcb30ca7d00cd517d3f4f38b36901a3aaa4c0551619b9de03a2495ad4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c708a965ad7364ba723e490061685dadc901782c4d750fc6fcb281c5cf2b91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c708a965ad7364ba723e490061685dadc901782c4d750fc6fcb281c5cf2b91e->enter($__internal_2c708a965ad7364ba723e490061685dadc901782c4d750fc6fcb281c5cf2b91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Security/login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_2c708a965ad7364ba723e490061685dadc901782c4d750fc6fcb281c5cf2b91e->leave($__internal_2c708a965ad7364ba723e490061685dadc901782c4d750fc6fcb281c5cf2b91e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
