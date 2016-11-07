<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_67fccd93b39bf49797703b11bb95079fa41ad4681f1707643e9b2366d498af13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_f683884a43becafba9b69cb9ef0dc06b6dfe1b8c608cafc4db6b8d1b2c04cd98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f683884a43becafba9b69cb9ef0dc06b6dfe1b8c608cafc4db6b8d1b2c04cd98->enter($__internal_f683884a43becafba9b69cb9ef0dc06b6dfe1b8c608cafc4db6b8d1b2c04cd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f683884a43becafba9b69cb9ef0dc06b6dfe1b8c608cafc4db6b8d1b2c04cd98->leave($__internal_f683884a43becafba9b69cb9ef0dc06b6dfe1b8c608cafc4db6b8d1b2c04cd98_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96e062be1d879883dc8079591dbcd553dd40ba5cef5cff85a36e67a2cc2376e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e062be1d879883dc8079591dbcd553dd40ba5cef5cff85a36e67a2cc2376e4->enter($__internal_96e062be1d879883dc8079591dbcd553dd40ba5cef5cff85a36e67a2cc2376e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_96e062be1d879883dc8079591dbcd553dd40ba5cef5cff85a36e67a2cc2376e4->leave($__internal_96e062be1d879883dc8079591dbcd553dd40ba5cef5cff85a36e67a2cc2376e4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
