<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_85d43ce2f97247517e79b010f072524191bb6dfd242d2cf6bfb60bd1e75dcc4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_217822759db582c981541f59e6383afa620bd0c4a2d736575223ebc38a44b127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217822759db582c981541f59e6383afa620bd0c4a2d736575223ebc38a44b127->enter($__internal_217822759db582c981541f59e6383afa620bd0c4a2d736575223ebc38a44b127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_217822759db582c981541f59e6383afa620bd0c4a2d736575223ebc38a44b127->leave($__internal_217822759db582c981541f59e6383afa620bd0c4a2d736575223ebc38a44b127_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_079a3f023cbec458127aba1668981ecb49222fd345d1e3ad4685063100dd0ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079a3f023cbec458127aba1668981ecb49222fd345d1e3ad4685063100dd0ad0->enter($__internal_079a3f023cbec458127aba1668981ecb49222fd345d1e3ad4685063100dd0ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_079a3f023cbec458127aba1668981ecb49222fd345d1e3ad4685063100dd0ad0->leave($__internal_079a3f023cbec458127aba1668981ecb49222fd345d1e3ad4685063100dd0ad0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
