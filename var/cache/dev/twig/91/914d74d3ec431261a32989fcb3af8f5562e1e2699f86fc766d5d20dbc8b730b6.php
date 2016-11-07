<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0732fd19d949df5669f625f114c68986b8a1550dc9b35952c6c40375d35d94fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_1b7b7cc61b6e60973eed843342d3a1394f1141148ce501308630c3be89c49631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7b7cc61b6e60973eed843342d3a1394f1141148ce501308630c3be89c49631->enter($__internal_1b7b7cc61b6e60973eed843342d3a1394f1141148ce501308630c3be89c49631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b7b7cc61b6e60973eed843342d3a1394f1141148ce501308630c3be89c49631->leave($__internal_1b7b7cc61b6e60973eed843342d3a1394f1141148ce501308630c3be89c49631_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4dfb958b38a8ce22584bfbe182762e714dff97929aef1ef42210fde21b6578a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfb958b38a8ce22584bfbe182762e714dff97929aef1ef42210fde21b6578a2->enter($__internal_4dfb958b38a8ce22584bfbe182762e714dff97929aef1ef42210fde21b6578a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4dfb958b38a8ce22584bfbe182762e714dff97929aef1ef42210fde21b6578a2->leave($__internal_4dfb958b38a8ce22584bfbe182762e714dff97929aef1ef42210fde21b6578a2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp\\www\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
