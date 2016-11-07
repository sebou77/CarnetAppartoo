<?php

/* base.html.twig */
class __TwigTemplate_aca77fcd5b0367e1153601acd6df41d15c2096ad0f99df91f7a180990817665a extends Twig_Template
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
        $__internal_02562e10b1b191f42d9dc4c179847a6798b37b2d399dd62d11b123dd1eb054c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02562e10b1b191f42d9dc4c179847a6798b37b2d399dd62d11b123dd1eb054c1->enter($__internal_02562e10b1b191f42d9dc4c179847a6798b37b2d399dd62d11b123dd1eb054c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_02562e10b1b191f42d9dc4c179847a6798b37b2d399dd62d11b123dd1eb054c1->leave($__internal_02562e10b1b191f42d9dc4c179847a6798b37b2d399dd62d11b123dd1eb054c1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_54772cc2b6ebd8365a3a166556d04822a31a213359dd2b3a8fdc3f1837f1c055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54772cc2b6ebd8365a3a166556d04822a31a213359dd2b3a8fdc3f1837f1c055->enter($__internal_54772cc2b6ebd8365a3a166556d04822a31a213359dd2b3a8fdc3f1837f1c055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_54772cc2b6ebd8365a3a166556d04822a31a213359dd2b3a8fdc3f1837f1c055->leave($__internal_54772cc2b6ebd8365a3a166556d04822a31a213359dd2b3a8fdc3f1837f1c055_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_260ed4961e3d2c53fb497e26487794af570e5718bf1e1d304868fb05bcc4a99e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260ed4961e3d2c53fb497e26487794af570e5718bf1e1d304868fb05bcc4a99e->enter($__internal_260ed4961e3d2c53fb497e26487794af570e5718bf1e1d304868fb05bcc4a99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_260ed4961e3d2c53fb497e26487794af570e5718bf1e1d304868fb05bcc4a99e->leave($__internal_260ed4961e3d2c53fb497e26487794af570e5718bf1e1d304868fb05bcc4a99e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_471c77494d46634b3bca9f184f4b10ea0a9623762dac68d2d1ad6cc8af883ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471c77494d46634b3bca9f184f4b10ea0a9623762dac68d2d1ad6cc8af883ee3->enter($__internal_471c77494d46634b3bca9f184f4b10ea0a9623762dac68d2d1ad6cc8af883ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_471c77494d46634b3bca9f184f4b10ea0a9623762dac68d2d1ad6cc8af883ee3->leave($__internal_471c77494d46634b3bca9f184f4b10ea0a9623762dac68d2d1ad6cc8af883ee3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_47edadd2470ab607ff7b12deefdb49c6ca822be675c0148bdfc6d0c599ed0c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47edadd2470ab607ff7b12deefdb49c6ca822be675c0148bdfc6d0c599ed0c7e->enter($__internal_47edadd2470ab607ff7b12deefdb49c6ca822be675c0148bdfc6d0c599ed0c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_47edadd2470ab607ff7b12deefdb49c6ca822be675c0148bdfc6d0c599ed0c7e->leave($__internal_47edadd2470ab607ff7b12deefdb49c6ca822be675c0148bdfc6d0c599ed0c7e_prof);

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
