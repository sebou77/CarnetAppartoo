<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_65373e25de6d4ad6ff0d2630b56b5cad5e631736506f693c9521d0f1d8b46e70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_b917eaf7c19cf14913277c91d86f01fe0cde6a59d68a3055c01197765cdfdd43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b917eaf7c19cf14913277c91d86f01fe0cde6a59d68a3055c01197765cdfdd43->enter($__internal_b917eaf7c19cf14913277c91d86f01fe0cde6a59d68a3055c01197765cdfdd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b917eaf7c19cf14913277c91d86f01fe0cde6a59d68a3055c01197765cdfdd43->leave($__internal_b917eaf7c19cf14913277c91d86f01fe0cde6a59d68a3055c01197765cdfdd43_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb0f1e9751a2e41f55ac9b5a05447e3399ae2b9951f4846b09e8b80eeb8ca54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0f1e9751a2e41f55ac9b5a05447e3399ae2b9951f4846b09e8b80eeb8ca54d->enter($__internal_bb0f1e9751a2e41f55ac9b5a05447e3399ae2b9951f4846b09e8b80eeb8ca54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/ChangePassword/change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_bb0f1e9751a2e41f55ac9b5a05447e3399ae2b9951f4846b09e8b80eeb8ca54d->leave($__internal_bb0f1e9751a2e41f55ac9b5a05447e3399ae2b9951f4846b09e8b80eeb8ca54d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
