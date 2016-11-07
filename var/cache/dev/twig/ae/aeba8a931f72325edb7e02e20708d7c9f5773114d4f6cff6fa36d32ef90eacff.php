<?php

/* ::base.html.twig */
class __TwigTemplate_6ff6613c112969329da0034b8e5612030425692af97c2664704c30d451420078 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51574d2baa9748c54156c47ffbf96615419f7c9bc2f6110d9fb9b668f9a332c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51574d2baa9748c54156c47ffbf96615419f7c9bc2f6110d9fb9b668f9a332c2->enter($__internal_51574d2baa9748c54156c47ffbf96615419f7c9bc2f6110d9fb9b668f9a332c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_51574d2baa9748c54156c47ffbf96615419f7c9bc2f6110d9fb9b668f9a332c2->leave($__internal_51574d2baa9748c54156c47ffbf96615419f7c9bc2f6110d9fb9b668f9a332c2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ba466d394071afaf69a6ee82fabc7e70467382b5e8dc41d345763be70617e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba466d394071afaf69a6ee82fabc7e70467382b5e8dc41d345763be70617e87->enter($__internal_8ba466d394071afaf69a6ee82fabc7e70467382b5e8dc41d345763be70617e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_8ba466d394071afaf69a6ee82fabc7e70467382b5e8dc41d345763be70617e87->leave($__internal_8ba466d394071afaf69a6ee82fabc7e70467382b5e8dc41d345763be70617e87_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43d25385fa837bae5ddbdf5ff965288ac6daba64177067b7a4e5b523b8dbde17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d25385fa837bae5ddbdf5ff965288ac6daba64177067b7a4e5b523b8dbde17->enter($__internal_43d25385fa837bae5ddbdf5ff965288ac6daba64177067b7a4e5b523b8dbde17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_43d25385fa837bae5ddbdf5ff965288ac6daba64177067b7a4e5b523b8dbde17->leave($__internal_43d25385fa837bae5ddbdf5ff965288ac6daba64177067b7a4e5b523b8dbde17_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_01ec5db77e0a8ea545485093e043e28f307dade9f33a777490ea23427a8270a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ec5db77e0a8ea545485093e043e28f307dade9f33a777490ea23427a8270a7->enter($__internal_01ec5db77e0a8ea545485093e043e28f307dade9f33a777490ea23427a8270a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_01ec5db77e0a8ea545485093e043e28f307dade9f33a777490ea23427a8270a7->leave($__internal_01ec5db77e0a8ea545485093e043e28f307dade9f33a777490ea23427a8270a7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c41a89f9e4fe9f84014377b2fddb6f434691490c9cab6d54d9256586a30c9904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41a89f9e4fe9f84014377b2fddb6f434691490c9cab6d54d9256586a30c9904->enter($__internal_c41a89f9e4fe9f84014377b2fddb6f434691490c9cab6d54d9256586a30c9904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_c41a89f9e4fe9f84014377b2fddb6f434691490c9cab6d54d9256586a30c9904->leave($__internal_c41a89f9e4fe9f84014377b2fddb6f434691490c9cab6d54d9256586a30c9904_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\Appartoo\\app/Resources\\views/base.html.twig");
    }
}
