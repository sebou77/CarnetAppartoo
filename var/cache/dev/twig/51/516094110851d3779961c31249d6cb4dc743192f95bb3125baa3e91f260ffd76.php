<?php

/* base.html.twig */
class __TwigTemplate_5a30b35c72d18671f9fca108287d222642e7b8385a0bc06b035bf41e80adbc1c extends Twig_Template
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
        $__internal_5a5b0d4dbb40b34d1b2b8fbda2e11578f8e03204a2c019679fac468f3d4e078b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5b0d4dbb40b34d1b2b8fbda2e11578f8e03204a2c019679fac468f3d4e078b->enter($__internal_5a5b0d4dbb40b34d1b2b8fbda2e11578f8e03204a2c019679fac468f3d4e078b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5a5b0d4dbb40b34d1b2b8fbda2e11578f8e03204a2c019679fac468f3d4e078b->leave($__internal_5a5b0d4dbb40b34d1b2b8fbda2e11578f8e03204a2c019679fac468f3d4e078b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4593843e30b8d2bb9dad0d85a19195c7077853b199e6cac605133c319f5e54c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4593843e30b8d2bb9dad0d85a19195c7077853b199e6cac605133c319f5e54c8->enter($__internal_4593843e30b8d2bb9dad0d85a19195c7077853b199e6cac605133c319f5e54c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_4593843e30b8d2bb9dad0d85a19195c7077853b199e6cac605133c319f5e54c8->leave($__internal_4593843e30b8d2bb9dad0d85a19195c7077853b199e6cac605133c319f5e54c8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d9c3478df0ba2e57e654415c12c83a074859b2b41180971719039e0fa0ddafca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c3478df0ba2e57e654415c12c83a074859b2b41180971719039e0fa0ddafca->enter($__internal_d9c3478df0ba2e57e654415c12c83a074859b2b41180971719039e0fa0ddafca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_d9c3478df0ba2e57e654415c12c83a074859b2b41180971719039e0fa0ddafca->leave($__internal_d9c3478df0ba2e57e654415c12c83a074859b2b41180971719039e0fa0ddafca_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_59704b880bbea7d3bb5ee4c31997969ba9f4a32f0ed91820f60c41c54522c08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59704b880bbea7d3bb5ee4c31997969ba9f4a32f0ed91820f60c41c54522c08c->enter($__internal_59704b880bbea7d3bb5ee4c31997969ba9f4a32f0ed91820f60c41c54522c08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_59704b880bbea7d3bb5ee4c31997969ba9f4a32f0ed91820f60c41c54522c08c->leave($__internal_59704b880bbea7d3bb5ee4c31997969ba9f4a32f0ed91820f60c41c54522c08c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_789199a3a24a1693f3966a92e14abcd3b43b1ebb31efdf1f7529d67f500c9510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789199a3a24a1693f3966a92e14abcd3b43b1ebb31efdf1f7529d67f500c9510->enter($__internal_789199a3a24a1693f3966a92e14abcd3b43b1ebb31efdf1f7529d67f500c9510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_789199a3a24a1693f3966a92e14abcd3b43b1ebb31efdf1f7529d67f500c9510->leave($__internal_789199a3a24a1693f3966a92e14abcd3b43b1ebb31efdf1f7529d67f500c9510_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp\\www\\Appartoo\\app\\Resources\\views\\base.html.twig");
    }
}
